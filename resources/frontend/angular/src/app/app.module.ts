import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import { HttpClientModule } from '@angular/common/http';
import { RouterModule, Routes } from '@angular/router';
import { TopNavBarComponent } from './menu/top-nav-bar/top-nav-bar.component';
import { NoContentComponent } from './global/no-content/no-content.component';
import { Footer } from './global/footer/footer.component';

export const AppRoutes2: Routes = [
  { path: '', component: NoContentComponent },
  { path: '**', component: NoContentComponent}
];

@NgModule({
  declarations: [
    AppComponent,
    TopNavBarComponent,
    NoContentComponent,
    Footer
  ],
  imports: [BrowserModule, 
            RouterModule.forRoot(AppRoutes2, { useHash: true }), 
            HttpClientModule, 
          ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule {}
