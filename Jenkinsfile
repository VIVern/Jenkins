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
                sh './vendor/bin/phpcs --standard=ci/phpcs/phpcs.xml ./'
            }
        }

        stage('Syntax phpmd') {
            steps {
                sh './vendor/bin/phpmd . text ci/phpmd/phpmd.xml --suffixes php'
            }
        }

        stage('Test unit') {
            steps {
                sh './vendor/bin/phpunit -v -c phpunit.xml --coverage-text --colors=always --coverage-html ci/phpunit/artifacts/'
            }
        }
    }
}