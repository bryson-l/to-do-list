import { Component, Input } from "@angular/core";
import * as $ from "jquery";

@Component({
  selector: "topnav-bar", // <home></home>
  // We need to tell Angular's Dependency Injection which providers are in our app.
  providers: [],
  // Every Angular template is first compiled by the browser before Angular runs it's compiler
  templateUrl: "./top-nav-bar.component.html"
})
export class TopNavBarComponent {
  // TypeScript public modifier
  constructor() {}
  @Input() public isUserLoggedIn: boolean = false;

  onClick(event: MouseEvent) {
    let profile = $("#profile")
    profile.css("display", "block")
  }

  onBlur(event: FocusEvent) {
    let profile = $("#profile")
    profile.css("display", "none")
  }

  ngOnInit() {
  }

  ngAfterViewInit() {}
}
