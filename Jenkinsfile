pipeline {
    agent any
    
    stages {
        stage('Clone repository') {
            steps {
                git branch: 'master', url: 'https://github.com/arij45/gestion_formations.git'
            }
        }
        
        stage('exécuter containers'){
            steps{
                sh 'docker-compose up -d'
            }
        }
    }
}