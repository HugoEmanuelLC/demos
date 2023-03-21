import { Component } from '@angular/core';
import { idProduits } from './data-collections';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent {
  title = 'angular-test-webshop';

  idProduits = idProduits

  ajouterPanier(id: number){
    this.idProduits = id
    return console.log(this.idProduits)
  }
}
