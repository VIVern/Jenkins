pipeline {
    agent any
    stages {
        stage('Syntax') {
            steps {
                sh "./vendor/bin/phpcs -h"
            }
        }
        stage('Final') {
            steps {
                echo 'cool'
            }
        }
    }
}