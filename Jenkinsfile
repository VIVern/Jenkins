pipeline {
    agent any
    stages {
        stage('Preparation') {
            steps {
                sh "composer install"
                sh "phpcs --standard=phpcs.xml"
            }
        }
        stage('Syntax') {
            steps {
                sh './vendor/bin/phpcs ./'
            }
        }
    }
}