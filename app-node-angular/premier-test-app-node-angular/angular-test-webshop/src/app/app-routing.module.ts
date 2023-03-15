import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AccueilComponent } from './accueil/accueil.component';
import { CollectionComponent } from './collection/collection.component';
import { ListProduitsComponent } from './list-produits/list-produits.component';
import { ProduitItemComponent } from './produit-item/produit-item.component';

const routes: Routes = [
  {path: '', component: AccueilComponent},
  {path: 'coll/:id', component: CollectionComponent},
  {path: 'listprod', component: ListProduitsComponent},
  {path: 'prod', component: ProduitItemComponent},
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
