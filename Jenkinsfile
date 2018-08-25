pipeline {
    agent any
    stages {
        stage('Preparation') {
            steps {
                sh "composer install"
            }
        }

        stage('Syntax phpcs') {
            steps {
                sh './vendor/bin/phpcs --standard=phpcs.xml ./'
            }
        }

        stage('Syntax phpmd') {
            steps {
                sh './vendor/bin/phpmd . text phpmd.xml --suffixes php'
            }
        }

        stage('Test unit') {
            steps {
                sh './vendor/bin/phpunit test/*'
            }
        }
    }
}