import { Component } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { produits, collections } from '../data-collections';

@Component({
  selector: 'app-produit-item',
  templateUrl: './produit-item.component.html',
  styleUrls: ['./produit-item.component.scss']
})
export class ProduitItemComponent {

  collections = collections;
  produits = produits;
  nomCollection = "" ;

  constructor(private route: ActivatedRoute){}

  ngOnInit(){

    const routeParams = this.route.snapshot.paramMap
    const collectionIdFromRoute = Number(routeParams.get('id'))
    const produitIdFromRoute = Number(routeParams.get('idproduit'))

    this.produits = this.produits.filter(elem => {
      if (collectionIdFromRoute === elem.FK_id_collection && produitIdFromRoute === elem.id) {
        return elem
      }else{
        return false
      }
    })

    this.collections.filter(name => {
      if (collectionIdFromRoute === name.id) {
        this.nomCollection = name.name
      }else{}
    })
  }
}
