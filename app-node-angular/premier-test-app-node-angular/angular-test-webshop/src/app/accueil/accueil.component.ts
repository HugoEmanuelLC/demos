import { Component, OnInit  } from '@angular/core';
// import { ActivatedRoute } from '@angular/router';
import { collections } from '../data-collection';

@Component({
  selector: 'app-accueil',
  templateUrl: './accueil.component.html',
  styleUrls: ['./accueil.component.scss']
})
export class AccueilComponent {

  collections = collections;

  // constructor(private route: ActivatedRoute){}

  // ngOnInit(){
  //   this.route.params.subscribe(params => {
  //     console.log(params["id"]);
  //   })
  // }

}
