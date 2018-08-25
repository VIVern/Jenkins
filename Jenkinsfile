pipeline {
    agent any
    stages {
        stage('index') {
            steps {
                sh "php index.php"
            }
        }
        stage('Final') {
            steps {
                echo 'cool'
            }
        }
    }
}