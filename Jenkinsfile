pipeline {
    agent any
    stages {
        stage('Check Branch') {
            steps {
                script {
                    echo "Branch: ${env.GIT_BRANCH}"
                    echo "Branch: ${env.FULL_PATH_BRANCH}"
                }
            }
        }
        stage('Pull') {
            steps {
                echo "Cloning the code"
                git url: "https://github.com/tvanluanst/app-jenkins.git", branch: "master"
            }
        }
        stage('Build backend') {
            steps {
                dir('backend')  {
                    echo 'Build backend'
//                     sh 'composer install'
//                     sh 'cp .env.example .env'

                }
            }
        }
        stage('Build frontend') {
            steps {
                dir('frontend')  {
                    echo 'Build frontend'
//                     sh 'npm install'
//                     sh 'npm run build'
                }
            }
        }
        stage('Testing backend') {
            steps {
                dir('backend')  {
                    sh 'vendor/bin/phpunit'
                }
            }
        }
        stage('Deploy') {
            steps {
                echo 'Deploying'
            }
        }
    }
     post {
        failure {
            slackSend( channel: "#demo", color: "danger", message: "${messageFail()}")
        }
        success {
            slackSend( channel: "#demo", color: "good", message: "Build thành công rồi bà con ơi")
            cleanWs()
        }
    }
}

def messageFail()
{
  def JENKINS_URL= env.BUILD_URL
  def JOB_NAME = env.JOB_NAME
  def BUILD_ID= env.BUILD_ID
  def JENKINS_LOG= " FAILED: Job [${env.JOB_NAME}] Logs path: ${JENKINS_URL}/consoleText"
  return JENKINS_LOG

}