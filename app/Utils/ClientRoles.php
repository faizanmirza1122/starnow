<?php

namespace App\Utils;

class ClientRoles
{
      const ADVERTISER = 1;
      const CASTING_DIRECTOR = 2;
      const AGENT = 3;
      const FILM_STUDENT = 4;
      const PRODUCTION_COMAPNY = 5;
      const PHOTOGRAPHER = 6;
      const FILM_MAKER = 7;
      const ADVERTISING_AGENCY = 8;
      const DIRECTOR = 9;

      public static $types = [
            self::ADVERTISER => 'Advertiser',
            self::CASTING_DIRECTOR => 'Casting Dirctor',
            self::AGENT => 'Agent',
            self::FILM_STUDENT => 'Film Student',
            self::PRODUCTION_COMAPNY => 'Production Company',
            self::PHOTOGRAPHER => 'Photographer',
            self::FILM_MAKER => 'Film Maker',
            self::ADVERTISING_AGENCY => 'Advertising Agency',
            self::DIRECTOR => 'Director',
      ];
}
