import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import { HttpClientModule } from '@angular/common/http';
import { RouterModule, Routes } from '@angular/router';
import { TopNavBarComponent } from './menu/top-nav-bar/top-nav-bar.component';
import { NoContentComponent } from './global/no-content/no-content.component';
import { Footer } from './global/footer/footer.component';
import { ToDoListComponent } from './content/to-do-list/to-do-list.component';
import { WidgetComponent } from './ui-elements/widget/widget.component';
import { LoginComponent } from './content/login/login.component';
import { AuthGuard } from './auth/auth-guard.component'

export const AppRoutes2: Routes = [
  { path: 'login', component: LoginComponent},
  { path:'', component: ToDoListComponent, canActivate: [AuthGuard]},
  { path: '**', component: NoContentComponent}
];

@NgModule({
  declarations: [
    AppComponent,
    TopNavBarComponent,
    NoContentComponent,
    ToDoListComponent,
    Footer,
    LoginComponent,
    WidgetComponent,
  ],
  imports: [BrowserModule, 
            RouterModule.forRoot(AppRoutes2, { useHash: true }), 
            HttpClientModule, 
          ],
  providers: [ AuthGuard ],
  bootstrap: [AppComponent]
})
export class AppModule {}
