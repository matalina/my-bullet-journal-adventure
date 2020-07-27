# My Bullet Journal

Readme coming soon

For more information checkout [My Bullet Journal Adventure](https://akddevmbj.wordpress.com/) and the progression of [the app](https://mbj.akddev.net).

## Font Awesome Icons

```html
<i class="fab fa-google"></i>
<i class="fab fa-twitter"></i>
<i class="fab fa-facebook"></i>
<i class="fab fa-github"></i>

<i class="fal fa-sign-in-alt"></i>
<i class="fal fa-sign-out-alt"></i>
<i class="fal fa-user-plus"></i>
<i class="fal fa-user"></i>

<i class="fal fa-greater-than"></i>
<i class="fal fa-less-than"></i>
<i class="fal fa-times"></i>
<i class="fal fa-circle"></i> Event
<i class="fas fa-circle"></i> Task
<i class="fal fa-tilde"></i> Note

<i class="fal fa-sticky-note"></i> 
<i class="fal fa-dollar-sign"></i>
<i class="fas fa-exclamation"></i>
<i class="fal fa-star"></i>
<i class="fal fa-heart"></i>
<i class="fal fa-alarm-clock"></i>
<i class="fal fa-asterisk"></i>
<i class="fal fa-bell"></i>
<i class="fal fa-birthday-cake"></i>
<i class="fal fa-bolt"></i>
<i class="fal fa-bomb"></i>
<i class="fal fa-broom"></i>
<i class="fal fa-check"></i>
<i class="fal fa-clock"></i>
<i class="fal fa-flag"></i>
<i class="fal fa-lightbulb-on"></i>
<i class="fal fa-phone-alt"></i>
<i class="fal fa-prescription-bottle"></i>
<i class="fal fa-poo"></i>
<i class="fas fa-question"></i>
<i class="fal fa-shopping-cart"></i>
<i class="fal fa-tag"></i>
<i class="fal fa-thumbtack"></i>
<i class="fal fa-trash"></i>
```

Google User Data:
```
Laravel\Socialite\Two\User {#313 ▼
  +token: ""
  +refreshToken: null
  +expiresIn: 3599
  +id: ""
  +nickname: null
  +name: ""
  +email: ""
  +avatar: ""
  +user: array:11 [▼
    "sub" => 
    "name" => 
    "given_name" => 
    "family_name" => 
    "picture" => 
    "email" => 
    "email_verified" => 
    "locale" => 
    "id" => 
    "verified_email" => 
    "link" => 
  ]
  +"avatar_original": ""
}
```

Twitter User Data:
```
Laravel\Socialite\One\User {#319 ▼
  +token:
  +tokenSecret: 
  +id: 
  +nickname: 
  +name: 
  +email: 
  +avatar: 
  +user: array:42 [▼
    "id_str" => 
    "entities" => 
    "protected" => 
    "followers_count" => 
    "friends_count" => 
    "listed_count" => 
    "created_at" => 
    "favourites_count" => 
    "utc_offset" => 
    "time_zone" => 
    "geo_enabled" => 
    "verified" => 
    "statuses_count" => 
    "lang" => 
    "status" => 
    "contributors_enabled" => 
    "is_translator" => 
    "is_translation_enabled" => 
    "profile_background_color" => 
    "profile_background_tile" => 
    "profile_link_color" => 
    "profile_sidebar_border_color" => 
    "profile_sidebar_fill_color" => 
    "profile_text_color" => 
    "profile_use_background_image" => 
    "has_extended_profile" => 
    "default_profile" => 
    "default_profile_image" => 
    "following" => 
    "follow_request_sent" => 
    "notifications" => 
    "translator_type" => 
    "suspended" => 
    "needs_phone_verification" => 
    "url" => 
    "profile_background_image_url" => 
    "profile_background_image_url_https" => 
    "profile_image_url" => 
    "profile_image_url_https" => 
    "profile_banner_url" => 
    "location" => 
    "description" => 
  ]
  +"avatar_original": 
}
```

Facebook User Data:
```
Laravel\Socialite\Two\User {#310 ▼
  +token: 
  +refreshToken: 
  +expiresIn: 
  +id: 
  +nickname: 
  +name: 
  +email: 
  +avatar: 
  +user: array:3 [▼
    "name" => 
    "email" => 
    "id" => 
  ]
  +"avatar_original": 
  +"profileUrl":
```  
  
Github User Data:
```
Laravel\Socialite\Two\User {#312 ▼
  +token: 
  +refreshToken: 
  +expiresIn: 
  +id: 
  +nickname: 
  +name: 
  +email: 
  +avatar: 
  +user: array:32 [▼
    "login" => 
    "id" => 
    "node_id" => 
    "avatar_url" => 
    "gravatar_id" => 
    "url" => 
    "html_url" => 
    "followers_url" => 
    "following_url" => 
    "gists_url" => 
    "starred_url" => 
    "subscriptions_url" => 
    "organizations_url" => 
    "repos_url" => 
    "events_url" => 
    "received_events_url" => 
    "type" => 
    "site_admin" => 
    "name" => 
    "company" => 
    "blog" => 
    "location" => 
    "email" => 
    "hireable" => 
    "bio" => 
    "twitter_username" => 
    "public_repos" => 
    "public_gists" => 
    "followers" => 
    "following" => 
    "created_at" => 
    "updated_at" => 
  ]
}
```

Return Data structure
```
return [
    'success' => true,
    'message' => 'Account Successfully Created and user logged in.',
    'code' => 'U1000',
    'info' => ['user' => auth()->user()],
];
```

Message Codes:

U1000 - User created and logged info
U1001 - User logged in successfully via web app
U1002 - User logged in successfully via api
U1003 - Successfully logged out

U9000 - Invalid credentials
U9001 - Email already exists