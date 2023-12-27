import { Component, OnInit } from '@angular/core';
import { faPhone, faHome } from '@fortawesome/free-solid-svg-icons';
import { faFacebook, faTwitter, faInstagram} from '@fortawesome/free-brands-svg-icons';

@Component({
  selector: 'app-app-footer',
  templateUrl: './app-footer.component.html',
  styleUrls: ['./app-footer.component.css']
})
export class AppFooterComponent implements OnInit {
  facebookIcon = faFacebook;
  twitterIcon = faTwitter;
  instagramIcon = faInstagram;
  phoneIcon = faPhone;
  homeIcon = faHome;

  constructor() { }

  ngOnInit() {
  }

}
