pipeline {
    agent any
    stages {
    stage('Clone repository') {
        git credentialsId: 'arijoumaima', url: 'https://github.com/arij45/gestion_formations.git'
    }
    
    stage('Build image') {
       dockerImage0 = docker build -t "arijkortas/gestion_formations:nginx" -f "C:/Users/arijkortas/Desktop/gestion_formations/docker/nginx"
       dockerImage1 = docker build -t "arijkortas/gestion_formations:php" -f "C:/Users/arijkortas/Desktop/gestion_formations/docker/php"
    }
    
 stage('Push image') {
        withDockerRegistry([ credentialsId: "oumaimaarij", url: "" ]) {
        dockerImage.push()
        }
    }    
}
}