pipeline {
    agent any
    stages {
        stage('Preparation') {
            steps {
                sh "composer install"
            }
        }
        stage('Syntax') {
            steps {
                sh './vendor/bin/phpcs --standard=phpcs.xml./'
            }
        }
    }
}