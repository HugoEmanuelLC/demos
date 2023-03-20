import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { produits, collections } from '../data-collections';

@Component({
  selector: 'app-collection',
  templateUrl: './collection.component.html',
  styleUrls: ['./collection.component.scss']
})
export class CollectionComponent implements OnInit {

  collections = collections;
  produits = produits;
  nomCollection = "" ;

  constructor(private route: ActivatedRoute){}

  ngOnInit(){

    const routeParams = this.route.snapshot.paramMap
    const collectionIdFromRoute = Number(routeParams.get('id'))

    this.produits = this.produits.filter(elem => {
      return collectionIdFromRoute === elem.FK_id_collection
    })

    this.collections.filter(name => {
      if (collectionIdFromRoute === name.id) {
        this.nomCollection = name.name
      }else{}
    })
  }
}
