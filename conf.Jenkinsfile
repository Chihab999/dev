pipeline {
    agent any
    
    stages {
        stage('Installation du langage de programmation') {
            steps {
                sh 'sudo apt-get update'
                sh 'sudo apt-get install -y php'
            }
        }
        
        stage('Installation des dépendances') {
            steps {
                sh 'composer install'
            }
        }
        
        stage('Validation de la qualité du code') {
            steps {
                sh 'phpcs --standard=PSR2 app/'
            }
        }
        
        stage('Exécuter des tests') {
            steps {
                sh 'phpunit'
            }
        }
    }
    
    post {
        always {
            slackSend channel: '#general', color: 'good', message: 'La construction de mon-projet est terminée.'
        }
    }
}
