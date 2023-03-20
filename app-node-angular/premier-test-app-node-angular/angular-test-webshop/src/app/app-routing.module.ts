import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AccueilComponent } from './accueil/accueil.component';
import { CollectionComponent } from './collection/collection.component';
import { ProduitItemComponent } from './produit-info/produit-item.component';

const routes: Routes = [
  {path: '', component: AccueilComponent},
  {path: 'collection/:id', component: CollectionComponent},
  {path: 'collection/:id/:idproduit', component: ProduitItemComponent},
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
