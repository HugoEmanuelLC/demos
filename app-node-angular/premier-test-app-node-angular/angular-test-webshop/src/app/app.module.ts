import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { AccueilComponent } from './accueil/accueil.component';
import { CollectionComponent } from './collection/collection.component';
import { ListProduitsComponent } from './list-produits/list-produits.component';
import { ProduitItemComponent } from './produit-info/produit-item.component';

@NgModule({
  declarations: [
    AppComponent,
    AccueilComponent,
    CollectionComponent,
    ListProduitsComponent,
    ProduitItemComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
