import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { collections } from '../data-collection';

@Component({
  selector: 'app-collection',
  templateUrl: './collection.component.html',
  styleUrls: ['./collection.component.scss']
})
export class CollectionComponent implements OnInit {

  collections = collections;

  constructor(private route: ActivatedRoute){}

  ngOnInit(){
    this.route.params.subscribe(params => {
      console.log(params["id"]);
    })
  }
}
