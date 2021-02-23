import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';

import { AppComponent } from './app.component';
import { HttpClientModule, HTTP_INTERCEPTORS } from '@angular/common/http';
import { RouterModule, Routes } from '@angular/router';
import { TopNavBarComponent } from './menu/top-nav-bar/top-nav-bar.component';
import { NoContentComponent } from './global/no-content/no-content.component';
import { Footer } from './global/footer/footer.component';
import { ToDoListComponent } from './content/to-do-list/to-do-list.component';
import { WidgetComponent } from './ui-elements/widget/widget.component';
import { LoginComponent } from './content/login/login.component';
import { AuthGuard } from './auth/auth-guard.component'
import { JwtInterceptor } from './auth/jwt.interceptor';
import { ErrorInterceptor } from './auth/error.interceptor';

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
            FormsModule 
          ],
  providers: [ AuthGuard, 
    {provide: HTTP_INTERCEPTORS, useClass: JwtInterceptor, multi: true}, 
    {provide: HTTP_INTERCEPTORS, useClass: ErrorInterceptor, multi: true}, 
  ],
  bootstrap: [AppComponent]
})
export class AppModule {}
