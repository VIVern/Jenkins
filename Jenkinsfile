pipeline {
    agent any
    stages {
        stage('build') {
            steps {
                bat "cd D:\test_CI_CD"
                bat "D:"
                bat "php\php.exe Jenkins\index.php"
            }
        }
        stage('Final') {
            steps {
                echo 'nice'
            }
        }
    }
}