import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';

import { FontAwesomeModule } from '@fortawesome/angular-fontawesome';
import { library } from '@fortawesome/fontawesome-svg-core';
import { fas } from '@fortawesome/free-solid-svg-icons';
import { AppComponent } from './app.component';

import { AppNavComponent } from './components/app-nav/app-nav.component';
import { AppHomeComponent } from './components/app-home/app-home.component';
import { AppBlogComponent } from './components/app-blog/app-blog.component';
import { AppContactComponent } from './components/app-contact/app-contact.component';
import { AppFooterComponent } from './components/app-footer/app-footer.component';
import { AppSlideComponent } from './components/app-slide/app-slide.component';
import { AppArticlesComponent } from './components/app-articles/app-articles.component';

const appRoutes: Routes = [
  { path: 'home', component: AppHomeComponent },
  { path: 'blog', component: AppBlogComponent },
  { path: 'contact', component: AppContactComponent },
  { path: '**', redirectTo: 'home', pathMatch: 'full' }
];

@NgModule({
  declarations: [
    AppComponent,
    AppNavComponent,
    AppHomeComponent,
    AppBlogComponent,
    AppContactComponent,
    AppFooterComponent,
    AppSlideComponent,
    AppArticlesComponent
  ],
  imports: [
    BrowserModule,
    FontAwesomeModule,
    FormsModule,
    ReactiveFormsModule,
    RouterModule.forRoot(appRoutes)
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
