import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { PageTestComponent } from './page-test/page-test.component';

const routes: Routes = [
  { path: 'test-page', component: PageTestComponent }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
