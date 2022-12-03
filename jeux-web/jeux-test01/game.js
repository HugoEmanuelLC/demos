import { Scoreboard } from "./components/Scoreboard";


export class Game extends Phaser.Scene {

    constructor(){
        super({ key: 'game'});
    }

    init(){
        this.scoreboard = new Scoreboard(this);
    }

    preload(){
        this.load.image('background', 'images/background.jpg');
        this.load.image('gameover', 'images/gameover.jpg');
        this.load.image('platform', 'images/platform.png');
        this.load.image('ball', 'images/ball.png');
    }

    create(){
        this.physics.world.setBoundsCollision(true, true, true, false);// bordes del monde que tiene que rebotar lor objetos

        this.add.image(400, 250, 'background');
        
        this.gameoverImage = this.add.image(400,250, 'gameover');
        this.gameoverImage.visible = false;

        this.scoreboard.create();

        this.platform = this.physics.add.image(400, 460, 'platform').setImmovable();//objet imovible despues de collision
        this.platform.body.allowGravity = false;

        this.ball = this.physics.add.image(400, 30, 'ball');
        this.ball.setCollideWorldBounds(true);//que rebote con qualquier objeto

        // inicio del rebote y velocidade aleatorios
        let velocity = 100 * Phaser.Math.Between(1.3, 2);
        if(Phaser.Math.Between(0, 10) > 5){
            velocity = 0 - velocity;
        }
        this.ball.setVelocity(velocity, 10);
        // fin del rebote y velocidade aleatorios

        this.physics.add.collider(this.ball, this.platform, this.platformImpact, null, this); //collision entre dos objetos

        this.ball.setBounce(1);//rebote

        this.cursors = this.input.keyboard.createCursorKeys();
        //this.platform.setVelocity(100, 10); // (vers la droite, vers le bas)
    }

    platformImpact(){
        this.scoreboard.incrementPoints(1);
    }

    update(){
        if(this.cursors.left.isDown){
            this.platform.setVelocityX(-500);
        }
        else if(this.cursors.right.isDown){
            this.platform.setVelocityX(500);
        }
        else{
            this.platform.setVelocityX(0);//si tecle pas enclencher
        }

        if(this.ball.y > 500){// si la ball descent de la scene
            this.gameoverImage.visible = true;
            this.scene.pause();
        }
    }
}