export class Game extends Phaser.Scene {

    constructor(){
        super({ key: 'game'});
    }

    preload(){
        this.load.image('background', 'images/background.jpg');
        this.load.image('gameover', 'images/gameover.jpg');
        this.load.image('platform', 'images/platform.png');
    }

    create(){
        this.add.image(400, 250, 'background');
        this.gameoverImage = this.add.image(400, 90, 'gameover');
        this.gameoverImage.visible = false;

        this.platform = this.physics.add.image(400, 460, 'platform');
        this.platform.body.allowGravity = false;

        this.cursors = this.input.keyboard.createCursorKeys();
        //this.platform.setVelocity(100, 10); // (vers la droite, vers le bas)
    }

    update(){
        if(this.cursors.left.isDown){
            this.platform.setVelocityX(-500);
        }
        else if(this.cursors.right.isDown){
            this.platform.setVelocityX(500);
        }
        
        else if(this.cursors.up.isDown){
            this.platform.setVelocityY(-500);
        }
        
        else if(this.cursors.down.isDown){
            this.platform.setVelocityY(500);
        }


        else{
            this.platform.setVelocityX(0);
            this.platform.setVelocityY(0);
        }
    }
}