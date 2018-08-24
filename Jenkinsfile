pipeline {
    agent any
    stages {
        stage('build') {
            steps {
                php index.php
            }
        }
        stage('Final') {
            steps {
                echo 'nice'
            }
        }
    }
}