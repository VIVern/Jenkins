pipeline {
    agent any
    stages {
        stage('index') {
            steps {
                php index.php
            }
        }
        stage('Final') {
            steps {
                echo 'cool'
            }
        }
    }
}