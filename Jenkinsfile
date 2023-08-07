pipeline {
    agent any
    environment {
        BRANCH_BUILD = "cdb-test"
        BACK_END_DIR = "${WORKSPACE}/backend"
        FRONT_END_DIR = "${WORKSPACE}/frontend"
    }
    stages {
        stage('Clone code') {
            steps {
                echo "Cloning the code"
                echo "Workspace Path: ${WORKSPACE}"
                git url: "https://github.com/taoluan/app-jenkins.git", branch: env.BRANCH_BUILD
            }
        }
        stage('Build backend') {
            agent {
                docker { 
                    image 'composer:1.10.1' 
                    args '-u 0:0 -v /tmp:/root/.cache'
                }
            }
            steps {
                dir(env.BACK_END_DIR) {
                    echo 'Build backend'
                    sh 'composer install'
                    sh 'cp .env.example .env'
                }
            }
        }
        stage('Build frontend') {
            agent {
                docker { 
                    image 'node:16.20.1'
                    args '-u 0:0 -v /tmp:/root/.cache'
                }
            }
            steps {
                dir(env.FRONT_END_DIR)  {
                    echo 'Build frontend'
                    sh 'npm install'
                    sh 'npm run build'
                }
            }
        }
        stage('Testing backend') {
            steps {
                dir(env.BACK_END_DIR)  {
                    sh 'vendor/bin/phpunit'
                }
            }
        }
        stage('Deploy') {
            steps {
                dir('/var/scripts') {
                    sh "./deploy_production.sh ${env.BRANCH_BUILD}"
                }
                echo 'Deploying'
               
            }
        }
    }
    post { 
        always { 
            cleanWs()
        }
    }
}
