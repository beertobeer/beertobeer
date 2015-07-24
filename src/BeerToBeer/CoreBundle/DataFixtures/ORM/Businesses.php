<?php

namespace BeerToBeer\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use BeerToBeer\CoreBundle\Entity\Business;

class Businesses implements FixtureInterface, OrderedFixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    $bigJson = '{
  "version": 0.6,
  "generator": "Overpass API",
  "osm3s": {
    "timestamp_osm_base": "2014-09-10T20:04:01Z",
    "copyright": "The data included in this document is from www.openstreetmap.org. The data is made available under ODbL."
  },
  "elements": [

{
  "type": "node",
  "id": 129939417,
  "lat": 48.8258393,
  "lon": 2.2563011,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'Ile",
    "phone": "+33 1 41099999",
    "website": "http://www.restaurant-lile.com/"
  }
},
{
  "type": "node",
  "id": 154291007,
  "lat": 48.8922925,
  "lon": 2.2316407,
  "tags": {
    "amenity": "restaurant",
    "created_by": "JOSM",
    "name": "Le Valmy (brasserie)",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 158603712,
  "lat": 48.8298344,
  "lon": 2.3228877,
  "tags": {
    "alt_name": "Le Moulin Vert",
    "amenity": "restaurant",
    "name": "Au Moulin Vert"
  }
},
{
  "type": "node",
  "id": 163711505,
  "lat": 48.8949681,
  "lon": 2.2229796,
  "tags": {
    "amenity": "restaurant",
    "created_by": "JOSM",
    "name": "Pizzeria Palma d\'Oro"
  }
},
{
  "type": "node",
  "id": 163727966,
  "lat": 48.8946380,
  "lon": 2.2231811,
  "tags": {
    "amenity": "restaurant",
    "name": "Baguettes de Chine",
    "phone": "01.41.20.08.08"
  }
},
{
  "type": "node",
  "id": 163735581,
  "lat": 48.8951397,
  "lon": 2.2225402,
  "tags": {
    "amenity": "restaurant",
    "created_by": "JOSM",
    "name": "Pizzeria Torino"
  }
},
{
  "type": "node",
  "id": 163740844,
  "lat": 48.8949637,
  "lon": 2.2221578,
  "tags": {
    "amenity": "restaurant",
    "created_by": "JOSM",
    "cuisine": "brasserie",
    "name": "La Terrasse du Parc"
  }
},
{
  "type": "node",
  "id": 163768502,
  "lat": 48.8958072,
  "lon": 2.2202226,
  "tags": {
    "amenity": "restaurant",
    "created_by": "JOSM",
    "name": "La Cheminée"
  }
},
{
  "type": "node",
  "id": 165749269,
  "lat": 48.8957715,
  "lon": 2.2279596,
  "tags": {
    "amenity": "restaurant",
    "name": "Milano (pizzeria)",
    "note:fr": "fait aussi bar",
    "phone": "01.49.61.06.34",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 165749275,
  "lat": 48.9004177,
  "lon": 2.2243311,
  "tags": {
    "amenity": "restaurant",
    "created_by": "JOSM",
    "name": "Buffalo grill"
  }
},
{
  "type": "node",
  "id": 175539450,
  "lat": 48.8319942,
  "lon": 2.3245602,
  "tags": {
    "addr:housenumber": "8",
    "addr:postcode": "75014",
    "addr:street": "Rue des Plantes",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Severo"
  }
},
{
  "type": "node",
  "id": 176476540,
  "lat": 48.8962840,
  "lon": 2.2250919,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Sancerre (brasserie)",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 176476541,
  "lat": 48.8965817,
  "lon": 2.2241626,
  "tags": {
    "amenity": "restaurant",
    "name": "La terrasse (brasserie)"
  }
},
{
  "type": "node",
  "id": 178161876,
  "lat": 48.9007947,
  "lon": 2.2319432,
  "tags": {
    "amenity": "restaurant",
    "created_by": "JOSM",
    "name": "L\'arche (brasserie)"
  }
},
{
  "type": "node",
  "id": 202373647,
  "lat": 48.8904442,
  "lon": 2.2433088,
  "tags": {
    "amenity": "restaurant",
    "layer": "4",
    "name": "Le Bistrot à Vin",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 203123010,
  "lat": 48.8948889,
  "lon": 2.2387542,
  "tags": {
    "amenity": "restaurant",
    "created_by": "JOSM",
    "layer": "4",
    "name": "Avant Seine"
  }
},
{
  "type": "node",
  "id": 203997430,
  "lat": 48.8864952,
  "lon": 2.2446044,
  "tags": {
    "addr:city": "Puteaux",
    "addr:housenumber": "51",
    "addr:postcode": "92800",
    "addr:street": "Rue de la République",
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Pizza San Remo"
  }
},
{
  "type": "node",
  "id": 204128495,
  "lat": 48.8903560,
  "lon": 2.2444823,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "layer": "4",
    "name": "Matsui"
  }
},
{
  "type": "node",
  "id": 204128496,
  "lat": 48.8907062,
  "lon": 2.2426460,
  "tags": {
    "amenity": "restaurant",
    "layer": "4",
    "name": "Globe Trotter"
  }
},
{
  "type": "node",
  "id": 205462084,
  "lat": 48.8964233,
  "lon": 2.2372254,
  "tags": {
    "amenity": "restaurant",
    "layer": "3",
    "name": "Soleil d\'or"
  }
},
{
  "type": "node",
  "id": 227450780,
  "lat": 48.8907277,
  "lon": 2.2356100,
  "tags": {
    "amenity": "restaurant",
    "created_by": "JOSM",
    "name": "Boldère"
  }
},
{
  "type": "node",
  "id": 241782824,
  "lat": 48.8889041,
  "lon": 2.2212129,
  "tags": {
    "amenity": "restaurant",
    "created_by": "JOSM"
  }
},
{
  "type": "node",
  "id": 241783195,
  "lat": 48.8894535,
  "lon": 2.2209183,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "La colombe (traiteur asiatique)"
  }
},
{
  "type": "node",
  "id": 247439149,
  "lat": 48.8688161,
  "lon": 2.3275703,
  "tags": {
    "amenity": "bar",
    "name": "Bar Hemingway"
  }
},
{
  "type": "node",
  "id": 247439841,
  "lat": 48.8618419,
  "lon": 2.3435168,
  "tags": {
    "amenity": "cafe",
    "name": "Le Comptoir Paris-Marrakech",
    "wheelchair": "limited",
    "wheelchair:description": "only parts of the restaurant are wheelchair accessible. The toilet is not accessible."
  }
},
{
  "type": "node",
  "id": 247455913,
  "lat": 48.8663165,
  "lon": 2.3370822,
  "tags": {
    "amenity": "bar",
    "name": "Juvénile\'s"
  }
},
{
  "type": "node",
  "id": 247455916,
  "lat": 48.8672925,
  "lon": 2.3255509,
  "tags": {
    "amenity": "restaurant",
    "name": "La Crypte Polska",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 247455918,
  "lat": 48.8616428,
  "lon": 2.3359304,
  "tags": {
    "amenity": "cafe",
    "layer": "4",
    "name": "Café Marly",
    "name:ru": "Кафе Марли",
    "opening_hours": "Mo-Su 08:00-02:00",
    "phone": "01.49.26.06.60"
  }
},
{
  "type": "node",
  "id": 247455920,
  "lat": 48.8659000,
  "lon": 2.3372420,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "37bis",
    "addr:postcode": "75001",
    "addr:street": "Rue de Montpensier",
    "amenity": "restaurant",
    "name": "Mystery Cuisine",
    "phone": "01 40 20 03 02"
  }
},
{
  "type": "node",
  "id": 247455923,
  "lat": 48.8615254,
  "lon": 2.3440287,
  "tags": {
    "amenity": "restaurant",
    "name": "Chez Denise"
  }
},
{
  "type": "node",
  "id": 247455924,
  "lat": 48.8585872,
  "lon": 2.3458523,
  "tags": {
    "addr:housenumber": "13",
    "addr:street": "Rue des Lavandières Sainte-Opportune",
    "amenity": "restaurant",
    "name": "La Robe et le Palais",
    "phone": "+33-1-45080741",
    "website": "http://www.robe-et-palais.com/",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 247465495,
  "lat": 48.8674660,
  "lon": 2.3326727,
  "tags": {
    "amenity": "restaurant",
    "name": "Point Bar"
  }
},
{
  "type": "node",
  "id": 247467737,
  "lat": 48.8663449,
  "lon": 2.3382902,
  "tags": {
    "amenity": "bar",
    "name": "Willi\'s Wine Bar"
  }
},
{
  "type": "node",
  "id": 247467738,
  "lat": 48.8663903,
  "lon": 2.3380844,
  "tags": {
    "amenity": "restaurant",
    "name": "Macéo"
  }
},
{
  "type": "node",
  "id": 247696086,
  "lat": 48.8660027,
  "lon": 2.3646613,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Chez Jenny",
    "phone": "01 44 54 39 00",
    "website": "http://www.chez-jenny.com/"
  }
},
{
  "type": "node",
  "id": 247696088,
  "lat": 48.8583761,
  "lon": 2.3638522,
  "tags": {
    "addr:housenumber": "4",
    "addr:street": "Rue du Parc Royal",
    "amenity": "restaurant",
    "cuisine": "crepe",
    "name": "Page 35",
    "opening_hours": "Tu-Fr 11:00-15:00;Tu-Fr 19:30-23:00;Sa-Su 11:30-23:00",
    "phone": "01 44 54 35 35",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 247696089,
  "lat": 48.8573191,
  "lon": 2.3660431,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Petit Marché"
  }
},
{
  "type": "node",
  "id": 247696090,
  "lat": 48.8580708,
  "lon": 2.3643313,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Café des Musées",
    "opening_hours": "Mo-Su 12:00-15:00,19:00-23:30",
    "phone": "01 42 72 96 17"
  }
},
{
  "type": "node",
  "id": 247696091,
  "lat": 48.8654622,
  "lon": 2.3553300,
  "tags": {
    "amenity": "cafe",
    "name": "Café des Arts et Métiers"
  }
},
{
  "type": "node",
  "id": 247696092,
  "lat": 48.8577996,
  "lon": 2.3607146,
  "tags": {
    "amenity": "restaurant",
    "name": "Camille",
    "source": "survey 2013",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 247696093,
  "lat": 48.8624406,
  "lon": 2.3642097,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Pamphlet"
  }
},
{
  "type": "node",
  "id": 247696094,
  "lat": 48.8629482,
  "lon": 2.3611507,
  "tags": {
    "amenity": "cafe",
    "name": "Les Enfants Rouge"
  }
},
{
  "type": "node",
  "id": 247696096,
  "lat": 48.8644553,
  "lon": 2.3543144,
  "tags": {
    "amenity": "cafe",
    "name": "Andy Wahloo"
  }
},
{
  "type": "node",
  "id": 248493877,
  "lat": 48.8483622,
  "lon": 2.3739893,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "55",
    "addr:postcode": "75012",
    "addr:street": "Rue Traversière",
    "amenity": "restaurant",
    "cuisine": "french",
    "description": "restaurant coopératif",
    "internet_access": "no",
    "name": "L\'Encrier",
    "opening_hours": "Mo-Fr 10:00-14:30,19:30-23:00;Sa 19:30-23:00",
    "phone": "+33 (0) 144680816",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 248494308,
  "lat": 48.8491606,
  "lon": 2.4165683,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Le Mumtaz"
  }
},
{
  "type": "node",
  "id": 250657148,
  "lat": 48.8648091,
  "lon": 2.3411291,
  "tags": {
    "amenity": "restaurant",
    "name": "Lémoni Café"
  }
},
{
  "type": "node",
  "id": 250861677,
  "lat": 48.8687993,
  "lon": 2.3373273,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Rani Mahal"
  }
},
{
  "type": "node",
  "id": 250861679,
  "lat": 48.8648222,
  "lon": 2.3475072,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Loup Blanc"
  }
},
{
  "type": "node",
  "id": 250861680,
  "lat": 48.8689038,
  "lon": 2.3422059,
  "tags": {
    "addr:housenumber": "40",
    "addr:postcode": "75002",
    "addr:street": "Rue Notre-Dame des Victoires",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Café Moderne"
  }
},
{
  "type": "node",
  "id": 251001752,
  "lat": 48.8643869,
  "lon": 2.3503038,
  "tags": {
    "amenity": "pub",
    "name": "The Frog & Rosbif"
  }
},
{
  "type": "node",
  "id": 251010491,
  "lat": 48.8695611,
  "lon": 2.3317879,
  "tags": {
    "amenity": "bar",
    "name": "Footsie"
  }
},
{
  "type": "node",
  "id": 251023849,
  "lat": 48.8691942,
  "lon": 2.3321035,
  "tags": {
    "addr:housenumber": "5",
    "addr:postcode": "75002",
    "addr:street": "Rue Daunou",
    "amenity": "bar",
    "name": "Harry\'s Bar",
    "source": "www.harrysbar.fr",
    "website": "www.harrysbar.fr"
  }
},
{
  "type": "node",
  "id": 251023850,
  "lat": 48.8663658,
  "lon": 2.3442726,
  "tags": {
    "amenity": "cafe",
    "name": "Café Noir"
  }
},
{
  "type": "node",
  "id": 251043133,
  "lat": 48.8609691,
  "lon": 2.3544084,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "vegetarian",
    "diet:vegetarian": "only",
    "name": "Le Potager du Marais",
    "opening_hours": "Mo, We-Su 10:00-0:00",
    "phone": "01 42 74 24 66"
  }
},
{
  "type": "node",
  "id": 251043135,
  "lat": 48.8562533,
  "lon": 2.3609683,
  "tags": {
    "amenity": "cafe",
    "name": "Le Loir dans la Théière"
  }
},
{
  "type": "node",
  "id": 251043137,
  "lat": 48.8557612,
  "lon": 2.3561274,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "mexican",
    "name": "La Perla",
    "opening_hours": "Mo-Su 12:00-2:00",
    "phone": "01 42 77 59 40",
    "website": "http://www.cafepacifico-laperla.com/"
  }
},
{
  "type": "node",
  "id": 251043139,
  "lat": 48.8533876,
  "lon": 2.3620076,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'Excuse"
  }
},
{
  "type": "node",
  "id": 251043140,
  "lat": 48.8575825,
  "lon": 2.3562566,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Passage Obligé",
    "phone": "+33 0140419503",
    "website": "http://www.lepassageoblige.com/",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 251047644,
  "lat": 48.8577181,
  "lon": 2.3586116,
  "tags": {
    "amenity": "restaurant",
    "name": "Chez Marianne"
  }
},
{
  "type": "node",
  "id": 251047682,
  "lat": 48.8555902,
  "lon": 2.3628384,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 251056295,
  "lat": 48.8577346,
  "lon": 2.3566096,
  "tags": {
    "amenity": "cafe",
    "name": "Mariage Frères",
    "name:en": "Mariage Brothers"
  }
},
{
  "type": "node",
  "id": 251125922,
  "lat": 48.8553135,
  "lon": 2.3591057,
  "tags": {
    "amenity": "pub",
    "name": "The Auld Alliance Scottish Pub"
  }
},
{
  "type": "node",
  "id": 251125927,
  "lat": 48.8536147,
  "lon": 2.3682805,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "7",
    "addr:postcode": "75012",
    "addr:street": "place de la Bastille",
    "amenity": "cafe",
    "brewery": "Heineken;Edelweiss;Affligem",
    "happy_hours": "Mo-Su 18:00-21:00",
    "internet_access": "yes",
    "name": "Café des Phares",
    "opening_hours": "Mo-Su 07:00-02:00",
    "phone": "+33 (0) 1 42 72 04 70",
    "website": "http://www.cafe-philo-des-phares.info/",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 251125928,
  "lat": 48.8533255,
  "lon": 2.3540705,
  "tags": {
    "amenity": "cafe",
    "name": "Café Le Lutètia"
  }
},
{
  "type": "node",
  "id": 251126259,
  "lat": 48.8573914,
  "lon": 2.3563278,
  "tags": {
    "amenity": "pub",
    "name": "Le Lizard Lounge"
  }
},
{
  "type": "node",
  "id": 251126260,
  "lat": 48.8574318,
  "lon": 2.3576301,
  "tags": {
    "amenity": "cafe",
    "name": "Au Petit Fer à Cheval"
  }
},
{
  "type": "node",
  "id": 251126326,
  "lat": 48.8572146,
  "lon": 2.3577144,
  "tags": {
    "amenity": "cafe",
    "name": "La Chaise au Plafond"
  }
},
{
  "type": "node",
  "id": 251126327,
  "lat": 48.8577212,
  "lon": 2.3576336,
  "tags": {
    "amenity": "cafe",
    "name": "Les Etages"
  }
},
{
  "type": "node",
  "id": 251126442,
  "lat": 48.8563923,
  "lon": 2.3573717,
  "tags": {
    "amenity": "cafe",
    "name": "Stolly\'s"
  }
},
{
  "type": "node",
  "id": 251474107,
  "lat": 48.8437435,
  "lon": 2.3544856,
  "tags": {
    "addr:housenumber": "4",
    "addr:street": "Rue Lacépède",
    "amenity": "restaurant",
    "cuisine": "pasta",
    "diet:vegetarian": "yes",
    "name": "Jardin des Pâtes",
    "phone": "01 43 31 50 71",
    "start_date": "1984"
  }
},
{
  "type": "node",
  "id": 251474108,
  "lat": 48.8498300,
  "lon": 2.3549148,
  "tags": {
    "amenity": "restaurant",
    "name": "La Tour d\'Argent"
  }
},
{
  "type": "node",
  "id": 251474109,
  "lat": 48.8446680,
  "lon": 2.3483159,
  "tags": {
    "amenity": "restaurant",
    "name": "Ambiance De L\'Inde"
  }
},
{
  "type": "node",
  "id": 251474112,
  "lat": 48.8526568,
  "lon": 2.3466795,
  "tags": {
    "amenity": "pub",
    "name": "Polly Magoo"
  }
},
{
  "type": "node",
  "id": 251474114,
  "lat": 48.8429882,
  "lon": 2.3495477,
  "tags": {
    "amenity": "pub",
    "name": "The Fifth Bar"
  }
},
{
  "type": "node",
  "id": 251474115,
  "lat": 48.8423393,
  "lon": 2.3498473,
  "tags": {
    "amenity": "pub",
    "brewery": "tripel_karmeliet",
    "name": "Le Vieux Chêne",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 251474117,
  "lat": 48.8474495,
  "lon": 2.3471573,
  "tags": {
    "amenity": "pub",
    "name": "La Tireuse"
  }
},
{
  "type": "node",
  "id": 251652821,
  "lat": 48.8405040,
  "lon": 2.3347917,
  "tags": {
    "amenity": "restaurant",
    "name": "Padova"
  }
},
{
  "type": "node",
  "id": 251652822,
  "lat": 48.8556694,
  "lon": 2.3399888,
  "tags": {
    "amenity": "restaurant",
    "name": "Yugaraj"
  }
},
{
  "type": "node",
  "id": 251652823,
  "lat": 48.8555375,
  "lon": 2.3409454,
  "tags": {
    "amenity": "restaurant",
    "name": "Les Bouquinistes"
  }
},
{
  "type": "node",
  "id": 251652824,
  "lat": 48.8537528,
  "lon": 2.3324105,
  "tags": {
    "amenity": "restaurant",
    "name": "Brasserie Lipp"
  }
},
{
  "type": "node",
  "id": 251653288,
  "lat": 48.8533939,
  "lon": 2.3394107,
  "tags": {
    "amenity": "restaurant",
    "name": "Cour de Rohan"
  }
},
{
  "type": "node",
  "id": 251670428,
  "lat": 48.8493501,
  "lon": 2.3391528,
  "tags": {
    "amenity": "restaurant",
    "name": "La Bastide Odéon"
  }
},
{
  "type": "node",
  "id": 251670430,
  "lat": 48.8546811,
  "lon": 2.3332029,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Petit Zinc"
  }
},
{
  "type": "node",
  "id": 251671404,
  "lat": 48.8497831,
  "lon": 2.3401650,
  "tags": {
    "amenity": "restaurant",
    "name": "Polidor"
  }
},
{
  "type": "node",
  "id": 251691150,
  "lat": 48.8441458,
  "lon": 2.3298957,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Timbre"
  }
},
{
  "type": "node",
  "id": 251691155,
  "lat": 48.8468341,
  "lon": 2.3265156,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Trait D\'Union",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 251691832,
  "lat": 48.8550882,
  "lon": 2.3414828,
  "tags": {
    "amenity": "restaurant",
    "name": "Ze Kitchen Gallery"
  }
},
{
  "type": "node",
  "id": 251691837,
  "lat": 48.8442966,
  "lon": 2.3310034,
  "tags": {
    "amenity": "restaurant",
    "name": "WokBar"
  }
},
{
  "type": "node",
  "id": 251699774,
  "lat": 48.8510774,
  "lon": 2.3385693,
  "tags": {
    "amenity": "bar",
    "name": "10 Bar International"
  }
},
{
  "type": "node",
  "id": 251699775,
  "lat": 48.8540787,
  "lon": 2.3330795,
  "tags": {
    "amenity": "cafe",
    "name": "Les Deux Magots"
  }
},
{
  "type": "node",
  "id": 251699776,
  "lat": 48.8541444,
  "lon": 2.3326307,
  "tags": {
    "amenity": "cafe",
    "name": "Café de Flore"
  }
},
{
  "type": "node",
  "id": 251758249,
  "lat": 48.8680799,
  "lon": 2.3215688,
  "tags": {
    "amenity": "bar",
    "bar": "cocktail",
    "name": "Buddha Bar"
  }
},
{
  "type": "node",
  "id": 251758250,
  "lat": 48.8710439,
  "lon": 2.3094204,
  "tags": {
    "addr:street": "Rue du Colisée",
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Qasim"
  }
},
{
  "type": "node",
  "id": 251758251,
  "lat": 48.8695157,
  "lon": 2.3030346,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Diep"
  }
},
{
  "type": "node",
  "id": 251851354,
  "lat": 48.8714582,
  "lon": 2.3357136,
  "tags": {
    "addr:street": "Boulevard des Italiens",
    "amenity": "restaurant",
    "name": "Pizza Marzano"
  }
},
{
  "type": "node",
  "id": 251851356,
  "lat": 48.8719507,
  "lon": 2.3429771,
  "tags": {
    "addr:housenumber": "7",
    "addr:postcode": "75009",
    "addr:street": "Rue du Faubourg Montmartre",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Chartier",
    "old_name": "Le Bouillon Chartier",
    "website": "www.restaurant-chartier.com"
  }
},
{
  "type": "node",
  "id": 251851364,
  "lat": 48.8718710,
  "lon": 2.3418144,
  "tags": {
    "addr:housenumber": "12",
    "addr:postcode": "75009",
    "addr:street": "Boulevard Montmartre",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Café Zéphyr",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 251851388,
  "lat": 48.8705409,
  "lon": 2.3532213,
  "tags": {
    "amenity": "restaurant",
    "name": "Julien",
    "wikipedia": "fr:Restaurant Julien"
  }
},
{
  "type": "node",
  "id": 251851389,
  "lat": 48.8711564,
  "lon": 2.3649322,
  "tags": {
    "amenity": "restaurant",
    "name": "Mukura"
  }
},
{
  "type": "node",
  "id": 251851390,
  "lat": 48.8755778,
  "lon": 2.3590863,
  "tags": {
    "amenity": "restaurant",
    "name": "La Vigne Saint-Laurent"
  }
},
{
  "type": "node",
  "id": 251851391,
  "lat": 48.8759060,
  "lon": 2.3588881,
  "tags": {
    "amenity": "restaurant",
    "name": "Restaurant La Strasbourgeoise"
  }
},
{
  "type": "node",
  "id": 251851392,
  "lat": 48.8727960,
  "lon": 2.3635124,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "67",
    "addr:postcode": "75010",
    "addr:street": "Rue de Lancry",
    "amenity": "restaurant",
    "name": "Le Verre Volé"
  }
},
{
  "type": "node",
  "id": 252214032,
  "lat": 48.8635832,
  "lon": 2.3671683,
  "tags": {
    "addr:housenumber": "121",
    "addr:street": "Rue Amelot",
    "amenity": "restaurant",
    "name": "Clown Bar"
  }
},
{
  "type": "node",
  "id": 252214072,
  "lat": 48.8660128,
  "lon": 2.3794462,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'Estaminet"
  }
},
{
  "type": "node",
  "id": 252263209,
  "lat": 48.8638332,
  "lon": 2.3670685,
  "tags": {
    "amenity": "restaurant",
    "name": "Norbulinga"
  }
},
{
  "type": "node",
  "id": 252550571,
  "lat": 48.8650759,
  "lon": 2.3670283,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Trou Normand"
  }
},
{
  "type": "node",
  "id": 252550640,
  "lat": 48.8679153,
  "lon": 2.3737355,
  "tags": {
    "amenity": "restaurant",
    "name": "Aux Comptoirs des Indes"
  }
},
{
  "type": "node",
  "id": 252551795,
  "lat": 48.8656744,
  "lon": 2.3707975,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Troisième Bureau"
  }
},
{
  "type": "node",
  "id": 252590112,
  "lat": 48.8631985,
  "lon": 2.3688861,
  "tags": {
    "addr:housenumber": "14",
    "addr:street": "Rue Oberkampf",
    "amenity": "bar",
    "name": "Le Kitch",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 252590177,
  "lat": 48.8683924,
  "lon": 2.3793396,
  "tags": {
    "amenity": "restaurant",
    "name": "Café Cannibale"
  }
},
{
  "type": "node",
  "id": 252591370,
  "lat": 48.8645151,
  "lon": 2.3730525,
  "tags": {
    "addr:housenumber": "1",
    "addr:street": "Rue Jacquard",
    "amenity": "restaurant",
    "name": "Avé Maria",
    "opening_hours": "Mo-Su 19:00-1:30",
    "phone": "01 47 00 61 73",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 252593436,
  "lat": 48.8679409,
  "lon": 2.3754781,
  "tags": {
    "amenity": "restaurant",
    "name": "Casa Palenque"
  }
},
{
  "type": "node",
  "id": 252595467,
  "lat": 48.8537435,
  "lon": 2.3699681,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "14",
    "addr:postcode": "75012",
    "addr:street": "place de la Bastille",
    "amenity": "restaurant",
    "brewery": "Heineken;Desperados;Edelweiss;Affligem;",
    "cuisine": "mexican",
    "happy_hours": "Mo-Su 17:00-20:00",
    "internet_access": "wlan",
    "name": "Indiana",
    "opening_hours": "Mo-We 08:30-00:00;Th-Su 08:30-02:00",
    "phone": "+33 (0) 1 44 75 79 80",
    "website": "http://www.indianacafe.fr/",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 252595468,
  "lat": 48.8554631,
  "lon": 2.3741053,
  "tags": {
    "addr:housenumber": "43",
    "addr:street": "Rue de la Roquette",
    "amenity": "restaurant",
    "cuisine": "thai",
    "name": "Blue Elephant",
    "opening_hours": "Mo-Fr 12:00-14:30;Mo-Sa 19:00-0:00;Su 12:00-15:00;Su 19:00-23:00",
    "phone": "01 47 00 42 00",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://www.blueelephant.com/"
  }
},
{
  "type": "node",
  "id": 252596129,
  "lat": 48.8533962,
  "lon": 2.3787654,
  "tags": {
    "amenity": "restaurant",
    "name": "Suds"
  }
},
{
  "type": "node",
  "id": 252599980,
  "lat": 48.8554359,
  "lon": 2.3744522,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Café des Anges"
  }
},
{
  "type": "node",
  "id": 252600700,
  "lat": 48.8533316,
  "lon": 2.3759759,
  "tags": {
    "addr:housenumber": "33",
    "addr:street": "Rue de Charonne",
    "amenity": "restaurant",
    "capacity": "25",
    "cuisine": "regional",
    "name": "Le bar à Soupes",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 252601888,
  "lat": 48.8561021,
  "lon": 2.3751898,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Cyrano"
  }
},
{
  "type": "node",
  "id": 252603943,
  "lat": 48.8667776,
  "lon": 2.3826288,
  "tags": {
    "amenity": "restaurant",
    "name": "Café Ménilmontant"
  }
},
{
  "type": "node",
  "id": 252604389,
  "lat": 48.8656637,
  "lon": 2.3778893,
  "tags": {
    "amenity": "bar",
    "cuisine": "french",
    "name": "Chez Justine",
    "opening_hours": "Mo-Su 8:00-2:00",
    "phone": "01 43 57 44 03",
    "website": "http://www.chezjustine.fr/"
  }
},
{
  "type": "node",
  "id": 252604801,
  "lat": 48.8658803,
  "lon": 2.3779414,
  "tags": {
    "amenity": "cafe",
    "name": "Nouveau Casino et Café Charbon"
  }
},
{
  "type": "node",
  "id": 252605261,
  "lat": 48.8630685,
  "lon": 2.3709736,
  "tags": {
    "addr:housenumber": "52",
    "addr:street": "Boulevard Voltaire",
    "amenity": "cafe",
    "name": "Ba-ta-clan",
    "opening_hours": "Mo-Su 9:00-2:00",
    "phone": "01 49 23 96 33",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://www.bataclancafe.fr/"
  }
},
{
  "type": "node",
  "id": 252608626,
  "lat": 48.8657344,
  "lon": 2.3781951,
  "tags": {
    "amenity": "cafe",
    "name": "Café Mercerie"
  }
},
{
  "type": "node",
  "id": 252608627,
  "lat": 48.8655073,
  "lon": 2.3763355,
  "tags": {
    "amenity": "cafe",
    "name": "Mecano Bar"
  }
},
{
  "type": "node",
  "id": 252609211,
  "lat": 48.8659834,
  "lon": 2.3791601,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "114",
    "addr:postcode": "75011",
    "addr:street": "Rue Oberkampf",
    "amenity": "pub",
    "email": "audrey@le-114.fr",
    "name": "Le 114",
    "opening_hours": "We-Sa 20:00-04:30",
    "website": "http://www.le-114.fr/"
  }
},
{
  "type": "node",
  "id": 252609212,
  "lat": 48.8663909,
  "lon": 2.3810388,
  "tags": {
    "amenity": "cafe",
    "name": "Le Scherkhan"
  }
},
{
  "type": "node",
  "id": 252610163,
  "lat": 48.8527123,
  "lon": 2.3742095,
  "tags": {
    "amenity": "pub",
    "name": "Entre Potes"
  }
},
{
  "type": "node",
  "id": 252788279,
  "lat": 48.8450730,
  "lon": 2.3795209,
  "tags": {
    "amenity": "restaurant",
    "name": "Refuge"
  }
},
{
  "type": "node",
  "id": 252816603,
  "lat": 48.8263535,
  "lon": 2.3601541,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Sinorama"
  }
},
{
  "type": "node",
  "id": 252816604,
  "lat": 48.8264524,
  "lon": 2.3594353,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "vietnamese",
    "name": "Phở 14"
  }
},
{
  "type": "node",
  "id": 252816605,
  "lat": 48.8346687,
  "lon": 2.3775990,
  "tags": {
    "amenity": "restaurant",
    "name": "La Dame de Canton"
  }
},
{
  "type": "node",
  "id": 252816971,
  "lat": 48.8278970,
  "lon": 2.3505521,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Temps des Cerises"
  }
},
{
  "type": "node",
  "id": 252851134,
  "lat": 48.8349997,
  "lon": 2.3270026,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "58",
    "addr:postcode": "75014",
    "addr:street": "Rue Daguerre",
    "amenity": "restaurant",
    "name": "Zango",
    "phone": "+33 1 43 20 21 59",
    "website": "http://www.zango.fr"
  }
},
{
  "type": "node",
  "id": 252851135,
  "lat": 48.8332286,
  "lon": 2.3157120,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "vegetarian",
    "diet:vegetarian": "only",
    "name": "Aquarius"
  }
},
{
  "type": "node",
  "id": 252851144,
  "lat": 48.8234665,
  "lon": 2.3685489,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese;vegetarian",
    "name": "Green Garden"
  }
},
{
  "type": "node",
  "id": 252862643,
  "lat": 48.8413291,
  "lon": 2.2990993,
  "tags": {
    "amenity": "restaurant",
    "created_by": "Potlatch 0.10e",
    "name": "Le Pétel"
  }
},
{
  "type": "node",
  "id": 252862944,
  "lat": 48.8408025,
  "lon": 2.2883022,
  "tags": {
    "amenity": "restaurant",
    "name": "Café Zinc-Zen",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 252874745,
  "lat": 48.8581641,
  "lon": 2.2723388,
  "tags": {
    "addr:housenumber": "19",
    "addr:street": "Chaussée de la Muette",
    "amenity": "restaurant",
    "name": "La Gare Chaussée De La Muette",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 252958952,
  "lat": 48.8646895,
  "lon": 2.2880988,
  "tags": {
    "amenity": "restaurant",
    "microbrewery": "yes",
    "name": "Frog XVI"
  }
},
{
  "type": "node",
  "id": 252961401,
  "lat": 48.8802602,
  "lon": 2.2852551,
  "tags": {
    "amenity": "pub",
    "email": "jamesjoyceparis@hotmail.com",
    "name": "James Joyce",
    "operator": "Kitty O\'Shea\'s",
    "phone": "+33 (1) 44097032",
    "smoking": "no",
    "website": "http://www.kittyosheas.com/james_joyce_paris.asp",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 253007445,
  "lat": 48.8869322,
  "lon": 2.3399586,
  "tags": {
    "amenity": "restaurant",
    "name": "La Petaudiere"
  }
},
{
  "type": "node",
  "id": 253041365,
  "lat": 48.8847049,
  "lon": 2.3404648,
  "tags": {
    "amenity": "restaurant",
    "name": "Au Grain de Folie"
  }
},
{
  "type": "node",
  "id": 253977711,
  "lat": 48.8654581,
  "lon": 2.3446776,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Tambour"
  }
},
{
  "type": "node",
  "id": 254005128,
  "lat": 48.8615333,
  "lon": 2.3574473,
  "tags": {
    "amenity": "pub",
    "name": "The Quiet Man"
  }
},
{
  "type": "node",
  "id": 254055842,
  "lat": 48.8596461,
  "lon": 2.3534386,
  "tags": {
    "amenity": "restaurant",
    "name": "Ciao"
  }
},
{
  "type": "node",
  "id": 254185343,
  "lat": 48.8470403,
  "lon": 2.3693549,
  "tags": {
    "amenity": "cafe",
    "brewery": "Grimbergen;Paulaner",
    "name": "Le café populaire",
    "opening_hours": "Mo-Sa 07:00-23:00"
  }
},
{
  "type": "node",
  "id": 254278113,
  "lat": 48.8523143,
  "lon": 2.3350471,
  "tags": {
    "addr:housenumber": "8",
    "addr:street": "Rue Mabillon",
    "amenity": "restaurant",
    "name": "La Petite Cour",
    "opening_hours": "Mo-Fr 12:00-23:00;Sa 19:00-23:00",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 254493346,
  "lat": 48.8752991,
  "lon": 2.3107995,
  "tags": {
    "amenity": "restaurant",
    "name": "Café Jacquemart-André",
    "opening_hours": "Mo-Fr 11:45-17:30; Sa-Su 11:00-17:30 \"lors des nocturnes, lundis et samedis jusqu\'à 19h, dernière admission 18h30\"",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 254494167,
  "lat": 48.8606089,
  "lon": 2.3006648,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Clos des Gourmets"
  }
},
{
  "type": "node",
  "id": 254494168,
  "lat": 48.8516415,
  "lon": 2.3185465,
  "tags": {
    "amenity": "restaurant",
    "name": "Au Pied de Fouet"
  }
},
{
  "type": "node",
  "id": 254495985,
  "lat": 48.8481400,
  "lon": 2.3189743,
  "tags": {
    "amenity": "restaurant",
    "name": "Chez Germaine"
  }
},
{
  "type": "node",
  "id": 254497766,
  "lat": 48.8604171,
  "lon": 2.3059560,
  "tags": {
    "amenity": "restaurant",
    "name": "Chez l\'Ami Jean"
  }
},
{
  "type": "node",
  "id": 254499204,
  "lat": 48.8537038,
  "lon": 2.3235630,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Petit Tibéro"
  }
},
{
  "type": "node",
  "id": 255038749,
  "lat": 48.8449146,
  "lon": 2.3734371,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "heritage": "2",
    "heritage:operator": "mhs",
    "layer": "1",
    "mhs:inscription_date": "1972/09/28",
    "name": "Le Train bleu",
    "ref:mhs": "PA00086570",
    "website": "http://www.le-train-bleu.com/",
    "wheelchair": "limited",
    "wikipedia": "fr:Le Train bleu (restaurant)"
  }
},
{
  "type": "node",
  "id": 255060753,
  "lat": 48.8584187,
  "lon": 2.2875657,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'Astrance"
  }
},
{
  "type": "node",
  "id": 256931651,
  "lat": 48.8523799,
  "lon": 2.4036853,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Yotaro sushi"
  }
},
{
  "type": "node",
  "id": 257088173,
  "lat": 48.8514780,
  "lon": 2.3379065,
  "tags": {
    "amenity": "pub",
    "name": "Fubar"
  }
},
{
  "type": "node",
  "id": 257540843,
  "lat": 48.8795968,
  "lon": 2.3519355,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'ardoise gourmande"
  }
},
{
  "type": "node",
  "id": 259546846,
  "lat": 48.8416654,
  "lon": 2.3032066,
  "tags": {
    "amenity": "cafe",
    "created_by": "Potlatch 0.8b",
    "name": "Le Général Beuret"
  }
},
{
  "type": "node",
  "id": 259547049,
  "lat": 48.8420231,
  "lon": 2.3029260,
  "tags": {
    "amenity": "cafe",
    "name": "L\'Angle"
  }
},
{
  "type": "node",
  "id": 259856251,
  "lat": 48.8428872,
  "lon": 2.3031638,
  "tags": {
    "amenity": "cafe",
    "created_by": "Potlatch 0.8b",
    "name": "Les artisans",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 259962770,
  "lat": 48.8544589,
  "lon": 2.4006544,
  "tags": {
    "amenity": "restaurant",
    "name": "Le 20e art"
  }
},
{
  "type": "node",
  "id": 260016917,
  "lat": 48.8425186,
  "lon": 2.3236239,
  "tags": {
    "amenity": "pub",
    "name": "The Financier",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 260282170,
  "lat": 48.8234020,
  "lon": 2.2678669,
  "tags": {
    "addr:housename": "Casa Mario",
    "addr:housenumber": "104",
    "addr:postcode": "92130",
    "addr:street": "boulevard Galliéni",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Casa Mario",
    "website": "http://www.linternaute.com/restaurant/restaurant/23185/casa-mario.shtml"
  }
},
{
  "type": "node",
  "id": 260743744,
  "lat": 48.8475463,
  "lon": 2.3713427,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "couscous",
    "name": "Chez Léon"
  }
},
{
  "type": "node",
  "id": 262934233,
  "lat": 48.8492048,
  "lon": 2.3556646,
  "tags": {
    "amenity": "cafe",
    "name": "L\'Institut",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 266630531,
  "lat": 48.8457331,
  "lon": 2.3099256,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 266632049,
  "lat": 48.8517950,
  "lon": 2.3250816,
  "tags": {
    "amenity": "cafe",
    "name": "Le Babylone"
  }
},
{
  "type": "node",
  "id": 268057538,
  "lat": 48.8449916,
  "lon": 2.3240393,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Petit Littré"
  }
},
{
  "type": "node",
  "id": 268058006,
  "lat": 48.8460429,
  "lon": 2.3238386,
  "tags": {
    "amenity": "pub",
    "name": "Forum Café"
  }
},
{
  "type": "node",
  "id": 269242525,
  "lat": 48.8395978,
  "lon": 2.2669106,
  "tags": {
    "amenity": "restaurant",
    "name": "Gildas Delamer"
  }
},
{
  "type": "node",
  "id": 270365679,
  "lat": 48.8192239,
  "lon": 2.2594488,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian"
  }
},
{
  "type": "node",
  "id": 270707706,
  "lat": 48.8220099,
  "lon": 2.2706915,
  "tags": {
    "amenity": "restaurant",
    "created_by": "Potlatch 0.9c"
  }
},
{
  "type": "node",
  "id": 274244598,
  "lat": 48.8274124,
  "lon": 2.3148434,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Suraj"
  }
},
{
  "type": "node",
  "id": 274244870,
  "lat": 48.8524729,
  "lon": 2.3738150,
  "tags": {
    "amenity": "cafe",
    "name": "Café du Passage"
  }
},
{
  "type": "node",
  "id": 274244871,
  "lat": 48.8673444,
  "lon": 2.3739608,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'Ancienne Menuiserie"
  }
},
{
  "type": "node",
  "id": 274245832,
  "lat": 48.8672350,
  "lon": 2.3692879,
  "tags": {
    "amenity": "pub",
    "name": "Ô Chateau, Paris Wine Tasting"
  }
},
{
  "type": "node",
  "id": 274246816,
  "lat": 48.8950594,
  "lon": 2.3406703,
  "tags": {
    "amenity": "cafe",
    "created_by": "JOSM",
    "name": "Truc Café"
  }
},
{
  "type": "node",
  "id": 274247409,
  "lat": 48.8826925,
  "lon": 2.3828693,
  "tags": {
    "amenity": "bar",
    "name": "Kaskad\' Café"
  }
},
{
  "type": "node",
  "id": 274248904,
  "lat": 48.8662404,
  "lon": 2.3855356,
  "tags": {
    "amenity": "bar",
    "name": "Lou Pascalou"
  }
},
{
  "type": "node",
  "id": 274249281,
  "lat": 48.8631427,
  "lon": 2.3877152,
  "tags": {
    "amenity": "restaurant",
    "name": "Aux Becs Fins"
  }
},
{
  "type": "node",
  "id": 274250572,
  "lat": 48.8570811,
  "lon": 2.3559832,
  "tags": {
    "addr:housenumber": "12",
    "addr:street": "Rue du Bourg Tibourg",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Coude Fou",
    "phone": "01 42 77 15 16",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 274256549,
  "lat": 48.8588049,
  "lon": 2.3266129,
  "tags": {
    "FIXME": "deux café avec le même nom ?",
    "amenity": "restaurant",
    "name": "Le Cafe des Lettres"
  }
},
{
  "type": "node",
  "id": 274259074,
  "lat": 48.8694500,
  "lon": 2.3047988,
  "tags": {
    "amenity": "restaurant",
    "name": "Korova"
  }
},
{
  "type": "node",
  "id": 275590939,
  "lat": 48.8334988,
  "lon": 2.3198962,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "8",
    "addr:postcode": "75014",
    "addr:street": "Rue Sainte-Léonie",
    "amenity": "restaurant",
    "name": "Le Moulin à Café",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 276661273,
  "lat": 48.8527753,
  "lon": 2.4059315,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Muguet",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 276662032,
  "lat": 48.8551966,
  "lon": 2.4016334,
  "tags": {
    "amenity": "restaurant",
    "name": "La Vierge de la Réunion"
  }
},
{
  "type": "node",
  "id": 276662465,
  "lat": 48.8540343,
  "lon": 2.4058858,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Sohna Punjab"
  }
},
{
  "type": "node",
  "id": 276918983,
  "lat": 48.8373556,
  "lon": 2.2574212,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Cardinal",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 276919024,
  "lat": 48.8378434,
  "lon": 2.2578634,
  "tags": {
    "amenity": "restaurant",
    "name": "Les Fontaines"
  }
},
{
  "type": "node",
  "id": 276919076,
  "lat": 48.8381218,
  "lon": 2.2586505,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Vélodrome",
    "tourism": "hotel"
  }
},
{
  "type": "node",
  "id": 282468472,
  "lat": 48.8652332,
  "lon": 2.3505855,
  "tags": {
    "amenity": "bar",
    "name": "La Cordonnerie"
  }
},
{
  "type": "node",
  "id": 282490354,
  "lat": 48.8761301,
  "lon": 2.3377037,
  "tags": {
    "amenity": "pub",
    "name": "Le Syphax",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 282763288,
  "lat": 48.8488333,
  "lon": 2.3253506,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Nemrod"
  }
},
{
  "type": "node",
  "id": 283347802,
  "lat": 48.8647212,
  "lon": 2.3469127,
  "tags": {
    "amenity": "restaurant",
    "name": "La Grille Montorgueil"
  }
},
{
  "type": "node",
  "id": 283348172,
  "lat": 48.8693629,
  "lon": 2.3549762,
  "tags": {
    "addr:country": "FR",
    "addr:housename": "Hippopotamus",
    "addr:housenumber": "8",
    "addr:postcode": "75010",
    "addr:street": "Boulevard Saint-Denis",
    "amenity": "restaurant",
    "cuisine": "grill",
    "microbrewery": "yes",
    "name": "Hippopotamus",
    "opening_hours": "Su-Th 11:45-00:30;Fr-Sa 11:45-01:00",
    "operator": "Hippopotamus",
    "phone": "+33153388028",
    "website": "http://www.hippopotamus.fr/resto/paris-10e-saint-martin-12534470019128.html"
  }
},
{
  "type": "node",
  "id": 283348230,
  "lat": 48.8692952,
  "lon": 2.3553367,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Plomb du Cantal"
  }
},
{
  "type": "node",
  "id": 286646627,
  "lat": 48.8461967,
  "lon": 2.3783357,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'Arrosoir"
  }
},
{
  "type": "node",
  "id": 286696608,
  "lat": 48.8657442,
  "lon": 2.3458247,
  "tags": {
    "amenity": "cafe",
    "name": "Pouchla",
    "phone": "+33-1-40264075"
  }
},
{
  "type": "node",
  "id": 286696657,
  "lat": 48.8658103,
  "lon": 2.3452891,
  "tags": {
    "amenity": "restaurant",
    "name": "Gedoub"
  }
},
{
  "type": "node",
  "id": 289424837,
  "lat": 48.8588835,
  "lon": 2.3307705,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Voltaire"
  }
},
{
  "type": "node",
  "id": 289437629,
  "lat": 48.8697776,
  "lon": 2.3105917,
  "tags": {
    "amenity": "restaurant",
    "name": "Kokohana"
  }
},
{
  "type": "node",
  "id": 289438236,
  "lat": 48.8722601,
  "lon": 2.3035046,
  "tags": {
    "amenity": "restaurant",
    "name": "La Table du Lancaster"
  }
},
{
  "type": "node",
  "id": 289439792,
  "lat": 48.8686679,
  "lon": 2.3066263,
  "tags": {
    "amenity": "restaurant",
    "name": "Spoon"
  }
},
{
  "type": "node",
  "id": 293982722,
  "lat": 48.8672098,
  "lon": 2.3654644,
  "tags": {
    "amenity": "restaurant",
    "name": "10 de la République"
  }
},
{
  "type": "node",
  "id": 293982723,
  "lat": 48.8667808,
  "lon": 2.3656961,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "belgian",
    "name": "Léon de Bruxelles",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 293982735,
  "lat": 48.8666591,
  "lon": 2.3656152,
  "tags": {
    "alt_name": "Les Relais d\'Alsace",
    "amenity": "cafe",
    "name": "Taverne Karlsbrau",
    "old_name": "Taverne de Maître Kanter",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 293982742,
  "lat": 48.8667250,
  "lon": 2.3639036,
  "tags": {
    "amenity": "cafe",
    "internet_access": "yes",
    "name": "Cafe République",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 293982744,
  "lat": 48.8684771,
  "lon": 2.3626799,
  "tags": {
    "amenity": "restaurant",
    "name": "Au Soleil Levant"
  }
},
{
  "type": "node",
  "id": 293982745,
  "lat": 48.8666678,
  "lon": 2.3662969,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Akira"
  }
},
{
  "type": "node",
  "id": 293986491,
  "lat": 48.8665492,
  "lon": 2.3669492,
  "tags": {
    "amenity": "cafe",
    "name": "Toucan Cafe"
  }
},
{
  "type": "node",
  "id": 293986493,
  "lat": 48.8663657,
  "lon": 2.3679856,
  "tags": {
    "addr:housenumber": "14",
    "addr:street": "Rue Rampon",
    "amenity": "restaurant",
    "cuisine": "korean",
    "name": "Ossek Garden",
    "opening_hours": "Tu-Su 12:00-22:30",
    "phone": "01 48 07 16 35",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://www.ossekgarden.fr/"
  }
},
{
  "type": "node",
  "id": 293986511,
  "lat": 48.8658039,
  "lon": 2.3707172,
  "tags": {
    "amenity": "restaurant",
    "name": "Folie\'s"
  }
},
{
  "type": "node",
  "id": 293986512,
  "lat": 48.8657085,
  "lon": 2.3712657,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "mexican",
    "name": "Arriba"
  }
},
{
  "type": "node",
  "id": 293986519,
  "lat": 48.8655987,
  "lon": 2.3744866,
  "tags": {
    "amenity": "restaurant",
    "name": "Plein Soleil"
  }
},
{
  "type": "node",
  "id": 293986547,
  "lat": 48.8630511,
  "lon": 2.3852954,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Saveur République"
  }
},
{
  "type": "node",
  "id": 293986548,
  "lat": 48.8632411,
  "lon": 2.3861008,
  "tags": {
    "amenity": "pub",
    "name": "Le Bistro Voltaire"
  }
},
{
  "type": "node",
  "id": 293986566,
  "lat": 48.8626607,
  "lon": 2.3872306,
  "tags": {
    "amenity": "pub",
    "name": "Au Rond Point"
  }
},
{
  "type": "node",
  "id": 294038630,
  "lat": 48.8786773,
  "lon": 2.3755952,
  "tags": {
    "amenity": "cafe",
    "name": "Le Murger"
  }
},
{
  "type": "node",
  "id": 294038638,
  "lat": 48.8779867,
  "lon": 2.3739646,
  "tags": {
    "amenity": "bar",
    "name": "Le Navigateur"
  }
},
{
  "type": "node",
  "id": 294038641,
  "lat": 48.8782398,
  "lon": 2.3737861,
  "tags": {
    "amenity": "cafe",
    "name": "La Forge",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 294039723,
  "lat": 48.8781543,
  "lon": 2.3710006,
  "tags": {
    "amenity": "cafe",
    "name": "Café des Dames"
  }
},
{
  "type": "node",
  "id": 294141121,
  "lat": 48.8741020,
  "lon": 2.3753013,
  "tags": {
    "amenity": "cafe",
    "name": "Café Chéri(e)"
  }
},
{
  "type": "node",
  "id": 294144941,
  "lat": 48.8811959,
  "lon": 2.3730150,
  "tags": {
    "amenity": "cafe",
    "name": "Le Dauphin"
  }
},
{
  "type": "node",
  "id": 294162567,
  "lat": 48.8783411,
  "lon": 2.3725952,
  "tags": {
    "amenity": "cafe",
    "name": "Les Frangins",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 294164285,
  "lat": 48.8780431,
  "lon": 2.3720976,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian;arab",
    "name": "Au Méditerranéen",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 294266518,
  "lat": 48.8838984,
  "lon": 2.3707556,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "10",
    "addr:postcode": "75019",
    "addr:street": "Place de la Bataille de Stalingrad",
    "amenity": "bar",
    "layer": "0",
    "name": "25° Est"
  }
},
{
  "type": "node",
  "id": 294266520,
  "lat": 48.8841289,
  "lon": 2.3719174,
  "tags": {
    "amenity": "cafe",
    "name": "M\'Café"
  }
},
{
  "type": "node",
  "id": 298337368,
  "lat": 48.8272454,
  "lon": 2.2794265,
  "tags": {
    "amenity": "cafe",
    "name": "Café Français"
  }
},
{
  "type": "node",
  "id": 299728241,
  "lat": 48.8721672,
  "lon": 2.3266440,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Roi du Pot-au-Feu"
  }
},
{
  "type": "node",
  "id": 299728776,
  "lat": 48.8360044,
  "lon": 2.3574926,
  "tags": {
    "amenity": "restaurant",
    "name": "Au Banquier",
    "phone": "+33 1 43 36 73 46",
    "website": "http://aubanquier.com/"
  }
},
{
  "type": "node",
  "id": 299729051,
  "lat": 48.8237611,
  "lon": 2.3626525,
  "tags": {
    "amenity": "restaurant",
    "name": "Sala Thaï"
  }
},
{
  "type": "node",
  "id": 301758018,
  "lat": 48.8240229,
  "lon": 2.2726432,
  "tags": {
    "amenity": "cafe",
    "name": "Comptoir d\'Issy"
  }
},
{
  "type": "node",
  "id": 301758053,
  "lat": 48.8239167,
  "lon": 2.2730112,
  "tags": {
    "amenity": "cafe",
    "name": "Les Colonnes"
  }
},
{
  "type": "node",
  "id": 302245461,
  "lat": 48.8884003,
  "lon": 2.3790168,
  "tags": {
    "amenity": "pub",
    "created_by": "Potlatch 0.10c",
    "name": "Belushi\'s"
  }
},
{
  "type": "node",
  "id": 304964734,
  "lat": 48.8456068,
  "lon": 2.3428904,
  "tags": {
    "amenity": "pub",
    "name": "La Fonda"
  }
},
{
  "type": "node",
  "id": 304964735,
  "lat": 48.8477733,
  "lon": 2.3484340,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'Étoile du Berger"
  }
},
{
  "type": "node",
  "id": 304964873,
  "lat": 48.8415272,
  "lon": 2.3511512,
  "tags": {
    "amenity": "restaurant",
    "name": "Invitez vous chez nous"
  }
},
{
  "type": "node",
  "id": 304964997,
  "lat": 48.8718873,
  "lon": 2.3570864,
  "tags": {
    "amenity": "restaurant",
    "name": "La Petite Louise"
  }
},
{
  "type": "node",
  "id": 304965514,
  "lat": 48.8288139,
  "lon": 2.3506397,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Chez Gladines"
  }
},
{
  "type": "node",
  "id": 305903403,
  "lat": 48.8845714,
  "lon": 2.3233053,
  "tags": {
    "amenity": "restaurant",
    "name": "La Gaieté Cosaque"
  }
},
{
  "type": "node",
  "id": 305903404,
  "lat": 48.8844355,
  "lon": 2.3243334,
  "tags": {
    "amenity": "restaurant",
    "name": "Jaipur"
  }
},
{
  "type": "node",
  "id": 305903405,
  "lat": 48.8851560,
  "lon": 2.3252063,
  "tags": {
    "amenity": "pub",
    "brewery": "guinness",
    "brewery:note": "Grolsch",
    "created_by": "JOSM",
    "internet_access": "no",
    "name": "Lush"
  }
},
{
  "type": "node",
  "id": 305903406,
  "lat": 48.8867718,
  "lon": 2.3236539,
  "tags": {
    "amenity": "restaurant",
    "created_by": "Potlatch 0.10f",
    "name": "Le Réfuge"
  }
},
{
  "type": "node",
  "id": 305903407,
  "lat": 48.8881063,
  "lon": 2.3213938,
  "tags": {
    "amenity": "cafe",
    "created_by": "JOSM",
    "name": "Sans Gêne"
  }
},
{
  "type": "node",
  "id": 305903408,
  "lat": 48.8925878,
  "lon": 2.3271309,
  "tags": {
    "amenity": "pub",
    "created_by": "JOSM",
    "name": "Le Bar Belge"
  }
},
{
  "type": "node",
  "id": 305903409,
  "lat": 48.8847610,
  "lon": 2.3245933,
  "tags": {
    "amenity": "bar",
    "bar": "wine_bar",
    "name": "Les Caves Populaires"
  }
},
{
  "type": "node",
  "id": 305905950,
  "lat": 48.8884368,
  "lon": 2.3207195,
  "tags": {
    "amenity": "restaurant",
    "created_by": "JOSM",
    "name": "Le Bistral"
  }
},
{
  "type": "node",
  "id": 305905951,
  "lat": 48.8886141,
  "lon": 2.3198123,
  "tags": {
    "amenity": "restaurant",
    "created_by": "JOSM",
    "name": "L\'Abadache"
  }
},
{
  "type": "node",
  "id": 305906745,
  "lat": 48.8891033,
  "lon": 2.3164088,
  "tags": {
    "amenity": "restaurant",
    "created_by": "JOSM",
    "name": "Aux Couleurs du Monde"
  }
},
{
  "type": "node",
  "id": 305907907,
  "lat": 48.8927736,
  "lon": 2.3257770,
  "tags": {
    "amenity": "cafe",
    "created_by": "JOSM",
    "name": "Le Kloog"
  }
},
{
  "type": "node",
  "id": 305949888,
  "lat": 48.8879876,
  "lon": 2.3341073,
  "tags": {
    "amenity": "restaurant",
    "created_by": "JOSM",
    "name": "Just BE"
  }
},
{
  "type": "node",
  "id": 305951215,
  "lat": 48.8940712,
  "lon": 2.3342515,
  "tags": {
    "amenity": "restaurant",
    "name": "Nawab"
  }
},
{
  "type": "node",
  "id": 306154194,
  "lat": 48.8886186,
  "lon": 2.3167009,
  "tags": {
    "amenity": "restaurant",
    "created_by": "JOSM",
    "name": "O Batignolles"
  }
},
{
  "type": "node",
  "id": 306154412,
  "lat": 48.8835953,
  "lon": 2.3233585,
  "tags": {
    "amenity": "restaurant",
    "name": "Niv\'s"
  }
},
{
  "type": "node",
  "id": 306156749,
  "lat": 48.8492934,
  "lon": 2.3349249,
  "tags": {
    "amenity": "restaurant",
    "name": "La Cuisine de Philippe"
  }
},
{
  "type": "node",
  "id": 306911840,
  "lat": 48.8414290,
  "lon": 2.2990451,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Matsuyama",
    "phone": "+33 1 45 32 96 88",
    "source": "survey; http://matsuyama.fr/;",
    "website": "http://matsuyama.fr/"
  }
},
{
  "type": "node",
  "id": 308002935,
  "lat": 48.8517156,
  "lon": 2.3336409,
  "tags": {
    "amenity": "restaurant",
    "name": "Santa Lucia",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 308007224,
  "lat": 48.8858410,
  "lon": 2.3405929,
  "tags": {
    "amenity": "restaurant",
    "name": "La Taverne de Montmartre"
  }
},
{
  "type": "node",
  "id": 308007587,
  "lat": 48.8891314,
  "lon": 2.3403708,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Refuge des Fondues"
  }
},
{
  "type": "node",
  "id": 308015251,
  "lat": 48.8717809,
  "lon": 2.3937884,
  "tags": {
    "amenity": "pub",
    "name": "Les Trois Arts"
  }
},
{
  "type": "node",
  "id": 308016200,
  "lat": 48.8876134,
  "lon": 2.3796187,
  "tags": {
    "amenity": "cafe",
    "name": "Cafezoïde"
  }
},
{
  "type": "node",
  "id": 308204330,
  "lat": 48.8595367,
  "lon": 2.4030888,
  "tags": {
    "amenity": "bar",
    "name": "Le Gambetta"
  }
},
{
  "type": "node",
  "id": 308204332,
  "lat": 48.8600086,
  "lon": 2.4039364,
  "tags": {
    "amenity": "cafe",
    "name": "Jawad K-Fé"
  }
},
{
  "type": "node",
  "id": 308204333,
  "lat": 48.8566933,
  "lon": 2.4002542,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Lion Indomptable"
  }
},
{
  "type": "node",
  "id": 308223757,
  "lat": 48.8188844,
  "lon": 2.3237502,
  "tags": {
    "addr:postcode": "92120",
    "addr:street": "Rue Théophile Gautier",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Pasta Romana"
  }
},
{
  "type": "node",
  "id": 308684349,
  "lat": 48.8609068,
  "lon": 2.3015143,
  "tags": {
    "amenity": "cafe",
    "name": "Café de l\'Alma"
  }
},
{
  "type": "node",
  "id": 309974648,
  "lat": 48.8894505,
  "lon": 2.3261093,
  "tags": {
    "amenity": "cafe",
    "name": "Le Diplomate",
    "shop": "tobacco"
  }
},
{
  "type": "node",
  "id": 310044921,
  "lat": 48.8371168,
  "lon": 2.2964765,
  "tags": {
    "amenity": "cafe",
    "name": "Café Convention",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 310045242,
  "lat": 48.8372174,
  "lon": 2.2960710,
  "tags": {
    "amenity": "cafe",
    "name": "Dupont café",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 310363590,
  "lat": 48.8456039,
  "lon": 2.3547969,
  "tags": {
    "amenity": "pub",
    "brewery": "chouffe",
    "name": "Epsilon"
  }
},
{
  "type": "node",
  "id": 310363627,
  "lat": 48.8453724,
  "lon": 2.3548312,
  "tags": {
    "amenity": "pub",
    "name": "L\'Inévitable"
  }
},
{
  "type": "node",
  "id": 315759767,
  "lat": 48.8455384,
  "lon": 2.3288228,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "international",
    "name": "Ikra"
  }
},
{
  "type": "node",
  "id": 315762677,
  "lat": 48.8536478,
  "lon": 2.3380576,
  "tags": {
    "amenity": "cafe",
    "name": "Les Étages"
  }
},
{
  "type": "node",
  "id": 315765492,
  "lat": 48.8300247,
  "lon": 2.3311059,
  "tags": {
    "amenity": "cafe",
    "name": "Le Godet d\'Or",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 315769031,
  "lat": 48.8519626,
  "lon": 2.3388319,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Comptoir"
  }
},
{
  "type": "node",
  "id": 315769032,
  "lat": 48.8526502,
  "lon": 2.3390840,
  "tags": {
    "amenity": "cafe",
    "name": "Relais Odéon"
  }
},
{
  "type": "node",
  "id": 315769033,
  "lat": 48.8536059,
  "lon": 2.3382770,
  "tags": {
    "amenity": "cafe",
    "name": "Café Conti"
  }
},
{
  "type": "node",
  "id": 315769034,
  "lat": 48.8538386,
  "lon": 2.3384740,
  "tags": {
    "amenity": "cafe",
    "name": "Le Buci"
  }
},
{
  "type": "node",
  "id": 315769035,
  "lat": 48.8539544,
  "lon": 2.3370609,
  "tags": {
    "amenity": "cafe",
    "name": "Bar du Marché"
  }
},
{
  "type": "node",
  "id": 315769036,
  "lat": 48.8533551,
  "lon": 2.3356842,
  "tags": {
    "amenity": "cafe",
    "name": "Café Mabillon"
  }
},
{
  "type": "node",
  "id": 315780109,
  "lat": 48.8300409,
  "lon": 2.3310810,
  "tags": {
    "amenity": "restaurant",
    "name": "Les Sourires de Dante",
    "shop": "bakery",
    "wheelchair": "limited",
    "wheelchair:description": "One little step"
  }
},
{
  "type": "node",
  "id": 315785934,
  "lat": 48.8415160,
  "lon": 2.3436441,
  "tags": {
    "amenity": "cafe",
    "name": "Pub Gay-Lussac"
  }
},
{
  "type": "node",
  "id": 315786707,
  "lat": 48.8445750,
  "lon": 2.3454978,
  "tags": {
    "amenity": "cafe",
    "name": "Le Panthéon",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 316799031,
  "lat": 48.8776115,
  "lon": 2.2679599,
  "tags": {
    "amenity": "restaurant",
    "name": "Côté Jardin"
  }
},
{
  "type": "node",
  "id": 319152464,
  "lat": 48.8374507,
  "lon": 2.3523064,
  "tags": {
    "amenity": "restaurant",
    "name": "Ethik à Table"
  }
},
{
  "type": "node",
  "id": 319695790,
  "lat": 48.8324164,
  "lon": 2.3712490,
  "tags": {
    "amenity": "pub",
    "name": "Shannon River"
  }
},
{
  "type": "node",
  "id": 319887142,
  "lat": 48.8267157,
  "lon": 2.2565570,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 320952623,
  "lat": 48.8497377,
  "lon": 2.3428278,
  "tags": {
    "amenity": "cafe",
    "name": "Le Reflet"
  }
},
{
  "type": "node",
  "id": 321009710,
  "lat": 48.8566990,
  "lon": 2.3570528,
  "tags": {
    "amenity": "cafe",
    "name": "Le Pick Clops"
  }
},
{
  "type": "node",
  "id": 321010212,
  "lat": 48.8569081,
  "lon": 2.3579840,
  "tags": {
    "amenity": "cafe",
    "name": "Café du Trésor"
  }
},
{
  "type": "node",
  "id": 321248294,
  "lat": 48.8333114,
  "lon": 2.3539298,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 321256189,
  "lat": 48.8336129,
  "lon": 2.3544305,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 321921088,
  "lat": 48.8334069,
  "lon": 2.3555105,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "Vietnamese",
    "name": "Van An"
  }
},
{
  "type": "node",
  "id": 321925868,
  "lat": 48.8890302,
  "lon": 2.2537529,
  "tags": {
    "amenity": "cafe",
    "created_by": "Merkaartor 0.12"
  }
},
{
  "type": "node",
  "id": 321932192,
  "lat": 48.8522066,
  "lon": 2.3483892,
  "tags": {
    "amenity": "cafe",
    "created_by": "iLOE 1.9",
    "name": "Café Panis",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 322093112,
  "lat": 48.8457083,
  "lon": 2.3191961,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "internet_access": "wlan",
    "name": "Le Chien qui fume",
    "outdoor_seating": "yes",
    "smoking": "outside",
    "takeaway": "no"
  }
},
{
  "type": "node",
  "id": 322681096,
  "lat": 48.8544496,
  "lon": 2.3557731,
  "tags": {
    "amenity": "cafe",
    "cuisine": "coffee_shop",
    "name": "Caféothèque de Paris",
    "website": "http://www.lacafeotheque.com/"
  }
},
{
  "type": "node",
  "id": 322683091,
  "lat": 48.8523526,
  "lon": 2.3444419,
  "tags": {
    "addr:street": "Rue de la Harpe",
    "amenity": "restaurant",
    "name": "Chez Ernest"
  }
},
{
  "type": "node",
  "id": 322684264,
  "lat": 48.8568120,
  "lon": 2.3062305,
  "tags": {
    "amenity": "restaurant",
    "name": "Tribeca"
  }
},
{
  "type": "node",
  "id": 322800554,
  "lat": 48.8537402,
  "lon": 2.4056302,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Le jardin d\'or"
  }
},
{
  "type": "node",
  "id": 322801983,
  "lat": 48.8538057,
  "lon": 2.4056125,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Montana"
  }
},
{
  "type": "node",
  "id": 322807427,
  "lat": 48.8484568,
  "lon": 2.3995601,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "1",
    "addr:postcode": "75020",
    "addr:street": "Cours de Vincennes",
    "amenity": "restaurant",
    "brewery": "Leffe;1664;Hoegaarden",
    "name": "Le Terminus Nation",
    "opening_hours": "Mo-Sa 07:00-21:00",
    "smoking": "outside",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 322807635,
  "lat": 48.8478160,
  "lon": 2.3975417,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "2",
    "addr:postcode": "75012",
    "addr:street": "Avenue du Trône",
    "amenity": "restaurant",
    "brewery": "Kronenbourg;Carlsberg;1664;Grimbergen;Grimbergen_blanche;Leffe;Desperados;Wel_Scotch",
    "name": "Le Dalou",
    "opening_hours": "Mo-Sa 00:00-03:00,05:00-24:00; Su 00:00-24:00",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 323062127,
  "lat": 48.8540277,
  "lon": 2.3358692,
  "tags": {
    "amenity": "restaurant",
    "name": "Guen Maï"
  }
},
{
  "type": "node",
  "id": 324192389,
  "lat": 48.8828817,
  "lon": 2.3596543,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian",
    "diet:vegetarian": "yes",
    "name": "Khrishna-bhavan"
  }
},
{
  "type": "node",
  "id": 324311338,
  "lat": 48.8641353,
  "lon": 2.3676323,
  "tags": {
    "amenity": "restaurant",
    "name": "Gemi\'s"
  }
},
{
  "type": "node",
  "id": 324435720,
  "lat": 48.8682344,
  "lon": 2.3721212,
  "tags": {
    "amenity": "cafe",
    "name": "La Fauvette"
  }
},
{
  "type": "node",
  "id": 327266211,
  "lat": 48.8538078,
  "lon": 2.3277103,
  "tags": {
    "amenity": "cafe",
    "brewery": "kronenbourg;grimbergen",
    "internet_access": "wlan",
    "name": "Le Basile"
  }
},
{
  "type": "node",
  "id": 327508316,
  "lat": 48.8573363,
  "lon": 2.3574834,
  "tags": {
    "addr:housenumber": "28",
    "addr:street": "Rue Vieille du Temple",
    "amenity": "cafe",
    "cuisine": "french",
    "name": "Les Philosophes",
    "opening_hours": "Mo-Sa 9:00-2:00",
    "phone": "01 48 87 49 64",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 327508697,
  "lat": 48.8575522,
  "lon": 2.3577300,
  "tags": {
    "amenity": "cafe",
    "name": "L\'Etoile Manquante"
  }
},
{
  "type": "node",
  "id": 327523140,
  "lat": 48.8534187,
  "lon": 2.3767493,
  "tags": {
    "amenity": "cafe",
    "name": "Le Pause Café",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 329135152,
  "lat": 48.8522503,
  "lon": 2.3344195,
  "tags": {
    "amenity": "pub",
    "cuisine": "irish",
    "name": "Little Temple Bar",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 329423314,
  "lat": 48.8743115,
  "lon": 2.3756487,
  "tags": {
    "amenity": "restaurant",
    "name": "Aux Bons Amis"
  }
},
{
  "type": "node",
  "id": 329976648,
  "lat": 48.8539901,
  "lon": 2.3267207,
  "tags": {
    "amenity": "pub",
    "name": "L\'Abbaye"
  }
},
{
  "type": "node",
  "id": 330413545,
  "lat": 48.8404976,
  "lon": 2.3244044,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Tournesol"
  }
},
{
  "type": "node",
  "id": 332086570,
  "lat": 48.8659368,
  "lon": 2.3775981,
  "tags": {
    "amenity": "cafe",
    "name": "Place Verte"
  }
},
{
  "type": "node",
  "id": 332431639,
  "lat": 48.8882137,
  "lon": 2.3785003,
  "tags": {
    "amenity": "restaurant",
    "name": "La Criée",
    "source": "survey 2013",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 333550932,
  "lat": 48.8723344,
  "lon": 2.3492288,
  "tags": {
    "amenity": "restaurant",
    "name": "La Chandelle Verte"
  }
},
{
  "type": "node",
  "id": 335692368,
  "lat": 48.8491586,
  "lon": 2.2872491,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Théatre",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre ; mise à jour : 2007"
  }
},
{
  "type": "node",
  "id": 358390937,
  "lat": 48.8472243,
  "lon": 2.3185062,
  "tags": {
    "amenity": "restaurant",
    "name": "La Cadole"
  }
},
{
  "type": "node",
  "id": 363597933,
  "lat": 48.8181616,
  "lon": 2.3296906,
  "tags": {
    "addr:city": "Montrouge",
    "addr:street": "Rue Danton",
    "amenity": "restaurant",
    "cuisine": "chinese",
    "description": "Spécialités asiatiques - Plats à emporter - Buffet à volonté",
    "name": "Le Grand Mandarin de Montrouge",
    "phone": "+33 (0) 1 46 57 01 97"
  }
},
{
  "type": "node",
  "id": 365136324,
  "lat": 48.8514886,
  "lon": 2.3986829,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "L\'usine de Charonne"
  }
},
{
  "type": "node",
  "id": 370791455,
  "lat": 48.8189432,
  "lon": 2.3244643,
  "tags": {
    "addr:city": "Montrouge",
    "addr:postcode": "92120",
    "addr:street": "Rue Georges Bouzerait",
    "amenity": "restaurant",
    "cuisine": "traditional",
    "name": "Les Frangines"
  }
},
{
  "type": "node",
  "id": 370791986,
  "lat": 48.8181334,
  "lon": 2.3302614,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "vietnamese",
    "name": "Chez l\'Oncle Thak"
  }
},
{
  "type": "node",
  "id": 373741165,
  "lat": 48.8300837,
  "lon": 2.3230365,
  "tags": {
    "amenity": "restaurant",
    "name": "S Restaurant",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre ; mise à jour : 2008"
  }
},
{
  "type": "node",
  "id": 374235775,
  "lat": 48.8630061,
  "lon": 2.3625592,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Café Charlot",
    "opening_hours": "Mo-Sa 9:00-1:00;Su 9:00-0:00",
    "phone": "01 44 54 03 30",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre ; mise à jour : 2008",
    "website": "http://www.cafecharlotparis.com/"
  }
},
{
  "type": "node",
  "id": 374247476,
  "lat": 48.8628927,
  "lon": 2.3617428,
  "tags": {
    "amenity": "restaurant",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre ; mise à jour : 2008"
  }
},
{
  "type": "node",
  "id": 385145628,
  "lat": 48.8528282,
  "lon": 2.4062488,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Boucl\'Art"
  }
},
{
  "type": "node",
  "id": 390266577,
  "lat": 48.8474511,
  "lon": 2.3483430,
  "tags": {
    "amenity": "restaurant",
    "name": "Les Pipos",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 394660622,
  "lat": 48.8672258,
  "lon": 2.3079158,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Hanawa"
  }
},
{
  "type": "node",
  "id": 408952534,
  "lat": 48.8838862,
  "lon": 2.3277689,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Brasserie Wepler"
  }
},
{
  "type": "node",
  "id": 408952536,
  "lat": 48.8849265,
  "lon": 2.3336510,
  "tags": {
    "alt_name": "Café des Deux Moulins",
    "amenity": "cafe",
    "cuisine": "french",
    "name": "Café des 2 Moulins"
  }
},
{
  "type": "node",
  "id": 408956768,
  "lat": 48.8861318,
  "lon": 2.3340926,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french;italian",
    "name": "Le Basilic"
  }
},
{
  "type": "node",
  "id": 409011154,
  "lat": 48.8892891,
  "lon": 2.3930976,
  "tags": {
    "amenity": "cafe",
    "name": "Café de la Musique",
    "opening_hours": "Mo-Su 08:00-02:00",
    "phone": "01.48.03.15.91",
    "website": "http://www.cite-musique.fr/francais/boutique/restauration.aspx",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 409012772,
  "lat": 48.8880361,
  "lon": 2.3910565,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Au Boeuf Couronné"
  }
},
{
  "type": "node",
  "id": 409552086,
  "lat": 48.8518792,
  "lon": 2.3487076,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "18",
    "addr:postcode": "75005",
    "addr:street": "Rue de la Bûcherie",
    "amenity": "restaurant",
    "cuisine": "french",
    "diet:vegetarian": "yes",
    "name": "Le Grenier de Notre-Dame",
    "phone": "+33 1 43 29 98 29",
    "website": "http://www.legrenierdenotredame.fr"
  }
},
{
  "type": "node",
  "id": 415760035,
  "lat": 48.8620035,
  "lon": 2.3484170,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 415760221,
  "lat": 48.8621883,
  "lon": 2.3485126,
  "tags": {
    "amenity": "restaurant",
    "name": "Au Père Tranquille",
    "outdoor_seating": "yes",
    "smoking": "no",
    "takeaway": "yes",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 416532536,
  "lat": 48.8696045,
  "lon": 2.3711651,
  "tags": {
    "addr:housenumber": "133",
    "addr:street": "Avenue Parmentier",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Tokko",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 416560238,
  "lat": 48.8658521,
  "lon": 2.3778040,
  "tags": {
    "amenity": "cafe",
    "name": "Café Charbon"
  }
},
{
  "type": "node",
  "id": 416560240,
  "lat": 48.8672490,
  "lon": 2.3760970,
  "tags": {
    "amenity": "cafe",
    "name": "Le Chat Noir"
  }
},
{
  "type": "node",
  "id": 416560241,
  "lat": 48.8671899,
  "lon": 2.3758377,
  "tags": {
    "amenity": "cafe",
    "brewery": "affligem",
    "name": "Marquise Café"
  }
},
{
  "type": "node",
  "id": 416697301,
  "lat": 48.8718241,
  "lon": 2.3676242,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:postcode": "75010",
    "addr:street": "Rue Marie et Louise",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Maria Luisa",
    "phone": "01 44 84 04 01"
  }
},
{
  "type": "node",
  "id": 416697829,
  "lat": 48.8719097,
  "lon": 2.3674864,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Bistrot des Oies"
  }
},
{
  "type": "node",
  "id": 418052349,
  "lat": 48.8664224,
  "lon": 2.3652804,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Pizza Pino",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 418052784,
  "lat": 48.8663460,
  "lon": 2.3644859,
  "tags": {
    "amenity": "restaurant",
    "name": "Indiana"
  }
},
{
  "type": "node",
  "id": 418053065,
  "lat": 48.8674473,
  "lon": 2.3626414,
  "tags": {
    "amenity": "restaurant",
    "name": "Buffalo Gril",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 418053066,
  "lat": 48.8675118,
  "lon": 2.3625438,
  "tags": {
    "amenity": "restaurant",
    "name": "Hippopotamus"
  }
},
{
  "type": "node",
  "id": 418055930,
  "lat": 48.8667141,
  "lon": 2.3660388,
  "tags": {
    "amenity": "cafe",
    "name": "Le Relais de la République"
  }
},
{
  "type": "node",
  "id": 418056583,
  "lat": 48.8666532,
  "lon": 2.3664935,
  "tags": {
    "addr:housenumber": "8",
    "addr:street": "Avenue de la République",
    "amenity": "restaurant",
    "cuisine": "chinese;thai",
    "name": "Sin an kiang",
    "opening_hours": "Mo-Su 12:00-14:30,19:00-23:00",
    "phone": "01 47 00 43 05",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://www.sinankiang.fr/"
  }
},
{
  "type": "node",
  "id": 418061335,
  "lat": 48.8667966,
  "lon": 2.3673783,
  "tags": {
    "amenity": "cafe",
    "name": "Bistrot Pop"
  }
},
{
  "type": "node",
  "id": 418061337,
  "lat": 48.8661992,
  "lon": 2.3687088,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 418061338,
  "lat": 48.8659451,
  "lon": 2.3700477,
  "tags": {
    "amenity": "cafe",
    "name": "La Parisienne"
  }
},
{
  "type": "node",
  "id": 418061339,
  "lat": 48.8652993,
  "lon": 2.3734818,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Arlecchino"
  }
},
{
  "type": "node",
  "id": 418062332,
  "lat": 48.8653692,
  "lon": 2.3748561,
  "tags": {
    "amenity": "cafe",
    "name": "Les Anémones"
  }
},
{
  "type": "node",
  "id": 418062333,
  "lat": 48.8647763,
  "lon": 2.3762361,
  "tags": {
    "amenity": "cafe",
    "name": "Le New\'s"
  }
},
{
  "type": "node",
  "id": 418062757,
  "lat": 48.8648400,
  "lon": 2.3777430,
  "tags": {
    "amenity": "cafe",
    "name": "Le Soleil Levant"
  }
},
{
  "type": "node",
  "id": 418064394,
  "lat": 48.8647413,
  "lon": 2.3853844,
  "tags": {
    "amenity": "cafe",
    "name": "L\'Horloge"
  }
},
{
  "type": "node",
  "id": 418065632,
  "lat": 48.8639802,
  "lon": 2.3867074,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 418065634,
  "lat": 48.8641439,
  "lon": 2.3864843,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 418065635,
  "lat": 48.8642946,
  "lon": 2.3862990,
  "tags": {
    "amenity": "restaurant",
    "name": "La Mère Lachaise"
  }
},
{
  "type": "node",
  "id": 418073931,
  "lat": 48.8661736,
  "lon": 2.3841890,
  "tags": {
    "amenity": "pub",
    "name": "Le Montagnard"
  }
},
{
  "type": "node",
  "id": 418073932,
  "lat": 48.8662357,
  "lon": 2.3840946,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Miyanis"
  }
},
{
  "type": "node",
  "id": 418073933,
  "lat": 48.8663260,
  "lon": 2.3839916,
  "tags": {
    "amenity": "cafe",
    "name": "Le Soleil"
  }
},
{
  "type": "node",
  "id": 418073939,
  "lat": 48.8666938,
  "lon": 2.3828675,
  "tags": {
    "amenity": "pub",
    "name": "Le Biarritz"
  }
},
{
  "type": "node",
  "id": 418074932,
  "lat": 48.8667481,
  "lon": 2.3822535,
  "tags": {
    "amenity": "pub",
    "name": "Café de Paris"
  }
},
{
  "type": "node",
  "id": 418074933,
  "lat": 48.8666129,
  "lon": 2.3816919,
  "tags": {
    "amenity": "cafe",
    "name": "Le Grenier"
  }
},
{
  "type": "node",
  "id": 418074935,
  "lat": 48.8667100,
  "lon": 2.3812708,
  "tags": {
    "amenity": "restaurant",
    "name": "La Locandiera"
  }
},
{
  "type": "node",
  "id": 418076004,
  "lat": 48.8664122,
  "lon": 2.3800058,
  "tags": {
    "amenity": "cafe",
    "name": "Gecko Café"
  }
},
{
  "type": "node",
  "id": 418077550,
  "lat": 48.8661982,
  "lon": 2.3800386,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Kouchiyaki"
  }
},
{
  "type": "node",
  "id": 418079767,
  "lat": 48.8656428,
  "lon": 2.3768934,
  "tags": {
    "amenity": "cafe",
    "name": "Box & Coffee"
  }
},
{
  "type": "node",
  "id": 418079770,
  "lat": 48.8656937,
  "lon": 2.3771252,
  "tags": {
    "amenity": "pub",
    "name": "Quartier Général"
  }
},
{
  "type": "node",
  "id": 418079771,
  "lat": 48.8650645,
  "lon": 2.3775756,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Tumeirah"
  }
},
{
  "type": "node",
  "id": 418079773,
  "lat": 48.8657840,
  "lon": 2.3770479,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Le Fujiwara"
  }
},
{
  "type": "node",
  "id": 418080841,
  "lat": 48.8659421,
  "lon": 2.3769020,
  "tags": {
    "amenity": "pub",
    "name": "Blue Billard"
  }
},
{
  "type": "node",
  "id": 418080842,
  "lat": 48.8661373,
  "lon": 2.3770649,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 418080843,
  "lat": 48.8661962,
  "lon": 2.3766789,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Kimono"
  }
},
{
  "type": "node",
  "id": 418080844,
  "lat": 48.8668329,
  "lon": 2.3764659,
  "tags": {
    "amenity": "cafe",
    "name": "Nun\'s café"
  }
},
{
  "type": "node",
  "id": 418080846,
  "lat": 48.8669356,
  "lon": 2.3763865,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Anika",
    "opening_hours": "Tu-Sa 12:00-15:00,19:00-23:30",
    "phone": "01 48 06 13 04"
  }
},
{
  "type": "node",
  "id": 418085799,
  "lat": 48.8177134,
  "lon": 2.3731023,
  "tags": {
    "amenity": "restaurant",
    "name": "Select Food"
  }
},
{
  "type": "node",
  "id": 418086482,
  "lat": 48.8179174,
  "lon": 2.3755720,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 418086483,
  "lat": 48.8183576,
  "lon": 2.3751482,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 418088839,
  "lat": 48.8442805,
  "lon": 2.3494077,
  "tags": {
    "amenity": "cafe",
    "name": "La Contrescarpe"
  }
},
{
  "type": "node",
  "id": 418139026,
  "lat": 48.8680369,
  "lon": 2.3754008,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Les Pieds sous la Table",
    "website": "http://lespiedssous-latable.com"
  }
},
{
  "type": "node",
  "id": 418140401,
  "lat": 48.8676415,
  "lon": 2.3754429,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 418142036,
  "lat": 48.8689288,
  "lon": 2.3802494,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 418142037,
  "lat": 48.8687538,
  "lon": 2.3799490,
  "tags": {
    "amenity": "pub",
    "name": "L\'Assassin"
  }
},
{
  "type": "node",
  "id": 418142760,
  "lat": 48.8680763,
  "lon": 2.3782066,
  "tags": {
    "amenity": "pub",
    "name": "Onze bar"
  }
},
{
  "type": "node",
  "id": 418143290,
  "lat": 48.8676267,
  "lon": 2.3787920,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Bistrot du Parisien"
  }
},
{
  "type": "node",
  "id": 418464718,
  "lat": 48.8598744,
  "lon": 2.3476273,
  "tags": {
    "addr:housenumber": "62",
    "addr:street": "Rue des Lombards",
    "amenity": "restaurant",
    "name": "Flam\'s",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 418494164,
  "lat": 48.8514969,
  "lon": 2.3476094,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Zenyama"
  }
},
{
  "type": "node",
  "id": 418497769,
  "lat": 48.8518241,
  "lon": 2.3377078,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Moose Head"
  }
},
{
  "type": "node",
  "id": 420117472,
  "lat": 48.8770310,
  "lon": 2.3879568,
  "tags": {
    "amenity": "pub",
    "brewery": "leffe",
    "name": "L\'Escargot"
  }
},
{
  "type": "node",
  "id": 420774543,
  "lat": 48.8393461,
  "lon": 2.2989248,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 425527577,
  "lat": 48.8378680,
  "lon": 2.3520336,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "couscous",
    "name": "Au Petit Clada"
  }
},
{
  "type": "node",
  "id": 426204010,
  "lat": 48.8317268,
  "lon": 2.3568922,
  "tags": {
    "amenity": "cafe",
    "name": "Bomby\'s Cafe"
  }
},
{
  "type": "node",
  "id": 426204014,
  "lat": 48.8321515,
  "lon": 2.3564215,
  "tags": {
    "amenity": "cafe",
    "name": "Le Fumaillon"
  }
},
{
  "type": "node",
  "id": 426204023,
  "lat": 48.8309612,
  "lon": 2.3573410,
  "tags": {
    "amenity": "cafe",
    "name": "Chez Dudule",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 426204036,
  "lat": 48.8306130,
  "lon": 2.3545699,
  "tags": {
    "amenity": "cafe",
    "name": "O\'Jules",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 428028494,
  "lat": 48.8491407,
  "lon": 2.3785568,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "La Table d\'Aligre"
  }
},
{
  "type": "node",
  "id": 428031330,
  "lat": 48.8455640,
  "lon": 2.3806988,
  "tags": {
    "amenity": "cafe",
    "brewery": "Pelforth",
    "name": "Le Calumet"
  }
},
{
  "type": "node",
  "id": 428037578,
  "lat": 48.8467150,
  "lon": 2.3839386,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "New-french",
    "name": "Le Bombyx"
  }
},
{
  "type": "node",
  "id": 428039662,
  "lat": 48.8479594,
  "lon": 2.3771753,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "libre",
    "name": "La Commune Libre d\'Aligre"
  }
},
{
  "type": "node",
  "id": 428039738,
  "lat": 48.8486594,
  "lon": 2.3777375,
  "tags": {
    "addr:postcode": "75012",
    "amenity": "cafe",
    "brewery": "Fischer;Amstel",
    "name": "La Grille",
    "opening_hours": "Mo-Sa 18:00-22:00"
  }
},
{
  "type": "node",
  "id": 428039924,
  "lat": 48.8480388,
  "lon": 2.3805151,
  "tags": {
    "addr:postcode": "75012",
    "amenity": "cafe",
    "name": "Le Crozatier"
  }
},
{
  "type": "node",
  "id": 428040059,
  "lat": 48.8479203,
  "lon": 2.3787076,
  "tags": {
    "amenity": "cafe",
    "cuisine": "Portugal",
    "name": "Fermé depuis 1 an"
  }
},
{
  "type": "node",
  "id": 428040083,
  "lat": 48.8468326,
  "lon": 2.3790947,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Marquis"
  }
},
{
  "type": "node",
  "id": 428040493,
  "lat": 48.8489783,
  "lon": 2.3772212,
  "tags": {
    "amenity": "cafe",
    "brewery": "Amstel;1664;Leffe",
    "name": "Le Penty",
    "opening_hours": "Mo-Sa 07:00-01:00"
  }
},
{
  "type": "node",
  "id": 428040634,
  "lat": 48.8494401,
  "lon": 2.3773810,
  "tags": {
    "amenity": "pub",
    "name": "Le Baron Rouge"
  }
},
{
  "type": "node",
  "id": 428043446,
  "lat": 48.8532825,
  "lon": 2.3792329,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 428043648,
  "lat": 48.8508436,
  "lon": 2.3784137,
  "tags": {
    "amenity": "cafe",
    "name": "Le Stone"
  }
},
{
  "type": "node",
  "id": 428043990,
  "lat": 48.8509991,
  "lon": 2.3778569,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "Corse"
  }
},
{
  "type": "node",
  "id": 428044522,
  "lat": 48.8511896,
  "lon": 2.3757690,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 428044584,
  "lat": 48.8497953,
  "lon": 2.3742831,
  "tags": {
    "amenity": "cafe",
    "brewery": "Grimbergen;Warsteiner;König_Ludwig_Weisser;Elephant",
    "cuisine": "french",
    "happy_hours": "Mo-Sa 17:00-21:00",
    "name": "Bistrot du coin",
    "opening_hours": "Mo-Sa 07:00-02:00"
  }
},
{
  "type": "node",
  "id": 428044663,
  "lat": 48.8494366,
  "lon": 2.3743781,
  "tags": {
    "amenity": "pub",
    "brewery": "Guinness",
    "happy_hours": "Mo-Sa 17:00-21:00",
    "name": "Le bar à mine",
    "note": "baby foot, ping pong",
    "old_name": "La crosse"
  }
},
{
  "type": "node",
  "id": 428044937,
  "lat": 48.8484434,
  "lon": 2.3726021,
  "tags": {
    "amenity": "restaurant",
    "brewery": "Leffe;Grimbergen;1664;Kronenbourg",
    "happy_hours": "Mo-Sa 17:00-21:00",
    "name": "Les artisans",
    "opening_hours": "Mo-Sa 06:00-23:00"
  }
},
{
  "type": "node",
  "id": 428045071,
  "lat": 48.8490503,
  "lon": 2.3712312,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "32",
    "addr:postcode": "75012",
    "addr:street": "Rue de Lyon",
    "amenity": "restaurant",
    "cuisine": "american",
    "name": "U.S. Ateliers"
  }
},
{
  "type": "node",
  "id": 428045227,
  "lat": 48.8477004,
  "lon": 2.3736634,
  "tags": {
    "amenity": "restaurant",
    "brewery": "Kronembourg;Carlserg;Grimbergen;Blanche",
    "cuisine": "french",
    "happy_hours": "Mo-Su 17:00-21:00",
    "name": "Les Garnements",
    "opening_hours": "Mo-Su 08:00-24:00",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 428045921,
  "lat": 48.8500663,
  "lon": 2.3739032,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Amareto"
  }
},
{
  "type": "node",
  "id": 428047882,
  "lat": 48.8447706,
  "lon": 2.3779554,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Payenké",
    "speciality": "Reunion, Maurice"
  }
},
{
  "type": "node",
  "id": 428048443,
  "lat": 48.8451286,
  "lon": 2.3836536,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Le Lys d\'or"
  }
},
{
  "type": "node",
  "id": 428056011,
  "lat": 48.8541173,
  "lon": 2.3674450,
  "tags": {
    "amenity": "restaurant",
    "name": "Gaspard de la Nuit"
  }
},
{
  "type": "node",
  "id": 428061630,
  "lat": 48.8497380,
  "lon": 2.3851348,
  "tags": {
    "amenity": "bar",
    "name": "Le virginie",
    "source": "knowledge"
  }
},
{
  "type": "node",
  "id": 428061784,
  "lat": 48.8500278,
  "lon": 2.3840780,
  "tags": {
    "alt_name": "La Lib’",
    "amenity": "cafe",
    "name": "La Liberté",
    "source": "knowledge"
  }
},
{
  "type": "node",
  "id": 428061814,
  "lat": 48.8501150,
  "lon": 2.3831061,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 428061947,
  "lat": 48.8500450,
  "lon": 2.3839320,
  "tags": {
    "amenity": "cafe",
    "name": "Au Métro"
  }
},
{
  "type": "node",
  "id": 428062039,
  "lat": 48.8502585,
  "lon": 2.3814712,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 428064691,
  "lat": 48.8516730,
  "lon": 2.3781826,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 428064695,
  "lat": 48.8516520,
  "lon": 2.3783332,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 428064818,
  "lat": 48.8504188,
  "lon": 2.3794482,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 428064988,
  "lat": 48.8465865,
  "lon": 2.3816584,
  "tags": {
    "amenity": "cafe",
    "brewery": "Britt;1664;Grimbergen",
    "cuisine": "french",
    "happy_hours": "Mo-Sa 17:00-20:30",
    "internet_access": "wlan",
    "name": "Le Microsillon",
    "opening_hours": "Mo-Sa 10:00-02:00"
  }
},
{
  "type": "node",
  "id": 428065105,
  "lat": 48.8466308,
  "lon": 2.3820511,
  "tags": {
    "amenity": "cafe",
    "brewery": "1664;carlsberg;grimbergen",
    "name": "Le Bistrologue",
    "opening_hours": "Mo-Sa 08:00-02:00"
  }
},
{
  "type": "node",
  "id": 428067452,
  "lat": 48.8622962,
  "lon": 2.3522413,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "sichuan"
  }
},
{
  "type": "node",
  "id": 428132767,
  "lat": 48.8471871,
  "lon": 2.3870859,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "118",
    "addr:postcode": "75012",
    "addr:street": "Boulevard Diderot",
    "amenity": "cafe",
    "brewery": "Pelforth;Affligem;Edelweiss",
    "happy_hours": "Mo-Fr 17:00-20:00;Sa 17:00-24:00",
    "name": "Le Globe Diderot",
    "opening_hours": "Mo-Fr 00:00-01:30,07:00-24:00;Sa-Su 00:00-01:30,09:00-24:00",
    "smoking": "outside",
    "website": "www.leglobediderot.fr"
  }
},
{
  "type": "node",
  "id": 428133145,
  "lat": 48.8505497,
  "lon": 2.3846148,
  "tags": {
    "amenity": "cafe",
    "name": "En attendant l\'or",
    "website": "http://www.enattendant-lor.fr/"
  }
},
{
  "type": "node",
  "id": 428133253,
  "lat": 48.8505497,
  "lon": 2.3842151,
  "tags": {
    "amenity": "cafe",
    "name": "Baroudeur"
  }
},
{
  "type": "node",
  "id": 428141439,
  "lat": 48.8739244,
  "lon": 2.3454201,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "22",
    "addr:postcode": "75009",
    "addr:street": "Rue de Trévise",
    "amenity": "restaurant",
    "cuisine": "chinese",
    "description": "Spécialités du Hunan",
    "name": "L\'Orient d\'Or"
  }
},
{
  "type": "node",
  "id": 428143587,
  "lat": 48.8645230,
  "lon": 2.3550690,
  "tags": {
    "addr:housenumber": "95",
    "addr:postcode": "75013",
    "addr:street": "Rue Beaubourg",
    "amenity": "restaurant",
    "cuisine": "chinese; Lanzhou",
    "name": "Happy nouilles - 大巴黎",
    "name:fr": "Happy nouilles",
    "name:zh": "大巴黎",
    "name:zh_pinyin": "dà Bālí",
    "speciality": "nouilles tirées a la main (lamian)"
  }
},
{
  "type": "node",
  "id": 428145462,
  "lat": 48.8627431,
  "lon": 2.3531218,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "lebanese"
  }
},
{
  "type": "node",
  "id": 428145559,
  "lat": 48.8628573,
  "lon": 2.3522080,
  "tags": {
    "addr:housenumber": "183",
    "addr:postcode": "75003",
    "addr:street": "Rue Saint-Martin",
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Iris"
  }
},
{
  "type": "node",
  "id": 428145874,
  "lat": 48.8613333,
  "lon": 2.3538187,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "peruvian",
    "name": "Pachamanca"
  }
},
{
  "type": "node",
  "id": 428149762,
  "lat": 48.8653692,
  "lon": 2.3620602,
  "tags": {
    "amenity": "cafe",
    "name": "Les Caves du Petit Thouars"
  }
},
{
  "type": "node",
  "id": 428149838,
  "lat": 48.8650045,
  "lon": 2.3627574,
  "tags": {
    "amenity": "cafe",
    "name": "Café Crème"
  }
},
{
  "type": "node",
  "id": 428149874,
  "lat": 48.8651127,
  "lon": 2.3625685,
  "tags": {
    "amenity": "cafe",
    "name": "Le Blanc Cassis"
  }
},
{
  "type": "node",
  "id": 428157295,
  "lat": 48.8489304,
  "lon": 2.3762840,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Le Samouraï"
  }
},
{
  "type": "node",
  "id": 428158234,
  "lat": 48.8462285,
  "lon": 2.3784270,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 428158966,
  "lat": 48.8462620,
  "lon": 2.3786885,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "sushi-yakitori",
    "name": "Miyako - 故宫",
    "opening_hours": "Mo-Sa 11:00-14:30,18:00-22:30",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 428161478,
  "lat": 48.8453283,
  "lon": 2.3813011,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "internet_access": "wlan",
    "name": "Le Petit Bec",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 428161696,
  "lat": 48.8446037,
  "lon": 2.3833732,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "turkish",
    "type": "traiteur"
  }
},
{
  "type": "node",
  "id": 428164786,
  "lat": 48.8492104,
  "lon": 2.3895170,
  "tags": {
    "amenity": "bar",
    "brewery": "guinness",
    "name": "Patrick\'s Le Ballon Vert",
    "old_name": "Les Milles Lacs"
  }
},
{
  "type": "node",
  "id": 428165481,
  "lat": 48.8477398,
  "lon": 2.3888781,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese"
  }
},
{
  "type": "node",
  "id": 428165606,
  "lat": 48.8478628,
  "lon": 2.3928249,
  "tags": {
    "amenity": "cafe",
    "brewery": "Stella;Leffe;Hoegaarden",
    "name": "La Mère Pouchet",
    "opening_hours": "Mo 00:00-01:00,07:00-24:00; Tu-Su 00:00-02:00,07:00-24:00",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 428165688,
  "lat": 48.8476122,
  "lon": 2.3930340,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "thai",
    "name": "Thaï Kanda"
  }
},
{
  "type": "node",
  "id": 428167065,
  "lat": 48.8420168,
  "lon": 2.3896839,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Jodhpur Palace",
    "phone": "01 43 40 72 46"
  }
},
{
  "type": "node",
  "id": 429488766,
  "lat": 48.8367142,
  "lon": 2.3522749,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Canon des Gobelins"
  }
},
{
  "type": "node",
  "id": 429660096,
  "lat": 48.8330139,
  "lon": 2.3615547,
  "tags": {
    "amenity": "cafe",
    "name": "La Halte des Taxis"
  }
},
{
  "type": "node",
  "id": 432147330,
  "lat": 48.8644935,
  "lon": 2.3509011,
  "tags": {
    "amenity": "pub",
    "name": "Les Cariatides"
  }
},
{
  "type": "node",
  "id": 432470096,
  "lat": 48.8296427,
  "lon": 2.3513003,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "okinawa suhi"
  }
},
{
  "type": "node",
  "id": 433073754,
  "lat": 48.8617033,
  "lon": 2.3441258,
  "tags": {
    "amenity": "cafe",
    "name": "Café Indiana",
    "source:name": "survey"
  }
},
{
  "type": "node",
  "id": 441162564,
  "lat": 48.8239093,
  "lon": 2.3042851,
  "tags": {
    "amenity": "pub",
    "name": "Le Timbre Poste"
  }
},
{
  "type": "node",
  "id": 442349636,
  "lat": 48.8692038,
  "lon": 2.2270778,
  "tags": {
    "amenity": "pub",
    "name": "Le Pub"
  }
},
{
  "type": "node",
  "id": 442505304,
  "lat": 48.8681798,
  "lon": 2.3714175,
  "tags": {
    "amenity": "restaurant",
    "name": "El Paladar"
  }
},
{
  "type": "node",
  "id": 442505759,
  "lat": 48.8683391,
  "lon": 2.3714311,
  "tags": {
    "amenity": "bar",
    "name": "La Caravane",
    "opening_hours": "Mo-Su 11:00-2:00",
    "phone": "01 49 23 01 86",
    "website": "http://www.lacaravane.eu/"
  }
},
{
  "type": "node",
  "id": 442545880,
  "lat": 48.8723037,
  "lon": 2.3650913,
  "tags": {
    "amenity": "pub",
    "name": "Le Jemmapes"
  }
},
{
  "type": "node",
  "id": 442546873,
  "lat": 48.8783172,
  "lon": 2.4150868,
  "tags": {
    "amenity": "bar",
    "name": "Le Triton"
  }
},
{
  "type": "node",
  "id": 442547954,
  "lat": 48.8683233,
  "lon": 2.3660938,
  "tags": {
    "addr:housenumber": "18",
    "addr:street": "Rue du Faubourg du Temple",
    "amenity": "bar",
    "name": "La favela Chic",
    "opening_hours": "Tu-We 19:30-2:00;Th 19:30-3:00;Fr-Sa 19:30-4:00",
    "phone": "01 40 21 38 14",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://favelachic.com/"
  }
},
{
  "type": "node",
  "id": 443512892,
  "lat": 48.8275755,
  "lon": 2.3532310,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 445648014,
  "lat": 48.8451570,
  "lon": 2.4339974,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "mexican",
    "name": "El Gringo"
  }
},
{
  "type": "node",
  "id": 446773781,
  "lat": 48.8758235,
  "lon": 2.3834309,
  "tags": {
    "amenity": "cafe",
    "name": "Jolie Môme"
  }
},
{
  "type": "node",
  "id": 446779404,
  "lat": 48.8748569,
  "lon": 2.3825637,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Faitout"
  }
},
{
  "type": "node",
  "id": 446779465,
  "lat": 48.8753656,
  "lon": 2.3823741,
  "tags": {
    "amenity": "pub",
    "name": "Les Buttes Chaumont",
    "note": "café - restaurant"
  }
},
{
  "type": "node",
  "id": 446819198,
  "lat": 48.8783181,
  "lon": 2.3578049,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "Le Delyss",
    "restaurant": "yes"
  }
},
{
  "type": "node",
  "id": 446868082,
  "lat": 48.8716304,
  "lon": 2.3858800,
  "tags": {
    "amenity": "cafe",
    "name": "O\'Paris"
  }
},
{
  "type": "node",
  "id": 446882070,
  "lat": 48.8699373,
  "lon": 2.2847393,
  "tags": {
    "amenity": "cafe",
    "name": "Scossa"
  }
},
{
  "type": "node",
  "id": 446885300,
  "lat": 48.8701181,
  "lon": 2.2849979,
  "tags": {
    "amenity": "restaurant",
    "name": "Bistro Romain"
  }
},
{
  "type": "node",
  "id": 446887015,
  "lat": 48.8711351,
  "lon": 2.2836966,
  "tags": {
    "amenity": "pub",
    "name": "The Honest Lawyer"
  }
},
{
  "type": "node",
  "id": 447033603,
  "lat": 48.8474669,
  "lon": 2.3424422,
  "tags": {
    "amenity": "cafe",
    "name": "Le Duc"
  }
},
{
  "type": "node",
  "id": 447033643,
  "lat": 48.8473878,
  "lon": 2.3433434,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 449554298,
  "lat": 48.8778514,
  "lon": 2.3157284,
  "tags": {
    "amenity": "pub",
    "brewery": "guinness",
    "name": "Brady\'s Irish Pub"
  }
},
{
  "type": "node",
  "id": 451012480,
  "lat": 48.8215566,
  "lon": 2.4133556,
  "tags": {
    "amenity": "cafe",
    "name": "Tabac des Écoles",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 452420245,
  "lat": 48.8446159,
  "lon": 2.4403122,
  "tags": {
    "amenity": "pub",
    "brewery": "Kwak",
    "name": "Tête à l\'envers"
  }
},
{
  "type": "node",
  "id": 452420246,
  "lat": 48.8446352,
  "lon": 2.4400598,
  "tags": {
    "addr:city": "Vincennes",
    "addr:housenumber": "3",
    "addr:postcode": "94300",
    "addr:street": "Avenue de Nogent",
    "amenity": "cafe",
    "cuisine": "regional,_pizza,_burger,...",
    "name": "Les Officiers",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 455553132,
  "lat": 48.8478024,
  "lon": 2.4405963,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Megna",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre ; mise à jour : 22/01/2009"
  }
},
{
  "type": "node",
  "id": 460680800,
  "lat": 48.8249502,
  "lon": 2.2716651,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian"
  }
},
{
  "type": "node",
  "id": 460680824,
  "lat": 48.8248111,
  "lon": 2.2717372,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese"
  }
},
{
  "type": "node",
  "id": 460680837,
  "lat": 48.8251773,
  "lon": 2.2722023,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese"
  }
},
{
  "type": "node",
  "id": 460680877,
  "lat": 48.8238861,
  "lon": 2.2737248,
  "tags": {
    "addr:city": "Issy-les-Moulineaux",
    "addr:housename": "La Gondola",
    "addr:housenumber": "2",
    "addr:postcode": "92130",
    "addr:street": "Avenue Jean Jaurès",
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "La Gondola",
    "website": "http://www.restaurant-lagondola.com"
  }
},
{
  "type": "node",
  "id": 463710388,
  "lat": 48.8851298,
  "lon": 2.3208036,
  "tags": {
    "amenity": "cafe",
    "name": "Le Marigny"
  }
},
{
  "type": "node",
  "id": 463710796,
  "lat": 48.8857055,
  "lon": 2.3215074,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 463711511,
  "lat": 48.8860554,
  "lon": 2.3188123,
  "tags": {
    "amenity": "restaurant",
    "name": "La famille"
  }
},
{
  "type": "node",
  "id": 467120021,
  "lat": 48.8742269,
  "lon": 2.3755468,
  "tags": {
    "amenity": "restaurant",
    "name": "Viet Siam"
  }
},
{
  "type": "node",
  "id": 467750401,
  "lat": 48.8278680,
  "lon": 2.2755937,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Le Patio",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2009"
  }
},
{
  "type": "node",
  "id": 469128592,
  "lat": 48.8664641,
  "lon": 2.3722308,
  "tags": {
    "addr:housenumber": "2",
    "addr:street": "Rue des Trois Bornes",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Les P\'tites Indécises",
    "opening_hours": "Mo-Su 12:00-22:30",
    "phone": "01 43 57 26 00",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 469364973,
  "lat": 48.8361883,
  "lon": 2.4001628,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "vietnamese",
    "name": "Lê Mai Vietnam"
  }
},
{
  "type": "node",
  "id": 469364976,
  "lat": 48.8361733,
  "lon": 2.3992550,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Makoto",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 469974457,
  "lat": 48.8361823,
  "lon": 2.3989988,
  "tags": {
    "amenity": "cafe",
    "name": "Les Voisins",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 469974520,
  "lat": 48.8355057,
  "lon": 2.3978609,
  "tags": {
    "amenity": "restaurant",
    "happy_hours": "17:00-20:00",
    "internet_access": "wlan",
    "name": "Capri\'s",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 469974690,
  "lat": 48.8391490,
  "lon": 2.3938241,
  "tags": {
    "amenity": "cafe",
    "name": "Felix café",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 469974744,
  "lat": 48.8381280,
  "lon": 2.3966112,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "crepe",
    "name": "La Cidraie"
  }
},
{
  "type": "node",
  "id": 469974776,
  "lat": 48.8385750,
  "lon": 2.3962263,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Piccola Italia"
  }
},
{
  "type": "node",
  "id": 470330229,
  "lat": 48.8346469,
  "lon": 2.3049016,
  "tags": {
    "amenity": "pub",
    "name": "Le Café de la Poste"
  }
},
{
  "type": "node",
  "id": 471042291,
  "lat": 48.8644029,
  "lon": 2.4080476,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 471575724,
  "lat": 48.8471578,
  "lon": 2.4715809,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza"
  }
},
{
  "type": "node",
  "id": 471575725,
  "lat": 48.8468702,
  "lon": 2.4707506,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian"
  }
},
{
  "type": "node",
  "id": 471575730,
  "lat": 48.8472582,
  "lon": 2.4713464,
  "tags": {
    "amenity": "pub",
    "name": "Le Village"
  }
},
{
  "type": "node",
  "id": 471575734,
  "lat": 48.8468006,
  "lon": 2.4714752,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian"
  }
},
{
  "type": "node",
  "id": 472351949,
  "lat": 48.8360911,
  "lon": 2.4057236,
  "tags": {
    "addr:city": "France",
    "addr:housenumber": "271",
    "addr:postcode": "75012",
    "addr:street": "Avenue Daumesnil",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Swann"
  }
},
{
  "type": "node",
  "id": 473111467,
  "lat": 48.8352503,
  "lon": 2.3857030,
  "tags": {
    "amenity": "cafe",
    "name": "Edelweiss",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 473827193,
  "lat": 48.8400454,
  "lon": 2.3808140,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Pataquès"
  }
},
{
  "type": "node",
  "id": 473827194,
  "lat": 48.8399906,
  "lon": 2.3811474,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 473827196,
  "lat": 48.8347357,
  "lon": 2.3876562,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Yuki",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 473827201,
  "lat": 48.8398654,
  "lon": 2.3799031,
  "tags": {
    "amenity": "cafe",
    "name": "Bercy café",
    "restaurant": "yes"
  }
},
{
  "type": "node",
  "id": 473827202,
  "lat": 48.8401087,
  "lon": 2.3804879,
  "tags": {
    "amenity": "cafe",
    "name": "Café Chambertin"
  }
},
{
  "type": "node",
  "id": 473827205,
  "lat": 48.8396394,
  "lon": 2.3801031,
  "tags": {
    "addr:housenumber": "110",
    "addr:postcode": "75012",
    "addr:street": "Rue de Bercy",
    "amenity": "restaurant",
    "name": "Les Spectacles"
  }
},
{
  "type": "node",
  "id": 473827207,
  "lat": 48.8394044,
  "lon": 2.3805434,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 473827211,
  "lat": 48.8393185,
  "lon": 2.3806604,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 475710753,
  "lat": 48.8192778,
  "lon": 2.3740096,
  "tags": {
    "amenity": "restaurant",
    "name": "Café de la Pointe"
  }
},
{
  "type": "node",
  "id": 475710755,
  "lat": 48.8157795,
  "lon": 2.3678212,
  "tags": {
    "amenity": "restaurant",
    "name": "Picado"
  }
},
{
  "type": "node",
  "id": 476507832,
  "lat": 48.8372710,
  "lon": 2.2970236,
  "tags": {
    "amenity": "cafe",
    "name": "La Source",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 476507833,
  "lat": 48.8372438,
  "lon": 2.2971170,
  "tags": {
    "amenity": "cafe",
    "name": "Moka",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 480162411,
  "lat": 48.8824390,
  "lon": 2.4341285,
  "tags": {
    "amenity": "cafe",
    "name": "Café du Marché"
  }
},
{
  "type": "node",
  "id": 480162413,
  "lat": 48.8826237,
  "lon": 2.4337459,
  "tags": {
    "amenity": "cafe",
    "name": "PMU"
  }
},
{
  "type": "node",
  "id": 480162624,
  "lat": 48.8829732,
  "lon": 2.4334412,
  "tags": {
    "amenity": "cafe",
    "name": "La Consigne"
  }
},
{
  "type": "node",
  "id": 482850634,
  "lat": 48.8190789,
  "lon": 2.2424693,
  "tags": {
    "amenity": "cafe",
    "name": "Le Gagnant",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 486096218,
  "lat": 48.8474970,
  "lon": 2.3970587,
  "tags": {
    "amenity": "pub",
    "brewery": "stella;leffe;leffe_ruby;kilkenny;hoegaarden;guinness",
    "happy_hours": "Mo-Su 17:00-20:00",
    "name": "Irish Corner",
    "opening_hours": "Mo-Su 00:00-02:00,07:00-24:00",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 486121563,
  "lat": 48.8465303,
  "lon": 2.3834704,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "L\'Aubergeade"
  }
},
{
  "type": "node",
  "id": 486121568,
  "lat": 48.8463112,
  "lon": 2.3834371,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "La Nouvelle Époque"
  }
},
{
  "type": "node",
  "id": 489774593,
  "lat": 48.8519093,
  "lon": 2.3341886,
  "tags": {
    "amenity": "restaurant",
    "name:en": "La Boussolle",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 490737598,
  "lat": 48.8650517,
  "lon": 2.3018704,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Chez Francis"
  }
},
{
  "type": "node",
  "id": 493163514,
  "lat": 48.8510126,
  "lon": 2.4018663,
  "tags": {
    "amenity": "bar",
    "name": "Les pères populaires"
  }
},
{
  "type": "node",
  "id": 493729421,
  "lat": 48.8396241,
  "lon": 2.4024373,
  "tags": {
    "amenity": "restaurant",
    "name": "bar des amis"
  }
},
{
  "type": "node",
  "id": 493761019,
  "lat": 48.8517859,
  "lon": 2.4015820,
  "tags": {
    "amenity": "bar",
    "name": "Le Jean Bart"
  }
},
{
  "type": "node",
  "id": 493761037,
  "lat": 48.8477533,
  "lon": 2.3981316,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "8",
    "addr:postcode": "75012",
    "addr:street": "Avenue du Trône",
    "amenity": "restaurant",
    "brewery": "Leffe;Hoegarden;Kanterbrau;1664;Maredsous;Bière_de_saison;Grimbergen_fruits_rouges;Carlsberg",
    "name": "Marco Polo",
    "opening_hours": "Mo-Su 00:00-02:00,07:30-24:00",
    "smoking": "outside",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 493761038,
  "lat": 48.8485668,
  "lon": 2.3983079,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "9",
    "addr:postcode": "75011",
    "addr:street": "Avenue du Trône",
    "amenity": "restaurant",
    "brewery": "1664;Grimbergen_blanche;Grimbergen;Carlsberg",
    "name": "Chez Prosper",
    "opening_hours": "Mo-Su 00:00-01:30,07:30-24:00",
    "smoking": "outside",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 493870582,
  "lat": 48.8284622,
  "lon": 2.3428564,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 494637303,
  "lat": 48.8319371,
  "lon": 2.3141252,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Café Chineur"
  }
},
{
  "type": "node",
  "id": 494642390,
  "lat": 48.8327575,
  "lon": 2.3159370,
  "tags": {
    "amenity": "restaurant",
    "name": "Pizza Nellie"
  }
},
{
  "type": "node",
  "id": 494657812,
  "lat": 48.8318327,
  "lon": 2.3145828,
  "tags": {
    "amenity": "restaurant",
    "name": "La chopotte"
  }
},
{
  "type": "node",
  "id": 494658304,
  "lat": 48.8315258,
  "lon": 2.3151731,
  "tags": {
    "amenity": "cafe",
    "name": "Café Plaisance"
  }
},
{
  "type": "node",
  "id": 494660175,
  "lat": 48.8329370,
  "lon": 2.3161042,
  "tags": {
    "amenity": "cafe",
    "name": "Le bouquet"
  }
},
{
  "type": "node",
  "id": 494660190,
  "lat": 48.8330455,
  "lon": 2.3162946,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Wako"
  }
},
{
  "type": "node",
  "id": 494660394,
  "lat": 48.8332491,
  "lon": 2.3170528,
  "tags": {
    "amenity": "restaurant",
    "name": "Shiawase"
  }
},
{
  "type": "node",
  "id": 494660906,
  "lat": 48.8333903,
  "lon": 2.3171214,
  "tags": {
    "amenity": "cafe",
    "name": "Le 7ème Art"
  }
},
{
  "type": "node",
  "id": 494663867,
  "lat": 48.8338366,
  "lon": 2.3181857,
  "tags": {
    "amenity": "bar",
    "name": "Losserand Café"
  }
},
{
  "type": "node",
  "id": 495633106,
  "lat": 48.8362254,
  "lon": 2.3224012,
  "tags": {
    "amenity": "restaurant",
    "name": "Cobea"
  }
},
{
  "type": "node",
  "id": 495634237,
  "lat": 48.8363089,
  "lon": 2.3225218,
  "tags": {
    "amenity": "bar",
    "name": "Artist Pub"
  }
},
{
  "type": "node",
  "id": 495637361,
  "lat": 48.8364089,
  "lon": 2.3224024,
  "tags": {
    "addr:housenumber": "8",
    "addr:postcode": "75014",
    "addr:street": "rue Raymond Losserand",
    "amenity": "restaurant",
    "cuisine": "Lebanon",
    "name": "Chez Farhat"
  }
},
{
  "type": "node",
  "id": 495667480,
  "lat": 48.8324709,
  "lon": 2.3200140,
  "tags": {
    "amenity": "restaurant",
    "name": "Caldella"
  }
},
{
  "type": "node",
  "id": 495671857,
  "lat": 48.8324257,
  "lon": 2.3207007,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'Imprévu",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 495671995,
  "lat": 48.8324031,
  "lon": 2.3208037,
  "tags": {
    "amenity": "restaurant",
    "name": "La Dordogne"
  }
},
{
  "type": "node",
  "id": 495671997,
  "lat": 48.8323749,
  "lon": 2.3209067,
  "tags": {
    "amenity": "restaurant",
    "name": "Aux cercles bleus"
  }
},
{
  "type": "node",
  "id": 495985883,
  "lat": 48.8150987,
  "lon": 2.4202526,
  "tags": {
    "addr:housenumber": "18",
    "addr:street": "Avenue du Général de Gaulle",
    "amenity": "restaurant",
    "name": "Au Petit Caporal",
    "source": "survey",
    "tourism": "hotel",
    "website": "hotelpetitcaporal.com"
  }
},
{
  "type": "node",
  "id": 495986004,
  "lat": 48.8150194,
  "lon": 2.4193447,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 496109850,
  "lat": 48.8514297,
  "lon": 2.3722999,
  "tags": {
    "addr:housenumber": "47",
    "addr:postcode": "75012",
    "addr:street": "Rue de Charenton",
    "amenity": "restaurant",
    "cuisine": "thai",
    "name": "Bai Thong",
    "phone": "+33 1 43475547",
    "website": "http://www.baithong.fr"
  }
},
{
  "type": "node",
  "id": 496109955,
  "lat": 48.8544625,
  "lon": 2.3823250,
  "tags": {
    "amenity": "restaurant",
    "name": "Loulou de Bastille"
  }
},
{
  "type": "node",
  "id": 496110514,
  "lat": 48.8507756,
  "lon": 2.3816053,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Goyavier",
    "speciality": "réunion"
  }
},
{
  "type": "node",
  "id": 496129556,
  "lat": 48.8464081,
  "lon": 2.3717860,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "arab",
    "name": "La Traversée de Paris"
  }
},
{
  "type": "node",
  "id": 497348562,
  "lat": 48.8840850,
  "lon": 2.3374869,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "crepe",
    "name": "La Galette du Moulin",
    "source": "Local survey 13 September 2009"
  }
},
{
  "type": "node",
  "id": 498913739,
  "lat": 48.8867306,
  "lon": 2.3464815,
  "tags": {
    "amenity": "bar",
    "name": "Blue Note"
  }
},
{
  "type": "node",
  "id": 499980286,
  "lat": 48.8663999,
  "lon": 2.3328148,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "sushi",
    "name": "foujita"
  }
},
{
  "type": "node",
  "id": 500255589,
  "lat": 48.8367172,
  "lon": 2.3924117,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Casa Naktel"
  }
},
{
  "type": "node",
  "id": 500255592,
  "lat": 48.8366661,
  "lon": 2.3926576,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Le Cambodge",
    "old_name": "Jonaki"
  }
},
{
  "type": "node",
  "id": 500255594,
  "lat": 48.8366787,
  "lon": 2.3933514,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "kebab",
    "name": "Istambul",
    "old_name": "Le Prince"
  }
},
{
  "type": "node",
  "id": 500290018,
  "lat": 48.8611991,
  "lon": 2.3750738,
  "tags": {
    "amenity": "cafe",
    "name": "Les Cent Kilos"
  }
},
{
  "type": "node",
  "id": 508588048,
  "lat": 48.8440901,
  "lon": 2.3896786,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Chez Lolo"
  }
},
{
  "type": "node",
  "id": 508588053,
  "lat": 48.8432477,
  "lon": 2.3892875,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Royal Montgallet - 新富园",
    "name:fr": "Royal Montgallet",
    "name:zh": "新富园"
  }
},
{
  "type": "node",
  "id": 508588057,
  "lat": 48.8450283,
  "lon": 2.3826090,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese"
  }
},
{
  "type": "node",
  "id": 508588068,
  "lat": 48.8453967,
  "lon": 2.3826032,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "thai"
  }
},
{
  "type": "node",
  "id": 508588085,
  "lat": 48.8470342,
  "lon": 2.3868537,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "24",
    "addr:postcode": "75012",
    "addr:street": "Rue de Reuilly",
    "amenity": "restaurant",
    "brewery": "Grimbergen;Carlsberg;Kronenbourg;1664;1664_blanche",
    "happy_hours": "Mo-Su 17:00-20:00",
    "name": "Les Argentiers",
    "opening_hours": "Mo-Su 00:00-01:00,06:30-24:00",
    "smoking": "outside",
    "website": "www.lesargentiers.com"
  }
},
{
  "type": "node",
  "id": 508588090,
  "lat": 48.8469567,
  "lon": 2.3869061,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Traiteur chinois"
  }
},
{
  "type": "node",
  "id": 508588123,
  "lat": 48.8465001,
  "lon": 2.3808215,
  "tags": {
    "amenity": "cafe",
    "cuisine": "french",
    "name": "Le relais Diderot",
    "old_name": "L\'Héliotrope"
  }
},
{
  "type": "node",
  "id": 508588125,
  "lat": 48.8466891,
  "lon": 2.3824558,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "Sushi-yakitori",
    "name": "Sushi bar",
    "opening_hours": "Mo-Sa 12:00-15:00,19:00-23:00 ; Su 19:00-23:00",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 508588128,
  "lat": 48.8467101,
  "lon": 2.3827554,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "kebab;pizza",
    "name": "César",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 508588144,
  "lat": 48.8508333,
  "lon": 2.3797344,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 508588152,
  "lat": 48.8505704,
  "lon": 2.3800670,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 508588172,
  "lat": 48.8494049,
  "lon": 2.3783024,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "13",
    "addr:postcode": "75012",
    "addr:street": "Rue d\'Aligre",
    "amenity": "restaurant",
    "cuisine": "shandong",
    "cuisine:zh": "鲁菜",
    "name": "chez Guan",
    "name:en": "Fashion Delice",
    "name:fr": "Fashion Délice",
    "name:zh": "新食记",
    "name:zh_pinyin": "xīnshíjì",
    "opening_hours": "Mo-Sa 11:30-15:00;19:00-23:00",
    "phone": "+33 1 44758529"
  }
},
{
  "type": "node",
  "id": 508588174,
  "lat": 48.8481949,
  "lon": 2.3766544,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "traditional;french",
    "name": "La Conivence"
  }
},
{
  "type": "node",
  "id": 508588177,
  "lat": 48.8482849,
  "lon": 2.3767134,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "Sardaigne",
    "name": "sardegna Tavola",
    "opening_hours": "Mo-Fr 07:30-00:00"
  }
},
{
  "type": "node",
  "id": 508588181,
  "lat": 48.8502082,
  "lon": 2.3780865,
  "tags": {
    "amenity": "pub",
    "brewery": "Cuvée des Trolls;Lupulus;chouffe;chimay;Barbar",
    "internet_access": "no",
    "name": "Le Troll",
    "note": "Changing beer on the tap, 160 bottle beers",
    "opening_hours": "Mo-Su 17:00-02:00",
    "speciality": "Bières artisanales"
  }
},
{
  "type": "node",
  "id": 508597074,
  "lat": 48.8498295,
  "lon": 2.3739314,
  "tags": {
    "addr:housenumber": "50",
    "addr:postcode": "75012",
    "addr:street": "Rue de Charenton",
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Le China",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 508597105,
  "lat": 48.8456109,
  "lon": 2.3933509,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Les 2 Saveurs",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 508599773,
  "lat": 48.8410573,
  "lon": 2.3873134,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Royal Lys d\'or"
  }
},
{
  "type": "node",
  "id": 512269248,
  "lat": 48.8522837,
  "lon": 2.2212781,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 512269249,
  "lat": 48.8521421,
  "lon": 2.2214567,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 515142905,
  "lat": 48.8745856,
  "lon": 2.3876774,
  "tags": {
    "amenity": "cafe",
    "name": "La Cagnotte"
  }
},
{
  "type": "node",
  "id": 515826561,
  "lat": 48.8745188,
  "lon": 2.3863253,
  "tags": {
    "amenity": "cafe",
    "name": "Le Bariolé"
  }
},
{
  "type": "node",
  "id": 519049977,
  "lat": 48.8345868,
  "lon": 2.4005135,
  "tags": {
    "amenity": "bar",
    "name": "Le bistrot de Julie"
  }
},
{
  "type": "node",
  "id": 519049990,
  "lat": 48.8344550,
  "lon": 2.4007736,
  "tags": {
    "amenity": "bar",
    "name": "Au diplomate"
  }
},
{
  "type": "node",
  "id": 519346930,
  "lat": 48.8498188,
  "lon": 2.2948504,
  "tags": {
    "addr:housenumber": "92",
    "addr:street": "Boulevard de Grenelle",
    "amenity": "cafe",
    "cuisine": "french",
    "name": "Au Moka"
  }
},
{
  "type": "node",
  "id": 529888306,
  "lat": 48.8678174,
  "lon": 2.3028593,
  "tags": {
    "amenity": "restaurant",
    "name": "Chez André"
  }
},
{
  "type": "node",
  "id": 530272874,
  "lat": 48.8478582,
  "lon": 2.3735429,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "I quattro mori",
    "opening_hours": "Mo,We,Fr 08:00-19:00; Tu,Th 08:00-22:00; Sa 11:00-19:00; Su 11:00-16:00"
  }
},
{
  "type": "node",
  "id": 530272875,
  "lat": 48.8483197,
  "lon": 2.3742134,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "30",
    "addr:postcode": "75012",
    "addr:street": "Rue Traversière",
    "amenity": "restaurant",
    "cuisine": "italian",
    "internet_access": "no",
    "name": "Chez Peppe",
    "opening_hours": "Tu-Fr 10:00-14:30,16:30-20:00;Sa 10:00-20:00",
    "phone": "+33 (0) 1 43 47 31 69",
    "website": "http://www.chezpeppe.com/",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 530272880,
  "lat": 48.8492375,
  "lon": 2.3751897,
  "tags": {
    "amenity": "cafe",
    "name": "Rotana café"
  }
},
{
  "type": "node",
  "id": 530272890,
  "lat": 48.8493959,
  "lon": 2.3750250,
  "tags": {
    "amenity": "bar",
    "name": "Chez Habibi",
    "opening_hours": "Mo-Su 17:00-02:00"
  }
},
{
  "type": "node",
  "id": 530272894,
  "lat": 48.8462275,
  "lon": 2.3737111,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "La dolce vita"
  }
},
{
  "type": "node",
  "id": 530272903,
  "lat": 48.8458407,
  "lon": 2.3720988,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Taverne Karlsbrau",
    "old_name": "Taverne Kanterbräu"
  }
},
{
  "type": "node",
  "id": 530272904,
  "lat": 48.8459184,
  "lon": 2.3726478,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "2 bis",
    "addr:postcode": "75012",
    "addr:street": "Rue de Lyon",
    "amenity": "restaurant",
    "brewery": "1664;Grimbergen;Kronenbourg;Grimbergen_blanche",
    "cuisine": "french",
    "internet_access": "wlan",
    "name": "L\'Européen",
    "opening_hours": "Mo-Su 07:30-01:00",
    "phone": "+33 (0) 143439970",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 530272906,
  "lat": 48.8484256,
  "lon": 2.3742938,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "sushi",
    "name": "Japoness café"
  }
},
{
  "type": "node",
  "id": 530272907,
  "lat": 48.8491474,
  "lon": 2.3746104,
  "tags": {
    "amenity": "restaurant",
    "brewery": "Fischer",
    "cuisine": "pizza",
    "internet_access": "wlan",
    "name": "Pizzeria Venezia"
  }
},
{
  "type": "node",
  "id": 530272908,
  "lat": 48.8471402,
  "lon": 2.3725177,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "31",
    "addr:postcode": "75012",
    "addr:street": "Rue Traversière",
    "amenity": "restaurant",
    "cuisine": "italian",
    "email": "restaurantpelicano@free.fr",
    "fax": "+33955827414",
    "internet_access": "no",
    "name": "Ristorante Pellicano",
    "opening_hours": "Mo-Sa 12:00-14:30,19:00-23:00",
    "phone": "+33143070223",
    "smoking": "no"
  }
},
{
  "type": "node",
  "id": 530272909,
  "lat": 48.8490161,
  "lon": 2.3747617,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "steak_house",
    "name": "Le Traversière",
    "smoking": "no",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 530272911,
  "lat": 48.8464256,
  "lon": 2.3723704,
  "tags": {
    "amenity": "bar",
    "name": "Flute Gana"
  }
},
{
  "type": "node",
  "id": 530272912,
  "lat": 48.8460157,
  "lon": 2.3736299,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "23 bis",
    "addr:postcode": "75012",
    "addr:street": "Boulevard Diderot",
    "amenity": "cafe",
    "brewery": "heineken;pelforth;affligem;edelweiss_blanche;record;",
    "cuisine": "french",
    "internet_access": "no",
    "name": "Les deux Savoies",
    "opening_hours": "Mo-Su 05:45-02:00",
    "phone": "+33 (0) 1 43 43 29 59",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 530272921,
  "lat": 48.8470772,
  "lon": 2.3727405,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Ginza",
    "phone": "+33143408898"
  }
},
{
  "type": "node",
  "id": 530275195,
  "lat": 48.8475609,
  "lon": 2.3752480,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "43",
    "addr:postcode": "75012",
    "addr:street": "Avenue Daumesnil",
    "amenity": "restaurant",
    "brewery": "1664;Carlsberg;Grimbergen_blanche;",
    "cuisine": "french",
    "email": "leviaduc@orange.fr",
    "fax": "+33 1 44747071",
    "happy_hours": "Mo-Fr 17:00-20:00",
    "internet_access": "wlan",
    "name": "Le Viaduc café",
    "opening_hours": "Mo-Su 09:00-02:00",
    "phone": "+33 1 44747070",
    "website": "http://www.leviaduc-cafe.com",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 530575488,
  "lat": 48.8446768,
  "lon": 2.3494263,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "2",
    "addr:postcode": "75005",
    "addr:street": "Place de la Contrescarpe",
    "amenity": "cafe",
    "cuisine": "coffee_shop;burger",
    "internet_access": "wlan",
    "name": "Café Delmas",
    "phone": "+33 1 4326 5126",
    "website": "http://www.cafedelmasparis.com/en/",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 530751132,
  "lat": 48.8489233,
  "lon": 2.3748786,
  "tags": {
    "amenity": "pub",
    "name": "Le P\'tit Coin de l\'Opéra"
  }
},
{
  "type": "node",
  "id": 530751136,
  "lat": 48.8460336,
  "lon": 2.3725445,
  "tags": {
    "amenity": "cafe",
    "name": "La consigne"
  }
},
{
  "type": "node",
  "id": 530751158,
  "lat": 48.8459741,
  "lon": 2.3725698,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "2",
    "addr:postcode": "75012",
    "addr:street": "Rue de Lyon",
    "amenity": "restaurant",
    "brewery": "Leffe;Meteore;Chouffe;1664;",
    "cuisine": "french",
    "internet_access": "wlan",
    "name": "Le Muratti\'s",
    "opening_hours": "Mo-Su 06:30-23:00",
    "phone": "0143071221",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 530751161,
  "lat": 48.8459507,
  "lon": 2.3730386,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "21 ter",
    "addr:postcode": "75012",
    "addr:street": "boulevard Diderot",
    "amenity": "restaurant",
    "brewery": "Carlsberg;Leffe;Leffe_blanche;Chouffe",
    "cuisine": "french",
    "internet_access": "yes",
    "name": "Aux cadrans",
    "opening_hours": "Mo-Su 06:00-02:00",
    "phone": "+33 (0) 143433763",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 530878026,
  "lat": 48.8458244,
  "lon": 2.3719271,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Vesuvio"
  }
},
{
  "type": "node",
  "id": 530880275,
  "lat": 48.8464620,
  "lon": 2.3718673,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Tour des délices"
  }
},
{
  "type": "node",
  "id": 530896463,
  "lat": 48.8483010,
  "lon": 2.3417712,
  "tags": {
    "amenity": "pub",
    "brewery": "guinness;leffe",
    "name": "Mad Maker"
  }
},
{
  "type": "node",
  "id": 531493470,
  "lat": 48.8478209,
  "lon": 2.3770331,
  "tags": {
    "amenity": "cafe",
    "brewery": "beck\'s;stella;leffe",
    "cuisine": "french",
    "internet_access": "wlan",
    "name": "Le Rossli",
    "opening_hours": "Tu-Fr 06:30-21:00"
  }
},
{
  "type": "node",
  "id": 531493625,
  "lat": 48.8497251,
  "lon": 2.3785877,
  "tags": {
    "amenity": "cafe",
    "brewery": "Stella;1664",
    "name": "Le Gevaudan",
    "opening_hours": "Mo-Sa 06:00-22:30"
  }
},
{
  "type": "node",
  "id": 531493783,
  "lat": 48.8501253,
  "lon": 2.3762844,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Au couvert d\'asie",
    "name:zh": "东亚菜馆",
    "opening_hours": "Mo-Sa 12:00-14:30;19:00-22:00"
  }
},
{
  "type": "node",
  "id": 531496445,
  "lat": 48.8493623,
  "lon": 2.3902888,
  "tags": {
    "amenity": "restaurant",
    "name": "La Dame Brune"
  }
},
{
  "type": "node",
  "id": 531497617,
  "lat": 48.8497475,
  "lon": 2.3788828,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "thai",
    "name": "Papa Thai"
  }
},
{
  "type": "node",
  "id": 531501720,
  "lat": 48.8468146,
  "lon": 2.3805349,
  "tags": {
    "amenity": "restaurant",
    "name": "Restaurant Universitaire"
  }
},
{
  "type": "node",
  "id": 531795728,
  "lat": 48.8442266,
  "lon": 2.3492264,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "Persan (Iranien)",
    "name": "Colbeh"
  }
},
{
  "type": "node",
  "id": 532031656,
  "lat": 48.8459544,
  "lon": 2.3720668,
  "tags": {
    "amenity": "cafe",
    "brewery": "tripel_karmeliet;chouffe;chimay;triple_cauwe;brewdog;De Molen;Nogne;Mikkeller",
    "internet_access": "wlan",
    "name": "L\'Express de Lyon"
  }
},
{
  "type": "node",
  "id": 533754009,
  "lat": 48.8310200,
  "lon": 2.3347804,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "Vietnamien",
    "name": "Escale à Saïgon"
  }
},
{
  "type": "node",
  "id": 533755374,
  "lat": 48.8252128,
  "lon": 2.3624715,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "vietnamese",
    "name": "Le Bambou"
  }
},
{
  "type": "node",
  "id": 533755545,
  "lat": 48.8251313,
  "lon": 2.3623868,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "vietnamese",
    "name": "Pho Hoa Pasteur Saigon"
  }
},
{
  "type": "node",
  "id": 533755584,
  "lat": 48.8248667,
  "lon": 2.3622623,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Palais d\'Asie",
    "phone": "0145832560"
  }
},
{
  "type": "node",
  "id": 533940431,
  "lat": 48.8693591,
  "lon": 2.3567215,
  "tags": {
    "amenity": "restaurant",
    "name": "Ma Bicoque"
  }
},
{
  "type": "node",
  "id": 533942277,
  "lat": 48.8687850,
  "lon": 2.3594780,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "mediteranean",
    "name": "Le Balbuzard Café",
    "opening_hours": "Mo-Sa 11:30-0:00;Su 12:00-17:00",
    "phone": "01 42 08 60 20"
  }
},
{
  "type": "node",
  "id": 534660987,
  "lat": 48.8863208,
  "lon": 2.3451631,
  "tags": {
    "amenity": "bar",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2009"
  }
},
{
  "type": "node",
  "id": 534660992,
  "lat": 48.8864916,
  "lon": 2.3449490,
  "tags": {
    "amenity": "bar",
    "name": "Botak",
    "source": "ground"
  }
},
{
  "type": "node",
  "id": 534660995,
  "lat": 48.8865096,
  "lon": 2.3452428,
  "tags": {
    "amenity": "restaurant",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2009"
  }
},
{
  "type": "node",
  "id": 534904020,
  "lat": 48.8462033,
  "lon": 2.3752807,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "27",
    "addr:postcode": "75012",
    "addr:street": "Boulevard Diderot",
    "amenity": "cafe",
    "brewery": "leffe;brugs;kronenbourg",
    "internet_access": "wlan",
    "name": "Station Café",
    "opening_hours": "Mo-Su 00:00-02:00,07:30-24:00",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 534904407,
  "lat": 48.8462167,
  "lon": 2.3753959,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "27bis",
    "addr:postcode": "75012",
    "addr:street": "Boulevard Diderot",
    "amenity": "restaurant",
    "brewery": "Leffe",
    "cuisine": "french",
    "name": "Entre les Vignes",
    "opening_hours": "Mo-Sa 12:00-14:30,19:30-21:30",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 534905631,
  "lat": 48.8460708,
  "lon": 2.3770013,
  "tags": {
    "amenity": "restaurant",
    "name": "La valise"
  }
},
{
  "type": "node",
  "id": 534908121,
  "lat": 48.8458957,
  "lon": 2.3755864,
  "tags": {
    "amenity": "cafe",
    "name": "Le Killy-Jen"
  }
},
{
  "type": "node",
  "id": 534909894,
  "lat": 48.8458632,
  "lon": 2.3752950,
  "tags": {
    "amenity": "pub",
    "internet_access": "wlan",
    "name": "Le Maximilien"
  }
},
{
  "type": "node",
  "id": 534910294,
  "lat": 48.8458252,
  "lon": 2.3749543,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Mandarin Diderot"
  }
},
{
  "type": "node",
  "id": 534916265,
  "lat": 48.8469247,
  "lon": 2.3730534,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "5",
    "addr:postcode": "75012",
    "addr:street": "Rue Parrot",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Duc de Richelieu",
    "opening_hours": "Mo-Su 09:00-24:00",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 535862612,
  "lat": 48.8472565,
  "lon": 2.3708817,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Li Yuan",
    "opening_hours": "Mo-Sa 11:30-14:30,18:30-23:30"
  }
},
{
  "type": "node",
  "id": 535863373,
  "lat": 48.8471819,
  "lon": 2.3707631,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Dix-sept"
  }
},
{
  "type": "node",
  "id": 535867999,
  "lat": 48.8467280,
  "lon": 2.3702882,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Osaka",
    "opening_hours": "Mo-Sa 12:00-14:30,19:00-22:30"
  }
},
{
  "type": "node",
  "id": 535873622,
  "lat": 48.8467932,
  "lon": 2.3690947,
  "tags": {
    "amenity": "pub",
    "name": "La Belle Époque"
  }
},
{
  "type": "node",
  "id": 535875756,
  "lat": 48.8465554,
  "lon": 2.3692393,
  "tags": {
    "amenity": "restaurant",
    "name": "Café Barjot",
    "old_name": "Escale Gourmande",
    "opening_hours": "Mo-Sa 12:00-15:00,19:00-22:00"
  }
},
{
  "type": "node",
  "id": 535878869,
  "lat": 48.8463534,
  "lon": 2.3689294,
  "tags": {
    "amenity": "restaurant",
    "name": "Barjot"
  }
},
{
  "type": "node",
  "id": 535882122,
  "lat": 48.8463589,
  "lon": 2.3683266,
  "tags": {
    "amenity": "cafe",
    "brewery": "1664;Kronenbourg",
    "name": "Le petit Rollin",
    "opening_hours": "Mo-Sa 10:00-20:00"
  }
},
{
  "type": "node",
  "id": 535935020,
  "lat": 48.8454329,
  "lon": 2.3684999,
  "tags": {
    "amenity": "cafe",
    "brewery": "1664;Affligem;Kronenbourg",
    "cuisine": "french",
    "name": "Brasserie de l\'Aubrac",
    "opening_hours": "Mo-Sa 08:00-19:00"
  }
},
{
  "type": "node",
  "id": 535936810,
  "lat": 48.8456188,
  "lon": 2.3700692,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japonais",
    "name": "Eki"
  }
},
{
  "type": "node",
  "id": 535938645,
  "lat": 48.8453198,
  "lon": 2.3707747,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Paris Lyon"
  }
},
{
  "type": "node",
  "id": 535941817,
  "lat": 48.8456688,
  "lon": 2.3707898,
  "tags": {
    "addr:housenumber": "13",
    "addr:street": "Boulevard Diderot",
    "amenity": "cafe",
    "name": "Le Restaurant du Boulanger"
  }
},
{
  "type": "node",
  "id": 535942816,
  "lat": 48.8457759,
  "lon": 2.3715126,
  "tags": {
    "amenity": "cafe",
    "brewery": "Grimbergen;Carlsberg;Kronenbourg",
    "cuisine": "french",
    "name": "Le Terminus",
    "opening_hours": "Mo-Sa 06:00-02:00"
  }
},
{
  "type": "node",
  "id": 535945333,
  "lat": 48.8458427,
  "lon": 2.3706835,
  "tags": {
    "amenity": "cafe",
    "brewery": "1664;Affligem",
    "name": "Caviste",
    "old_name": "Le Verre à Vins",
    "opening_hours": "Mo-Sa 08:00-21:00"
  }
},
{
  "type": "node",
  "id": 535947357,
  "lat": 48.8457141,
  "lon": 2.3704736,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "La Maison du Délice",
    "opening_hours": "Mo-Sa 10:30-22:00"
  }
},
{
  "type": "node",
  "id": 536515036,
  "lat": 48.8269211,
  "lon": 2.3322906,
  "tags": {
    "amenity": "cafe",
    "cuisine": "french",
    "name": "Les Jardins d\'Issoire",
    "wifi": "no"
  }
},
{
  "type": "node",
  "id": 536515097,
  "lat": 48.8267472,
  "lon": 2.3324515,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 536515303,
  "lat": 48.8274542,
  "lon": 2.3356985,
  "tags": {
    "addr:housenumber": "6",
    "addr:postcode": "75014",
    "addr:street": "Rue d\'Alésia",
    "amenity": "restaurant",
    "cuisine": "lebanese",
    "name": "Assanabel",
    "website": "http://www.restaurant-assanabel.com",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 536562644,
  "lat": 48.8260575,
  "lon": 2.3569948,
  "tags": {
    "amenity": "cafe",
    "name": "Le Canon"
  }
},
{
  "type": "node",
  "id": 536562971,
  "lat": 48.8263182,
  "lon": 2.3595211,
  "tags": {
    "amenity": "cafe",
    "name": "Le Coche"
  }
},
{
  "type": "node",
  "id": 536570565,
  "lat": 48.8286985,
  "lon": 2.3607276,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 536574152,
  "lat": 48.8308958,
  "lon": 2.3768610,
  "tags": {
    "amenity": "pub",
    "happy_hours": "Mo-Fr 17:30-20:00",
    "microbrewery": "yes",
    "name": "The Frog & British Library",
    "terrace": "yes",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 539397363,
  "lat": 48.8515184,
  "lon": 2.3695612,
  "tags": {
    "amenity": "cafe",
    "name": "Les associés"
  }
},
{
  "type": "node",
  "id": 539397543,
  "lat": 48.8500437,
  "lon": 2.3697078,
  "tags": {
    "amenity": "pub",
    "name": "L\'OPA - Offre Publique d\'Ambiance",
    "opening_hours": "We-Th 19:30-2:00; Fr-Sa 19:30-6:00",
    "phone": "0146281290"
  }
},
{
  "type": "node",
  "id": 540663896,
  "lat": 48.8896403,
  "lon": 2.3358780,
  "tags": {
    "amenity": "cafe",
    "name": "Le Cépage Montmartrois"
  }
},
{
  "type": "node",
  "id": 541201919,
  "lat": 48.8531236,
  "lon": 2.3680462,
  "tags": {
    "amenity": "cafe",
    "name": "Cafe Français"
  }
},
{
  "type": "node",
  "id": 541201920,
  "lat": 48.8529971,
  "lon": 2.3680045,
  "tags": {
    "amenity": "cafe",
    "created_by": "iLOE 1.9",
    "internet_access": "yes",
    "name": "Corso"
  }
},
{
  "type": "node",
  "id": 546475291,
  "lat": 48.8756710,
  "lon": 2.3261070,
  "tags": {
    "amenity": "cafe",
    "name": "Starbucks"
  }
},
{
  "type": "node",
  "id": 546475292,
  "lat": 48.8755523,
  "lon": 2.3252222,
  "tags": {
    "amenity": "restaurant",
    "name": "Concorde Lafayette"
  }
},
{
  "type": "node",
  "id": 546940236,
  "lat": 48.8765103,
  "lon": 2.3232267,
  "tags": {
    "amenity": "cafe",
    "name": "Le Bar Do"
  }
},
{
  "type": "node",
  "id": 546945129,
  "lat": 48.8338379,
  "lon": 2.2396917,
  "tags": {
    "amenity": "restaurant",
    "name": "Les Galopins",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 548833242,
  "lat": 48.8670106,
  "lon": 2.4227092,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Bellevue"
  }
},
{
  "type": "node",
  "id": 555709207,
  "lat": 48.8905909,
  "lon": 2.3820031,
  "tags": {
    "amenity": "restaurant",
    "name": "Le 61"
  }
},
{
  "type": "node",
  "id": 556432368,
  "lat": 48.8324911,
  "lon": 2.2973690,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Zaeka",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre ; mise à jour : 2009"
  }
},
{
  "type": "node",
  "id": 556444230,
  "lat": 48.8342552,
  "lon": 2.3021401,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Da Attilio",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre ; mise à jour : 2009"
  }
},
{
  "type": "node",
  "id": 556461124,
  "lat": 48.8331822,
  "lon": 2.3057910,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "regional",
    "name": "Restaurant des Princes",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre ; mise à jour : 2009"
  }
},
{
  "type": "node",
  "id": 556461131,
  "lat": 48.8330642,
  "lon": 2.3057247,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "regional",
    "name": "Le Grand Pan",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre ; mise à jour : 2009"
  }
},
{
  "type": "node",
  "id": 556493746,
  "lat": 48.8370250,
  "lon": 2.2962718,
  "tags": {
    "amenity": "restaurant",
    "name": "KFC",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 561128954,
  "lat": 48.8320429,
  "lon": 2.3030516,
  "tags": {
    "amenity": "restaurant",
    "name": "Aux Cent Kilos"
  }
},
{
  "type": "node",
  "id": 564312893,
  "lat": 48.9026028,
  "lon": 2.2743922,
  "tags": {
    "amenity": "cafe",
    "name": "Le Clémenceau"
  }
},
{
  "type": "node",
  "id": 564684458,
  "lat": 48.9013883,
  "lon": 2.2720381,
  "tags": {
    "amenity": "cafe",
    "name": "Bar Tabac du Château",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 565052804,
  "lat": 48.8933949,
  "lon": 2.3251780,
  "tags": {
    "amenity": "cafe",
    "name": "Le Petit Paris"
  }
},
{
  "type": "node",
  "id": 568452939,
  "lat": 48.8920861,
  "lon": 2.3792943,
  "tags": {
    "amenity": "restaurant",
    "name": "Brasserie de l\'Ourcq"
  }
},
{
  "type": "node",
  "id": 568453387,
  "lat": 48.8922518,
  "lon": 2.3794780,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "58",
    "addr:postcode": "75019",
    "addr:street": "Rue de l\'Ourcq",
    "amenity": "restaurant",
    "cuisine": "lebanese",
    "name": "L\'Oriental"
  }
},
{
  "type": "node",
  "id": 568454761,
  "lat": 48.8920861,
  "lon": 2.3791828,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 568454764,
  "lat": 48.8919041,
  "lon": 2.3801340,
  "tags": {
    "amenity": "bar",
    "cuisine": "chinese",
    "name": "Chez Chen"
  }
},
{
  "type": "node",
  "id": 568457895,
  "lat": 48.8906427,
  "lon": 2.3820001,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 568458031,
  "lat": 48.8909556,
  "lon": 2.3819203,
  "tags": {
    "amenity": "bar",
    "name": "Le Bergerac"
  }
},
{
  "type": "node",
  "id": 568459562,
  "lat": 48.8895378,
  "lon": 2.3833861,
  "tags": {
    "amenity": "bar",
    "brewery": "Tripel_Karmeliet",
    "name": "Mama Kin"
  }
},
{
  "type": "node",
  "id": 571429770,
  "lat": 48.8847020,
  "lon": 2.3249240,
  "tags": {
    "addr:housenumber": "19",
    "addr:street": "Rue des Dames",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "La Maffiosa",
    "phone": "0155300183"
  }
},
{
  "type": "node",
  "id": 582552434,
  "lat": 48.8585847,
  "lon": 2.3032822,
  "tags": {
    "amenity": "pub",
    "name": "Campanela",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 582577622,
  "lat": 48.8570811,
  "lon": 2.3046405,
  "tags": {
    "amenity": "cafe",
    "name": "Mc Coy"
  }
},
{
  "type": "node",
  "id": 582743160,
  "lat": 48.8567473,
  "lon": 2.3041925,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Okinawa"
  }
},
{
  "type": "node",
  "id": 582743234,
  "lat": 48.8562200,
  "lon": 2.3044115,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "sushi",
    "name": "La maison du sushi"
  }
},
{
  "type": "node",
  "id": 582743808,
  "lat": 48.8560475,
  "lon": 2.3045247,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Bosquet"
  }
},
{
  "type": "node",
  "id": 582745395,
  "lat": 48.8555290,
  "lon": 2.3047711,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "La fontaine de jade"
  }
},
{
  "type": "node",
  "id": 582745476,
  "lat": 48.8555382,
  "lon": 2.3054236,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Tina"
  }
},
{
  "type": "node",
  "id": 582745479,
  "lat": 48.8553164,
  "lon": 2.3055412,
  "tags": {
    "amenity": "restaurant",
    "name": "Caucase"
  }
},
{
  "type": "node",
  "id": 582746525,
  "lat": 48.8551046,
  "lon": 2.3056319,
  "tags": {
    "amenity": "cafe",
    "cuisine": "french",
    "name": "Les Crocs de l\'Ogre"
  }
},
{
  "type": "node",
  "id": 582746799,
  "lat": 48.8549906,
  "lon": 2.3050099,
  "tags": {
    "amenity": "restaurant",
    "name": "Nubia"
  }
},
{
  "type": "node",
  "id": 582747740,
  "lat": 48.8547805,
  "lon": 2.3051304,
  "tags": {
    "amenity": "restaurant",
    "name": "Septième vin"
  }
},
{
  "type": "node",
  "id": 582747931,
  "lat": 48.8549635,
  "lon": 2.3057177,
  "tags": {
    "amenity": "cafe",
    "name": "Bistrot du Monde"
  }
},
{
  "type": "node",
  "id": 582748051,
  "lat": 48.8547343,
  "lon": 2.3058060,
  "tags": {
    "amenity": "cafe",
    "name": "La terrasse"
  }
},
{
  "type": "node",
  "id": 582748201,
  "lat": 48.8544128,
  "lon": 2.3063400,
  "tags": {
    "amenity": "cafe",
    "name": "Le Tourville"
  }
},
{
  "type": "node",
  "id": 582748454,
  "lat": 48.8546400,
  "lon": 2.3064825,
  "tags": {
    "amenity": "cafe",
    "name": "Comptoir du Sept"
  }
},
{
  "type": "node",
  "id": 582931079,
  "lat": 48.8487705,
  "lon": 2.3484391,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'Authre Bistro"
  }
},
{
  "type": "node",
  "id": 582931082,
  "lat": 48.8488367,
  "lon": 2.3472494,
  "tags": {
    "amenity": "restaurant",
    "name": "La Petite Périgourdine"
  }
},
{
  "type": "node",
  "id": 582932088,
  "lat": 48.8454096,
  "lon": 2.3428012,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Coup de Torchon"
  }
},
{
  "type": "node",
  "id": 583517929,
  "lat": 48.8451686,
  "lon": 2.3207087,
  "tags": {
    "addr:street": "Boulevard du Montparnasse",
    "amenity": "restaurant",
    "name": "La Marquise"
  }
},
{
  "type": "node",
  "id": 586381131,
  "lat": 48.8759394,
  "lon": 2.3585316,
  "tags": {
    "amenity": "restaurant",
    "name": "Café de L\'Est"
  }
},
{
  "type": "node",
  "id": 586568216,
  "lat": 48.8559133,
  "lon": 2.3670811,
  "tags": {
    "amenity": "pub",
    "name": "Café Martini"
  }
},
{
  "type": "node",
  "id": 589485658,
  "lat": 48.8522230,
  "lon": 2.3849242,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Paul Bert"
  }
},
{
  "type": "node",
  "id": 589485661,
  "lat": 48.8525692,
  "lon": 2.3830882,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 589485674,
  "lat": 48.8510651,
  "lon": 2.3842956,
  "tags": {
    "amenity": "restaurant",
    "name": "Les Funambules"
  }
},
{
  "type": "node",
  "id": 589485677,
  "lat": 48.8525445,
  "lon": 2.3847726,
  "tags": {
    "amenity": "restaurant",
    "name": "Réunion"
  }
},
{
  "type": "node",
  "id": 589495688,
  "lat": 48.8463782,
  "lon": 2.3799128,
  "tags": {
    "amenity": "cafe",
    "name": "Colombus",
    "opening_hours": "Mo-Sa 07:00-19:30"
  }
},
{
  "type": "node",
  "id": 589495703,
  "lat": 48.8452457,
  "lon": 2.3838856,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "sushi"
  }
},
{
  "type": "node",
  "id": 594054765,
  "lat": 48.8363055,
  "lon": 2.3583190,
  "tags": {
    "addr:housenumber": "24",
    "addr:street": "Rue Duméril",
    "amenity": "bar",
    "name": "La Fût Gueuze"
  }
},
{
  "type": "node",
  "id": 595475913,
  "lat": 48.8239780,
  "lon": 2.3622896,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "thai",
    "name": "Le Bœuf Grillé",
    "note": "buffet à volonté",
    "opening_hours": "Mo-Su 11:30-14:30,19:00-24:00",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2009"
  }
},
{
  "type": "node",
  "id": 595485037,
  "lat": 48.8368051,
  "lon": 2.3525786,
  "tags": {
    "amenity": "restaurant",
    "name": "Chez César"
  }
},
{
  "type": "node",
  "id": 596080444,
  "lat": 48.8890040,
  "lon": 2.3197080,
  "tags": {
    "amenity": "cafe",
    "cuisine": "french",
    "internet_access:fee": "no",
    "name": "Le Zinc",
    "outdoor_seating": "yes",
    "smoking": "no",
    "takeaway": "no",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 596632229,
  "lat": 48.9054725,
  "lon": 2.2827288,
  "tags": {
    "amenity": "cafe",
    "name": "La Rapide",
    "tabaco": "yes"
  }
},
{
  "type": "node",
  "id": 596638879,
  "lat": 48.9061784,
  "lon": 2.2812126,
  "tags": {
    "amenity": "cafe",
    "name": "de la chope",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 596648220,
  "lat": 48.9049710,
  "lon": 2.2831717,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Melting pot",
    "phone": "01 43 34 00 00",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 596660811,
  "lat": 48.9057745,
  "lon": 2.2821690,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Ping Ping",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 596663985,
  "lat": 48.9061459,
  "lon": 2.2841585,
  "tags": {
    "amenity": "pub",
    "name": "Le cercle"
  }
},
{
  "type": "node",
  "id": 596664535,
  "lat": 48.9063027,
  "lon": 2.2837722,
  "tags": {
    "amenity": "pub",
    "name": "La rotonde"
  }
},
{
  "type": "node",
  "id": 596686329,
  "lat": 48.9069921,
  "lon": 2.2824097,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Mumtaz Restaurant Indien"
  }
},
{
  "type": "node",
  "id": 597264959,
  "lat": 48.8833658,
  "lon": 2.3279263,
  "tags": {
    "amenity": "cafe",
    "name": "Starbucks"
  }
},
{
  "type": "node",
  "id": 597265141,
  "lat": 48.8836330,
  "lon": 2.3284520,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "seafood",
    "name": "Charlot Roi des Coquillages",
    "outdoor_seating": "no"
  }
},
{
  "type": "node",
  "id": 597294940,
  "lat": 48.9083160,
  "lon": 2.2847400,
  "tags": {
    "amenity": "restaurant",
    "name": "Rendez Vous"
  }
},
{
  "type": "node",
  "id": 597302420,
  "lat": 48.9065882,
  "lon": 2.2845407,
  "tags": {
    "amenity": "cafe",
    "name": "Au Havane"
  }
},
{
  "type": "node",
  "id": 597414115,
  "lat": 48.8718008,
  "lon": 2.3062646,
  "tags": {
    "amenity": "cafe",
    "name": "Le Seven"
  }
},
{
  "type": "node",
  "id": 597414570,
  "lat": 48.8714631,
  "lon": 2.3044258,
  "tags": {
    "amenity": "cafe",
    "name": "Starbucks Coffee",
    "operator": "Starbucks",
    "phone": "+33 1 42251002"
  }
},
{
  "type": "node",
  "id": 597414699,
  "lat": 48.8714048,
  "lon": 2.3070491,
  "tags": {
    "amenity": "cafe",
    "name": "Le Monte Carlo"
  }
},
{
  "type": "node",
  "id": 597841835,
  "lat": 48.8524629,
  "lon": 2.4041332,
  "tags": {
    "amenity": "restaurant",
    "name": "chinese restaurant"
  }
},
{
  "type": "node",
  "id": 599513255,
  "lat": 48.8584562,
  "lon": 2.3550423,
  "tags": {
    "amenity": "bar",
    "name": "Open Café"
  }
},
{
  "type": "node",
  "id": 599513345,
  "lat": 48.8582859,
  "lon": 2.3552011,
  "tags": {
    "amenity": "cafe",
    "name": "Le Cactus"
  }
},
{
  "type": "node",
  "id": 599513369,
  "lat": 48.8577895,
  "lon": 2.3548000,
  "tags": {
    "addr:housenumber": "18",
    "addr:street": "Rue des Archives",
    "amenity": "cafe",
    "cuisine": "french",
    "name": "Les Marronniers",
    "opening_hours": "Mo-Su 9:00-2:00",
    "phone": "01 40 27 87 72",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 599513406,
  "lat": 48.8575194,
  "lon": 2.3544616,
  "tags": {
    "amenity": "cafe",
    "name": "Le Carrefour",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 599513428,
  "lat": 48.8576438,
  "lon": 2.3546760,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Caffé Vito"
  }
},
{
  "type": "node",
  "id": 599513446,
  "lat": 48.8577293,
  "lon": 2.3547383,
  "tags": {
    "addr:housenumber": "16",
    "addr:street": "Rue des Archives",
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Chez Tsou",
    "phone": "01 42 78 11 47",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 599513479,
  "lat": 48.8578549,
  "lon": 2.3549208,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Pain Quotidien"
  }
},
{
  "type": "node",
  "id": 599513533,
  "lat": 48.8582377,
  "lon": 2.3548214,
  "tags": {
    "amenity": "bar",
    "name": "Cox",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 599514189,
  "lat": 48.8576530,
  "lon": 2.3575640,
  "tags": {
    "amenity": "bar",
    "name": "Le Central"
  }
},
{
  "type": "node",
  "id": 599514799,
  "lat": 48.8589115,
  "lon": 2.3534861,
  "tags": {
    "amenity": "bar",
    "name": "Le Raidd"
  }
},
{
  "type": "node",
  "id": 599514897,
  "lat": 48.8598365,
  "lon": 2.3549664,
  "tags": {
    "amenity": "bar",
    "name": "Full Metal"
  }
},
{
  "type": "node",
  "id": 599514968,
  "lat": 48.8602520,
  "lon": 2.3534175,
  "tags": {
    "amenity": "bar",
    "name": "QG"
  }
},
{
  "type": "node",
  "id": 599515061,
  "lat": 48.8572292,
  "lon": 2.3551661,
  "tags": {
    "amenity": "bar",
    "name": "Quetzal Bar"
  }
},
{
  "type": "node",
  "id": 599793537,
  "lat": 48.8930444,
  "lon": 2.3270341,
  "tags": {
    "amenity": "cafe",
    "name": "La Chope"
  }
},
{
  "type": "node",
  "id": 599956164,
  "lat": 48.8932350,
  "lon": 2.3279355,
  "tags": {
    "amenity": "cafe",
    "name": "Le Championnet"
  }
},
{
  "type": "node",
  "id": 609099358,
  "lat": 48.8343690,
  "lon": 2.3060707,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Vouillé D\'or"
  }
},
{
  "type": "node",
  "id": 609206528,
  "lat": 48.8343850,
  "lon": 2.3935686,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "korean"
  }
},
{
  "type": "node",
  "id": 609212542,
  "lat": 48.8331731,
  "lon": 2.3864450,
  "tags": {
    "amenity": "restaurant",
    "name": "Chai 33",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 609212545,
  "lat": 48.8330278,
  "lon": 2.3862477,
  "tags": {
    "amenity": "restaurant",
    "name": "Hippopotamus",
    "phone": "01 44 73 88 11",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 609212551,
  "lat": 48.8330467,
  "lon": 2.3860133,
  "tags": {
    "amenity": "pub",
    "name": "The Frog at Bercy Village",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 612135369,
  "lat": 48.8142465,
  "lon": 2.3904242,
  "tags": {
    "amenity": "cafe",
    "name": "Café de la Gare"
  }
},
{
  "type": "node",
  "id": 614319063,
  "lat": 48.8135211,
  "lon": 2.3072259,
  "tags": {
    "addr:postcode": "92120",
    "addr:street": "Rue Jules Guesde",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Restaurant du Parc"
  }
},
{
  "type": "node",
  "id": 614319066,
  "lat": 48.8124084,
  "lon": 2.3008926,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "thai",
    "name": "Le Palais d\'Asie",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 615054210,
  "lat": 48.8803159,
  "lon": 2.2995227,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Poncelet"
  }
},
{
  "type": "node",
  "id": 616588306,
  "lat": 48.8333091,
  "lon": 2.3546040,
  "tags": {
    "amenity": "cafe",
    "name": "L\'Entracte"
  }
},
{
  "type": "node",
  "id": 617020000,
  "lat": 48.8890310,
  "lon": 2.3180170,
  "tags": {
    "amenity": "cafe",
    "cuisine": "french",
    "internet_access:fee": "no",
    "name": "Le Bloc",
    "outdoor_seating": "yes",
    "smoking": "no",
    "takeaway": "no",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 617047052,
  "lat": 48.8335479,
  "lon": 2.3631531,
  "tags": {
    "amenity": "cafe",
    "name": "Les Cigognes"
  }
},
{
  "type": "node",
  "id": 617047054,
  "lat": 48.8330119,
  "lon": 2.3635033,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Sukoshi"
  }
},
{
  "type": "node",
  "id": 617047055,
  "lat": 48.8322800,
  "lon": 2.3612312,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Nouveau Village Tao Tao",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 617271625,
  "lat": 48.8331196,
  "lon": 2.3540446,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "regional",
    "name": "Bistrot Romain",
    "source": "survey",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 617287935,
  "lat": 48.8321701,
  "lon": 2.3590298,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Phò"
  }
},
{
  "type": "node",
  "id": 617541036,
  "lat": 48.8829327,
  "lon": 2.3181031,
  "tags": {
    "amenity": "pub",
    "name": "Trois pièces cuisine"
  }
},
{
  "type": "node",
  "id": 617739421,
  "lat": 48.8609908,
  "lon": 2.3480933,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "16",
    "addr:street": "Rue Berger",
    "amenity": "cafe",
    "name": "Pomme de Pain",
    "operator": "Pomme de Pain",
    "source": "mise à jour : 2010;cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre ;cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 617815597,
  "lat": 48.8319327,
  "lon": 2.3582100,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Assis, au neuf"
  }
},
{
  "type": "node",
  "id": 617824193,
  "lat": 48.8182874,
  "lon": 2.3227838,
  "tags": {
    "addr:postcode": "92120",
    "amenity": "restaurant",
    "name": "Le Physalis",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 617827763,
  "lat": 48.8633934,
  "lon": 2.3347841,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Higuma"
  }
},
{
  "type": "node",
  "id": 617905178,
  "lat": 48.8225957,
  "lon": 2.2843432,
  "tags": {
    "amenity": "cafe",
    "name": "Les Platanes",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 617928936,
  "lat": 48.8536005,
  "lon": 2.3428569,
  "tags": {
    "amenity": "bar",
    "name": "La Venus Noire"
  }
},
{
  "type": "node",
  "id": 618269039,
  "lat": 48.8330825,
  "lon": 2.3614982,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Traiteur Asiatique"
  }
},
{
  "type": "node",
  "id": 619174040,
  "lat": 48.8542764,
  "lon": 2.3406582,
  "tags": {
    "amenity": "pub",
    "name": "Bob Cool"
  }
},
{
  "type": "node",
  "id": 619967581,
  "lat": 48.8341628,
  "lon": 2.3648150,
  "tags": {
    "amenity": "cafe",
    "name": "Saint-Claude"
  }
},
{
  "type": "node",
  "id": 619967606,
  "lat": 48.8332640,
  "lon": 2.3561912,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french, couscous",
    "name": "Le Petit Village"
  }
},
{
  "type": "node",
  "id": 620845423,
  "lat": 48.8703112,
  "lon": 2.3424791,
  "tags": {
    "amenity": "cafe",
    "name": "La Java",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 620894706,
  "lat": 48.8707741,
  "lon": 2.3411912,
  "tags": {
    "addr:housenumber": "36",
    "addr:street": "Rue Vivienne",
    "amenity": "restaurant",
    "cuisine": "american",
    "name": "Lefty",
    "ref:FR:SIRET": "753 152 487",
    "source": "http://gouessej.wordpress.com/2014/04/11/lefty-restaurant-americain-a-paris-lefty-american-restaurant-in-paris/%2036%20rue%20Vivienne,%20Paris"
  }
},
{
  "type": "node",
  "id": 620894739,
  "lat": 48.8705661,
  "lon": 2.3420906,
  "tags": {
    "addr:housenumber": "16",
    "addr:street": "Galerie Montmartre",
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Aux bon petit plats",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre ; mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 620894900,
  "lat": 48.8709334,
  "lon": 2.3427566,
  "tags": {
    "addr:housenumber": "161",
    "addr:street": "Rue Montmartre",
    "amenity": "restaurant",
    "name": "Players Bar",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre ; mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 622205225,
  "lat": 48.8321364,
  "lon": 2.3546768,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Monte Cassino",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 622295987,
  "lat": 48.8305388,
  "lon": 2.3568213,
  "tags": {
    "amenity": "cafe",
    "name": "La Place"
  }
},
{
  "type": "node",
  "id": 622303213,
  "lat": 48.8505276,
  "lon": 2.3447826,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Watt"
  }
},
{
  "type": "node",
  "id": 622303216,
  "lat": 48.8513045,
  "lon": 2.3459712,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "latin_american",
    "name": "El Sol y la Luna"
  }
},
{
  "type": "node",
  "id": 623423905,
  "lat": 48.8332913,
  "lon": 2.3338394,
  "tags": {
    "amenity": "pub",
    "name": "Café Oz",
    "website": "http://www.cafe-oz.com/bar-paris_14-5.html",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 624471673,
  "lat": 48.8359170,
  "lon": 2.3591570,
  "tags": {
    "amenity": "cafe",
    "name": "L\'Alliance"
  }
},
{
  "type": "node",
  "id": 624471692,
  "lat": 48.8355997,
  "lon": 2.3589131,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "L\'Oraziano"
  }
},
{
  "type": "node",
  "id": 624471708,
  "lat": 48.8353091,
  "lon": 2.3587223,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Top Pizza"
  }
},
{
  "type": "node",
  "id": 624613486,
  "lat": 48.8573507,
  "lon": 2.3496668,
  "tags": {
    "amenity": "pub",
    "brewery": "guinness",
    "name": "The Green Linnet",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre ; mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 625171510,
  "lat": 48.8324644,
  "lon": 2.3651997,
  "tags": {
    "amenity": "cafe",
    "name": "Domremy"
  }
},
{
  "type": "node",
  "id": 626580865,
  "lat": 48.8534095,
  "lon": 2.3799147,
  "tags": {
    "amenity": "restaurant",
    "name": "Paris-Hanoï",
    "speciality": "Vietnamien"
  }
},
{
  "type": "node",
  "id": 626585221,
  "lat": 48.8723362,
  "lon": 2.3823271,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "thai",
    "name": "Krung Thep"
  }
},
{
  "type": "node",
  "id": 626591644,
  "lat": 48.8253500,
  "lon": 2.3613456,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "Lao",
    "name": "Lao Lane Xang"
  }
},
{
  "type": "node",
  "id": 626614315,
  "lat": 48.8661377,
  "lon": 2.3353287,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Aki",
    "speciality": "Japonais - Osaka"
  }
},
{
  "type": "node",
  "id": 626793068,
  "lat": 48.8384805,
  "lon": 2.3113686,
  "tags": {
    "amenity": "cafe",
    "name": "Au Reveil Du XVème"
  }
},
{
  "type": "node",
  "id": 629665565,
  "lat": 48.8872790,
  "lon": 2.3272010,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "10",
    "addr:postcode": "75018",
    "addr:street": "Rue Hégésippe Moreau",
    "amenity": "bar",
    "name": "Karambole cafe",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre ; mise à jour : 2010",
    "wifi": "yes"
  }
},
{
  "type": "node",
  "id": 629688275,
  "lat": 48.8871654,
  "lon": 2.3269257,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "spanish",
    "name": "Chez Eusebio"
  }
},
{
  "type": "node",
  "id": 629702270,
  "lat": 48.8861847,
  "lon": 2.3270688,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "thai",
    "name": "Wassana",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre ; mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 629889369,
  "lat": 48.8392195,
  "lon": 2.3712618,
  "tags": {
    "amenity": "restaurant",
    "name": "Village Russe"
  }
},
{
  "type": "node",
  "id": 630397854,
  "lat": 48.8321878,
  "lon": 2.3587424,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Restorante Verdi"
  }
},
{
  "type": "node",
  "id": 631088668,
  "lat": 48.8144158,
  "lon": 2.3970444,
  "tags": {
    "amenity": "restaurant",
    "name": "Au roi du couscous"
  }
},
{
  "type": "node",
  "id": 631543615,
  "lat": 48.8360736,
  "lon": 2.3104263,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 631754392,
  "lat": 48.8375411,
  "lon": 2.3916661,
  "tags": {
    "addr:housenumber": "4",
    "addr:postcode": "75012",
    "addr:street": "Rue Taine",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "L\'Inédit Café"
  }
},
{
  "type": "node",
  "id": 632962178,
  "lat": 48.8276851,
  "lon": 2.2743613,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "FIXME"
  }
},
{
  "type": "node",
  "id": 632962185,
  "lat": 48.8260464,
  "lon": 2.2780712,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "couscous"
  }
},
{
  "type": "node",
  "id": 632962269,
  "lat": 48.8294115,
  "lon": 2.2831354,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "sushi",
    "name": "Okayama"
  }
},
{
  "type": "node",
  "id": 632962348,
  "lat": 48.8295798,
  "lon": 2.2833908,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "sushi",
    "name": "Sushiken"
  }
},
{
  "type": "node",
  "id": 635864714,
  "lat": 48.8799557,
  "lon": 2.3862343,
  "tags": {
    "amenity": "pub",
    "name": "Rosa Bonheur",
    "old_name": "Pavillon du Chemin de Fer, Pavillon Weber",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 635903684,
  "lat": 48.8826461,
  "lon": 2.3813790,
  "tags": {
    "amenity": "cafe",
    "name": "Le Marigny",
    "tobacco": "yes",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 637464376,
  "lat": 48.9041025,
  "lon": 2.3314982,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Fontaine d\'Asie"
  }
},
{
  "type": "node",
  "id": 637464397,
  "lat": 48.9054635,
  "lon": 2.3319166,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Le Nagoya"
  }
},
{
  "type": "node",
  "id": 637464406,
  "lat": 48.8974129,
  "lon": 2.3292183,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'Avenue"
  }
},
{
  "type": "node",
  "id": 637464447,
  "lat": 48.9026144,
  "lon": 2.3305648,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "couscous",
    "name": "L\'Oasis"
  }
},
{
  "type": "node",
  "id": 638345852,
  "lat": 48.8538840,
  "lon": 2.3375740,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Café de Paris",
    "phone": "+33146348411"
  }
},
{
  "type": "node",
  "id": 639619634,
  "lat": 48.8188024,
  "lon": 2.3258578,
  "tags": {
    "addr:city": "Montrouge",
    "addr:country": "FR",
    "addr:housenumber": "43",
    "addr:postcode": "92120",
    "addr:street": "Avenue Aristide Briand",
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Pizza Prima",
    "note": "Assiette bien remplie. Bonne humeur de la serveuse",
    "phone": "0146553382"
  }
},
{
  "type": "node",
  "id": 648693411,
  "lat": 48.9034662,
  "lon": 2.2301453,
  "tags": {
    "amenity": "restaurant",
    "name": "Chez Cochon",
    "opening_hours": "Mo,Tu 12:00-14:30,19:00-22:00; We-Sa 12:00-14:30,19:00-23:00; Su 12:00-14:30",
    "phone": "01.56.47.14.14",
    "source": "survey; knowledge",
    "website": "http://www.restaurant-chezcochon.com/"
  }
},
{
  "type": "node",
  "id": 651533396,
  "lat": 48.8830692,
  "lon": 2.3825494,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "sushi",
    "name": "Sushi Tokyo",
    "source": "cadastre-dgi-fr source : Direction G�n�rale des Imp�ts - Cadastre;mise � jour : 2010"
  }
},
{
  "type": "node",
  "id": 651533421,
  "lat": 48.8839003,
  "lon": 2.3840684,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Pizza vegetarienne",
    "source": "cadastre-dgi-fr source : Direction G�n�rale des Imp�ts - Cadastre;mise � jour : 2010"
  }
},
{
  "type": "node",
  "id": 653366336,
  "lat": 48.8459719,
  "lon": 2.2775704,
  "tags": {
    "amenity": "restaurant",
    "description": "French cuisine",
    "name": "Regalia"
  }
},
{
  "type": "node",
  "id": 653878922,
  "lat": 48.8856788,
  "lon": 2.3405124,
  "tags": {
    "amenity": "pub",
    "name": "Au rendez vous des Amis"
  }
},
{
  "type": "node",
  "id": 654051515,
  "lat": 48.8296783,
  "lon": 2.2835276,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Dolce Vita",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 654051520,
  "lat": 48.8298840,
  "lon": 2.2838334,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "L\'Olivier",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 654051528,
  "lat": 48.8299748,
  "lon": 2.2839684,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Le Lys du Soleil",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 654051531,
  "lat": 48.8299388,
  "lon": 2.2844286,
  "tags": {
    "amenity": "pub",
    "cuisine": "french",
    "food": "yes",
    "name": "Le Versailles",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 654051532,
  "lat": 48.8298615,
  "lon": 2.2845750,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "sushi",
    "name": "Shoka",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 654525111,
  "lat": 48.8747565,
  "lon": 2.2279251,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 658959582,
  "lat": 48.8605714,
  "lon": 2.3454975,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "vegetarian",
    "description": "Restaurant végétarien, végétalien (vegan)",
    "diet:vegetarian": "only",
    "name": "Saveurs Végét\'halles",
    "website": "http://www.saveursvegethalles.fr"
  }
},
{
  "type": "node",
  "id": 661136640,
  "lat": 48.8286167,
  "lon": 2.3222750,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Les petits plats"
  }
},
{
  "type": "node",
  "id": 661136641,
  "lat": 48.8291859,
  "lon": 2.3226894,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "regional",
    "name": "Le grand comptoir"
  }
},
{
  "type": "node",
  "id": 662753459,
  "lat": 48.8590672,
  "lon": 2.3498178,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Pavé"
  }
},
{
  "type": "node",
  "id": 663314810,
  "lat": 48.8768016,
  "lon": 2.3394255,
  "tags": {
    "amenity": "restaurant",
    "name": "La Rimaudière",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 663744704,
  "lat": 48.8445390,
  "lon": 2.3211809,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Bec rouge"
  }
},
{
  "type": "node",
  "id": 664266313,
  "lat": 48.8305262,
  "lon": 2.3381265,
  "tags": {
    "amenity": "restaurant",
    "name": "FIAP",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 666476157,
  "lat": 48.8475509,
  "lon": 2.3775378,
  "tags": {
    "amenity": "cafe",
    "name": "L\'Hélicon Café"
  }
},
{
  "type": "node",
  "id": 667281513,
  "lat": 48.8627174,
  "lon": 2.3794641,
  "tags": {
    "amenity": "cafe",
    "name": "Les Enfants terribles"
  }
},
{
  "type": "node",
  "id": 667281515,
  "lat": 48.8671282,
  "lon": 2.3756094,
  "tags": {
    "amenity": "restaurant",
    "speciality": "Chinois - Ouighour"
  }
},
{
  "type": "node",
  "id": 667281516,
  "lat": 48.8720047,
  "lon": 2.3455258,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 667304728,
  "lat": 48.8496002,
  "lon": 2.3981379,
  "tags": {
    "amenity": "restaurant",
    "speciality": "thai"
  }
},
{
  "type": "node",
  "id": 667304736,
  "lat": 48.8513139,
  "lon": 2.3817099,
  "tags": {
    "amenity": "cafe",
    "name": "Chez Alphonse"
  }
},
{
  "type": "node",
  "id": 667304738,
  "lat": 48.8528829,
  "lon": 2.3864220,
  "tags": {
    "amenity": "restaurant",
    "name": "Café Titon"
  }
},
{
  "type": "node",
  "id": 667304743,
  "lat": 48.8530453,
  "lon": 2.3745559,
  "tags": {
    "amenity": "restaurant",
    "name": "La porte"
  }
},
{
  "type": "node",
  "id": 667304745,
  "lat": 48.8479680,
  "lon": 2.3710745,
  "tags": {
    "addr:housenumber": "45",
    "addr:postcode": "75012",
    "addr:street": "Avenue Ledru-Rollin",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "La Biche Au Bois",
    "opening_hours": "Mo-Sa 12:00-14:00,19:00-23:00",
    "phone": "0143433438",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "speciality": "gibier"
  }
},
{
  "type": "node",
  "id": 667304746,
  "lat": 48.8485260,
  "lon": 2.3720544,
  "tags": {
    "amenity": "restaurant",
    "speciality": "crêperie"
  }
},
{
  "type": "node",
  "id": 667304747,
  "lat": 48.8504050,
  "lon": 2.3701018,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Shin Isakaya",
    "phone": "+33 1 46 28 93 88",
    "source": "survey",
    "speciality": "sushi-yakitori",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 667305408,
  "lat": 48.8517234,
  "lon": 2.3993213,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Le Bristrot ZEN",
    "speciality": "sushi-yakitori"
  }
},
{
  "type": "node",
  "id": 667305411,
  "lat": 48.8503838,
  "lon": 2.3895178,
  "tags": {
    "amenity": "bar",
    "brewery": "Amstel;H-Beer;Leffe",
    "name": "Le Rota"
  }
},
{
  "type": "node",
  "id": 667326928,
  "lat": 48.8469782,
  "lon": 2.3850371,
  "tags": {
    "amenity": "cafe",
    "brewery": "Leffe;Pelfort;Heineken",
    "happy_hours": "Mo-Sa 16:00-24:00",
    "name": "Le Bistro de Paris",
    "opening_hours": "Mo-Sa 07:00-24:00",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 667338293,
  "lat": 48.8652131,
  "lon": 2.3628703,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Bistrot Gourmand du Haut Marais"
  }
},
{
  "type": "node",
  "id": 667338299,
  "lat": 48.8649450,
  "lon": 2.3550985,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese"
  }
},
{
  "type": "node",
  "id": 667338303,
  "lat": 48.8646517,
  "lon": 2.3565127,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "note": "specialites de Wenzhou"
  }
},
{
  "type": "node",
  "id": 667338304,
  "lat": 48.8647871,
  "lon": 2.3552146,
  "tags": {
    "amenity": "cafe",
    "name": "Le Puits des Arts"
  }
},
{
  "type": "node",
  "id": 667338307,
  "lat": 48.8649151,
  "lon": 2.3552894,
  "tags": {
    "amenity": "cafe",
    "name": "Le Royal Beaubourg"
  }
},
{
  "type": "node",
  "id": 667338323,
  "lat": 48.8646274,
  "lon": 2.3569545,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "description": "Spécialités de Wenzhou",
    "name": "La Grande muraille"
  }
},
{
  "type": "node",
  "id": 667338326,
  "lat": 48.8650523,
  "lon": 2.3569392,
  "tags": {
    "addr:housenumber": "9",
    "addr:postcode": "75003",
    "addr:street": "Rue Volta",
    "amenity": "restaurant",
    "cuisine": "chinese",
    "description": "Spécialités de Wenzhou",
    "name": "Temple Céleste",
    "phone": "01 42 72 09 75"
  }
},
{
  "type": "node",
  "id": 667338347,
  "lat": 48.8289443,
  "lon": 2.3298857,
  "tags": {
    "amenity": "restaurant",
    "speciality": "sushi-yakitori",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 667338348,
  "lat": 48.8289302,
  "lon": 2.3293063,
  "tags": {
    "amenity": "restaurant",
    "speciality": "sushi-yakitori"
  }
},
{
  "type": "node",
  "id": 667338349,
  "lat": 48.8288878,
  "lon": 2.3328361,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 667339451,
  "lat": 48.8619637,
  "lon": 2.3674251,
  "tags": {
    "addr:housenumber": "111",
    "addr:street": "Rue Amelot",
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "La muraille d\'or",
    "phone": "01 49 23 90 78",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 667339452,
  "lat": 48.8626665,
  "lon": 2.3674724,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "104",
    "addr:postcode": "75011",
    "addr:street": "Rue Amelot",
    "amenity": "restaurant",
    "capacity": "50",
    "cuisine": "regional,_burger",
    "email": "centenaire75011@gmail.com",
    "internet_access": "yes",
    "name": "Le centenaire",
    "opening_hours": "Mo-Su 07:00-02:00",
    "phone": "01 47 00 35 46",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 667342368,
  "lat": 48.8719959,
  "lon": 2.3774019,
  "tags": {
    "amenity": "cafe",
    "name": "La Vieilleuse"
  }
},
{
  "type": "node",
  "id": 667342378,
  "lat": 48.8722880,
  "lon": 2.3780140,
  "tags": {
    "amenity": "cafe",
    "name": "Aux Folies"
  }
},
{
  "type": "node",
  "id": 667342381,
  "lat": 48.8730352,
  "lon": 2.3796739,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Pacifique"
  }
},
{
  "type": "node",
  "id": 667526193,
  "lat": 48.8284725,
  "lon": 2.2816377,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "La couronne dorée",
    "source": "knowledge"
  }
},
{
  "type": "node",
  "id": 667526203,
  "lat": 48.8289093,
  "lon": 2.2823683,
  "tags": {
    "amenity": "pub",
    "name": "Le Fontenoy"
  }
},
{
  "type": "node",
  "id": 669014548,
  "lat": 48.8281591,
  "lon": 2.2815065,
  "tags": {
    "amenity": "pub",
    "name": "Le Michelet",
    "source": "knowledge"
  }
},
{
  "type": "node",
  "id": 669075449,
  "lat": 48.8376310,
  "lon": 2.2974210,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Pizzeria Taormina Convention",
    "source": "knowledge",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 669075496,
  "lat": 48.8383289,
  "lon": 2.2982482,
  "tags": {
    "amenity": "pub",
    "name": "Le Brazza",
    "source": "knowledge"
  }
},
{
  "type": "node",
  "id": 669803007,
  "lat": 48.8958230,
  "lon": 2.3395842,
  "tags": {
    "amenity": "restaurant",
    "created_by": "iLOE 1.9",
    "name": "La Renaissance"
  }
},
{
  "type": "node",
  "id": 670856630,
  "lat": 48.8686660,
  "lon": 2.2266100,
  "tags": {
    "addr:housenumber": "14",
    "addr:street": "Rue Etienne Dolet",
    "amenity": "restaurant",
    "name": "Chez Pailine",
    "phone": "+33142042879"
  }
},
{
  "type": "node",
  "id": 671825376,
  "lat": 48.8461025,
  "lon": 2.3834255,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "lebanese"
  }
},
{
  "type": "node",
  "id": 671825377,
  "lat": 48.8485516,
  "lon": 2.3780692,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 672842496,
  "lat": 48.8794405,
  "lon": 2.3338166,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Villa Sushi",
    "opening_hours": "Mo-Sa 11:00-15:00, 18:00-23:00 ; Su 18:00-23:00",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 673778208,
  "lat": 48.8283656,
  "lon": 2.2821988,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "La Manufacture",
    "source": "knowledge",
    "website": "http://www.restaurantmanufacture.com/"
  }
},
{
  "type": "node",
  "id": 674021607,
  "lat": 48.8430137,
  "lon": 2.3209354,
  "tags": {
    "amenity": "restaurant",
    "name": "Crêperie de Pontivy"
  }
},
{
  "type": "node",
  "id": 674211605,
  "lat": 48.8386044,
  "lon": 2.2987363,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "steak_house",
    "operator": "Hippopotamus",
    "source": "knowledge"
  }
},
{
  "type": "node",
  "id": 676012232,
  "lat": 48.8878588,
  "lon": 2.3596648,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "fixme": "name?",
    "name": "Pizza"
  }
},
{
  "type": "node",
  "id": 676028807,
  "lat": 48.8753301,
  "lon": 2.3889995,
  "tags": {
    "amenity": "bar",
    "name": "Le Nouvo Cosmos"
  }
},
{
  "type": "node",
  "id": 676116665,
  "lat": 48.8451034,
  "lon": 2.3492462,
  "tags": {
    "amenity": "pub",
    "brewery": "Maredsous;tripel_karmeliet;chouffe;leffe;chimay",
    "name": "Le Mayflower"
  }
},
{
  "type": "node",
  "id": 676116666,
  "lat": 48.8472505,
  "lon": 2.3480517,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'Écurie"
  }
},
{
  "type": "node",
  "id": 676116667,
  "lat": 48.8472832,
  "lon": 2.3477251,
  "tags": {
    "amenity": "pub",
    "name": "Le Piano Vache"
  }
},
{
  "type": "node",
  "id": 676116669,
  "lat": 48.8470809,
  "lon": 2.3486565,
  "tags": {
    "amenity": "pub",
    "name": "Le Melocoton"
  }
},
{
  "type": "node",
  "id": 676748255,
  "lat": 48.8565275,
  "lon": 2.3420348,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Caveau du Palais",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 676748299,
  "lat": 48.8568716,
  "lon": 2.3421327,
  "tags": {
    "amenity": "restaurant",
    "name": "La Rose de France",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 676748319,
  "lat": 48.8563329,
  "lon": 2.3422554,
  "tags": {
    "amenity": "restaurant",
    "name": "Restaurant Paul",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 676748378,
  "lat": 48.8569183,
  "lon": 2.3418674,
  "tags": {
    "amenity": "restaurant",
    "name": "Ma Salle à Manger",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 676851331,
  "lat": 48.8333386,
  "lon": 2.2983800,
  "tags": {
    "amenity": "restaurant",
    "name": "La Cantine des Tontons",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre ; mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 676851333,
  "lat": 48.8319312,
  "lon": 2.3029513,
  "tags": {
    "amenity": "restaurant",
    "name": "Les Tontons",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre ; mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 676860092,
  "lat": 48.8577895,
  "lon": 2.3468656,
  "tags": {
    "amenity": "restaurant",
    "name": "Brasserie Zimmer",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 676860118,
  "lat": 48.8582957,
  "lon": 2.3474796,
  "tags": {
    "addr:housenumber": "4",
    "addr:street": "Rue Saint-Denis",
    "amenity": "pub",
    "brewery": "chimay",
    "name": "Au Trappiste",
    "phone": "+33 0142330850",
    "postcode": "75001"
  }
},
{
  "type": "node",
  "id": 676860119,
  "lat": 48.8583659,
  "lon": 2.3474922,
  "tags": {
    "addr:housenumber": "6",
    "addr:street": "Rue Saint-Denis",
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Palace Châtelet",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 676860124,
  "lat": 48.8584398,
  "lon": 2.3475072,
  "tags": {
    "addr:housenumber": "8",
    "addr:street": "Rue Saint-Denis",
    "amenity": "cafe",
    "name": "Tabac du Châtelet",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 676860175,
  "lat": 48.8592361,
  "lon": 2.3476099,
  "tags": {
    "amenity": "pub",
    "brewery": "leffe",
    "name": "Le Petit Châtelet",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 676860176,
  "lat": 48.8592775,
  "lon": 2.3476294,
  "tags": {
    "amenity": "cafe",
    "name": "Le Baltard",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 676860187,
  "lat": 48.8594544,
  "lon": 2.3471922,
  "tags": {
    "addr:housenumber": "2",
    "addr:street": "Rue Sainte-Opportune",
    "amenity": "cafe",
    "name": "Le petit opportun",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 677090325,
  "lat": 48.8551784,
  "lon": 2.3460397,
  "tags": {
    "amenity": "cafe",
    "name": "Les Deux Palais",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 677597945,
  "lat": 48.8536129,
  "lon": 2.3494706,
  "tags": {
    "amenity": "cafe",
    "name": "Aux Tours de Notre-Dame",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 677610911,
  "lat": 48.8542384,
  "lon": 2.3498773,
  "tags": {
    "amenity": "cafe",
    "name": "Le Quasimodo",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 677610918,
  "lat": 48.8542020,
  "lon": 2.3503178,
  "tags": {
    "amenity": "restaurant",
    "name": "Au Vieux Paris d\'Arcole",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 677730871,
  "lat": 48.8600943,
  "lon": 2.3451124,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Samsara II",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 677731059,
  "lat": 48.8604674,
  "lon": 2.3454225,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Ristorante Tavola Calda",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 677805360,
  "lat": 48.8598608,
  "lon": 2.3468110,
  "tags": {
    "addr:housenumber": "14",
    "addr:street": "Rue des Halles",
    "brewery": "brewdog",
    "name": "Bières Cultes",
    "shop": "beverages",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 677805387,
  "lat": 48.8597005,
  "lon": 2.3469841,
  "tags": {
    "addr:housenumber": "1",
    "addr:street": "Place Sainte-Opportune",
    "amenity": "cafe",
    "name": "Café vigouroux",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 677967482,
  "lat": 48.8599442,
  "lon": 2.3474167,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "66",
    "addr:postcode": "75001",
    "addr:street": "Rue des Lombards",
    "amenity": "restaurant",
    "name": "Le Tropic Café",
    "opening_hours": "Mo-Su 12:00 - 02:00",
    "opening_hours:url": "http://www.letropicafe.fr",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.letropicafe.fr"
  }
},
{
  "type": "node",
  "id": 677967537,
  "lat": 48.8598564,
  "lon": 2.3477249,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "60",
    "addr:street": "Rue des Lombards",
    "amenity": "cafe",
    "name": "Sunside",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 677967538,
  "lat": 48.8598395,
  "lon": 2.3478001,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "58",
    "addr:street": "Rue des Lombards",
    "amenity": "cafe",
    "name": "Le Baiser Salé",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 677967779,
  "lat": 48.8603899,
  "lon": 2.3475800,
  "tags": {
    "amenity": "cafe",
    "name": "Au Coeur Couronne",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 677967821,
  "lat": 48.8597051,
  "lon": 2.3483832,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "46",
    "addr:street": "Rue des Lombards",
    "amenity": "pub",
    "name": "Hide Out",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 677967904,
  "lat": 48.8599899,
  "lon": 2.3488202,
  "tags": {
    "amenity": "cafe",
    "name": "Au P\'tit Boulevard",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 677967928,
  "lat": 48.8608470,
  "lon": 2.3488026,
  "tags": {
    "amenity": "cafe",
    "name": "Café Rive Droite",
    "source": "survey 2013"
  }
},
{
  "type": "node",
  "id": 677981959,
  "lat": 48.8601724,
  "lon": 2.3488956,
  "tags": {
    "amenity": "restaurant",
    "name": "Dupont Café",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 677998873,
  "lat": 48.8603586,
  "lon": 2.3484772,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "38",
    "addr:street": "Rue Saint-Denis",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "L\'Entrecôte des Halles",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 678033088,
  "lat": 48.8609295,
  "lon": 2.3450073,
  "tags": {
    "amenity": "restaurant",
    "name": "La Crêperie Saint-Honoré",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 678802776,
  "lat": 48.8612791,
  "lon": 2.3423684,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Midory",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 678802784,
  "lat": 48.8613359,
  "lon": 2.3426577,
  "tags": {
    "amenity": "restaurant",
    "name": "La Taverne de l\'Arbre Sec",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 678802790,
  "lat": 48.8612560,
  "lon": 2.3431916,
  "tags": {
    "amenity": "restaurant",
    "name": "Bistrot du 1er",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 678802941,
  "lat": 48.8613382,
  "lon": 2.3448649,
  "tags": {
    "amenity": "restaurant",
    "name": "Au Chien qui Fume",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 678825769,
  "lat": 48.8617216,
  "lon": 2.3432877,
  "tags": {
    "addr:housenumber": "9",
    "addr:street": "Rue Vauvilliers",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "La Poule au Pot",
    "opening_hours": "Tu-Su 19:00-5:00",
    "phone": "01 42 36 32 96",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.lapouleaupot.com/"
  }
},
{
  "type": "node",
  "id": 678855681,
  "lat": 48.8639344,
  "lon": 2.3425970,
  "tags": {
    "amenity": "cafe",
    "name": "La Promenade de Venus",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 678855682,
  "lat": 48.8637021,
  "lon": 2.3430520,
  "tags": {
    "amenity": "cafe",
    "name": "Taverne Karlsbräu",
    "opening_hours": "24/7",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 678876764,
  "lat": 48.8602965,
  "lon": 2.3418540,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Changhai Hang-Tcheou",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 678892211,
  "lat": 48.8588694,
  "lon": 2.3415282,
  "tags": {
    "amenity": "restaurant",
    "name": "Café du Pont Neuf",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 678898401,
  "lat": 48.8608773,
  "lon": 2.3423534,
  "tags": {
    "amenity": "bar",
    "name": "Chez la Vieile Adrienne",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 679414266,
  "lat": 48.8617494,
  "lon": 2.3405457,
  "tags": {
    "amenity": "bar",
    "name": "L\'Oratoire",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 679467050,
  "lat": 48.8631557,
  "lon": 2.3352468,
  "tags": {
    "amenity": "cafe",
    "name": "Café Ruc",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 679480163,
  "lat": 48.8622902,
  "lon": 2.3393649,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Thermidor",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 679495105,
  "lat": 48.8620988,
  "lon": 2.3398606,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Petit Mâchon",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 679495130,
  "lat": 48.8622685,
  "lon": 2.3398888,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Palais Royal Hong-Kong",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 679495134,
  "lat": 48.8626050,
  "lon": 2.3395217,
  "tags": {
    "amenity": "cafe",
    "name": "Louise Café",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 679495407,
  "lat": 48.8626905,
  "lon": 2.3414763,
  "tags": {
    "amenity": "restaurant",
    "name": "Aux Deux Écus",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 679815868,
  "lat": 48.8177880,
  "lon": 2.3249332,
  "tags": {
    "addr:postcode": "92120",
    "amenity": "restaurant",
    "name": "Le Bistrot du Boucher"
  }
},
{
  "type": "node",
  "id": 679818987,
  "lat": 48.8196164,
  "lon": 2.3234545,
  "tags": {
    "addr:postcode": "92120",
    "addr:street": "Avenue Henri Ginoux",
    "amenity": "restaurant",
    "name": "Aubergine et cie"
  }
},
{
  "type": "node",
  "id": 680443054,
  "lat": 48.8615068,
  "lon": 2.3488951,
  "tags": {
    "amenity": "cafe",
    "name": "Aux Trois Maillets",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 680443085,
  "lat": 48.8619643,
  "lon": 2.3491461,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Relais du Vin",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 680443108,
  "lat": 48.8622712,
  "lon": 2.3492903,
  "tags": {
    "amenity": "cafe",
    "name": "Le Centre Halles Café",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 680456535,
  "lat": 48.8625821,
  "lon": 2.3483927,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "9",
    "addr:street": "Rue Pierre Lescot",
    "amenity": "restaurant",
    "description": "Bistrot traditionnel au cœur des halles. Service continu ouvert 7/7",
    "name": "Le Père Fouettard",
    "opening_hours": "24/7",
    "operator": "Flottes",
    "phone": "01.42.33.74.17",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.brasserie-flottes.fr/au-pere-fouettard/",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 680617533,
  "lat": 48.8635373,
  "lon": 2.3490562,
  "tags": {
    "addr:housenumber": "30",
    "addr:street": "Rue Pierre Lescot",
    "amenity": "restaurant",
    "cuisine": "burger",
    "name": "Joe Allen",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 680617611,
  "lat": 48.8631582,
  "lon": 2.3498973,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Pastapapa",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 681245879,
  "lat": 48.8516703,
  "lon": 2.2897709,
  "tags": {
    "amenity": "cafe",
    "name": "Le Saint-Martin\'s"
  }
},
{
  "type": "node",
  "id": 681246626,
  "lat": 48.8504340,
  "lon": 2.2887377,
  "tags": {
    "FIXME": "add name, ajouter le nom",
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 681283199,
  "lat": 48.8629810,
  "lon": 2.3484703,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "24",
    "addr:street": "Rue de la Grande Truanderie",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Pharamond",
    "phone": "01 40 28 45 18",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.pharamond.fr/"
  }
},
{
  "type": "node",
  "id": 681293869,
  "lat": 48.8644969,
  "lon": 2.3453886,
  "tags": {
    "addr:housenumber": "34",
    "addr:street": "Rue Montmartre",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Comptoir De La Gastronomie",
    "opening_hours": "Mo-Th 12:00-23:00;Fr-Sa 12:00-0:00",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 681293880,
  "lat": 48.8633332,
  "lon": 2.3460793,
  "tags": {
    "addr:housenumber": "2",
    "addr:street": "Rue Montmartre",
    "amenity": "restaurant",
    "name": "Jet-Lag",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 681293895,
  "lat": 48.8633690,
  "lon": 2.3462612,
  "tags": {
    "addr:housenumber": "3",
    "addr:street": "Rue Montorgueil",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "La Perla",
    "phone": "0140419453",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 681293961,
  "lat": 48.8634242,
  "lon": 2.3462790,
  "tags": {
    "addr:housenumber": "5",
    "addr:street": "Rue Montorgueil",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Deliziefollie",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 681294130,
  "lat": 48.8641678,
  "lon": 2.3467038,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'Escargot Montorgueil",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 681315159,
  "lat": 48.8636473,
  "lon": 2.3431563,
  "tags": {
    "addr:housenumber": "14",
    "addr:street": "Rue Coquillière",
    "amenity": "restaurant",
    "cuisine": "regional",
    "name": "L\'Assiette Aveyronnaise",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 681369338,
  "lat": 48.8640959,
  "lon": 2.3415983,
  "tags": {
    "amenity": "cafe",
    "name": "L\'Imprimerie",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 681369663,
  "lat": 48.8640954,
  "lon": 2.3438023,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "thai",
    "name": "Baan Raï",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 681430409,
  "lat": 48.8625475,
  "lon": 2.3407883,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Casa Festa",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 681430439,
  "lat": 48.8629462,
  "lon": 2.3411925,
  "tags": {
    "amenity": "cafe",
    "name": "Brasserie de la Bourse",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 681479162,
  "lat": 48.8647612,
  "lon": 2.3406523,
  "tags": {
    "amenity": "restaurant",
    "name": "Namiki",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 681479170,
  "lat": 48.8646538,
  "lon": 2.3408552,
  "tags": {
    "amenity": "bar",
    "name": "Le Nustrale",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 681534768,
  "lat": 48.8659486,
  "lon": 2.3400023,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Regent",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 681534794,
  "lat": 48.8644890,
  "lon": 2.3404697,
  "tags": {
    "amenity": "restaurant",
    "name": "Au Cabanon",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 681534864,
  "lat": 48.8655554,
  "lon": 2.3403846,
  "tags": {
    "amenity": "restaurant",
    "name": "Bistrot Victoires",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 681555427,
  "lat": 48.8660668,
  "lon": 2.3390095,
  "tags": {
    "addr:housenumber": "6",
    "addr:street": "Rue de Beaujolais",
    "amenity": "restaurant",
    "cuisine": "corsican",
    "email": "acasaluna@noos.fr",
    "name": "A Casaluna",
    "phone": "01 42 60 05 11",
    "smoking": "no",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "www.acasaluna.com"
  }
},
{
  "type": "node",
  "id": 681555435,
  "lat": 48.8661019,
  "lon": 2.3389239,
  "tags": {
    "amenity": "restaurant",
    "name": "Table d\'Hôte du Palais Royal",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "wifi": "no"
  }
},
{
  "type": "node",
  "id": 681677109,
  "lat": 48.8629745,
  "lon": 2.3357764,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "157",
    "addr:postcode": "75001",
    "addr:street": "Rue Saint-Honoré",
    "amenity": "cafe",
    "name": "Café de la Comédie",
    "phone": "+33142614001",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 681818224,
  "lat": 48.8650200,
  "lon": 2.3366293,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'Incroyable",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 681818309,
  "lat": 48.8656093,
  "lon": 2.3369261,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Le Festival",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 681818414,
  "lat": 48.8663099,
  "lon": 2.3374684,
  "tags": {
    "amenity": "restaurant",
    "name": "Bar de l\'Entracte",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 681902192,
  "lat": 48.8627666,
  "lon": 2.3376540,
  "tags": {
    "amenity": "cafe",
    "name": "Café Palais Royal",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 682215733,
  "lat": 48.8649873,
  "lon": 2.3358959,
  "tags": {
    "addr:housenumber": "14",
    "addr:street": "Rue Molière",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Takara",
    "opening_hours": "Mo-Su 19:00-22:00;Tu-Fr 12:00-14:00",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 682258960,
  "lat": 48.8660066,
  "lon": 2.3354463,
  "tags": {
    "addr:housenumber": "14",
    "addr:street": "Rue Sainte-Anne",
    "amenity": "restaurant",
    "name": "Chikoja",
    "opening_hours": "Mo-Su 11:30-23:30",
    "phone": "01 42 60 58 88",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.chikoja.fr/"
  }
},
{
  "type": "node",
  "id": 682294048,
  "lat": 48.8660278,
  "lon": 2.3340077,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Royal Opéra",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 682302354,
  "lat": 48.8663930,
  "lon": 2.3354840,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Kunitoraya",
    "source": "survey",
    "website": "http://www.kunitoraya.com"
  }
},
{
  "type": "node",
  "id": 682302355,
  "lat": 48.8663406,
  "lon": 2.3354494,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "37",
    "addr:postcode": "75001",
    "addr:street": "Rue Sainte-Anne",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Sapporo",
    "phone": "+33142606098",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 682302359,
  "lat": 48.8666001,
  "lon": 2.3357750,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Higuma",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://higuma.fr"
  }
},
{
  "type": "node",
  "id": 682340351,
  "lat": 48.8646841,
  "lon": 2.3338346,
  "tags": {
    "addr:housenumber": "9",
    "addr:street": "Rue d\'Argenteuil",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Sanukiya",
    "opening_hours": "Mo-Su 11:30-22:30",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 682364951,
  "lat": 48.8660273,
  "lon": 2.3312781,
  "tags": {
    "amenity": "restaurant",
    "name": "Au Bistrot",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 682386969,
  "lat": 48.8380436,
  "lon": 2.2819311,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "181",
    "addr:postcode": "75015",
    "addr:street": "Rue de Lourmel",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "La Cave de L\'Os à Moelle",
    "phone": "01 45 57 28 28",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre ; mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 682395334,
  "lat": 48.8447859,
  "lon": 2.2964578,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "22",
    "addr:postcode": "75015",
    "addr:street": "Rue Gramme",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Koyuki",
    "phone": "+33 1 45 32 67 56",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre ; mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 682420361,
  "lat": 48.8475784,
  "lon": 2.2858410,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "11b",
    "amenity": "restaurant",
    "cuisine": "korean",
    "name": "Akasaka (아가사가)",
    "name:ko": "아가사가",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre ; mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 682441360,
  "lat": 48.8499929,
  "lon": 2.2889519,
  "tags": {
    "addr:housenumber": "35",
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Pizzeria Santa Lucia",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre ; mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 683094995,
  "lat": 48.8658325,
  "lon": 2.3324895,
  "tags": {
    "addr:housenumber": "29",
    "addr:street": "Rue Saint-Roch",
    "amenity": "restaurant",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 683094996,
  "lat": 48.8658744,
  "lon": 2.3325173,
  "tags": {
    "addr:housenumber": "31",
    "addr:street": "Rue Saint-Roch",
    "amenity": "restaurant",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 683095024,
  "lat": 48.8659399,
  "lon": 2.3325614,
  "tags": {
    "addr:housenumber": "33",
    "addr:street": "Rue Saint-Roch",
    "amenity": "restaurant",
    "name": "Auberge Saint-Roch",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.auberge-saint-roch.com/"
  }
},
{
  "type": "node",
  "id": 683133864,
  "lat": 48.8663779,
  "lon": 2.3317318,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Pain Quotidien",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 683133894,
  "lat": 48.8669595,
  "lon": 2.3323778,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'Écluse",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 683133895,
  "lat": 48.8671333,
  "lon": 2.3324843,
  "tags": {
    "amenity": "cafe",
    "name": "Le Zinc d\'Honoré",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 683133896,
  "lat": 48.8670401,
  "lon": 2.3324272,
  "tags": {
    "amenity": "restaurant",
    "name": "Rouge Saint-Honoré",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 683133904,
  "lat": 48.8676684,
  "lon": 2.3316870,
  "tags": {
    "amenity": "restaurant",
    "name": "Cuisine et Confidences",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 683133914,
  "lat": 48.8671882,
  "lon": 2.3325179,
  "tags": {
    "amenity": "restaurant",
    "name": "Partie de Campagne",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 683133915,
  "lat": 48.8675087,
  "lon": 2.3324647,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Chanteclerc",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 683133916,
  "lat": 48.8676565,
  "lon": 2.3320208,
  "tags": {
    "amenity": "restaurant",
    "name": "Barlotti",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 683133917,
  "lat": 48.8675328,
  "lon": 2.3323476,
  "tags": {
    "amenity": "restaurant",
    "name": "Fuxia",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 683133918,
  "lat": 48.8672699,
  "lon": 2.3325679,
  "tags": {
    "amenity": "cafe",
    "name": "Razowski\'s",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 683133919,
  "lat": 48.8674795,
  "lon": 2.3326070,
  "tags": {
    "amenity": "restaurant",
    "name": "Bennett",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 683255917,
  "lat": 48.8678727,
  "lon": 2.3316533,
  "tags": {
    "amenity": "restaurant",
    "name": "Chez Dominique",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 683255919,
  "lat": 48.8680817,
  "lon": 2.3307073,
  "tags": {
    "amenity": "restaurant",
    "name": "Select Opéra",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 683398125,
  "lat": 48.8676486,
  "lon": 2.3245195,
  "tags": {
    "amenity": "cafe",
    "name": "Le Florentin",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 683398604,
  "lat": 48.8687717,
  "lon": 2.3252969,
  "tags": {
    "amenity": "cafe",
    "name": "Les Trois Quartiers",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 683603985,
  "lat": 48.8480970,
  "lon": 2.3469090,
  "tags": {
    "amenity": "pub",
    "name": "Le Pub Saint-Hillaire"
  }
},
{
  "type": "node",
  "id": 684572787,
  "lat": 48.8517565,
  "lon": 2.2895333,
  "tags": {
    "addr:housenumber": "30",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Yako",
    "phone": "01 45 78 67 58",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre ; mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 684572823,
  "lat": 48.8527624,
  "lon": 2.2872737,
  "tags": {
    "addr:housenumber": "22",
    "amenity": "restaurant",
    "cuisine": "moroccan",
    "name": "Au Royal Couscous",
    "phone": "0145772517",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre ; mise à jour : 2010",
    "website": "http://www.tupalo.net/en/paris/au-royal-couscous"
  }
},
{
  "type": "node",
  "id": 685286572,
  "lat": 48.8674009,
  "lon": 2.3345287,
  "tags": {
    "amenity": "cafe",
    "name": "Le Ventadour",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 685532262,
  "lat": 48.8745796,
  "lon": 2.3732477,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 685532303,
  "lat": 48.8741821,
  "lon": 2.3751159,
  "tags": {
    "amenity": "cafe",
    "name": "Le Week-End"
  }
},
{
  "type": "node",
  "id": 685532305,
  "lat": 48.8744252,
  "lon": 2.3738880,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "algerian",
    "name": "Les 4 Frères"
  }
},
{
  "type": "node",
  "id": 685604399,
  "lat": 48.8687898,
  "lon": 2.3338477,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Pastel",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 685604405,
  "lat": 48.8689710,
  "lon": 2.3345642,
  "tags": {
    "amenity": "bar",
    "name": "Le Gaillon",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 685847124,
  "lat": 48.8496754,
  "lon": 2.3496176,
  "tags": {
    "amenity": "restaurant",
    "diet:vegetarian": "yes",
    "name": "Phyto Bar",
    "organic": "yes"
  }
},
{
  "type": "node",
  "id": 685907512,
  "lat": 48.8698110,
  "lon": 2.3346634,
  "tags": {
    "amenity": "cafe",
    "name": "La Côte d\'Azur",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 685954735,
  "lat": 48.8677601,
  "lon": 2.3371944,
  "tags": {
    "amenity": "cafe",
    "name": "Au Fil de l\'Eau",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 685954754,
  "lat": 48.8677062,
  "lon": 2.3374280,
  "tags": {
    "amenity": "restaurant",
    "name": "La Source",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 686810054,
  "lat": 48.8690695,
  "lon": 2.3343056,
  "tags": {
    "amenity": "restaurant",
    "name": "La Fontaine Gaillon",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 687044631,
  "lat": 48.8706891,
  "lon": 2.3340754,
  "tags": {
    "amenity": "restaurant",
    "name": "Hippopotamus",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 687096476,
  "lat": 48.8704283,
  "lon": 2.3371521,
  "tags": {
    "amenity": "cafe",
    "name": "Le Regent",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 687096611,
  "lat": 48.8712809,
  "lon": 2.3371470,
  "tags": {
    "amenity": "cafe",
    "name": "Café Gramont",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 687096685,
  "lat": 48.8704581,
  "lon": 2.3373664,
  "tags": {
    "addr:housenumber": "2",
    "addr:street": "Rue de Marivaux",
    "amenity": "bar",
    "gay": "yes",
    "name": "Alex\'s Bar",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.alex-s-bar.com"
  }
},
{
  "type": "node",
  "id": 687096897,
  "lat": 48.8705949,
  "lon": 2.3395281,
  "tags": {
    "amenity": "cafe",
    "name": "Virtuose Café",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 687096908,
  "lat": 48.8714078,
  "lon": 2.3378085,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Marivaux",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 687218426,
  "lat": 48.8115398,
  "lon": 2.3841166,
  "tags": {
    "amenity": "bar",
    "name": "Le metropolitain",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 687218454,
  "lat": 48.8121398,
  "lon": 2.3863784,
  "tags": {
    "amenity": "restaurant",
    "name": "Café de la Mairie",
    "wheelchair": "limited",
    "wheelchair:description": "Toilettes non accessibles"
  }
},
{
  "type": "node",
  "id": 687218521,
  "lat": 48.8105676,
  "lon": 2.3884401,
  "tags": {
    "amenity": "restaurant",
    "name": "Ivry bar",
    "tourism": "hotel",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 687218546,
  "lat": 48.8108414,
  "lon": 2.3911974,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "kebab",
    "name": "L\'escale"
  }
},
{
  "type": "node",
  "id": 687449719,
  "lat": 48.8818452,
  "lon": 2.4395817,
  "tags": {
    "amenity": "restaurant",
    "name": "Luna Rossa",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 687750878,
  "lat": 48.8692036,
  "lon": 2.3392113,
  "tags": {
    "amenity": "pub",
    "name": "O\'Malley",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 687750911,
  "lat": 48.8690729,
  "lon": 2.3399905,
  "tags": {
    "amenity": "restaurant",
    "internet_access": "wlan",
    "name": "Mori Venice Bar"
  }
},
{
  "type": "node",
  "id": 687750940,
  "lat": 48.8691872,
  "lon": 2.3393294,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Bistrot des Colonnes",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 687751001,
  "lat": 48.8693708,
  "lon": 2.3397160,
  "tags": {
    "amenity": "bar",
    "name": "Le Louis d\'Or",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 687751016,
  "lat": 48.8691071,
  "lon": 2.3397858,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Ducat",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 687751044,
  "lat": 48.8692514,
  "lon": 2.3401242,
  "tags": {
    "amenity": "restaurant",
    "fax": "01.49.27.08.78",
    "name": "Le Vaudeville",
    "phone": "01.40.20.04.62",
    "website": "http://www.vaudevilleparis.com/"
  }
},
{
  "type": "node",
  "id": 687892379,
  "lat": 48.8716597,
  "lon": 2.3407937,
  "tags": {
    "amenity": "restaurant",
    "name": "Tavern\' Café",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 687892786,
  "lat": 48.8716938,
  "lon": 2.3397200,
  "tags": {
    "amenity": "cafe",
    "name": "Le Cardinal",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 687892790,
  "lat": 48.8716249,
  "lon": 2.3410422,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Osaka Sushi",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 687993966,
  "lat": 48.8688297,
  "lon": 2.3421626,
  "tags": {
    "addr:housenumber": "40",
    "addr:postcode": "75002",
    "addr:street": "Rue Notre-Dame des Victoires",
    "amenity": "restaurant",
    "cuisine": "french",
    "description": "Brasserie",
    "name": "Gallopin",
    "website": "www.brasseriegallopin.com"
  }
},
{
  "type": "node",
  "id": 687994239,
  "lat": 48.8675928,
  "lon": 2.3409167,
  "tags": {
    "amenity": "restaurant",
    "name": "Liza",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 687994245,
  "lat": 48.8664997,
  "lon": 2.3400225,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Bougainville",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 689142383,
  "lat": 48.8687628,
  "lon": 2.3297223,
  "tags": {
    "addr:housenumber": "8",
    "addr:street": "Rue des Capucines",
    "amenity": "cafe",
    "name": "Le Petit Vendôme",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 689143048,
  "lat": 48.8704135,
  "lon": 2.3318678,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "17",
    "addr:postcode": "75002",
    "addr:street": "Boulevard des Capucines",
    "amenity": "restaurant",
    "name": "chez clément",
    "opening_hours": "Mo-Su 11:30-0:30",
    "phone": "+33 1 53438200",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.chezclement.com/"
  }
},
{
  "type": "node",
  "id": 689144551,
  "lat": 48.8690262,
  "lon": 2.3325457,
  "tags": {
    "amenity": "cafe",
    "name": "Café du Cadran",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 689178436,
  "lat": 48.8691969,
  "lon": 2.3433101,
  "tags": {
    "amenity": "restaurant",
    "name": "La Taverne du Croissant",
    "opening_hours": "Mo-Fr 08:00-01:00; Sa 11:30-01:00",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.lataverneducroissant.fr/"
  }
},
{
  "type": "node",
  "id": 689178618,
  "lat": 48.8698000,
  "lon": 2.3425335,
  "tags": {
    "addr:housenumber": "52",
    "addr:street": "Rue Notre-Dame des Victoires",
    "amenity": "cafe",
    "name": "Dédé la frite",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 689212219,
  "lat": 48.8662163,
  "lon": 2.3412156,
  "tags": {
    "amenity": "bar",
    "name": "Au Vide Gousset",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 689346734,
  "lat": 48.8671729,
  "lon": 2.3441962,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Campionissimo",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 689486848,
  "lat": 48.8707568,
  "lon": 2.3429733,
  "tags": {
    "amenity": "cafe",
    "name": "Montmartre Café",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 689543750,
  "lat": 48.8676499,
  "lon": 2.3455667,
  "tags": {
    "addr:housenumber": "99",
    "addr:street": "Rue Réaumur",
    "amenity": "cafe",
    "name": "Le Sentier"
  }
},
{
  "type": "node",
  "id": 690288258,
  "lat": 48.8441325,
  "lon": 2.3546669,
  "tags": {
    "amenity": "pub",
    "name": "Les Cigognes"
  }
},
{
  "type": "node",
  "id": 690933897,
  "lat": 48.8705191,
  "lon": 2.3428655,
  "tags": {
    "addr:housenumber": "166",
    "addr:street": "Rue Montmartre",
    "amenity": "restaurant",
    "name": "Be Club",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 690935125,
  "lat": 48.8709276,
  "lon": 2.3429934,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "174",
    "addr:postcode": "75002",
    "addr:street": "Rue Montmartre",
    "amenity": "restaurant",
    "cuisine": "Bistrot_gastronome",
    "name": "Circonstances",
    "smoking": "separated",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 690982213,
  "lat": 48.8706525,
  "lon": 2.3468928,
  "tags": {
    "amenity": "cafe",
    "name": "Starbucks Coffee",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 691082412,
  "lat": 48.8674968,
  "lon": 2.3472550,
  "tags": {
    "addr:housenumber": "108",
    "addr:postcode": "75002",
    "addr:street": "Rue Réaumur",
    "amenity": "cafe",
    "cuisine": "french",
    "name": "L\'Empire Bar",
    "wifi": "no"
  }
},
{
  "type": "node",
  "id": 691293343,
  "lat": 48.8645135,
  "lon": 2.3468506,
  "tags": {
    "amenity": "cafe",
    "name": "Lézard Café",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 691294000,
  "lat": 48.8654683,
  "lon": 2.3468972,
  "tags": {
    "addr:housenumber": "57",
    "addr:street": "Rue Montorgueil",
    "amenity": "cafe",
    "name": "Café du Centre",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 691721170,
  "lat": 48.8647371,
  "lon": 2.3502921,
  "tags": {
    "addr:housenumber": "124",
    "addr:street": "Rue Saint-Denis",
    "amenity": "restaurant",
    "name": "Chez Mémé",
    "phone": "01 40 28 43 20",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.chezmeme.fr/"
  }
},
{
  "type": "node",
  "id": 691742572,
  "lat": 48.8625665,
  "lon": 2.3522237,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "178",
    "addr:street": "Rue Saint-Martin",
    "amenity": "bar",
    "gay:women": "yes",
    "name": "La Mutinerie",
    "website": "http://www.lamutinerie.eu/"
  }
},
{
  "type": "node",
  "id": 692013190,
  "lat": 48.8680177,
  "lon": 2.3532845,
  "tags": {
    "amenity": "cafe",
    "name": "Le Cerceau",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 692129098,
  "lat": 48.8686982,
  "lon": 2.3541762,
  "tags": {
    "amenity": "cafe",
    "name": "Les Boulevards",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 693003108,
  "lat": 48.8696741,
  "lon": 2.3519506,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Tong Fan"
  }
},
{
  "type": "node",
  "id": 694399350,
  "lat": 48.8704075,
  "lon": 2.3483529,
  "tags": {
    "amenity": "bar",
    "name": "Lounge Paradise",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 694399614,
  "lat": 48.8703899,
  "lon": 2.3484689,
  "tags": {
    "amenity": "restaurant",
    "name": "Pranzo",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 694644770,
  "lat": 48.8518091,
  "lon": 2.3568234,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Tastevin",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 696050469,
  "lat": 48.8519507,
  "lon": 2.3561108,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "39",
    "addr:postcode": "75004",
    "addr:street": "Rue Saint-Louis en l\'Île",
    "amenity": "restaurant",
    "cuisine": "regional",
    "name": "Nos Ancêtres Les Gaulois",
    "phone": "+33 1 46 33 66 07",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 696050527,
  "lat": 48.8527730,
  "lon": 2.3537103,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Sens\'o",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 696671080,
  "lat": 48.8515128,
  "lon": 2.3437930,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "sandwich",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 697029196,
  "lat": 48.8523186,
  "lon": 2.3568760,
  "tags": {
    "amenity": "bar",
    "name": "Le Saint-Louis",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 697183314,
  "lat": 48.8563139,
  "lon": 2.3504798,
  "tags": {
    "amenity": "cafe",
    "name": "Bistrot Marguerite",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 697454396,
  "lat": 48.8615937,
  "lon": 2.3514953,
  "tags": {
    "amenity": "cafe",
    "name": "Le Cavalier Bleu",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 697571359,
  "lat": 48.8595402,
  "lon": 2.3527444,
  "tags": {
    "amenity": "cafe",
    "brewery": "yes",
    "name": "L\'Excelsior",
    "note:fr": "Café, Brasserie",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 697571385,
  "lat": 48.8614606,
  "lon": 2.3537904,
  "tags": {
    "amenity": "cafe",
    "name": "Au Métro",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 697904822,
  "lat": 48.8593262,
  "lon": 2.3559033,
  "tags": {
    "amenity": "cafe",
    "name": "Le Bouquet des Archives",
    "phone": "+331 42 72 08 49",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 698985598,
  "lat": 48.8693940,
  "lon": 2.3027597,
  "tags": {
    "amenity": "cafe",
    "name": "La Belle Ferronnière",
    "phone": "+33 1 42250382"
  }
},
{
  "type": "node",
  "id": 699079956,
  "lat": 48.8555040,
  "lon": 2.3574259,
  "tags": {
    "addr:housenumber": "50",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Fuxia",
    "phone": "01 42 72 22 74",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.fuxia.fr/"
  }
},
{
  "type": "node",
  "id": 699626470,
  "lat": 48.8834373,
  "lon": 2.3324889,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "3",
    "addr:postcode": "75009",
    "addr:street": "Place Blanche",
    "amenity": "restaurant",
    "cuisine": "steak_house",
    "name": "Buffalo Grill",
    "phone": "+33 1 40164251"
  }
},
{
  "type": "node",
  "id": 699896716,
  "lat": 48.8590577,
  "lon": 2.3501929,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Chant des Voyelles",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 699896986,
  "lat": 48.8575096,
  "lon": 2.3479041,
  "tags": {
    "amenity": "cafe",
    "name": "Le Sarah-Bernhardt",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 699897098,
  "lat": 48.8593929,
  "lon": 2.3493115,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "22",
    "addr:postcode": "75004",
    "addr:street": "Rue des Lombards",
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Come and Wok",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 699897156,
  "lat": 48.8583173,
  "lon": 2.3517204,
  "tags": {
    "amenity": "restaurant",
    "name": "La Pause Beaubourg",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 699897157,
  "lat": 48.8577035,
  "lon": 2.3502326,
  "tags": {
    "amenity": "cafe",
    "name": "Majesty",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 699897179,
  "lat": 48.8595480,
  "lon": 2.3490548,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Sun Café",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 699897497,
  "lat": 48.8590250,
  "lon": 2.3503203,
  "tags": {
    "amenity": "cafe",
    "name": "Le Paradis",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 700256937,
  "lat": 48.8591081,
  "lon": 2.3500160,
  "tags": {
    "addr:housenumber": "6",
    "addr:street": "Rue des Lombards",
    "amenity": "bar",
    "gay": "yes",
    "name": "Bear\'s Den",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.bearsden.fr/"
  }
},
{
  "type": "node",
  "id": 700309516,
  "lat": 48.8600408,
  "lon": 2.3499857,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "25",
    "addr:street": "Rue Quincampoix",
    "amenity": "cafe",
    "name": "Bistrot Beaubourg",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 700309522,
  "lat": 48.8616594,
  "lon": 2.3501884,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "38",
    "addr:street": "Boulevard de Sébastopol",
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Tian He",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre ; mise à jour : 2010",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 701531739,
  "lat": 48.8794020,
  "lon": 2.3884400,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'Estampe"
  }
},
{
  "type": "node",
  "id": 701735665,
  "lat": 48.8274198,
  "lon": 2.3518171,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "description": "Cuisine traditionnelle",
    "name": "Le Bouche à Oreille",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 701748593,
  "lat": 48.8533299,
  "lon": 2.3424383,
  "tags": {
    "addr:housenumber": "28",
    "addr:street": "Rue Saint-André des Arts",
    "amenity": "pub",
    "brewery": "guinness",
    "name": "Concoran\'s Irish Pub",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 702295979,
  "lat": 48.8572208,
  "lon": 2.3551092,
  "tags": {
    "addr:housenumber": "10",
    "addr:street": "Rue de la Verrerie",
    "amenity": "restaurant",
    "cuisine": "vietnamese",
    "name": "Minh Chau",
    "opening_hours": "Mo-Sa 10:30-22:00",
    "phone": "01 42 71 13 30",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 702296020,
  "lat": 48.8571117,
  "lon": 2.3550358,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Kyo",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 702296060,
  "lat": 48.8571384,
  "lon": 2.3549764,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'Églantine",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 702296118,
  "lat": 48.8572463,
  "lon": 2.3550135,
  "tags": {
    "addr:housenumber": "12",
    "addr:street": "Rue de la Verrerie",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Kiccho",
    "phone": "01 42 72 53 71",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 702306852,
  "lat": 48.8570142,
  "lon": 2.3541389,
  "tags": {
    "amenity": "cafe",
    "name": "Le Relais de l\'Hôtel de Ville",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 702307595,
  "lat": 48.8568296,
  "lon": 2.3551652,
  "tags": {
    "addr:housenumber": "4",
    "addr:street": "Rue des Mauvais Garçons",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Les Mauvais Garcons",
    "phone": "01 42 72 74 97",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 702307603,
  "lat": 48.8569458,
  "lon": 2.3554337,
  "tags": {
    "addr:housenumber": "1",
    "addr:street": "Rue de la Verrerie",
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Sant Antonio",
    "opening_hours": "Mo-Sa 12:00-0:30;Su 12:00-23:30",
    "phone": "01 42 77 78 47",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 702405530,
  "lat": 48.8271315,
  "lon": 2.3323734,
  "tags": {
    "amenity": "restaurant",
    "name": "Mama Mia"
  }
},
{
  "type": "node",
  "id": 702405537,
  "lat": 48.8274828,
  "lon": 2.3325351,
  "tags": {
    "addr:housenumber": "81",
    "addr:postcode": "75014",
    "addr:street": "Rue de la Tombe Issoire",
    "amenity": "cafe",
    "name": "Le Rallye"
  }
},
{
  "type": "node",
  "id": 702457447,
  "lat": 48.8646409,
  "lon": 2.3536613,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "couscous",
    "name": "La Medina du Marais",
    "phone": "0142727153"
  }
},
{
  "type": "node",
  "id": 702534663,
  "lat": 48.8635758,
  "lon": 2.3531607,
  "tags": {
    "addr:housenumber": "51",
    "addr:street": "Rue de Montmorency",
    "amenity": "restaurant",
    "cuisine": "gastronomic",
    "name": "L\'auberge de Nicolas Flamel",
    "opening_hours": "Mo-Sa 12:00-14:30,19:00-22:30",
    "phone": "01 42 71 77 78",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.auberge-nicolas-flamel.fr/"
  }
},
{
  "type": "node",
  "id": 702535861,
  "lat": 48.8636089,
  "lon": 2.3534360,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Duc de Montmorency",
    "takeaway": "yes"
  }
},
{
  "type": "node",
  "id": 702537440,
  "lat": 48.8640159,
  "lon": 2.3502075,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese"
  }
},
{
  "type": "node",
  "id": 702539703,
  "lat": 48.8641785,
  "lon": 2.3510736,
  "tags": {
    "amenity": "cafe",
    "name": "Le Vélocipède"
  }
},
{
  "type": "node",
  "id": 702718235,
  "lat": 48.8581626,
  "lon": 2.3561038,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'Arganier",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 702750619,
  "lat": 48.8599753,
  "lon": 2.3568642,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "56",
    "addr:street": "Rue des Archives",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Troisième Chinon",
    "phone": "01 48 87 94 68",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 702751011,
  "lat": 48.8577487,
  "lon": 2.3576815,
  "tags": {
    "addr:housenumber": "37",
    "addr:street": "Rue Vieille du Temple",
    "amenity": "bar",
    "name": "Yono\'s",
    "opening_hours": "Tu-Su 17:00-1:30",
    "phone": "01 42 74 31 65",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 702793722,
  "lat": 48.8579512,
  "lon": 2.3567221,
  "tags": {
    "addr:housenumber": "36",
    "addr:street": "Rue du Bourg Tibourg",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Gill\'sclub La Panfoulia",
    "opening_hours": "Mo,Sa 12:00-14:30,19:00-21:30",
    "phone": "01 42 74 61 68",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 702915310,
  "lat": 48.8564037,
  "lon": 2.3572215,
  "tags": {
    "addr:housenumber": "13",
    "addr:street": "Rue Cloche Perce",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Allo Sushi",
    "opening_hours": "Mo-Sa 12:00-15:00;Mo-Su 19:00-22:00",
    "phone": "01 44 61 93 73",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 702915559,
  "lat": 48.8569706,
  "lon": 2.3578174,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Café Pizz\' du Trésor",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 702915981,
  "lat": 48.8570944,
  "lon": 2.3576266,
  "tags": {
    "addr:housenumber": "9",
    "addr:street": "Rue du Trésor",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Trésor",
    "opening_hours": "Mo-Fr 12:00-1:00;Sa-Su 12:00-2:00",
    "phone": "01 42 71 35 17",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 702916093,
  "lat": 48.8573873,
  "lon": 2.3589592,
  "tags": {
    "addr:housenumber": "23",
    "addr:street": "Rue des Rosiers",
    "amenity": "restaurant",
    "cuisine": "jewish",
    "name": "Mi Va Mi",
    "phone": "01 42 71 53 72",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 702916141,
  "lat": 48.8567788,
  "lon": 2.3558116,
  "tags": {
    "addr:housenumber": "4",
    "addr:street": "Rue du Bourg Tibourg",
    "amenity": "bar",
    "name": "Feria Café",
    "phone": "01 42 72 43 99",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 702916171,
  "lat": 48.8575151,
  "lon": 2.3587307,
  "tags": {
    "addr:housenumber": "23b",
    "addr:street": "Rue des Rosiers",
    "amenity": "restaurant",
    "name": "Micky\'s Deli",
    "phone": "+33148047931",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 702938756,
  "lat": 48.8580313,
  "lon": 2.3580479,
  "tags": {
    "addr:housenumber": "44",
    "addr:street": "Rue Vieille du Temple",
    "amenity": "restaurant",
    "name": "Le Colimaçon",
    "opening_hours": "Mo-Su 19:00-23:00;Sa-Su 12:00-16:00",
    "phone": "+331 48 87 12 01",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 702973627,
  "lat": 48.8394830,
  "lon": 2.3006604,
  "tags": {
    "amenity": "pub",
    "name": "A Vaugirard"
  }
},
{
  "type": "node",
  "id": 702977280,
  "lat": 48.8574097,
  "lon": 2.3590501,
  "tags": {
    "addr:housenumber": "34",
    "addr:street": "Rue des Rosiers",
    "amenity": "restaurant",
    "name": "L\'As du Fallafel",
    "phone": "01 48 87 63 60",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 703122402,
  "lat": 48.8422251,
  "lon": 2.3519017,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Foyer Vietnam",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre ; mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 703122472,
  "lat": 48.8433232,
  "lon": 2.3528098,
  "tags": {
    "amenity": "pub",
    "brewery": "tripel_karmeliet;guinness",
    "internet_access": "no",
    "name": "The Local",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre ; mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 703167264,
  "lat": 48.8633842,
  "lon": 2.3464893,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'Esplanade Saint-Eustache"
  }
},
{
  "type": "node",
  "id": 703205796,
  "lat": 48.8259202,
  "lon": 2.3471664,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Circus",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 703407064,
  "lat": 48.8569391,
  "lon": 2.3587226,
  "tags": {
    "addr:housenumber": "16",
    "addr:street": "Rue des Écouffes",
    "amenity": "restaurant",
    "name": "Schwartz\'s Deli",
    "opening_hours": "Mo 12:00-15:00;Mo-Fr 19:30-23:00;Sa-Su 12:00-23:00",
    "phone": "http://www.schwartzsdeli.fr/",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.schwartzsdeli.fr/"
  }
},
{
  "type": "node",
  "id": 703407087,
  "lat": 48.8562824,
  "lon": 2.3592731,
  "tags": {
    "addr:housenumber": "5",
    "addr:street": "Rue Ferdinand Duval",
    "amenity": "restaurant",
    "name": "Les Elles",
    "phone": "01 42 71 63 88",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 703407227,
  "lat": 48.8562386,
  "lon": 2.3592343,
  "tags": {
    "addr:housenumber": "3",
    "addr:street": "Rue Ferdinand Duval",
    "amenity": "restaurant",
    "cuisine": "corean",
    "name": "Maison Marais",
    "phone": "01 48 87 28 15",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 703407303,
  "lat": 48.8558049,
  "lon": 2.3600410,
  "tags": {
    "addr:housenumber": "10",
    "addr:street": "Rue du Roi de Sicile",
    "amenity": "restaurant",
    "cuisine": "thai",
    "name": "Au Petit Thai",
    "opening_hours": "Mo-Su 12:00-14:30;Mo-Sa 19:00-23:30",
    "phone": "01 42 72 75 75",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 703430210,
  "lat": 48.8402209,
  "lon": 2.3517797,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "La Comedia",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre ; mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 703432280,
  "lat": 48.8555549,
  "lon": 2.3612781,
  "tags": {
    "addr:housenumber": "4",
    "addr:street": "Rue Malher",
    "amenity": "restaurant",
    "cuisine": "american",
    "name": "Bia",
    "opening_hours": "Mo-Su 8:30-23:00",
    "phone": "01 42 72 40 21",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.breakfast-in-america.com/main/"
  }
},
{
  "type": "node",
  "id": 703432905,
  "lat": 48.8559169,
  "lon": 2.3603985,
  "tags": {
    "addr:housenumber": "8",
    "addr:street": "Rue Pavée",
    "amenity": "restaurant",
    "cuisine": "bagel,pizza",
    "name": "Pitzman",
    "opening_hours": "Mo-Th, Sa-Su 11:00-23:00",
    "phone": "01 42 71 17 17",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 703460758,
  "lat": 48.8556266,
  "lon": 2.3621786,
  "tags": {
    "addr:housenumber": "10",
    "addr:street": "Rue de Sévigné",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "L\'Osteria",
    "phone": "01 42 71 37 08",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 703460839,
  "lat": 48.8554988,
  "lon": 2.3630222,
  "tags": {
    "addr:housenumber": "6",
    "addr:street": "Place du Marché Sainte-Catherine",
    "amenity": "restaurant",
    "cuisine": "korean",
    "name": "Arirang",
    "opening_hours": "Mo-Su 11:00-0:00",
    "phone": "01 42 77 16 26",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 703460891,
  "lat": 48.8550149,
  "lon": 2.3631694,
  "tags": {
    "addr:housenumber": "3",
    "addr:street": "Rue de Turenne",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Le Caruso",
    "opening_hours": "Mo-Sa 12:00-14:30,19:00-0:00",
    "phone": "01 42 77 06 98",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://ristorantecaruso.fr/"
  }
},
{
  "type": "node",
  "id": 703460938,
  "lat": 48.8565540,
  "lon": 2.3642255,
  "tags": {
    "amenity": "cafe",
    "name": "L\'Escurial",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 703461043,
  "lat": 48.8556083,
  "lon": 2.3627374,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "polish",
    "name": "Pitchi Poï",
    "phone": "01 42 77 46 15",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 703461057,
  "lat": 48.8553790,
  "lon": 2.3625438,
  "tags": {
    "amenity": "cafe",
    "name": "Double Fond",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 703461098,
  "lat": 48.8552888,
  "lon": 2.3629682,
  "tags": {
    "addr:housenumber": "2",
    "addr:street": "Place du Marché Sainte-Catherine",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Marché",
    "opening_hours": "Mo-Fr 12:00-23:00;Sa-Su 12:00-23:30",
    "phone": "01 42 77 34 88",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 703461125,
  "lat": 48.8553171,
  "lon": 2.3630156,
  "tags": {
    "amenity": "restaurant",
    "name": "Au Bistrot de la Place",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 703461133,
  "lat": 48.8552064,
  "lon": 2.3625817,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Soprano",
    "opening_hours": "Mo-Su 12:00-15:00;Mo-Sa 18:30-23:00",
    "phone": "01 42 72 37 21",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.soprano-paris.fr/"
  }
},
{
  "type": "node",
  "id": 703486137,
  "lat": 48.8557416,
  "lon": 2.3629327,
  "tags": {
    "addr:housenumber": "6",
    "addr:street": "Rue de Jarente",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Les Bougresses",
    "opening_hours": "Mo, Su 18:30-23:30;Sa 11:30-15:00",
    "phone": "01 48 87 71 21",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 703504361,
  "lat": 48.8555544,
  "lon": 2.3581927,
  "tags": {
    "addr:housenumber": "33",
    "amenity": "restaurant",
    "cuisine": "thai",
    "name": "Tamarind",
    "opening_hours": "Mo-Sa 12:00-15:00,19:00-23:00",
    "phone": "01 48 87 34 20",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 703504388,
  "lat": 48.8549470,
  "lon": 2.3612543,
  "tags": {
    "addr:housenumber": "105",
    "addr:street": "Rue Saint-Antoine",
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Pizza Momo",
    "opening_hours": "Mo-Su 12:00-15:00,18:30-0:00",
    "phone": "01 42 72 36 35",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 703504461,
  "lat": 48.8557611,
  "lon": 2.3570094,
  "tags": {
    "addr:housenumber": "15",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Pamela Popo",
    "phone": "01 42 74 14 65",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 703504468,
  "lat": 48.8556412,
  "lon": 2.3606593,
  "tags": {
    "addr:housenumber": "4",
    "addr:street": "Rue du Roi de Sicile",
    "amenity": "restaurant",
    "cuisine": "spanish",
    "name": "El 4tro",
    "opening_hours": "Tu-Sa 19:00-0:30",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 703584608,
  "lat": 48.8451155,
  "lon": 2.4345033,
  "tags": {
    "amenity": "pub",
    "name": "Le Blason"
  }
},
{
  "type": "node",
  "id": 703630779,
  "lat": 48.8260343,
  "lon": 2.3476244,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Suave",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 703837517,
  "lat": 48.8540797,
  "lon": 2.3659063,
  "tags": {
    "amenity": "restaurant",
    "name": "Les Côtelettes",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 703837553,
  "lat": 48.8540284,
  "lon": 2.3650261,
  "tags": {
    "amenity": "cafe",
    "name": "L\'Arsenal",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 703854268,
  "lat": 48.8562566,
  "lon": 2.3646932,
  "tags": {
    "amenity": "restaurant",
    "name": "Ma Bourgogne",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 703870781,
  "lat": 48.8539723,
  "lon": 2.3672909,
  "tags": {
    "addr:housenumber": "3",
    "addr:street": "Rue des Tournelles",
    "amenity": "restaurant",
    "name": "Icho",
    "phone": "01 44 78 03 92",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.icho.fr/"
  }
},
{
  "type": "node",
  "id": 703870937,
  "lat": 48.8549472,
  "lon": 2.3633131,
  "tags": {
    "addr:housenumber": "4",
    "addr:street": "Rue de Turenne",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Thé Vert",
    "phone": "01 42 71 11 59",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 703876600,
  "lat": 48.8537619,
  "lon": 2.3675235,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "2",
    "addr:postcode": "75004",
    "addr:street": "Rue de la Bastille",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Auberge de Venise",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 703987695,
  "lat": 48.8549776,
  "lon": 2.3673407,
  "tags": {
    "addr:housenumber": "24",
    "addr:street": "Rue des Tournelles",
    "amenity": "restaurant",
    "cuisine": "argentinian",
    "name": "Santa Carne",
    "opening_hours": "Tu-Sa 19:30-23:30",
    "phone": "01 42 72 03 07",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.santacarne.com/"
  }
},
{
  "type": "node",
  "id": 703987989,
  "lat": 48.8540510,
  "lon": 2.3686163,
  "tags": {
    "addr:housenumber": "3",
    "addr:street": "Boulevard Beaumarchais",
    "amenity": "restaurant",
    "cuisine": "belgium",
    "name": "Leon de Bruxelles",
    "opening_hours": "Tu-Th, Su 11:30-0:00;Fr-Sa 11:30-1:00",
    "phone": "01 42 71 75 55",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.leon-de-bruxelles.fr/"
  }
},
{
  "type": "node",
  "id": 703988170,
  "lat": 48.8538949,
  "lon": 2.3685489,
  "tags": {
    "amenity": "restaurant",
    "name": "Hippopotamus Bastille",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 704819800,
  "lat": 48.8554369,
  "lon": 2.3580795,
  "tags": {
    "addr:housenumber": "64",
    "amenity": "bar",
    "name": "Bodega 64",
    "phone": "01 48 04 59 11",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 704819938,
  "lat": 48.8554539,
  "lon": 2.3579276,
  "tags": {
    "addr:housenumber": "60",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Autour du Saumon",
    "phone": "01 42 77 23 08",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.autourdusaumon.eu/"
  }
},
{
  "type": "node",
  "id": 704819970,
  "lat": 48.8548402,
  "lon": 2.3583739,
  "tags": {
    "addr:housenumber": "8",
    "addr:street": "Rue de Jouy",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Metropolitain",
    "opening_hours": "Mo-Fr 11:30-15:00,19:30-0:00",
    "phone": "09 81 20 37 38",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 704820015,
  "lat": 48.8551687,
  "lon": 2.3602451,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "125",
    "addr:postcode": "75004",
    "addr:street": "Rue Saint-Antoine",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "L\'Elephant du Nil",
    "opening_hours": "Mo-Sa 07:30-01:00",
    "phone": "01 42 74 18 12",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 704820160,
  "lat": 48.8543977,
  "lon": 2.3599670,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Bistrot Des Comperes",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 705056055,
  "lat": 48.8508419,
  "lon": 2.3621258,
  "tags": {
    "amenity": "cafe",
    "name": "Le Sully",
    "source": "survey 2013"
  }
},
{
  "type": "node",
  "id": 705128707,
  "lat": 48.8552470,
  "lon": 2.4413290,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "La Grosse Mignonne",
    "phone": "+33 1 42 87 54 51",
    "website": "http://lagrossemignonne.com/"
  }
},
{
  "type": "node",
  "id": 705182615,
  "lat": 48.8521583,
  "lon": 2.3613070,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Petit Célestin",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 705211287,
  "lat": 48.8525480,
  "lon": 2.3641850,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Temps des Cerises",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 705211299,
  "lat": 48.8532015,
  "lon": 2.3640647,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Dindon en Laisse",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 705252865,
  "lat": 48.8544815,
  "lon": 2.3628958,
  "tags": {
    "addr:housenumber": "81",
    "addr:street": "Rue Saint-Antoine",
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Delice House",
    "opening_hours": "Mo, Sa 11:00-22:00",
    "phone": "09 77 63 89 70",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 705252912,
  "lat": 48.8536886,
  "lon": 2.3643812,
  "tags": {
    "addr:housenumber": "25",
    "addr:street": "Rue Beautreillis",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Vins des Pyrénées",
    "opening_hours": "Tu, Sa 11:30-15:00, 19:00-22:30",
    "phone": "01 42 72 64 94",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 705252920,
  "lat": 48.8545334,
  "lon": 2.3627527,
  "tags": {
    "addr:housenumber": "85",
    "addr:street": "Rue Saint-Antoine",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Au Bouquet Saint-Paul",
    "phone": "01 42 78 55 03",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 705253270,
  "lat": 48.8542200,
  "lon": 2.3635016,
  "tags": {
    "amenity": "cafe",
    "name": "Fontaine Sully",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 705253346,
  "lat": 48.8539861,
  "lon": 2.3622411,
  "tags": {
    "addr:housenumber": "32",
    "addr:street": "Rue Saint-Paul",
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "La Cerise Sur La Pizza",
    "phone": "01 84 16 64 84",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://lacerisesurlapizza.fr/"
  }
},
{
  "type": "node",
  "id": 705299883,
  "lat": 48.8521321,
  "lon": 2.3650946,
  "tags": {
    "amenity": "cafe",
    "name": "Café Réveil Bastille",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 705347108,
  "lat": 48.8519412,
  "lon": 2.3645366,
  "tags": {
    "amenity": "restaurant",
    "name": "Chez margot",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 705403408,
  "lat": 48.8291410,
  "lon": 2.2321942,
  "tags": {
    "amenity": "cafe",
    "name": "Brasserie du Forum",
    "source": "survey",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 705492019,
  "lat": 48.8498781,
  "lon": 2.3644772,
  "tags": {
    "amenity": "restaurant",
    "name": "Aux Vieux Paris",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 705515048,
  "lat": 48.8477690,
  "lon": 2.3654853,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'Escale",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 705657815,
  "lat": 48.8629367,
  "lon": 2.3522066,
  "tags": {
    "amenity": "cafe",
    "name": "Le Djurdjura",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 705657876,
  "lat": 48.8621665,
  "lon": 2.3511124,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "78",
    "addr:street": "Rue Quincampoix",
    "amenity": "cafe",
    "name": "L\'Art Brut Bistrot",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.artbrutbistrot.fr"
  }
},
{
  "type": "node",
  "id": 705657889,
  "lat": 48.8626959,
  "lon": 2.3521061,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Hanano",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 705657893,
  "lat": 48.8622789,
  "lon": 2.3510860,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "79",
    "addr:street": "Rue Quincampoix",
    "amenity": "cafe",
    "contact:phone": "+33 1 73 73 10 74",
    "contact:website": "http://anticafe.fr",
    "name": "AntiCafé",
    "opening_hours": "Mo-Fr 09:00-23:00; Sa-Su 10:00-23:00",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 705657903,
  "lat": 48.8619134,
  "lon": 2.3509953,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "68",
    "addr:street": "Rue Quincampoix",
    "amenity": "restaurant",
    "cuisine": "tibetan",
    "name": "Khatag",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 706128132,
  "lat": 48.8621524,
  "lon": 2.3537603,
  "tags": {
    "amenity": "cafe",
    "name": "La Comédie",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 706197512,
  "lat": 48.8659520,
  "lon": 2.3532863,
  "tags": {
    "amenity": "cafe",
    "name": "Le Tabac des Arts",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 706315743,
  "lat": 48.8671336,
  "lon": 2.3577810,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Vertbois",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 706315812,
  "lat": 48.8657064,
  "lon": 2.3565852,
  "tags": {
    "amenity": "cafe",
    "description": "Repas. Fameux dessert. Tranquille pour travailler dans des heures creux.",
    "fixme": "Horaires",
    "internet_access": "wlan",
    "internet_access:fee": "no",
    "name": "Café Léonard",
    "opening_hours": "Su \"Add time\"",
    "phone": "01.48.04.07.55",
    "source": "Cadastre. Mise à jour : 2010; survey"
  }
},
{
  "type": "node",
  "id": 706391394,
  "lat": 48.8643855,
  "lon": 2.3550009,
  "tags": {
    "amenity": "bar",
    "name": "Le Lutèce",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 706432780,
  "lat": 48.8645093,
  "lon": 2.3542545,
  "tags": {
    "addr:housenumber": "69",
    "addr:street": "Rue des Gravilliers",
    "amenity": "restaurant",
    "cuisine": "marocan",
    "name": "Le 404",
    "opening_hours": "Mo-Su 12:30-14:00,20:00-0:00",
    "phone": "01 42 74 57 81",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.404-resto.com/restaurant/paris/404/"
  }
},
{
  "type": "node",
  "id": 706546098,
  "lat": 48.8644805,
  "lon": 2.3545447,
  "tags": {
    "addr:housenumber": "74",
    "addr:street": "Rue des Gravilliers",
    "amenity": "restaurant",
    "cuisine": "vegetarian",
    "diet:vegetarian": "only",
    "name": "Bob\'s Kitchen",
    "opening_hours": "Mo-Fr 8:00-15:00;Sa-Su 10:00-16:00",
    "phone": "09 52 55 11 66",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://bobsjuicebar.com/"
  }
},
{
  "type": "node",
  "id": 706743990,
  "lat": 48.8682730,
  "lon": 2.3614921,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Pachyderme",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 707133885,
  "lat": 48.8517088,
  "lon": 2.3431054,
  "tags": {
    "addr:housenumber": "20",
    "addr:street": "Boulevard Saint-Michel",
    "amenity": "cafe",
    "name": "Brioche Doree",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 707316858,
  "lat": 48.8673544,
  "lon": 2.3583696,
  "tags": {
    "amenity": "cafe",
    "name": "La Chope Nazareth",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 707317186,
  "lat": 48.8674734,
  "lon": 2.3577982,
  "tags": {
    "addr:housenumber": "39",
    "addr:street": "Rue Notre-Dame de Nazareth",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Noma",
    "opening_hours": "Mo-Fr 9:00-2:00;Sa 17:00-2:00",
    "phone": "01 42 74 37 36",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 707317405,
  "lat": 48.8667351,
  "lon": 2.3612430,
  "tags": {
    "addr:housenumber": "87",
    "addr:street": "Rue de Turbigo",
    "amenity": "cafe",
    "cuisine": "french",
    "name": "Le Temple",
    "phone": "01 42 72 30 76",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 707688418,
  "lat": 48.8658122,
  "lon": 2.3570399,
  "tags": {
    "amenity": "cafe",
    "name": "Le Week-end",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 707765139,
  "lat": 48.8664919,
  "lon": 2.3600081,
  "tags": {
    "amenity": "cafe",
    "name": "La Favorite",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 707856537,
  "lat": 48.8723040,
  "lon": 2.3535120,
  "tags": {
    "amenity": "pub",
    "name": "Tribal Café"
  }
},
{
  "type": "node",
  "id": 707922549,
  "lat": 48.8661285,
  "lon": 2.3594408,
  "tags": {
    "addr:housenumber": "70",
    "addr:street": "Rue de Turbigo",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "La Massara",
    "phone": "01 42 74 13 94",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.la-massara.fr/"
  }
},
{
  "type": "node",
  "id": 707922600,
  "lat": 48.8655917,
  "lon": 2.3595983,
  "tags": {
    "addr:housenumber": "6",
    "addr:street": "Rue des Fontaines du Temple",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Au Fil des Saisons",
    "opening_hours": "Mo-Fr 11:30-15:30;Tu-Sa 18:30-0:30",
    "phone": "01 42 74 16 60",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 707999971,
  "lat": 48.8651109,
  "lon": 2.3571532,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Lafon",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 708138563,
  "lat": 48.8649701,
  "lon": 2.3570435,
  "tags": {
    "addr:housenumber": "18",
    "addr:street": "Rue Volta",
    "amenity": "restaurant",
    "name": "La Rose des Sables",
    "phone": "+331 73 71 71 56",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 708258202,
  "lat": 48.8751228,
  "lon": 2.3939970,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "vietnamese",
    "name": "Le Soleil"
  }
},
{
  "type": "node",
  "id": 708258204,
  "lat": 48.8724707,
  "lon": 2.3776998,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Tai Yien"
  }
},
{
  "type": "node",
  "id": 708258205,
  "lat": 48.8717657,
  "lon": 2.3765997,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Le Président"
  }
},
{
  "type": "node",
  "id": 708258206,
  "lat": 48.8714128,
  "lon": 2.3768852,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "vietnamese",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 708262765,
  "lat": 48.8189632,
  "lon": 2.3613966,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Lao Douang Paseuth"
  }
},
{
  "type": "node",
  "id": 708262767,
  "lat": 48.8208495,
  "lon": 2.3637354,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Tricotin 1"
  }
},
{
  "type": "node",
  "id": 708262768,
  "lat": 48.8235845,
  "lon": 2.3656863,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese"
  }
},
{
  "type": "node",
  "id": 708262769,
  "lat": 48.8262413,
  "lon": 2.3615997,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "korean",
    "name": "Niwanna",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 708262772,
  "lat": 48.8237603,
  "lon": 2.3652263,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "vietnamien-cambodgien",
    "name": "Heng Lay"
  }
},
{
  "type": "node",
  "id": 708488355,
  "lat": 48.8530176,
  "lon": 2.3445259,
  "tags": {
    "addr:housenumber": "4",
    "addr:street": "Rue de la Harpe",
    "amenity": "bar",
    "name": "Café Bar Les Affiches",
    "opening_hours": "Th-Sa 18:00-24:00",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre ; mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 708490494,
  "lat": 48.8644851,
  "lon": 2.3569256,
  "tags": {
    "addr:housenumber": "9",
    "addr:street": "Rue au Maire",
    "amenity": "cafe",
    "name": "L\'Attirail",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 708685501,
  "lat": 48.8521687,
  "lon": 2.3444775,
  "tags": {
    "addr:housenumber": "31",
    "addr:street": "Rue de la Harpe",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Ristorante Pizza Sarno",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 708980723,
  "lat": 48.8609173,
  "lon": 2.3545631,
  "tags": {
    "amenity": "cafe",
    "cuisine": "french",
    "name": "Le Bouledogue",
    "opening_hours": "Mo-Sa 9:30-23:30",
    "phone": "01 40 27 90 90",
    "website": "http://www.lebouledogue.fr/"
  }
},
{
  "type": "node",
  "id": 708981112,
  "lat": 48.8613715,
  "lon": 2.3542463,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "12",
    "addr:street": "Impasse Berthaud",
    "amenity": "restaurant",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 709049730,
  "lat": 48.8614471,
  "lon": 2.3583969,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "55",
    "addr:street": "Rue des Archives",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Connétable",
    "opening_hours": "Mo-Th 19:00-4:00;Fr 19:00-5:00;Sa 19:00-5:30",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 709092610,
  "lat": 48.8628432,
  "lon": 2.3600037,
  "tags": {
    "addr:housenumber": "75",
    "addr:street": "Rue des Archives",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Mezzomezzo",
    "phone": "01 42 74 26 22",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 709120356,
  "lat": 48.8637749,
  "lon": 2.3607964,
  "tags": {
    "addr:housenumber": "55",
    "addr:street": "Rue de Bretagne",
    "amenity": "restaurant",
    "cuisine": "american",
    "name": "PDG Central Park",
    "opening_hours": "Mo-Fr 12:00-14:30,19:00-22:30;Sa-Su 12:00-22:30",
    "phone": "09 80 94 94 40",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.pdgresto.com/"
  }
},
{
  "type": "node",
  "id": 709120410,
  "lat": 48.8638993,
  "lon": 2.3606178,
  "tags": {
    "addr:housenumber": "57",
    "addr:street": "Rue de Bretagne",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Mmmozza",
    "phone": "01 42 71 82 98",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 709120442,
  "lat": 48.8636674,
  "lon": 2.3608969,
  "tags": {
    "amenity": "cafe",
    "name": "Le Sancerre",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 709120469,
  "lat": 48.8635375,
  "lon": 2.3610562,
  "tags": {
    "amenity": "restaurant",
    "name": "La Pierre du Marais",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 709247210,
  "lat": 48.8649528,
  "lon": 2.3628140,
  "tags": {
    "addr:housenumber": "4",
    "addr:street": "Rue Dupetit-Thouars",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Les Vitelloni",
    "phone": "01 48 87 38 45",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 709247218,
  "lat": 48.8648961,
  "lon": 2.3629259,
  "tags": {
    "addr:housenumber": "2",
    "addr:street": "Rue Dupetit-Thouars",
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Café Soprano",
    "phone": "01 42 72 72 60",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 710316718,
  "lat": 48.8658753,
  "lon": 2.3611105,
  "tags": {
    "amenity": "cafe",
    "name": "La Tour du Temple",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 710316938,
  "lat": 48.8652889,
  "lon": 2.3632073,
  "tags": {
    "addr:housenumber": "5",
    "addr:street": "Rue Charles-François Dupuis",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "L\'Aller Retour",
    "opening_hours": "Tu-Fr 12:00-14:30;Tu-Sa 19:00-22:30",
    "phone": "01 42 78 01 21",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 710806081,
  "lat": 48.8651842,
  "lon": 2.3631892,
  "tags": {
    "addr:housenumber": "6",
    "addr:street": "Rue Charles-François Dupuis",
    "amenity": "restaurant",
    "capacity": "50",
    "cuisine": "tapas",
    "name": "Max y Jeremy",
    "phone": "01 42 78 00 68",
    "smoking": "no",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.maxyjeremy.com/"
  }
},
{
  "type": "node",
  "id": 710806096,
  "lat": 48.8647607,
  "lon": 2.3633251,
  "tags": {
    "addr:housenumber": "4",
    "addr:street": "Rue de la Corderie",
    "amenity": "restaurant",
    "cuisine": "see_food",
    "name": "L\'îlot",
    "opening_hours": "We-Sa 12:00-14:30; We-Th 19:00-22:00; Fr-Sa 19:00-22:30; Su 12:00-15:30",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "06 95 12 86 61"
  }
},
{
  "type": "node",
  "id": 710888012,
  "lat": 48.8660249,
  "lon": 2.3647181,
  "tags": {
    "addr:housenumber": "39",
    "addr:street": "Boulevard du Temple",
    "amenity": "restaurant",
    "name": "Casa Del Campo",
    "opening_hours": "Mo-Su 10:00-2:00",
    "phone": "01 44 54 67 00",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.casadelcampo.fr/"
  }
},
{
  "type": "node",
  "id": 711007580,
  "lat": 48.8663091,
  "lon": 2.3639231,
  "tags": {
    "addr:housenumber": "11",
    "addr:street": "Passage Vendôme",
    "amenity": "restaurant",
    "cuisine": "vietnam",
    "name": "Le Délice",
    "phone": "01 42 72 89 87",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 711063128,
  "lat": 48.8636551,
  "lon": 2.3631224,
  "tags": {
    "addr:housenumber": "6",
    "addr:street": "Rue du Forez",
    "amenity": "restaurant",
    "cuisine": "vegetarian",
    "diet:vegetarian": "only",
    "name": "Pinson",
    "opening_hours": "Mo-Fr 9:00-19:00;Sa 10:00-19:00;Su 10:00-17:00",
    "phone": "0983825353",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.cafepinson.fr/"
  }
},
{
  "type": "node",
  "id": 712186060,
  "lat": 48.8533184,
  "lon": 2.3416729,
  "tags": {
    "addr:housenumber": "35",
    "addr:street": "Rue Saint-André des Arts",
    "amenity": "restaurant",
    "cuisine": "Lebanese",
    "name": "Chez le Libanais",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 713469182,
  "lat": 48.8636998,
  "lon": 2.3626132,
  "tags": {
    "addr:housenumber": "19",
    "addr:street": "Rue de Picardie",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Bistrot Du Temple",
    "phone": "01 42 77 48 01",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 713669815,
  "lat": 48.8630524,
  "lon": 2.3640855,
  "tags": {
    "addr:housenumber": "56",
    "addr:street": "Rue de Saintonge",
    "amenity": "restaurant",
    "cuisine": "argentinian",
    "name": "Clasico Argentino",
    "opening_hours": "Mo-Su 12:00-22:30",
    "phone": "01 44 61 00 56",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://clasico-argentino.com/"
  }
},
{
  "type": "node",
  "id": 713826647,
  "lat": 48.8633456,
  "lon": 2.3614091,
  "tags": {
    "addr:housenumber": "47b",
    "addr:street": "Rue de Bretagne",
    "amenity": "restaurant",
    "cuisine": "couscous",
    "name": "Chez Omar",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 713913373,
  "lat": 48.8627601,
  "lon": 2.3625618,
  "tags": {
    "addr:housenumber": "37",
    "addr:street": "Rue de Bretagne",
    "amenity": "cafe",
    "name": "Le café du marché des enfants rouges",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 713913422,
  "lat": 48.8621981,
  "lon": 2.3629228,
  "tags": {
    "addr:housenumber": "27",
    "addr:street": "Rue de Saintonge",
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Al Taglio",
    "phone": "09 50 48 84 06",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 713913444,
  "lat": 48.8617499,
  "lon": 2.3623904,
  "tags": {
    "addr:housenumber": "17",
    "addr:street": "Rue de Saintonge",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Chez Nenesse",
    "opening_hours": "Mo-Fr 12:00-14:30,20:30-22:30",
    "phone": "01 42 78 46 49",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 713971755,
  "lat": 48.8622881,
  "lon": 2.3631634,
  "tags": {
    "addr:housenumber": "28",
    "addr:street": "Rue de Saintonge",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Bougnat",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 713972010,
  "lat": 48.8620347,
  "lon": 2.3635571,
  "tags": {
    "addr:housenumber": "30",
    "addr:street": "Rue Debelleyme",
    "amenity": "restaurant",
    "cuisine": "brunch",
    "name": "Rose Bakery",
    "opening_hours": "Tu-Su 9:00-19:00",
    "phone": "01 49 96 54 01",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 713972068,
  "lat": 48.8622670,
  "lon": 2.3635372,
  "tags": {
    "addr:housenumber": "13",
    "addr:street": "Rue de Bretagne",
    "amenity": "cafe",
    "name": "Le barbouille",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 713972084,
  "lat": 48.8619291,
  "lon": 2.3641444,
  "tags": {
    "amenity": "cafe",
    "name": "Le Progrès",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 714079688,
  "lat": 48.8639888,
  "lon": 2.3639782,
  "tags": {
    "addr:housenumber": "14",
    "addr:street": "Rue de Normandie",
    "amenity": "restaurant",
    "name": "La Briciola",
    "opening_hours": "Mo-Sa 12:00-15:00;Mo-Th 20:00-23:00;Fr-Sa 19:30-23:30",
    "phone": "01 42 77 34 10",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 714161366,
  "lat": 48.8615020,
  "lon": 2.3620520,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Tizi",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 714186800,
  "lat": 48.8604574,
  "lon": 2.3618940,
  "tags": {
    "amenity": "cafe",
    "name": "Le Saint-Gervais",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 715321311,
  "lat": 48.8449381,
  "lon": 2.3496655,
  "tags": {
    "addr:housenumber": "72",
    "addr:street": "Rue du Cardinal Lemoine",
    "amenity": "restaurant",
    "diet:vegetarian": "yes",
    "name": "Les cinq saveurs d\'Anada",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre ; mise à jour : 2010",
    "website": "http://www.anada-5-saveurs.com/"
  }
},
{
  "type": "node",
  "id": 715744238,
  "lat": 48.8594649,
  "lon": 2.3600214,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "72",
    "addr:street": "Rue Vieille du Temple",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Des Gars dans la Cuisine",
    "opening_hours": "Tu-Sa 12:00-14:30;Tu-Sa 19:00-22:30;Su 11:00-17:00",
    "phone": "01 42 74 88 26",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.desgarsdanslacuisine.com/"
  }
},
{
  "type": "node",
  "id": 715744266,
  "lat": 48.8598192,
  "lon": 2.3606888,
  "tags": {
    "amenity": "cafe",
    "name": "La Perle",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 715943056,
  "lat": 48.8600019,
  "lon": 2.3643060,
  "tags": {
    "addr:housenumber": "3",
    "addr:street": "Rue du Roi Doré",
    "amenity": "restaurant",
    "cuisine": "french,_asian",
    "name": "Chez Cham",
    "phone": "01 42 74 31 22",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 715952473,
  "lat": 48.8602716,
  "lon": 2.3621222,
  "tags": {
    "addr:housenumber": "18",
    "addr:street": "Rue des Coutures Saint-Gervais",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "L\'apparemment Café",
    "opening_hours": "Mo-Fr 12:00-2:00;Sa 16:00-2:00;Su 12:00-0:00",
    "phone": "01 48 87 12 22",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 716014784,
  "lat": 48.8577749,
  "lon": 2.3606479,
  "tags": {
    "addr:housenumber": "24",
    "addr:street": "Rue des Francs Bourgeois",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Crêperie Suzette",
    "opening_hours": "Tu-Su 12:00-23:00",
    "phone": "01 42 72 46 16",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 716014831,
  "lat": 48.8590981,
  "lon": 2.3594568,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "64",
    "addr:street": "Rue Vieille du Temple",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Robert et Louise",
    "opening_hours": "Tu-Sa 19:00-23:00;We-Sa 12:00-15:00;Su 12:00-23:00",
    "phone": "01 42 78 55 89",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://robertetlouise.com/"
  }
},
{
  "type": "node",
  "id": 717961252,
  "lat": 48.8640838,
  "lon": 2.3658858,
  "tags": {
    "addr:housenumber": "15",
    "addr:street": "Boulevard du Temple",
    "amenity": "restaurant",
    "cuisine": "tibetan",
    "name": "Yak Kunga",
    "phone": "01 48 87 87 02",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 717961309,
  "lat": 48.8641301,
  "lon": 2.3658578,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "mediterrneen",
    "name": "L\'Olivier",
    "opening_hours": "Mo-Sa 12:00-15:00,19:00-23:00",
    "phone": "01 42 77 12 51"
  }
},
{
  "type": "node",
  "id": 717961486,
  "lat": 48.8623570,
  "lon": 2.3651415,
  "tags": {
    "addr:housenumber": "5",
    "addr:street": "Rue des Filles du Calvaire",
    "amenity": "restaurant",
    "cuisine": "japanese,french",
    "name": "Neo Bento",
    "opening_hours": "Mo 12:00-19:30; We-Th 12:00-19:30;Fr-Sa 12:00-21:30;Su 12:00-16:30",
    "phone": "09 83 87 81 86",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.neobento.com/"
  }
},
{
  "type": "node",
  "id": 717961637,
  "lat": 48.8642282,
  "lon": 2.3657992,
  "tags": {
    "addr:housenumber": "17",
    "addr:street": "Boulevard du Temple",
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Pavillon Crevette",
    "phone": "01 44 78 91 83",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 718082474,
  "lat": 48.8623138,
  "lon": 2.3664296,
  "tags": {
    "addr:housenumber": "19",
    "addr:street": "Rue Commines",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Tappo",
    "phone": "01 42 76 06 35",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 718082612,
  "lat": 48.8620692,
  "lon": 2.3658702,
  "tags": {
    "addr:housenumber": "13",
    "addr:street": "Rue Commines",
    "amenity": "restaurant",
    "cuisine": "italian,_pizza",
    "name": "Il Prezzemolo",
    "phone": "01 42 77 79 25",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 718082618,
  "lat": 48.8627440,
  "lon": 2.3662109,
  "tags": {
    "addr:housenumber": "16",
    "addr:street": "Rue des Filles du Calvaire",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Petit Curieux",
    "phone": "01 42 74 65 79",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.lepetitcurieux.com/"
  }
},
{
  "type": "node",
  "id": 718091211,
  "lat": 48.8614026,
  "lon": 2.3643537,
  "tags": {
    "addr:housenumber": "4",
    "addr:street": "Rue du Poitou",
    "amenity": "restaurant",
    "name": "Fulvio",
    "phone": "01 42 71 62 80",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 718605968,
  "lat": 48.8520518,
  "lon": 2.3465211,
  "tags": {
    "addr:housenumber": "77",
    "addr:street": "Rue Galande",
    "amenity": "cafe",
    "cuisine": "Cream_Puffs_and_Tea",
    "name": "Odette",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 718606004,
  "lat": 48.8516494,
  "lon": 2.3469103,
  "tags": {
    "addr:housenumber": "57",
    "addr:street": "Rue Galande",
    "amenity": "restaurant",
    "cuisine": "Creperie",
    "name": "Les Galandines",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 718606038,
  "lat": 48.8526479,
  "lon": 2.3470482,
  "tags": {
    "addr:housenumber": "39",
    "addr:street": "Rue de la Bûcherie",
    "amenity": "restaurant",
    "name": "Le Petit Chatelet",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 718686187,
  "lat": 48.8615090,
  "lon": 2.3660863,
  "tags": {
    "addr:housenumber": "7",
    "addr:street": "Rue Froissart",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Beaucoup",
    "phone": "01 42 77 38 47",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.beaucoup-resto.com/"
  }
},
{
  "type": "node",
  "id": 718851688,
  "lat": 48.8609593,
  "lon": 2.3669247,
  "tags": {
    "amenity": "bar",
    "name": "La Petite Chaise",
    "phone": "06 09 66 28 91"
  }
},
{
  "type": "node",
  "id": 719640594,
  "lat": 48.8617960,
  "lon": 2.3778943,
  "tags": {
    "amenity": "restaurant",
    "name": "Vertigo"
  }
},
{
  "type": "node",
  "id": 719642299,
  "lat": 48.8624536,
  "lon": 2.3800165,
  "tags": {
    "amenity": "restaurant",
    "name": "Mezze du Liban"
  }
},
{
  "type": "node",
  "id": 721442763,
  "lat": 48.8593755,
  "lon": 2.3673858,
  "tags": {
    "addr:housenumber": "91",
    "addr:street": "Boulevard Beaumarchais",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Grazie",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 721443984,
  "lat": 48.8586616,
  "lon": 2.3675591,
  "tags": {
    "addr:housenumber": "79",
    "addr:street": "Boulevard Beaumarchais",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Kagayaki",
    "opening_hours": "Mo-Sa 12:00-14:30,19:00-22:30",
    "phone": "01 48 87 61 88",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 721444298,
  "lat": 48.8577899,
  "lon": 2.3671436,
  "tags": {
    "addr:housenumber": "4",
    "addr:street": "Rue Saint-Gilles",
    "amenity": "restaurant",
    "cuisine": "spanish",
    "name": "Caves Saint-Gilles",
    "opening_hours": "Mo-Su 8:30-2:00",
    "phone": "01 48 87 22 62",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.caves-saint-gilles.fr/"
  }
},
{
  "type": "node",
  "id": 721503115,
  "lat": 48.8575369,
  "lon": 2.3645659,
  "tags": {
    "addr:housenumber": "36",
    "addr:street": "Rue de Turenne",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Aux Minimes",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 721503166,
  "lat": 48.8578358,
  "lon": 2.3662902,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 721518474,
  "lat": 48.8575642,
  "lon": 2.3677839,
  "tags": {
    "amenity": "cafe",
    "name": "La fontaine",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 721551505,
  "lat": 48.8560432,
  "lon": 2.3669557,
  "tags": {
    "addr:housenumber": "8",
    "addr:street": "Rue du Pas de la Mule",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Les Bonnes Soeurs",
    "opening_hours": "Mo-Su 12:00-23:30",
    "phone": "01 42 74 55 80",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 721563428,
  "lat": 48.8559327,
  "lon": 2.3681748,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Bar à Huîtres",
    "opening_hours": "Mo-Su 12:00-0:00",
    "phone": "+33 1 48 87 98 92",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.lebarahuitres.com/"
  }
},
{
  "type": "node",
  "id": 721602804,
  "lat": 48.8544692,
  "lon": 2.3379604,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Alcazar"
  }
},
{
  "type": "node",
  "id": 722450428,
  "lat": 48.8609783,
  "lon": 2.3810776,
  "tags": {
    "amenity": "cafe",
    "name": "L\'Express"
  }
},
{
  "type": "node",
  "id": 724328981,
  "lat": 48.8881390,
  "lon": 2.3534840,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "senegalese",
    "name": "Keur Mame Diarra"
  }
},
{
  "type": "node",
  "id": 724331717,
  "lat": 48.8871861,
  "lon": 2.3533770,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 724982895,
  "lat": 48.8643899,
  "lon": 2.3635207,
  "tags": {
    "addr:housenumber": "32",
    "addr:street": "Rue de Picardie",
    "amenity": "pub",
    "name": "Café Rouge",
    "opening_hours": "Mo-Su 09:00-02:00",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 725305471,
  "lat": 48.8716043,
  "lon": 2.3645626,
  "tags": {
    "amenity": "cafe",
    "name": "Chez Prune"
  }
},
{
  "type": "node",
  "id": 725410131,
  "lat": 48.8468855,
  "lon": 2.3408953,
  "tags": {
    "addr:housenumber": "1",
    "addr:postcode": "75005",
    "addr:street": "Rue Gay-Lussac",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Cercle",
    "phone": "0146346398",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre ; mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 725594699,
  "lat": 48.8636510,
  "lon": 2.3505320,
  "tags": {
    "amenity": "restaurant",
    "created_by": "iLOE 1.8",
    "cuisine": "japanese",
    "name": "Ta Sushi"
  }
},
{
  "type": "node",
  "id": 726579049,
  "lat": 48.8470420,
  "lon": 2.3413880,
  "tags": {
    "addr:city": "Paris",
    "addr:street": "Rue Soufflot",
    "amenity": "pub",
    "atm": "no",
    "cuisine": "french",
    "food": "yes",
    "internet_access": "no",
    "name": "La Gueuze",
    "outdoor_seating": "yes",
    "smoking": "outside",
    "takeaway": "no"
  }
},
{
  "type": "node",
  "id": 726579051,
  "lat": 48.8470620,
  "lon": 2.3413100,
  "tags": {
    "addr:city": "Paris",
    "addr:street": "Rue Soufflot",
    "amenity": "cafe",
    "atm": "no",
    "cuisine": "coffee_shop",
    "drive_through": "no",
    "internet_access": "wlan",
    "name": "Columbus Café",
    "outdoor_seating": "yes",
    "smoking": "outside",
    "takeaway": "yes"
  }
},
{
  "type": "node",
  "id": 726666485,
  "lat": 48.8459422,
  "lon": 2.3434742,
  "tags": {
    "addr:housenumber": "4",
    "addr:street": "Rue des Fossés Saint-Jacques",
    "amenity": "restaurant",
    "name": "Le Vin qui Danse",
    "opening_hours": "Mo-Su 12:00-14:30,19:30-22:30",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre ; mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 726877613,
  "lat": 48.8630735,
  "lon": 2.3791446,
  "tags": {
    "amenity": "cafe",
    "name": "Le Gallia"
  }
},
{
  "type": "node",
  "id": 726884432,
  "lat": 48.8629401,
  "lon": 2.3792630,
  "tags": {
    "amenity": "cafe",
    "name": "Bistro 67"
  }
},
{
  "type": "node",
  "id": 726896940,
  "lat": 48.8478202,
  "lon": 2.3402069,
  "tags": {
    "amenity": "cafe",
    "name": "Le Rostand"
  }
},
{
  "type": "node",
  "id": 727733990,
  "lat": 48.8422162,
  "lon": 2.3202513,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Rapide"
  }
},
{
  "type": "node",
  "id": 727735237,
  "lat": 48.8438796,
  "lon": 2.3245430,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "couscous",
    "name": "Chez Bébert",
    "opening_hours": "Mo-Su 11:30-15:00,18:30-24:00"
  }
},
{
  "type": "node",
  "id": 727742461,
  "lat": 48.8571890,
  "lon": 2.3477470,
  "tags": {
    "amenity": "cafe",
    "name": "Le Mistral"
  }
},
{
  "type": "node",
  "id": 727743490,
  "lat": 48.8566870,
  "lon": 2.3553310,
  "tags": {
    "amenity": "cafe",
    "name": "Le Gribouille"
  }
},
{
  "type": "node",
  "id": 728309972,
  "lat": 48.8549793,
  "lon": 2.3291241,
  "tags": {
    "amenity": "cafe",
    "name": "Le Bizuth"
  }
},
{
  "type": "node",
  "id": 729117604,
  "lat": 48.8813024,
  "lon": 2.3361254,
  "tags": {
    "amenity": "bar",
    "name": "Le Sans Souci",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 729627777,
  "lat": 48.8643222,
  "lon": 2.3548396,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "61",
    "addr:postcode": "75003",
    "addr:street": "Rue des Gravilliers",
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Chez Li",
    "phone": "0148878179",
    "takeaway": "yes"
  }
},
{
  "type": "node",
  "id": 729628105,
  "lat": 48.8644140,
  "lon": 2.3547850,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Neo Maki",
    "phone": "0142772376",
    "takeaway": "yes"
  }
},
{
  "type": "node",
  "id": 730227420,
  "lat": 48.8687006,
  "lon": 2.3354843,
  "tags": {
    "addr:housenumber": "8",
    "addr:postcode": "75002",
    "addr:street": "Rue Monsigny",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Petit Colbert",
    "note": "Excelent",
    "website": "www.lepetitcolbertparis.fr"
  }
},
{
  "type": "node",
  "id": 731043657,
  "lat": 48.8382008,
  "lon": 2.3515664,
  "tags": {
    "addr:housenumber": "4",
    "addr:street": "Rue du Petit Moine",
    "amenity": "restaurant",
    "cuisine": "korean",
    "name": "Oh ! Chapeau",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre;mise à jour : 2010",
    "source:name": "survey"
  }
},
{
  "type": "node",
  "id": 733174289,
  "lat": 48.8688813,
  "lon": 2.3296955,
  "tags": {
    "amenity": "pub",
    "name": "Kitty O\'Sheas"
  }
},
{
  "type": "node",
  "id": 735096099,
  "lat": 48.8651140,
  "lon": 2.3778720,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "kosher",
    "name": "Le T.L.V"
  }
},
{
  "type": "node",
  "id": 735171891,
  "lat": 48.8821123,
  "lon": 2.3666359,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 735171905,
  "lat": 48.8790715,
  "lon": 2.3649117,
  "tags": {
    "amenity": "cafe",
    "name": "L\'École Buissonnière"
  }
},
{
  "type": "node",
  "id": 735171911,
  "lat": 48.8792180,
  "lon": 2.3665493,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 735171915,
  "lat": 48.8820420,
  "lon": 2.3678327,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian"
  }
},
{
  "type": "node",
  "id": 735171919,
  "lat": 48.8820491,
  "lon": 2.3660464,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 735171923,
  "lat": 48.8816895,
  "lon": 2.3656251,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 735171925,
  "lat": 48.8818956,
  "lon": 2.3658787,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 735171934,
  "lat": 48.8782055,
  "lon": 2.3656749,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 735171938,
  "lat": 48.8788300,
  "lon": 2.3662059,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Chaland"
  }
},
{
  "type": "node",
  "id": 735172006,
  "lat": 48.8814582,
  "lon": 2.3647576,
  "tags": {
    "amenity": "cafe",
    "name": "Bistrot Lafayette"
  }
},
{
  "type": "node",
  "id": 735172024,
  "lat": 48.8812021,
  "lon": 2.3647160,
  "tags": {
    "amenity": "cafe",
    "cuisine": "french",
    "name": "Cristal Bar"
  }
},
{
  "type": "node",
  "id": 735172121,
  "lat": 48.8815137,
  "lon": 2.3659229,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Chez Papa"
  }
},
{
  "type": "node",
  "id": 735172144,
  "lat": 48.8777011,
  "lon": 2.3652544,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Valmy"
  }
},
{
  "type": "node",
  "id": 735172263,
  "lat": 48.8803699,
  "lon": 2.3667330,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 735361060,
  "lat": 48.8831690,
  "lon": 2.3710377,
  "tags": {
    "amenity": "cafe",
    "name": "Le Jaurès"
  }
},
{
  "type": "node",
  "id": 735462834,
  "lat": 48.8813513,
  "lon": 2.3657268,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 735462927,
  "lat": 48.8808723,
  "lon": 2.3646162,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese"
  }
},
{
  "type": "node",
  "id": 735463026,
  "lat": 48.8760311,
  "lon": 2.3700774,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "La Dolce Vita"
  }
},
{
  "type": "node",
  "id": 736956840,
  "lat": 48.8610786,
  "lon": 2.3535904,
  "tags": {
    "amenity": "restaurant",
    "name": "La Station Rambuteau"
  }
},
{
  "type": "node",
  "id": 739769457,
  "lat": 48.8416802,
  "lon": 2.3556271,
  "tags": {
    "addr:housenumber": "39",
    "addr:street": "Rue Geoffroy Saint-Hilaire",
    "amenity": "cafe",
    "birds": "yes",
    "name": "Salon de Thé de La Mosquée de Paris",
    "phone": "+33 1 43 31 38 20"
  }
},
{
  "type": "node",
  "id": 739770210,
  "lat": 48.8417641,
  "lon": 2.3556159,
  "tags": {
    "addr:housenumber": "39",
    "addr:street": "Rue Geoffroy Saint-Hilaire",
    "amenity": "restaurant",
    "birds": "yes",
    "cuisine": "arab",
    "internet_access": "no",
    "name": "Restaurant de La Mosquée de Paris",
    "phone": "+33 1 43 31 38 20",
    "smoking": "no"
  }
},
{
  "type": "node",
  "id": 739798709,
  "lat": 48.8429787,
  "lon": 2.3633417,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 739916374,
  "lat": 48.8359676,
  "lon": 2.3585104,
  "tags": {
    "addr:housenumber": "104",
    "addr:street": "Boulevard de l\'Hôpital",
    "amenity": "restaurant",
    "contact:website": "www.royalbombay.com",
    "name": "Royal Bombay"
  }
},
{
  "type": "node",
  "id": 740160118,
  "lat": 48.8170828,
  "lon": 2.3218132,
  "tags": {
    "addr:postcode": "92120",
    "addr:street": "Avenue Henri Ginoux",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "L\'Opportuniste"
  }
},
{
  "type": "node",
  "id": 741157667,
  "lat": 48.8400778,
  "lon": 2.3373997,
  "tags": {
    "addr:housenumber": "39",
    "addr:street": "Avenue Georges Bernanos",
    "amenity": "restaurant",
    "name": "Restaurant Universitaire Bullier",
    "opening_hours": "Mo-Su 11:30-14:00, 18:15-20:00",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre ; mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 741213238,
  "lat": 48.8392433,
  "lon": 2.3391037,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "88 Bis",
    "addr:postcode": "75014",
    "addr:street": "Boulevard de Port-Royal",
    "amenity": "pub",
    "brewery": "Kwak",
    "name": "Académie de la Bière",
    "phone": "+33 1 43 54 66 65",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre;mise à jour : 2010",
    "website": "http://www.academie-biere.com/"
  }
},
{
  "type": "node",
  "id": 745086544,
  "lat": 48.8520344,
  "lon": 2.3993968,
  "tags": {
    "amenity": "pub",
    "brewery": "chouffe;tripel_karmeliet;chimay",
    "name": "Bouillon belge"
  }
},
{
  "type": "node",
  "id": 746801333,
  "lat": 48.8136640,
  "lon": 2.3181260,
  "tags": {
    "addr:postcode": "92120",
    "addr:street": "Rue Périer",
    "amenity": "restaurant",
    "cuisine": "crepe",
    "food": "Crêperie Saladerie",
    "name": "L\'Establée"
  }
},
{
  "type": "node",
  "id": 747801176,
  "lat": 48.8642700,
  "lon": 2.3531320,
  "tags": {
    "amenity": "bar",
    "name": "Le Saint-Bandry"
  }
},
{
  "type": "node",
  "id": 747889756,
  "lat": 48.8413087,
  "lon": 2.3389738,
  "tags": {
    "addr:housenumber": "27",
    "addr:street": "Rue Henri Barbusse",
    "amenity": "restaurant",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre ; mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 747889841,
  "lat": 48.8413263,
  "lon": 2.3391080,
  "tags": {
    "addr:housenumber": "15",
    "addr:street": "Rue du Val de Grâce",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Val de Grace",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre ; mise à jour : 2010",
    "website": "http://www.levaldegrace.com/"
  }
},
{
  "type": "node",
  "id": 748068907,
  "lat": 48.8382571,
  "lon": 2.3458273,
  "tags": {
    "addr:housenumber": "18",
    "addr:street": "Rue Flatters",
    "amenity": "restaurant",
    "cuisine": "vietnamese",
    "name": "My Tho",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre ; mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 749696090,
  "lat": 48.8864637,
  "lon": 2.3771916,
  "tags": {
    "addr:housenumber": "68",
    "addr:street": "Quai de la Loire",
    "amenity": "bar",
    "name": "BarOurcq",
    "note:fr": "Fermé l\'hiver",
    "opening_hours": "We-Sa 15:00-22:00; Su 15:00-02:00"
  }
},
{
  "type": "node",
  "id": 752433106,
  "lat": 48.8536730,
  "lon": 2.3797768,
  "tags": {
    "amenity": "restaurant",
    "name": "Chez Nicos",
    "speciality": "Crêperie"
  }
},
{
  "type": "node",
  "id": 765566783,
  "lat": 48.9097624,
  "lon": 2.4480522,
  "tags": {
    "addr:housenumber": "13",
    "addr:street": "Rue de l\'égalité",
    "amenity": "restaurant",
    "name": "La Molisana"
  }
},
{
  "type": "node",
  "id": 765902901,
  "lat": 48.8343229,
  "lon": 2.2310107,
  "tags": {
    "amenity": "cafe",
    "name": "Le Bellevue",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 770599549,
  "lat": 48.8638761,
  "lon": 2.4435312,
  "tags": {
    "amenity": "bar",
    "name": "Bergerac",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 770599554,
  "lat": 48.8636733,
  "lon": 2.4440300,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "New Kyoto"
  }
},
{
  "type": "node",
  "id": 770599563,
  "lat": 48.8637275,
  "lon": 2.4440102,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Route de la fortune"
  }
},
{
  "type": "node",
  "id": 770599567,
  "lat": 48.8639055,
  "lon": 2.4425105,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Royal"
  }
},
{
  "type": "node",
  "id": 770728172,
  "lat": 48.8654251,
  "lon": 2.4437339,
  "tags": {
    "amenity": "cafe",
    "name": "Le relais d\'Alsace"
  }
},
{
  "type": "node",
  "id": 770728183,
  "lat": 48.8661354,
  "lon": 2.4443221,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "moroccan",
    "name": "Le Marakech"
  }
},
{
  "type": "node",
  "id": 770728185,
  "lat": 48.8626362,
  "lon": 2.4420478,
  "tags": {
    "amenity": "bar",
    "name": "Café Forum"
  }
},
{
  "type": "node",
  "id": 770728196,
  "lat": 48.8633184,
  "lon": 2.4465610,
  "tags": {
    "amenity": "bar",
    "name": "La Pêche"
  }
},
{
  "type": "node",
  "id": 770728199,
  "lat": 48.8680917,
  "lon": 2.4467445,
  "tags": {
    "amenity": "bar",
    "name": "Tabac des 7 chemins"
  }
},
{
  "type": "node",
  "id": 770728202,
  "lat": 48.8627118,
  "lon": 2.4415701,
  "tags": {
    "amenity": "bar",
    "name": "Les Monédières"
  }
},
{
  "type": "node",
  "id": 770728203,
  "lat": 48.8654678,
  "lon": 2.4438008,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "caribbean",
    "name": "Délice créole"
  }
},
{
  "type": "node",
  "id": 773531725,
  "lat": 48.8671314,
  "lon": 2.3577761,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Vertbois",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 773531726,
  "lat": 48.8668458,
  "lon": 2.3586800,
  "tags": {
    "addr:housenumber": "9",
    "addr:street": "Rue du Vertbois",
    "amenity": "restaurant",
    "name": "Pramil",
    "opening_hours": "Tu-Sa 12:00-14:30,19:30-22:30",
    "phone": "01 42 72 03 60",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.pramilrestaurant.fr/"
  }
},
{
  "type": "node",
  "id": 773534226,
  "lat": 48.8668914,
  "lon": 2.3584627,
  "tags": {
    "amenity": "restaurant",
    "name": "chez Pinard"
  }
},
{
  "type": "node",
  "id": 773534275,
  "lat": 48.8670160,
  "lon": 2.3581568,
  "tags": {
    "addr:housenumber": "32",
    "addr:street": "Rue de Turbigo",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "L\'Ami Louis",
    "opening_hours": "Mo-Sa 12:00-14:30,19:30-23:30",
    "phone": "01 48 87 77 48",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 773537233,
  "lat": 48.8670538,
  "lon": 2.3582562,
  "tags": {
    "amenity": "restaurant",
    "name": "Anahï"
  }
},
{
  "type": "node",
  "id": 773537982,
  "lat": 48.8668315,
  "lon": 2.3590233,
  "tags": {
    "amenity": "restaurant",
    "name": "La Table d\'Anna"
  }
},
{
  "type": "node",
  "id": 773538600,
  "lat": 48.8668006,
  "lon": 2.3582106,
  "tags": {
    "amenity": "restaurant",
    "name": "chez Isaac"
  }
},
{
  "type": "node",
  "id": 773602071,
  "lat": 48.8680162,
  "lon": 2.3548820,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "337",
    "addr:postcode": "75003",
    "addr:street": "Rue Saint-Martin",
    "amenity": "bar",
    "name": "Les Parisiens",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 773603020,
  "lat": 48.8647030,
  "lon": 2.3567983,
  "tags": {
    "addr:housename": "3",
    "addr:postcode": "75003",
    "addr:street": "Rue Volta",
    "amenity": "restaurant",
    "capacity": "20",
    "cuisine": "vietnamese",
    "name": "Song heng",
    "opening_hours": "Mo-Fr 11:00-16:00, Sa 11:00-15:00"
  }
},
{
  "type": "node",
  "id": 773603028,
  "lat": 48.8647921,
  "lon": 2.3568339,
  "tags": {
    "addr:housenumber": "5",
    "addr:postcode": "75003",
    "addr:street": "Rue Volta",
    "amenity": "restaurant",
    "cuisine": "chinese; Hangzhou",
    "name": "Le Lac de l\'Ouest"
  }
},
{
  "type": "node",
  "id": 773612341,
  "lat": 48.8643639,
  "lon": 2.3541873,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 775361913,
  "lat": 48.8668939,
  "lon": 2.3583012,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 775361914,
  "lat": 48.8668657,
  "lon": 2.3585775,
  "tags": {
    "amenity": "restaurant",
    "name": "chez Alain"
  }
},
{
  "type": "node",
  "id": 776938174,
  "lat": 48.8543308,
  "lon": 2.3402565,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Christine"
  }
},
{
  "type": "node",
  "id": 776938194,
  "lat": 48.8537741,
  "lon": 2.3390379,
  "tags": {
    "amenity": "bar",
    "name": "Le Tennessee"
  }
},
{
  "type": "node",
  "id": 776938559,
  "lat": 48.8536188,
  "lon": 2.3393161,
  "tags": {
    "amenity": "cafe",
    "fixme": "Horaires imcomplets",
    "name": "Starbucks Coffee",
    "opening_hours": "Mo-Su",
    "source:opening_hours": "survey"
  }
},
{
  "type": "node",
  "id": 777037844,
  "lat": 48.8551444,
  "lon": 2.3395098,
  "tags": {
    "amenity": "cafe",
    "name": "Le Nesle"
  }
},
{
  "type": "node",
  "id": 777174257,
  "lat": 48.8576139,
  "lon": 2.3354110,
  "tags": {
    "amenity": "cafe",
    "name": "Café des Beaux-Arts"
  }
},
{
  "type": "node",
  "id": 778220091,
  "lat": 48.8533950,
  "lon": 2.3355231,
  "tags": {
    "amenity": "bar",
    "name": "La Rhumerie"
  }
},
{
  "type": "node",
  "id": 778287511,
  "lat": 48.8546132,
  "lon": 2.3335075,
  "tags": {
    "amenity": "cafe",
    "name": "Le Bonaparte"
  }
},
{
  "type": "node",
  "id": 778287646,
  "lat": 48.8546432,
  "lon": 2.3327719,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Relais de l\'Entrecôte"
  }
},
{
  "type": "node",
  "id": 778318806,
  "lat": 48.8533032,
  "lon": 2.3340213,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Pizza Vesuvio"
  }
},
{
  "type": "node",
  "id": 778523234,
  "lat": 48.8529586,
  "lon": 2.3360296,
  "tags": {
    "amenity": "restaurant",
    "name": "Léon de Bruxelles",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 779766896,
  "lat": 48.8516089,
  "lon": 2.3354609,
  "tags": {
    "amenity": "restaurant",
    "name": "Séraphin",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 780157924,
  "lat": 48.8519539,
  "lon": 2.3394857,
  "tags": {
    "amenity": "cafe",
    "name": "Starbucks Coffee",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 780320191,
  "lat": 48.8491904,
  "lon": 2.3391833,
  "tags": {
    "amenity": "cafe",
    "name": "Bistrot Au Petit Suisse",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 783272359,
  "lat": 48.8477108,
  "lon": 2.3407718,
  "tags": {
    "amenity": "cafe",
    "name": "Le Luxembourg",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 784307559,
  "lat": 48.8801119,
  "lon": 2.3535250,
  "tags": {
    "amenity": "restaurant",
    "name": "Hippopotamus",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 784632377,
  "lat": 48.8756316,
  "lon": 2.3991077,
  "tags": {
    "amenity": "cafe",
    "name": "Le Télégraphe"
  }
},
{
  "type": "node",
  "id": 786137492,
  "lat": 48.8353026,
  "lon": 2.2420170,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Chai"
  }
},
{
  "type": "node",
  "id": 786142888,
  "lat": 48.8514421,
  "lon": 2.3272954,
  "tags": {
    "amenity": "restaurant",
    "name": "Brasserie Lutetia",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 786664840,
  "lat": 48.8551090,
  "lon": 2.3306870,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Ristorante Caffe Toscano"
  }
},
{
  "type": "node",
  "id": 787017279,
  "lat": 48.8342479,
  "lon": 2.2397511,
  "tags": {
    "amenity": "restaurant",
    "name": "La Grignotière",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 787347279,
  "lat": 48.8487629,
  "lon": 2.3975462,
  "tags": {
    "amenity": "restaurant",
    "brewery": "1664",
    "name": "Le Berger",
    "opening_hours": "Mo-Fr 08:00-21:00",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 787348331,
  "lat": 48.8685799,
  "lon": 2.3685826,
  "tags": {
    "addr:housenumber": "4",
    "addr:street": "Rue de la Fontaine au Roi",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Cabinet de Sa Majesté",
    "opening_hours": "Mo-Th, Sa 19:00-22:30;Tu-Fr 12:00-14:30",
    "phone": "01 43 55 14 40",
    "website": "http://www.lecabinetdesamajeste.com/"
  }
},
{
  "type": "node",
  "id": 787367993,
  "lat": 48.8614134,
  "lon": 2.3729582,
  "tags": {
    "addr:housenumber": "80",
    "addr:street": "Boulevard Richard Lenoir",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Réfectoire",
    "opening_hours": "Mo-Su 12:00-23:00",
    "phone": "01 48 06 74 85"
  }
},
{
  "type": "node",
  "id": 787396680,
  "lat": 48.8690249,
  "lon": 2.3683671,
  "tags": {
    "addr:housenumber": "36",
    "addr:street": "Rue du Faubourg du Temple",
    "amenity": "restaurant",
    "cuisine": "turkish",
    "name": "Sizin",
    "opening_hours": "Mo-Sa 12:00-15:00;Mo-Su 19:00-23:00",
    "phone": "01 48 06 54 03"
  }
},
{
  "type": "node",
  "id": 787964024,
  "lat": 48.8426139,
  "lon": 2.3298989,
  "tags": {
    "amenity": "pub",
    "name": "Shannon Pub",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 788002163,
  "lat": 48.8447355,
  "lon": 2.3323563,
  "tags": {
    "amenity": "cafe",
    "name": "News Café",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 788761643,
  "lat": 48.8416177,
  "lon": 2.3314774,
  "tags": {
    "amenity": "restaurant",
    "name": "Chez Fernand",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 788918203,
  "lat": 48.8419379,
  "lon": 2.3304718,
  "tags": {
    "amenity": "restaurant",
    "name": "Hippopotamus",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 789665565,
  "lat": 48.8367406,
  "lon": 2.2418751,
  "tags": {
    "amenity": "cafe",
    "name": "Le Lutétia",
    "shop": "tobacco",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 790498231,
  "lat": 48.8422661,
  "lon": 2.3280738,
  "tags": {
    "amenity": "restaurant",
    "name": "La Coupole",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 790498437,
  "lat": 48.8424306,
  "lon": 2.3290349,
  "tags": {
    "amenity": "restaurant",
    "name": "Bistro Romain",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 790833367,
  "lat": 48.8632239,
  "lon": 2.3566007,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "13",
    "addr:street": "Rue Chapon",
    "amenity": "restaurant",
    "name": "Le Taxi Jaune",
    "opening_hours": "Mo-Fr 12:00-15:00,20:00-22:30",
    "phone": "01 42 76 00 40",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 791720942,
  "lat": 48.8471137,
  "lon": 2.3267431,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'Horizon",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 791852618,
  "lat": 48.8469097,
  "lon": 2.3213077,
  "tags": {
    "amenity": "cafe",
    "name": "Le Bistrot Landais",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 791976002,
  "lat": 48.8389313,
  "lon": 2.2470853,
  "tags": {
    "amenity": "cafe",
    "name": "Mokafé",
    "shop": "tobacco",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 792004810,
  "lat": 48.8499302,
  "lon": 2.3238399,
  "tags": {
    "amenity": "cafe",
    "name": "Le Week-End",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 792019786,
  "lat": 48.8373387,
  "lon": 2.2455992,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "La Dolce Vita"
  }
},
{
  "type": "node",
  "id": 792056043,
  "lat": 48.8685290,
  "lon": 2.3895370,
  "tags": {
    "amenity": "restaurant",
    "created_by": "iLOE 1.8",
    "name": "L\'Entrepot\'s"
  }
},
{
  "type": "node",
  "id": 794147747,
  "lat": 48.8339435,
  "lon": 2.2450589,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Le Belvédère",
    "phone": "+33146212327"
  }
},
{
  "type": "node",
  "id": 794149607,
  "lat": 48.8330008,
  "lon": 2.2459743,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Tachibana Sushi",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 794166485,
  "lat": 48.8334010,
  "lon": 2.2433166,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'Eden Café"
  }
},
{
  "type": "node",
  "id": 795274199,
  "lat": 48.9052476,
  "lon": 2.2555412,
  "tags": {
    "amenity": "restaurant",
    "name": "Buffalo Grill",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 795606502,
  "lat": 48.8709269,
  "lon": 2.3577774,
  "tags": {
    "addr:housenumber": "2",
    "addr:street": "Passage du Marché",
    "amenity": "bar",
    "name": "Point Bar",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 795710322,
  "lat": 48.8340444,
  "lon": 2.2492281,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Wasabi",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 795710378,
  "lat": 48.8329256,
  "lon": 2.2476392,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Le Vinci",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 795711563,
  "lat": 48.8328110,
  "lon": 2.2485309,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "couscous",
    "name": "Le Ténéré",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 796082711,
  "lat": 48.8367623,
  "lon": 2.3463790,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 796873281,
  "lat": 48.8392780,
  "lon": 2.2459934,
  "tags": {
    "addr:housenumber": "40",
    "addr:street": "Route de la reine",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Yuki",
    "opening_hours": "Mo-Sa 12:00-14:30, 19:00-23:00",
    "phone": "+33141312647"
  }
},
{
  "type": "node",
  "id": 796873445,
  "lat": 48.8393142,
  "lon": 2.2456416,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "L\'Auberge de la Reine",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 797963548,
  "lat": 48.9008021,
  "lon": 2.3156745,
  "tags": {
    "amenity": "restaurant",
    "name": "Avern Store"
  }
},
{
  "type": "node",
  "id": 798226852,
  "lat": 48.8378515,
  "lon": 2.2412256,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "mexican",
    "name": "El Rancho",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 801261974,
  "lat": 48.8467204,
  "lon": 2.3172126,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "1",
    "addr:postcode": "75006",
    "addr:street": "Boulevard du Montparnasse",
    "amenity": "restaurant",
    "capacity": "110",
    "contact:phone": "01.47.34.72.70",
    "name": "Le François Coppée",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.francois-coppee.com"
  }
},
{
  "type": "node",
  "id": 802009004,
  "lat": 48.8380126,
  "lon": 2.2392937,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Pizza del Arte"
  }
},
{
  "type": "node",
  "id": 802013474,
  "lat": 48.8381169,
  "lon": 2.2401356,
  "tags": {
    "amenity": "restaurant",
    "name": "La Verrière",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 804285906,
  "lat": 48.8467363,
  "lon": 2.3268420,
  "tags": {
    "addr:housenumber": "127",
    "addr:street": "Rue de Rennes",
    "amenity": "cafe",
    "name": "Café Saint-Placide",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 804990776,
  "lat": 48.8340722,
  "lon": 2.2385469,
  "tags": {
    "addr:housenumber": "58bis",
    "amenity": "restaurant",
    "cuisine": "curry",
    "name": "Nirmala\'s Pub",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 804990843,
  "lat": 48.8321613,
  "lon": 2.2382146,
  "tags": {
    "addr:housenumber": "58",
    "addr:street": "Avenue du Général Leclerc",
    "amenity": "cafe",
    "name": "Le Rex",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 805954466,
  "lat": 48.8530169,
  "lon": 2.3313456,
  "tags": {
    "addr:housenumber": "2",
    "addr:street": "Rue du Sabot",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "La Bocca Della Verita",
    "opening_hours": "Mo-Fr 12:00-14:30;Mo-Th, Su 19:30-22:30;Fr-Sa 19:30-23:00;Sa-Su 12:30-15:00",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.boccadellaverita.fr/"
  }
},
{
  "type": "node",
  "id": 806100131,
  "lat": 48.8521220,
  "lon": 2.3374608,
  "tags": {
    "addr:housenumber": "40",
    "addr:postcode": "75006",
    "addr:street": "Rue Grégoire de Tours",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Oenosteria",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 806100985,
  "lat": 48.8537453,
  "lon": 2.3365413,
  "tags": {
    "addr:housenumber": "26",
    "addr:street": "Rue de Buci",
    "amenity": "cafe",
    "cuisine": "french",
    "name": "Au Chai de l\'Abbaye",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 806114404,
  "lat": 48.8534529,
  "lon": 2.3385450,
  "tags": {
    "addr:housenumber": "3",
    "addr:postcode": "75006",
    "addr:street": "Rue de l\'Ancienne Comédie",
    "amenity": "bar",
    "entrance": "yes",
    "name": "Bar III",
    "website": "http://www.bar3stgermain.com/",
    "wifi": "yes"
  }
},
{
  "type": "node",
  "id": 810252630,
  "lat": 48.8701795,
  "lon": 2.3108738,
  "tags": {
    "amenity": "cafe",
    "name": "Le Montaigne",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 810252656,
  "lat": 48.8701112,
  "lon": 2.3111019,
  "tags": {
    "amenity": "cafe",
    "name": "Le Rond-Point",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 810646880,
  "lat": 48.8673734,
  "lon": 2.3222301,
  "tags": {
    "amenity": "restaurant",
    "name": "Maxim\'s",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 811326704,
  "lat": 48.8643001,
  "lon": 2.3323292,
  "tags": {
    "amenity": "bar",
    "name": "El Tonel"
  }
},
{
  "type": "node",
  "id": 812118252,
  "lat": 48.8695610,
  "lon": 2.3204803,
  "tags": {
    "amenity": "cafe",
    "name": "Le Faubourg",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 812118450,
  "lat": 48.8693756,
  "lon": 2.3206236,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Quarante Faubourg",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 812129239,
  "lat": 48.8705692,
  "lon": 2.3211241,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Pizza Miramar",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 812129610,
  "lat": 48.8706806,
  "lon": 2.3211802,
  "tags": {
    "amenity": "bar",
    "name": "Le Comptoir du Faubourg",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 813394579,
  "lat": 48.8712520,
  "lon": 2.3169520,
  "tags": {
    "amenity": "bar",
    "name": "Elysée Lounge",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 813395003,
  "lat": 48.8712577,
  "lon": 2.3176917,
  "tags": {
    "amenity": "cafe",
    "name": "Le Saint-Laurent",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 813460453,
  "lat": 48.8727654,
  "lon": 2.3210286,
  "tags": {
    "amenity": "restaurant",
    "name": "Francis Café",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 813460549,
  "lat": 48.8731588,
  "lon": 2.3180736,
  "tags": {
    "amenity": "cafe",
    "name": "Le Mirasol",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 813770215,
  "lat": 48.8703638,
  "lon": 2.3102774,
  "tags": {
    "amenity": "restaurant",
    "name": "Hippopotamus",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 813771316,
  "lat": 48.8725939,
  "lon": 2.3104452,
  "tags": {
    "amenity": "cafe",
    "name": "L\'Idéal Bar",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 813771898,
  "lat": 48.8723529,
  "lon": 2.3102456,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Vingt-Huit",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 814014124,
  "lat": 48.8737653,
  "lon": 2.3157653,
  "tags": {
    "amenity": "cafe",
    "name": "Le Miro",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 814014295,
  "lat": 48.8740832,
  "lon": 2.3160181,
  "tags": {
    "amenity": "cafe",
    "name": "Le Mesnil",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 814051269,
  "lat": 48.8728071,
  "lon": 2.3158911,
  "tags": {
    "amenity": "cafe",
    "name": "L\'Escale",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 814051282,
  "lat": 48.8738587,
  "lon": 2.3163169,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Chez Ly",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 814098768,
  "lat": 48.8740946,
  "lon": 2.3177657,
  "tags": {
    "amenity": "cafe",
    "name": "Le Derby",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 814098819,
  "lat": 48.8737509,
  "lon": 2.3196440,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Relais d\'Astorg",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 814099336,
  "lat": 48.8744903,
  "lon": 2.3184375,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Saitama",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 814805798,
  "lat": 48.8755838,
  "lon": 2.3199456,
  "tags": {
    "amenity": "cafe",
    "name": "Le Carré",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 814805922,
  "lat": 48.8750678,
  "lon": 2.3201909,
  "tags": {
    "amenity": "cafe",
    "name": "La Pépinière",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 814836545,
  "lat": 48.8349907,
  "lon": 2.2442044,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Ducoté Cuisine",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 814985808,
  "lat": 48.8396584,
  "lon": 2.3567615,
  "tags": {
    "amenity": "restaurant",
    "name": "La Traversée de Paris"
  }
},
{
  "type": "node",
  "id": 815508141,
  "lat": 48.8830838,
  "lon": 2.2646468,
  "tags": {
    "amenity": "cafe",
    "name": "Le Bouquet",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 815716377,
  "lat": 48.8738325,
  "lon": 2.3224396,
  "tags": {
    "amenity": "cafe",
    "name": "Sunset Café",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 815716930,
  "lat": 48.8736367,
  "lon": 2.3223675,
  "tags": {
    "amenity": "restaurant",
    "name": "Pub Louis XVI",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 815764551,
  "lat": 48.8713058,
  "lon": 2.3233311,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Shangralila",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 815764595,
  "lat": 48.8732551,
  "lon": 2.3241335,
  "tags": {
    "amenity": "pub",
    "name": "The Cricketer",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 815777425,
  "lat": 48.8729576,
  "lon": 2.3236844,
  "tags": {
    "amenity": "cafe",
    "name": "Le Bourbon",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 815798234,
  "lat": 48.8713495,
  "lon": 2.3232715,
  "tags": {
    "amenity": "cafe",
    "name": "Le Carrefour Café",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 815830501,
  "lat": 48.8722237,
  "lon": 2.3257923,
  "tags": {
    "amenity": "cafe",
    "name": "Le Week-end",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 815830612,
  "lat": 48.8731505,
  "lon": 2.3255205,
  "tags": {
    "amenity": "cafe",
    "name": "Le Greffulhe",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 815831203,
  "lat": 48.8724761,
  "lon": 2.3240966,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Pompei",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 815842788,
  "lat": 48.8721839,
  "lon": 2.3251685,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Madeleine C.",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 817222541,
  "lat": 48.8743886,
  "lon": 2.3211490,
  "tags": {
    "amenity": "cafe",
    "name": "Le Préfet",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 817222817,
  "lat": 48.8746980,
  "lon": 2.3252714,
  "tags": {
    "amenity": "pub",
    "name": "Pub Saint-Lazare",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 817222906,
  "lat": 48.8750673,
  "lon": 2.3239545,
  "tags": {
    "amenity": "cafe",
    "name": "La Cour de Rome",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 817223005,
  "lat": 48.8751646,
  "lon": 2.3250295,
  "tags": {
    "amenity": "restaurant",
    "name": "Hippopotamus",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 817223167,
  "lat": 48.8753759,
  "lon": 2.3236510,
  "tags": {
    "amenity": "cafe",
    "name": "Starbucks Coffee",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 817244406,
  "lat": 48.8753241,
  "lon": 2.3259291,
  "tags": {
    "amenity": "restaurant",
    "name": "Brasserie Mollard",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "wikipedia": "fr:Brasserie Mollard"
  }
},
{
  "type": "node",
  "id": 817244738,
  "lat": 48.8752570,
  "lon": 2.3254427,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Café Marco Polo",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 817304096,
  "lat": 48.8741599,
  "lon": 2.3254911,
  "tags": {
    "amenity": "restaurant",
    "name": "Triadou Haussmann",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 817304250,
  "lat": 48.8742483,
  "lon": 2.3248090,
  "tags": {
    "amenity": "cafe",
    "name": "L\'Arcade Haussmann",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 817808591,
  "lat": 48.8761914,
  "lon": 2.3213046,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Sarladais",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 817809057,
  "lat": 48.8754293,
  "lon": 2.3236426,
  "tags": {
    "amenity": "cafe",
    "name": "Au Départ",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 817830194,
  "lat": 48.8760259,
  "lon": 2.3235129,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'Oiseau Blanc",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 817874329,
  "lat": 48.8771550,
  "lon": 2.3220451,
  "tags": {
    "amenity": "cafe",
    "name": "L\'Équipage",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 817974703,
  "lat": 48.8869689,
  "lon": 2.3475030,
  "tags": {
    "addr:housenumber": "1",
    "addr:postcode": "75018",
    "addr:street": "Rue Ramey",
    "amenity": "bar",
    "name": "Au clair de lune"
  }
},
{
  "type": "node",
  "id": 819031352,
  "lat": 48.8803557,
  "lon": 2.3235567,
  "tags": {
    "amenity": "bar",
    "name": "Le Seven",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 819031540,
  "lat": 48.8801220,
  "lon": 2.3241052,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Trevoli",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 819101947,
  "lat": 48.8778520,
  "lon": 2.3265712,
  "tags": {
    "amenity": "cafe",
    "name": "Terrasse Saint-Lazare",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 819101990,
  "lat": 48.8770026,
  "lon": 2.3270417,
  "tags": {
    "amenity": "bar",
    "name": "L\'Atlantique",
    "restaurant": "yes",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 819175994,
  "lat": 48.8797765,
  "lon": 2.3268873,
  "tags": {
    "amenity": "cafe",
    "name": "Le Royal Europe",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 819176199,
  "lat": 48.8766444,
  "lon": 2.3270121,
  "tags": {
    "amenity": "bar",
    "name": "Black Tie",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 819866089,
  "lat": 48.8831176,
  "lon": 2.3264261,
  "tags": {
    "amenity": "restaurant",
    "name": "Hippopotamus",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 819866381,
  "lat": 48.8820671,
  "lon": 2.3242802,
  "tags": {
    "amenity": "restaurant",
    "bar": "yes",
    "name": "Le Petit Turin",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 819866391,
  "lat": 48.8821564,
  "lon": 2.3257619,
  "tags": {
    "amenity": "cafe",
    "name": "Le Florence",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 820938894,
  "lat": 48.8907562,
  "lon": 2.2398256,
  "tags": {
    "amenity": "restaurant",
    "name": "Casino",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 820938929,
  "lat": 48.8914112,
  "lon": 2.2372226,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Pizza Del Arte",
    "opening_hours": "Mo-Sa 11:30-22:00",
    "phone": "01.41.02.01.05"
  }
},
{
  "type": "node",
  "id": 821879330,
  "lat": 48.8832767,
  "lon": 2.3277563,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 821879344,
  "lat": 48.8834770,
  "lon": 2.3281748,
  "tags": {
    "amenity": "restaurant",
    "name": "Léon de Bruxelles",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 821879351,
  "lat": 48.8837504,
  "lon": 2.3286298,
  "tags": {
    "amenity": "restaurant",
    "name": "Indiana Café",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 821886212,
  "lat": 48.8836441,
  "lon": 2.3266599,
  "tags": {
    "amenity": "cafe",
    "name": "Au Petit Poucet",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 821902038,
  "lat": 48.8829218,
  "lon": 2.3256282,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Spartacus",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 821902041,
  "lat": 48.8831342,
  "lon": 2.3236837,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "L\'Étoile du Kashmir",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 822037602,
  "lat": 48.8801277,
  "lon": 2.3203119,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Au Bon Sushi",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 822037622,
  "lat": 48.8793007,
  "lon": 2.3221454,
  "tags": {
    "amenity": "cafe",
    "name": "Le Jardin de Rome",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 822037743,
  "lat": 48.8799079,
  "lon": 2.3202876,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "lebanese",
    "name": "Au Bois d\'Acacias",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 822140557,
  "lat": 48.8805205,
  "lon": 2.3183206,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Goût des Hôtes",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 822253172,
  "lat": 48.8798040,
  "lon": 2.3153072,
  "tags": {
    "amenity": "cafe",
    "name": "Le Select Monceau",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 822951124,
  "lat": 48.8794469,
  "lon": 2.3138767,
  "tags": {
    "amenity": "cafe",
    "name": "Le Malesherbes",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 822951734,
  "lat": 48.8769627,
  "lon": 2.3148350,
  "tags": {
    "amenity": "bar",
    "name": "Le Treilhard Bar",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 825837788,
  "lat": 48.8558538,
  "lon": 2.3252896,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Saint-Germain"
  }
},
{
  "type": "node",
  "id": 825859710,
  "lat": 48.8738521,
  "lon": 2.3147064,
  "tags": {
    "amenity": "cafe",
    "name": "Café Percier",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 826819992,
  "lat": 48.8773635,
  "lon": 2.3097330,
  "tags": {
    "amenity": "cafe",
    "name": "Riva",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 826931595,
  "lat": 48.8733445,
  "lon": 2.3091989,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Chez Boris",
    "phone": "+33 1 435935 39",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 826932041,
  "lat": 48.8745431,
  "lon": 2.3093666,
  "tags": {
    "amenity": "restaurant",
    "name": "Hortense",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 826932412,
  "lat": 48.8746493,
  "lon": 2.3055712,
  "tags": {
    "amenity": "cafe",
    "name": "Le Frieland",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 827590328,
  "lat": 48.8496728,
  "lon": 2.3082844,
  "tags": {
    "amenity": "cafe",
    "name": "Aux Ministères",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 828086142,
  "lat": 48.8794607,
  "lon": 2.3036933,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Courcelles",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 828086157,
  "lat": 48.8796881,
  "lon": 2.3046975,
  "tags": {
    "amenity": "cafe",
    "name": "Le Vigny",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 828138856,
  "lat": 48.8729879,
  "lon": 2.3074334,
  "tags": {
    "amenity": "pub",
    "name": "The Bowler",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 828139026,
  "lat": 48.8724450,
  "lon": 2.3072214,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Cou de la Girafe",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 828701488,
  "lat": 48.8411028,
  "lon": 2.2875550,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Murmure",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 828728722,
  "lat": 48.8699553,
  "lon": 2.3082890,
  "tags": {
    "amenity": "cafe",
    "name": "Le Madrigal",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 828728729,
  "lat": 48.8707572,
  "lon": 2.3085752,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "regional",
    "name": "Flam\'s",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 828728733,
  "lat": 48.8696331,
  "lon": 2.3067786,
  "tags": {
    "amenity": "restaurant",
    "name": "Pizza Pino"
  }
},
{
  "type": "node",
  "id": 828825713,
  "lat": 48.8354680,
  "lon": 2.2893109,
  "tags": {
    "amenity": "bar",
    "name": "Le Crocodile Vert"
  }
},
{
  "type": "node",
  "id": 829051469,
  "lat": 48.8722006,
  "lon": 2.3040149,
  "tags": {
    "amenity": "pub",
    "name": "The Freedom",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 829051632,
  "lat": 48.8715784,
  "lon": 2.3063992,
  "tags": {
    "amenity": "restaurant",
    "name": "Chez Paulette",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 829051648,
  "lat": 48.8722241,
  "lon": 2.3044701,
  "tags": {
    "amenity": "cafe",
    "name": "Le Fronton",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 829051806,
  "lat": 48.8713131,
  "lon": 2.3073190,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "thai; chinese",
    "name": "Dynastie Thai",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 829051907,
  "lat": 48.8721722,
  "lon": 2.3046558,
  "tags": {
    "amenity": "cafe",
    "name": "Les Arcades",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 829071509,
  "lat": 48.8713952,
  "lon": 2.3012394,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Fouquet\'s",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 829203297,
  "lat": 48.8697736,
  "lon": 2.3021852,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "lebanese",
    "name": "Al-Ajami",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 829203592,
  "lat": 48.8700490,
  "lon": 2.3017240,
  "tags": {
    "amenity": "bar",
    "name": "L\'Écluse",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 830646522,
  "lat": 48.8669256,
  "lon": 2.3076130,
  "tags": {
    "amenity": "restaurant",
    "name": "Pepita",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 830646904,
  "lat": 48.8668818,
  "lon": 2.3076173,
  "tags": {
    "amenity": "restaurant",
    "name": "Siamin\'",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 830646910,
  "lat": 48.8672769,
  "lon": 2.3062806,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'Avenue",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 830647727,
  "lat": 48.8670111,
  "lon": 2.3076126,
  "tags": {
    "amenity": "restaurant",
    "name": "Chez Savy",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 830670934,
  "lat": 48.8671369,
  "lon": 2.3028950,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Ratn",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 831915414,
  "lat": 48.8681586,
  "lon": 2.3027800,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Relais de l\'Entrecôte",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 831943767,
  "lat": 48.8660598,
  "lon": 2.3017043,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Comptoir de Thiou",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 833088601,
  "lat": 48.8684779,
  "lon": 2.2986087,
  "tags": {
    "amenity": "cafe",
    "name": "Le Marceau",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 833088605,
  "lat": 48.8650906,
  "lon": 2.3007462,
  "tags": {
    "amenity": "cafe",
    "name": "Bert\'s",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 833088653,
  "lat": 48.8683182,
  "lon": 2.2984850,
  "tags": {
    "amenity": "bar",
    "name": "Le Chaillot",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 833088665,
  "lat": 48.8651464,
  "lon": 2.3005883,
  "tags": {
    "amenity": "restaurant",
    "name": "Mascotte Café",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 833522617,
  "lat": 48.8724390,
  "lon": 2.3021296,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Restaurant Yang",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 836343456,
  "lat": 48.8723302,
  "lon": 2.3781841,
  "tags": {
    "amenity": "cafe",
    "name": "Le Vieux Saumur",
    "outdoor_seating": "yes"
  }
},
{
  "type": "node",
  "id": 836373183,
  "lat": 48.8727345,
  "lon": 2.3796635,
  "tags": {
    "amenity": "cafe",
    "name": "Le Palais du Vin"
  }
},
{
  "type": "node",
  "id": 836380026,
  "lat": 48.8713425,
  "lon": 2.4039078,
  "tags": {
    "amenity": "cafe",
    "name": "Au Troquet"
  }
},
{
  "type": "node",
  "id": 836411097,
  "lat": 48.8710202,
  "lon": 2.3789233,
  "tags": {
    "amenity": "restaurant",
    "name": "BKO"
  }
},
{
  "type": "node",
  "id": 837211649,
  "lat": 48.8788328,
  "lon": 2.3896914,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Ô Divin"
  }
},
{
  "type": "node",
  "id": 837769005,
  "lat": 48.8526933,
  "lon": 2.4056082,
  "tags": {
    "addr:housenumber": "93",
    "addr:postcode": "75020",
    "addr:street": "Rue d\'Avron",
    "amenity": "bar",
    "name": "Le Narval"
  }
},
{
  "type": "node",
  "id": 837955027,
  "lat": 48.8148510,
  "lon": 2.2341735,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Pizza Napoli",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 838122041,
  "lat": 48.8751152,
  "lon": 2.2963457,
  "tags": {
    "amenity": "cafe",
    "name": "L\'Étoile 1903"
  }
},
{
  "type": "node",
  "id": 838122073,
  "lat": 48.8766089,
  "lon": 2.3012252,
  "tags": {
    "amenity": "cafe",
    "name": "Do Ré Mi",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 838145870,
  "lat": 48.8752867,
  "lon": 2.2964925,
  "tags": {
    "amenity": "cafe",
    "name": "La Flamme",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 838533035,
  "lat": 48.8790339,
  "lon": 2.2985581,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Bar à Huîtres",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 838533078,
  "lat": 48.8787934,
  "lon": 2.2983905,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Pizza Hut",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 838533111,
  "lat": 48.8775425,
  "lon": 2.2981350,
  "tags": {
    "amenity": "restaurant",
    "name": "Hippopotamus",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 838638110,
  "lat": 48.8783508,
  "lon": 2.3004239,
  "tags": {
    "amenity": "restaurant",
    "name": "La Corniche",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 838638189,
  "lat": 48.8778323,
  "lon": 2.2987883,
  "tags": {
    "amenity": "restaurant",
    "name": "La Lorraine",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 839816780,
  "lat": 48.8646770,
  "lon": 2.3992490,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 840654182,
  "lat": 48.8690865,
  "lon": 2.3022434,
  "tags": {
    "addr:housenumber": "49",
    "addr:street": "Rue Pierre Charron",
    "amenity": "restaurant",
    "email": "info@pershinghall.com",
    "fax": "+ 33 1 58 36 58 01",
    "internet_access": "wlan",
    "name": "Persing Hall",
    "phone": "+ 33 1 58 36 58 00",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010 && website",
    "stars": "5",
    "tourism": "hotel",
    "website": "http://www.pershinghall.com"
  }
},
{
  "type": "node",
  "id": 840654191,
  "lat": 48.8694700,
  "lon": 2.3034453,
  "tags": {
    "addr:housenumber": "60",
    "addr:postcode": "75008",
    "addr:street": "Rue Pierre Charron",
    "amenity": "restaurant",
    "contact:phone": "+33 1 45634848",
    "cuisine": "italian",
    "name": "Ziti",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 843477435,
  "lat": 48.8699522,
  "lon": 2.3058242,
  "tags": {
    "amenity": "restaurant",
    "name": "Maison de l\'Alsace",
    "website": "http://www.maison-alsace.com/",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 844074938,
  "lat": 48.8384390,
  "lon": 2.3511134,
  "tags": {
    "amenity": "cafe",
    "name": "A Verse Toujours",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 844531907,
  "lat": 48.8891960,
  "lon": 2.3333376,
  "tags": {
    "amenity": "cafe",
    "name": "café Ziem"
  }
},
{
  "type": "node",
  "id": 845200581,
  "lat": 48.8390096,
  "lon": 2.3532786,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Refuge du Passé",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 845200608,
  "lat": 48.8389834,
  "lon": 2.3506256,
  "tags": {
    "amenity": "cafe",
    "name": "Starbucks Coffee",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 846226685,
  "lat": 48.8799166,
  "lon": 2.3359231,
  "tags": {
    "amenity": "restaurant",
    "name": "Addis Abeba",
    "phone": "0140800678"
  }
},
{
  "type": "node",
  "id": 847188888,
  "lat": 48.8389664,
  "lon": 2.3530576,
  "tags": {
    "amenity": "restaurant",
    "name": "3 Petites Pates",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 847188891,
  "lat": 48.8384933,
  "lon": 2.3512141,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Au Vietnam",
    "note": "ancien restaurant Au Vieux Moulin",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 854506757,
  "lat": 48.8465715,
  "lon": 2.2387713,
  "tags": {
    "amenity": "cafe",
    "name": "Le Lutetia",
    "shop": "tobacco",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 854507034,
  "lat": 48.8469206,
  "lon": 2.2397122,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "seafood",
    "name": "Boulogne-sur-Mer",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 854521970,
  "lat": 48.8456529,
  "lon": 2.2388545,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Grillon",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 854917265,
  "lat": 48.8108413,
  "lon": 2.3796908,
  "tags": {
    "addr:street": "84 rue Jean Le Galleu",
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "pizzeria Pasqualina"
  }
},
{
  "type": "node",
  "id": 855292275,
  "lat": 48.8614760,
  "lon": 2.3530830,
  "tags": {
    "amenity": "restaurant",
    "level": "-1",
    "name": "Flunch",
    "source": "survey",
    "website": "http://www.flunch.fr/"
  }
},
{
  "type": "node",
  "id": 855292284,
  "lat": 48.8604416,
  "lon": 2.3503543,
  "tags": {
    "amenity": "cafe",
    "coffeehouse": "yes",
    "name": "Starbucks",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 858387984,
  "lat": 48.8455387,
  "lon": 2.2360305,
  "tags": {
    "amenity": "cafe",
    "name": "Havane Café",
    "shop": "tobacco",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 858388112,
  "lat": 48.8444612,
  "lon": 2.2336372,
  "tags": {
    "amenity": "restaurant",
    "name": "Oresto",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 863092302,
  "lat": 48.8420514,
  "lon": 2.2304726,
  "tags": {
    "amenity": "restaurant",
    "name": "Les Loges",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 863092781,
  "lat": 48.8410228,
  "lon": 2.2279084,
  "tags": {
    "addr:housenumber": "2",
    "amenity": "restaurant",
    "cuisine": "crepe",
    "name": "L\'Île O\'Crêpes",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 863094516,
  "lat": 48.8411606,
  "lon": 2.2267493,
  "tags": {
    "addr:housenumber": "16",
    "amenity": "restaurant",
    "name": "Natyor",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 863515330,
  "lat": 48.8885364,
  "lon": 2.3928738,
  "tags": {
    "amenity": "cafe",
    "name": "Biclowne Cafe"
  }
},
{
  "type": "node",
  "id": 863522032,
  "lat": 48.8885830,
  "lon": 2.3930712,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "cuisine:fr": "français,; Fruits de Mer, brasserie",
    "name": "L\'Horloge"
  }
},
{
  "type": "node",
  "id": 864662454,
  "lat": 48.8409759,
  "lon": 2.2256036,
  "tags": {
    "amenity": "cafe",
    "name": "Le Maréchal",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 866631475,
  "lat": 48.8391549,
  "lon": 2.2361217,
  "tags": {
    "amenity": "restaurant",
    "name": "Restaurant Le Mag",
    "website": "http://lemagboulogne.blogspot.fr/"
  }
},
{
  "type": "node",
  "id": 867432681,
  "lat": 48.8940902,
  "lon": 2.4042784,
  "tags": {
    "addr:housenumber": "22",
    "addr:postcode": "93500",
    "addr:street": "Rue Étienne Marcel",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Tchao Pantin",
    "website": "http://www.lafourchette.com/restaurant/tchao-pantin/14853"
  }
},
{
  "type": "node",
  "id": 867447125,
  "lat": 48.8951363,
  "lon": 2.3996199,
  "tags": {
    "amenity": "restaurant",
    "name": "Au royal Pantin"
  }
},
{
  "type": "node",
  "id": 867450191,
  "lat": 48.8935929,
  "lon": 2.3994808,
  "tags": {
    "amenity": "bar",
    "name": "Bar de l\'industrie"
  }
},
{
  "type": "node",
  "id": 867465826,
  "lat": 48.8938098,
  "lon": 2.4018949,
  "tags": {
    "amenity": "bar",
    "name": "Le montgolfier"
  }
},
{
  "type": "node",
  "id": 867469732,
  "lat": 48.8946116,
  "lon": 2.4015846,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Keiji okinawa"
  }
},
{
  "type": "node",
  "id": 867497341,
  "lat": 48.8971308,
  "lon": 2.4000914,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "La marquise"
  }
},
{
  "type": "node",
  "id": 867507827,
  "lat": 48.8974719,
  "lon": 2.4051356,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 867507852,
  "lat": 48.8970438,
  "lon": 2.3998231,
  "tags": {
    "amenity": "restaurant",
    "name": "Le cellier"
  }
},
{
  "type": "node",
  "id": 867530737,
  "lat": 48.8974855,
  "lon": 2.3995856,
  "tags": {
    "amenity": "bar",
    "name": "La chope de l\'est"
  }
},
{
  "type": "node",
  "id": 867531159,
  "lat": 48.8976607,
  "lon": 2.3989475,
  "tags": {
    "amenity": "bar",
    "name": "Le relais du pont"
  }
},
{
  "type": "node",
  "id": 868415125,
  "lat": 48.8341140,
  "lon": 2.2289076,
  "tags": {
    "addr:housenumber": "3",
    "addr:street": "Rue Michelet",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Ajisai",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 868415444,
  "lat": 48.8338750,
  "lon": 2.2333015,
  "tags": {
    "addr:housenumber": "129",
    "addr:street": "Rue de Silly",
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Palais Céleste",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 868417424,
  "lat": 48.8358993,
  "lon": 2.2324845,
  "tags": {
    "addr:housenumber": "85",
    "addr:street": "Rue de Silly",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Carré Noir"
  }
},
{
  "type": "node",
  "id": 868421900,
  "lat": 48.8340716,
  "lon": 2.2286040,
  "tags": {
    "addr:housenumber": "67",
    "addr:street": "Rue de Sèvres",
    "amenity": "restaurant",
    "name": "Le Michelet",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 870136705,
  "lat": 48.8357378,
  "lon": 2.2328659,
  "tags": {
    "addr:housenumber": "170",
    "addr:street": "Rue Galliéni",
    "amenity": "restaurant",
    "cuisine": "lebanese",
    "name": "High Snack",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 870137631,
  "lat": 48.8325481,
  "lon": 2.2406807,
  "tags": {
    "amenity": "restaurant",
    "name": "Bistro 19",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 870139090,
  "lat": 48.8347343,
  "lon": 2.2329196,
  "tags": {
    "addr:housenumber": "107",
    "addr:street": "Rue de Silly",
    "amenity": "bar",
    "name": "Le 107",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 870139160,
  "lat": 48.8321703,
  "lon": 2.2413739,
  "tags": {
    "addr:housenumber": "2",
    "addr:street": "Rue Rouget de l\'Isle",
    "amenity": "restaurant",
    "name": "Restaurant de la Poste \"Chez Robert\"",
    "phone": "+33146213207"
  }
},
{
  "type": "node",
  "id": 870146227,
  "lat": 48.8356712,
  "lon": 2.2331939,
  "tags": {
    "addr:housenumber": "193-195",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "La Salle à Manger",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 870147959,
  "lat": 48.8312484,
  "lon": 2.2353568,
  "tags": {
    "addr:housenumber": "94",
    "addr:street": "Avenue du Général Leclerc",
    "amenity": "bar",
    "name": "Brasserie de l\'Avenue",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 870149299,
  "lat": 48.8320913,
  "lon": 2.2410644,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Indian Sitar",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 870915875,
  "lat": 48.9060370,
  "lon": 2.2693135,
  "tags": {
    "addr:housenumber": "2",
    "addr:street": "Rue Madiraa",
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Restaurant du Bonheur",
    "phone": "0147891682"
  }
},
{
  "type": "node",
  "id": 870919040,
  "lat": 48.9063194,
  "lon": 2.2860253,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 877105318,
  "lat": 48.8300548,
  "lon": 2.2309268,
  "tags": {
    "addr:housenumber": "100",
    "addr:street": "Rue de Sèvres",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "L\'Arcouest",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 877105618,
  "lat": 48.8299698,
  "lon": 2.2392449,
  "tags": {
    "addr:housenumber": "8",
    "addr:street": "Place Bir-Hakeim",
    "amenity": "restaurant",
    "cuisine": "indian;pakistani",
    "name": "Kayani",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 877106291,
  "lat": 48.8310974,
  "lon": 2.2348050,
  "tags": {
    "addr:housenumber": "100",
    "addr:street": "Avenue du Général Leclerc",
    "amenity": "restaurant",
    "cuisine": "moroccan",
    "name": "Le Fort de l\'Eau",
    "source": "survey",
    "takeaway": "yes"
  }
},
{
  "type": "node",
  "id": 877958892,
  "lat": 48.8831626,
  "lon": 2.3618001,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Asoka"
  }
},
{
  "type": "node",
  "id": 877958897,
  "lat": 48.8832736,
  "lon": 2.3614499,
  "tags": {
    "amenity": "pub",
    "name": "Le Fiacre"
  }
},
{
  "type": "node",
  "id": 877958898,
  "lat": 48.8829824,
  "lon": 2.3614134,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Bharath"
  }
},
{
  "type": "node",
  "id": 877959052,
  "lat": 48.8839950,
  "lon": 2.3594946,
  "tags": {
    "amenity": "pub",
    "name": "La Rotonde"
  }
},
{
  "type": "node",
  "id": 878701919,
  "lat": 48.8315816,
  "lon": 2.2469873,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Univers Sushi",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 878711301,
  "lat": 48.8279127,
  "lon": 2.2440733,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Les Trois Petits...",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 878713786,
  "lat": 48.8313834,
  "lon": 2.2468650,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Rosée des Près",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 879276212,
  "lat": 48.8828405,
  "lon": 2.3615206,
  "tags": {
    "amenity": "cafe",
    "name": "La Rame",
    "note": "Tabac-PMU-Française des jeux",
    "shop": "tobacco"
  }
},
{
  "type": "node",
  "id": 879496785,
  "lat": 48.8827589,
  "lon": 2.3595149,
  "tags": {
    "addr:housenumber": "23",
    "addr:street": "Rue Cail",
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Indira",
    "source:amenity": "survey"
  }
},
{
  "type": "node",
  "id": 879643697,
  "lat": 48.8835628,
  "lon": 2.3609310,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Thensurabi"
  }
},
{
  "type": "node",
  "id": 880529519,
  "lat": 48.8840217,
  "lon": 2.3614210,
  "tags": {
    "amenity": "cafe",
    "name": "Le Cyclone"
  }
},
{
  "type": "node",
  "id": 881545302,
  "lat": 48.8733935,
  "lon": 2.3902484,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Les Rigoles"
  }
},
{
  "type": "node",
  "id": 881545304,
  "lat": 48.8739298,
  "lon": 2.3893471,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Zephyr"
  }
},
{
  "type": "node",
  "id": 881969027,
  "lat": 48.8821165,
  "lon": 2.3636110,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "smart traditional",
    "name": "La Bulle"
  }
},
{
  "type": "node",
  "id": 882356070,
  "lat": 48.8329694,
  "lon": 2.2401588,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "eat\'SUSHI",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 882356085,
  "lat": 48.8332313,
  "lon": 2.2449376,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "La Casa Verde",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 882356105,
  "lat": 48.8319747,
  "lon": 2.2409579,
  "tags": {
    "amenity": "restaurant",
    "name": "Brother\'s",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 882356187,
  "lat": 48.8322556,
  "lon": 2.2407475,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Tindari",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 883277913,
  "lat": 48.8787523,
  "lon": 2.3641791,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Chansonnier"
  }
},
{
  "type": "node",
  "id": 883277998,
  "lat": 48.8775739,
  "lon": 2.3642408,
  "tags": {
    "amenity": "restaurant",
    "name": "Chez Slimani"
  }
},
{
  "type": "node",
  "id": 883484122,
  "lat": 48.8800819,
  "lon": 2.3647141,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "lebanese",
    "name": "Le Phénicien",
    "website": "http://www.lephenicien.com"
  }
},
{
  "type": "node",
  "id": 884492914,
  "lat": 48.8801565,
  "lon": 2.3594651,
  "tags": {
    "amenity": "restaurant",
    "name": "Plaza La Fayette"
  }
},
{
  "type": "node",
  "id": 884493112,
  "lat": 48.8827250,
  "lon": 2.3591597,
  "tags": {
    "amenity": "pub",
    "cuisine": "indian",
    "name": "Dishny"
  }
},
{
  "type": "node",
  "id": 886888480,
  "lat": 48.8727865,
  "lon": 2.3799743,
  "tags": {
    "amenity": "cafe",
    "name": "Le Relais de Belleville"
  }
},
{
  "type": "node",
  "id": 887163525,
  "lat": 48.8829982,
  "lon": 2.2238324,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Cadre"
  }
},
{
  "type": "node",
  "id": 887163734,
  "lat": 48.8828401,
  "lon": 2.2235805,
  "tags": {
    "amenity": "bar",
    "name": "Le Carrefour"
  }
},
{
  "type": "node",
  "id": 887164217,
  "lat": 48.8812902,
  "lon": 2.2211563,
  "tags": {
    "amenity": "restaurant",
    "name": "La Petite Auberge"
  }
},
{
  "type": "node",
  "id": 887166084,
  "lat": 48.8853640,
  "lon": 2.2258759,
  "tags": {
    "amenity": "bar",
    "name": "Le Relais des Bergères"
  }
},
{
  "type": "node",
  "id": 887166136,
  "lat": 48.8850330,
  "lon": 2.2256450,
  "tags": {
    "amenity": "restaurant",
    "name": "Étoile de Taroudant",
    "phone": "01.47.76.07.46"
  }
},
{
  "type": "node",
  "id": 887167432,
  "lat": 48.8853404,
  "lon": 2.2262111,
  "tags": {
    "amenity": "bar",
    "name": "La Bergère"
  }
},
{
  "type": "node",
  "id": 887167730,
  "lat": 48.8854503,
  "lon": 2.2247219,
  "tags": {
    "amenity": "bar",
    "phone": "01.47.67.08.61"
  }
},
{
  "type": "node",
  "id": 891069088,
  "lat": 48.8796109,
  "lon": 2.3574120,
  "tags": {
    "amenity": "pub",
    "name": "La ville D\'Aulnay"
  }
},
{
  "type": "node",
  "id": 891069116,
  "lat": 48.8797114,
  "lon": 2.3574553,
  "tags": {
    "amenity": "restaurant",
    "name": "À la consigne"
  }
},
{
  "type": "node",
  "id": 891069135,
  "lat": 48.8804717,
  "lon": 2.3578445,
  "tags": {
    "amenity": "restaurant",
    "name": "Madras Café"
  }
},
{
  "type": "node",
  "id": 892913317,
  "lat": 48.8608729,
  "lon": 2.3451379,
  "tags": {
    "amenity": "bar",
    "name": "Le Sous Bock Tavern",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 894104110,
  "lat": 48.8482752,
  "lon": 2.3934752,
  "tags": {
    "amenity": "cafe",
    "name": "Ptit Bono"
  }
},
{
  "type": "node",
  "id": 894150042,
  "lat": 48.8792421,
  "lon": 2.3631885,
  "tags": {
    "amenity": "cafe",
    "cuisine": "coffee_shop",
    "name": "La Trizacoise"
  }
},
{
  "type": "node",
  "id": 894150085,
  "lat": 48.8784279,
  "lon": 2.3643183,
  "tags": {
    "amenity": "restaurant",
    "name": "Casa Roma"
  }
},
{
  "type": "node",
  "id": 894713057,
  "lat": 48.8948739,
  "lon": 2.4014874,
  "tags": {
    "amenity": "restaurant",
    "name": "Le village"
  }
},
{
  "type": "node",
  "id": 894713073,
  "lat": 48.8971947,
  "lon": 2.3999996,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Pizza saint mathieu"
  }
},
{
  "type": "node",
  "id": 894713092,
  "lat": 48.8956622,
  "lon": 2.4005421,
  "tags": {
    "amenity": "restaurant",
    "name": "La nouvelle Marina"
  }
},
{
  "type": "node",
  "id": 894713103,
  "lat": 48.8948135,
  "lon": 2.4038197,
  "tags": {
    "amenity": "bar",
    "name": "Le narval"
  }
},
{
  "type": "node",
  "id": 894713124,
  "lat": 48.8947671,
  "lon": 2.4013042,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 895570206,
  "lat": 48.8826930,
  "lon": 2.3668426,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Clairon Gourmand"
  }
},
{
  "type": "node",
  "id": 901762656,
  "lat": 48.8401865,
  "lon": 2.2472749,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Washi",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 901762740,
  "lat": 48.8403031,
  "lon": 2.2473751,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Gorgeon",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 901762784,
  "lat": 48.8370080,
  "lon": 2.2454292,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "couscous",
    "name": "Le Relais de Bretagne",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 905940486,
  "lat": 48.8753587,
  "lon": 2.3261663,
  "tags": {
    "addr:housenumber": "111",
    "addr:postcode": "75008",
    "addr:street": "Rue Saint-Lazare",
    "amenity": "restaurant",
    "cuisine": "fish",
    "name": "Garnier"
  }
},
{
  "type": "node",
  "id": 906036878,
  "lat": 48.8549710,
  "lon": 2.3707330,
  "tags": {
    "addr:housenumber": "13",
    "addr:street": "Rue Daval",
    "amenity": "pub",
    "brewery": "Saint-Omer",
    "internet_access": "no",
    "name": "Lêche vin",
    "opening_hours": "18:00-02:00",
    "phone": "0143559891"
  }
},
{
  "type": "node",
  "id": 908545614,
  "lat": 48.9002099,
  "lon": 2.2806642,
  "tags": {
    "amenity": "restaurant",
    "name": "O Restaurant"
  }
},
{
  "type": "node",
  "id": 909523469,
  "lat": 48.8796547,
  "lon": 2.3374136,
  "tags": {
    "amenity": "restaurant",
    "name": "Kastoori"
  }
},
{
  "type": "node",
  "id": 909524978,
  "lat": 48.8794368,
  "lon": 2.3375133,
  "tags": {
    "amenity": "cafe",
    "name": "No Stress Café"
  }
},
{
  "type": "node",
  "id": 909529763,
  "lat": 48.8219547,
  "lon": 2.3608058,
  "tags": {
    "amenity": "bar",
    "name": "Le Gandon"
  }
},
{
  "type": "node",
  "id": 909529784,
  "lat": 48.8193723,
  "lon": 2.3655267,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Melinda"
  }
},
{
  "type": "node",
  "id": 911471439,
  "lat": 48.8753796,
  "lon": 2.2958946,
  "tags": {
    "amenity": "restaurant",
    "name": "Monto Carlo"
  }
},
{
  "type": "node",
  "id": 912370990,
  "lat": 48.8702381,
  "lon": 2.3689388,
  "tags": {
    "addr:housenumber": "14",
    "addr:street": "Rue Bichat",
    "amenity": "restaurant",
    "cuisine": "vietnamese",
    "name": "Tien Hiang",
    "opening_hours": "Mo-Su 12:00-15:00,18:30-22:30; Tu off",
    "phone": "+33 1 42000823",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.tien-hiang.fr"
  }
},
{
  "type": "node",
  "id": 912442400,
  "lat": 48.8827554,
  "lon": 2.3649189,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "sandwich",
    "name": "Le Local BIO",
    "organic": "only"
  }
},
{
  "type": "node",
  "id": 913121612,
  "lat": 48.8296146,
  "lon": 2.3822728,
  "tags": {
    "amenity": "restaurant",
    "name": "Restaurant Universitaire",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 913121613,
  "lat": 48.8296210,
  "lon": 2.3809399,
  "tags": {
    "amenity": "restaurant",
    "name": "Restaurant Universitaire",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 913550860,
  "lat": 48.8286556,
  "lon": 2.3812238,
  "tags": {
    "amenity": "cafe",
    "name": "Midoré"
  }
},
{
  "type": "node",
  "id": 913550872,
  "lat": 48.8282637,
  "lon": 2.3802920,
  "tags": {
    "amenity": "cafe",
    "name": "Pomme de Pain",
    "operator": "Pomme de Pain"
  }
},
{
  "type": "node",
  "id": 913551244,
  "lat": 48.8299110,
  "lon": 2.3769622,
  "tags": {
    "amenity": "cafe",
    "name": "Starbucks"
  }
},
{
  "type": "node",
  "id": 913551343,
  "lat": 48.8289803,
  "lon": 2.3785924,
  "tags": {
    "amenity": "cafe",
    "brewery": "Guinness",
    "happy_hours": "Mo-Sa 17:00-21:00",
    "name": "Dupont Café"
  }
},
{
  "type": "node",
  "id": 913551441,
  "lat": 48.8281932,
  "lon": 2.3793805,
  "tags": {
    "amenity": "cafe",
    "name": "Indiana Club"
  }
},
{
  "type": "node",
  "id": 913551573,
  "lat": 48.8283867,
  "lon": 2.3805867,
  "tags": {
    "amenity": "cafe",
    "name": "Fish and Food Café"
  }
},
{
  "type": "node",
  "id": 913577832,
  "lat": 48.8314453,
  "lon": 2.3762846,
  "tags": {
    "amenity": "restaurant",
    "happy_hours": "Mo-Fr 17:00-20:00",
    "name": "L\'Avenue",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 913577862,
  "lat": 48.8321522,
  "lon": 2.3756247,
  "tags": {
    "amenity": "cafe",
    "name": "LG W|Café",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 913577875,
  "lat": 48.8332346,
  "lon": 2.3745478,
  "tags": {
    "amenity": "cafe",
    "name": "Café Bibliothèque"
  }
},
{
  "type": "node",
  "id": 913722029,
  "lat": 48.8511260,
  "lon": 2.3460443,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "mexican",
    "name": "Mexi & Co"
  }
},
{
  "type": "node",
  "id": 913973235,
  "lat": 48.8517830,
  "lon": 2.3177917,
  "tags": {
    "addr:housenumber": "56",
    "addr:street": "Rue de Babylone",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Ô Soleil de Naples",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.osoleildenaples.com/"
  }
},
{
  "type": "node",
  "id": 914241249,
  "lat": 48.8746858,
  "lon": 2.3662628,
  "tags": {
    "addr:housenumber": "23",
    "addr:street": "Rue de la Grange aux Belles",
    "amenity": "bar",
    "name": "L\'Apostrophe",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 915618667,
  "lat": 48.8425329,
  "lon": 2.3202995,
  "tags": {
    "amenity": "restaurant",
    "name": "Flam\'s",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 915649406,
  "lat": 48.8679999,
  "lon": 2.3369853,
  "tags": {
    "amenity": "restaurant",
    "name": "ZenZoo"
  }
},
{
  "type": "node",
  "id": 916588773,
  "lat": 48.8903045,
  "lon": 2.3534684,
  "tags": {
    "addr:housenumber": "23",
    "addr:postcode": "75018",
    "addr:street": "Rue Marcadet",
    "amenity": "bar",
    "name": "Café Leon",
    "source": "local knowledge",
    "wifi": "free"
  }
},
{
  "type": "node",
  "id": 916677956,
  "lat": 48.8804027,
  "lon": 2.3645128,
  "tags": {
    "amenity": "cafe",
    "name": "Bistrôt du Canal"
  }
},
{
  "type": "node",
  "id": 916690281,
  "lat": 48.8795889,
  "lon": 2.3635682,
  "tags": {
    "amenity": "cafe",
    "cuisine": "coffee_shop",
    "name": "Le Café Prud\'h"
  }
},
{
  "type": "node",
  "id": 916861456,
  "lat": 48.8763120,
  "lon": 2.3610528,
  "tags": {
    "amenity": "cafe",
    "cuisine": "coffee_shop",
    "name": "L\'Est Parisien"
  }
},
{
  "type": "node",
  "id": 917230452,
  "lat": 48.8802074,
  "lon": 2.3638169,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Mama Luna"
  }
},
{
  "type": "node",
  "id": 917230560,
  "lat": 48.8792090,
  "lon": 2.3625482,
  "tags": {
    "amenity": "cafe",
    "cuisine": "coffee_shop",
    "name": "Le Château Landon"
  }
},
{
  "type": "node",
  "id": 917438777,
  "lat": 48.8828408,
  "lon": 2.3670033,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese"
  }
},
{
  "type": "node",
  "id": 917438849,
  "lat": 48.8831548,
  "lon": 2.3679716,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 917974186,
  "lat": 48.8475310,
  "lon": 2.3871419,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "79",
    "addr:postcode": "75012",
    "addr:street": "boulevard Diderot",
    "amenity": "cafe",
    "brewery": "Amstel;Affligem_rouge;Heineken;Edelweiss",
    "happy_hours": "Mo-Su 16:00-20:00",
    "internet_access": "wlan",
    "name": "Le 79",
    "opening_hours": "Mo-Sa 00:00-02:00,05:00-24:00;Su 00:00-02:00,06:00-24:00",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 918153434,
  "lat": 48.8397936,
  "lon": 2.3818812,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Rajasthan",
    "phone": "+33 1 44 73 40 76"
  }
},
{
  "type": "node",
  "id": 918317316,
  "lat": 48.8799198,
  "lon": 2.3624384,
  "tags": {
    "addr:housenumber": "8",
    "addr:postcode": "75010",
    "addr:street": "Rue du Château Landon",
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "La Marina",
    "smoking": "no",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 918317353,
  "lat": 48.8804191,
  "lon": 2.3624653,
  "tags": {
    "amenity": "bar",
    "name": "Landon Café"
  }
},
{
  "type": "node",
  "id": 918317363,
  "lat": 48.8801632,
  "lon": 2.3624358,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'Étoile de l\'Est"
  }
},
{
  "type": "node",
  "id": 918317419,
  "lat": 48.8807735,
  "lon": 2.3621112,
  "tags": {
    "amenity": "cafe",
    "name": "Le Chiquito"
  }
},
{
  "type": "node",
  "id": 921881553,
  "lat": 48.8815009,
  "lon": 2.3685984,
  "tags": {
    "amenity": "pub",
    "name": "Le Point Ephémère"
  }
},
{
  "type": "node",
  "id": 923487798,
  "lat": 48.8457334,
  "lon": 2.2443417,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Bleu",
    "shop": "tobacco",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 925128177,
  "lat": 48.8319137,
  "lon": 2.3445927,
  "tags": {
    "amenity": "cafe",
    "name": "L\'Alouette",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 925526425,
  "lat": 48.8658930,
  "lon": 2.2979628,
  "tags": {
    "amenity": "restaurant",
    "fax": "01.47.20.50.42",
    "fixme": "Vérifier les horaires",
    "name": "Balilli",
    "opening_hours": "Mo-Sa",
    "phone": "01.47.20.50.52",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 925591197,
  "lat": 48.8974573,
  "lon": 2.2727216,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Petit Poucet",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 925707356,
  "lat": 48.8143542,
  "lon": 2.3787887,
  "tags": {
    "amenity": "restaurant",
    "name": "Chez Meziane"
  }
},
{
  "type": "node",
  "id": 925740428,
  "lat": 48.8664834,
  "lon": 2.2970052,
  "tags": {
    "amenity": "cafe",
    "name": "Café Galliera",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 926662524,
  "lat": 48.8709952,
  "lon": 2.2963209,
  "tags": {
    "amenity": "cafe",
    "name": "Le Newton",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 926662877,
  "lat": 48.8710119,
  "lon": 2.2971038,
  "tags": {
    "amenity": "cafe",
    "name": "Comptoir de l\'Arc",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 926663082,
  "lat": 48.8721649,
  "lon": 2.2948681,
  "tags": {
    "amenity": "restaurant",
    "name": "Sir Winston",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 928066664,
  "lat": 48.8406432,
  "lon": 2.3520718,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 928066667,
  "lat": 48.8408454,
  "lon": 2.3523400,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 928560024,
  "lat": 48.8689782,
  "lon": 2.2918627,
  "tags": {
    "amenity": "cafe",
    "name": "Café Brassac",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 928560031,
  "lat": 48.8678330,
  "lon": 2.2903912,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Corner",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 929098076,
  "lat": 48.8387533,
  "lon": 2.3310982,
  "tags": {
    "addr:housenumber": "243",
    "addr:postcode": "75014",
    "addr:street": "Boulevard Raspail",
    "amenity": "restaurant",
    "cuisine": "fish",
    "name": "Le Duc",
    "source": "Survey"
  }
},
{
  "type": "node",
  "id": 929139696,
  "lat": 48.8395777,
  "lon": 2.3302123,
  "tags": {
    "addr:housenumber": "232",
    "addr:postcode": "75014",
    "addr:street": "Boulevard Raspail",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Jockey Club"
  }
},
{
  "type": "node",
  "id": 929175910,
  "lat": 48.8490162,
  "lon": 2.3701002,
  "tags": {
    "amenity": "restaurant",
    "name": "Siam"
  }
},
{
  "type": "node",
  "id": 929366729,
  "lat": 48.8658567,
  "lon": 2.2895816,
  "tags": {
    "amenity": "cafe",
    "name": "Pub Kléber",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 929372126,
  "lat": 48.8670044,
  "lon": 2.2897764,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Kléber",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 929536184,
  "lat": 48.8634497,
  "lon": 2.2880782,
  "tags": {
    "amenity": "cafe",
    "name": "L’Ancien Trocadéro",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 929536321,
  "lat": 48.8635250,
  "lon": 2.2879692,
  "tags": {
    "amenity": "cafe",
    "name": "Le Coq",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 929536356,
  "lat": 48.8649301,
  "lon": 2.2889961,
  "tags": {
    "amenity": "cafe",
    "name": "Corso",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 930238710,
  "lat": 48.8249480,
  "lon": 2.3573521,
  "tags": {
    "amenity": "cafe",
    "name": "Globe Café",
    "source:name": "survey"
  }
},
{
  "type": "node",
  "id": 932276881,
  "lat": 48.8637238,
  "lon": 2.2872368,
  "tags": {
    "amenity": "restaurant",
    "name": "Carette",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 932277107,
  "lat": 48.8637150,
  "lon": 2.2873701,
  "tags": {
    "amenity": "cafe",
    "name": "Café Kléber",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 932277394,
  "lat": 48.8637222,
  "lon": 2.2870818,
  "tags": {
    "amenity": "cafe",
    "name": "Le Malakoff",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 932282751,
  "lat": 48.8636287,
  "lon": 2.2866270,
  "tags": {
    "amenity": "cafe",
    "name": "Café du Trocadéro",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 932339882,
  "lat": 48.8651941,
  "lon": 2.2867285,
  "tags": {
    "amenity": "cafe",
    "name": "Le Poincaré",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 933859703,
  "lat": 48.8928215,
  "lon": 2.3985124,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 933859720,
  "lat": 48.9013237,
  "lon": 2.4129323,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 933859813,
  "lat": 48.9016771,
  "lon": 2.4136628,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 935101795,
  "lat": 48.8265406,
  "lon": 2.2787530,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "lebanese",
    "name": "Les Moulins de Beyrouth",
    "phone": "01.41.90.04.67"
  }
},
{
  "type": "node",
  "id": 935101914,
  "lat": 48.8265796,
  "lon": 2.2794780,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Le Palais Royal Issy"
  }
},
{
  "type": "node",
  "id": 935101951,
  "lat": 48.8266450,
  "lon": 2.2788953,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Le Phœnix d\'Or"
  }
},
{
  "type": "node",
  "id": 935184773,
  "lat": 48.8740698,
  "lon": 2.3727422,
  "tags": {
    "amenity": "restaurant",
    "name": "La Sardine",
    "old_name": "Le Panier",
    "opening_hours": "Mo-Su 09:00-02:00",
    "phone": "01.42.49.19.46",
    "website": "http://www.balasardine.com/"
  }
},
{
  "type": "node",
  "id": 936681115,
  "lat": 48.8365105,
  "lon": 2.3100866,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 936840527,
  "lat": 48.8692698,
  "lon": 2.2877712,
  "tags": {
    "amenity": "cafe",
    "name": "Bistrot XVI",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 936840625,
  "lat": 48.8691923,
  "lon": 2.2884450,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "La Belle Chine",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 936923254,
  "lat": 48.8730386,
  "lon": 2.2928973,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'Aventure",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 937175929,
  "lat": 48.8701476,
  "lon": 2.2854874,
  "tags": {
    "amenity": "cafe",
    "name": "Café Victor Hugo",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 937196356,
  "lat": 48.8692540,
  "lon": 2.2857812,
  "tags": {
    "amenity": "restaurant",
    "name": "Convivium",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 937202276,
  "lat": 48.8664391,
  "lon": 2.2859464,
  "tags": {
    "amenity": "restaurant",
    "name": "XVIème Avenue",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 937202518,
  "lat": 48.8666202,
  "lon": 2.2859162,
  "tags": {
    "amenity": "restaurant",
    "name": "Il Conte",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 937614712,
  "lat": 48.8364129,
  "lon": 2.2418142,
  "tags": {
    "amenity": "restaurant",
    "name": "Ty-Coz",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 937614729,
  "lat": 48.8367752,
  "lon": 2.2408397,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Korean Paradise",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 937614738,
  "lat": 48.8369118,
  "lon": 2.2407258,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "lebanese",
    "name": "Samaya",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 937868699,
  "lat": 48.8741506,
  "lon": 2.2926613,
  "tags": {
    "amenity": "restaurant",
    "name": "La Grande Armée",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 937873335,
  "lat": 48.8744699,
  "lon": 2.2916401,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Le Palanquin",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 937873428,
  "lat": 48.8745408,
  "lon": 2.2913961,
  "tags": {
    "amenity": "cafe",
    "name": "Le XVI",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 937970403,
  "lat": 48.8758108,
  "lon": 2.2872836,
  "tags": {
    "amenity": "cafe",
    "name": "Le Touring",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 938078913,
  "lat": 48.8748891,
  "lon": 2.2837909,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Del Papa",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 938397749,
  "lat": 48.8380781,
  "lon": 2.2398211,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Hokkaido Sushi II",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 938397783,
  "lat": 48.8380911,
  "lon": 2.2399259,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Paradis du Fruit",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 938864846,
  "lat": 48.8665016,
  "lon": 2.2891682,
  "tags": {
    "addr:housenumber": "1",
    "addr:street": "Rue Léo Délibes",
    "amenity": "restaurant",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 939134644,
  "lat": 48.8395527,
  "lon": 2.2403500,
  "tags": {
    "addr:housenumber": "73",
    "amenity": "cafe",
    "name": "Le Bougainvillier",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 939459400,
  "lat": 48.8766202,
  "lon": 2.2833645,
  "tags": {
    "amenity": "restaurant",
    "name": "Auberge Dab",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 939459431,
  "lat": 48.8761230,
  "lon": 2.2835030,
  "tags": {
    "amenity": "cafe",
    "name": "Sei\'z Café",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 939459456,
  "lat": 48.8748237,
  "lon": 2.2832745,
  "tags": {
    "amenity": "cafe",
    "name": "Le Relais de l\'Étoile",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 939658322,
  "lat": 48.8734052,
  "lon": 2.2811173,
  "tags": {
    "amenity": "restaurant",
    "name": "Cantina Pergolèse",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 940119697,
  "lat": 48.8396984,
  "lon": 2.2413465,
  "tags": {
    "amenity": "restaurant",
    "name": "K",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 940119705,
  "lat": 48.8394570,
  "lon": 2.2413880,
  "tags": {
    "addr:housenumber": "65",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "San Remo",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 940712739,
  "lat": 48.8498772,
  "lon": 2.3811118,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "L\'Ébauchoir",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 940712740,
  "lat": 48.8495091,
  "lon": 2.3797387,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "couscous",
    "name": "Le Berbère",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 941382064,
  "lat": 48.8274887,
  "lon": 2.2421520,
  "tags": {
    "amenity": "cafe",
    "brewery": "guinness;grimbergen",
    "name": "Le National",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 941382065,
  "lat": 48.8333434,
  "lon": 2.2435294,
  "tags": {
    "amenity": "cafe",
    "name": "Café Chérie",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 941382067,
  "lat": 48.8271987,
  "lon": 2.2424724,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "spanish",
    "name": "Couleurs Tapas",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 941382069,
  "lat": 48.8317229,
  "lon": 2.2425810,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Barbusse",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 941382071,
  "lat": 48.8272472,
  "lon": 2.2424271,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Sushi Bar",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 941382075,
  "lat": 48.8321095,
  "lon": 2.2427664,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "crepe",
    "name": "Crèperie des 4 Cheminées",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 942587008,
  "lat": 48.8702950,
  "lon": 2.2830521,
  "tags": {
    "amenity": "restaurant",
    "name": "La Table de Joël Robuchon",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 942627020,
  "lat": 48.8692051,
  "lon": 2.2839987,
  "tags": {
    "amenity": "cafe",
    "name": "Starbuck Coffee",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 942670657,
  "lat": 48.8654332,
  "lon": 2.2855483,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "129",
    "addr:postcode": "75116",
    "addr:street": "Rue Lauriston",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "La Table Lauriston",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 942676872,
  "lat": 48.8652388,
  "lon": 2.2832232,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "3",
    "addr:postcode": "75016",
    "addr:street": "Place de Mexico",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Brasserie du Mexique",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 942732484,
  "lat": 48.8671985,
  "lon": 2.2798899,
  "tags": {
    "amenity": "restaurant",
    "name": "Au Petit Victor Hugo",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 942880079,
  "lat": 48.8463681,
  "lon": 2.3733407,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "6",
    "addr:postcode": "75012",
    "addr:street": "Rue Émile Gilbert",
    "amenity": "restaurant",
    "cuisine": "french",
    "internet_access": "no",
    "name": "Bouchon de la gare",
    "opening_hours": "Mo-Fr 12:00-15:00; 19:00-21:00",
    "smoking": "no",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 945414014,
  "lat": 48.8867516,
  "lon": 2.2602635,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Nori Sushi",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 945537783,
  "lat": 48.9056712,
  "lon": 2.3039237,
  "tags": {
    "amenity": "restaurant",
    "name": "Casa Nostra Pizzeria"
  }
},
{
  "type": "node",
  "id": 946245534,
  "lat": 48.8659290,
  "lon": 2.2761577,
  "tags": {
    "amenity": "cafe",
    "name": "Le Lamartine",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 946418929,
  "lat": 48.8861864,
  "lon": 2.2611800,
  "tags": {
    "amenity": "cafe",
    "name": "Le Brazza",
    "shop": "tobacco",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 947307319,
  "lat": 48.8856909,
  "lon": 2.2608807,
  "tags": {
    "amenity": "cafe",
    "name": "Au SR KFÉ",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 947307370,
  "lat": 48.8841946,
  "lon": 2.2600876,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Ninasushi",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 947307456,
  "lat": 48.8944814,
  "lon": 2.2670121,
  "tags": {
    "amenity": "cafe",
    "name": "Le Nouveau Paris",
    "shop": "tobacco",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 947307533,
  "lat": 48.8872441,
  "lon": 2.2633059,
  "tags": {
    "amenity": "restaurant",
    "name": "Chez Papinou",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 947307560,
  "lat": 48.8951174,
  "lon": 2.2656976,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Sushi de la Jatte",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 947307604,
  "lat": 48.8843598,
  "lon": 2.2605776,
  "tags": {
    "amenity": "restaurant",
    "name": "Bistro Romain",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 947974290,
  "lat": 48.8700560,
  "lon": 2.3301669,
  "tags": {
    "amenity": "restaurant",
    "name": "American Dream"
  }
},
{
  "type": "node",
  "id": 948005114,
  "lat": 48.9050070,
  "lon": 2.2560180,
  "tags": {
    "amenity": "cafe",
    "cuisine": "french",
    "name": "La Place",
    "outdoor_seating": "yes",
    "source": "survey",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 948569691,
  "lat": 48.8637574,
  "lon": 2.2772598,
  "tags": {
    "amenity": "restaurant",
    "name": "Café de la Mairie",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 948769729,
  "lat": 48.8644490,
  "lon": 2.2825423,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "30",
    "addr:postcode": "75016",
    "addr:street": "Rue Greuze",
    "amenity": "cafe",
    "name": "Les Sablons",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 949674759,
  "lat": 48.8434072,
  "lon": 2.2458538,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Parc",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 951278543,
  "lat": 48.8781954,
  "lon": 2.4224230,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Terroir",
    "phone": "01 43 62 64 67"
  }
},
{
  "type": "node",
  "id": 952341600,
  "lat": 48.8921927,
  "lon": 2.3896612,
  "tags": {
    "amenity": "bar",
    "opening_hours": "Mo-Su 19:00-23:00"
  }
},
{
  "type": "node",
  "id": 952846748,
  "lat": 48.8617758,
  "lon": 2.2784816,
  "tags": {
    "amenity": "cafe",
    "name": "Château de la Tour",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 953075496,
  "lat": 48.8707204,
  "lon": 2.3239555,
  "tags": {
    "amenity": "restaurant",
    "name": "Maison de la Truffe",
    "opening_hours": "Mo-Sa 10:00-22:00",
    "phone": "01.42.65.53.22",
    "shop": "deli",
    "website": "http://www.maison-de-la-truffe.com/"
  }
},
{
  "type": "node",
  "id": 953075520,
  "lat": 48.8705451,
  "lon": 2.3238330,
  "tags": {
    "amenity": "restaurant",
    "fax": "01.47.42.98.99",
    "name": "Caviar House & Prunier",
    "opening_hours": "Mo-Sa 10:00-19:00",
    "phone": "01.47.42.98.98",
    "shop": "seafood",
    "website": "https://www.caviarhouse-prunier.com/"
  }
},
{
  "type": "node",
  "id": 953075524,
  "lat": 48.8706016,
  "lon": 2.3238683,
  "tags": {
    "amenity": "restaurant",
    "email": "boutique@kaspia.fr",
    "fax": "01.42.65.66.26",
    "name": "Kaspia",
    "opening_hours": "Mo-Sa 10:00-01:00",
    "phone": "01.42.65.66.21",
    "shop": "seafood",
    "website": "http://www.lamaisonkaspia.fr/"
  }
},
{
  "type": "node",
  "id": 955173221,
  "lat": 48.8629342,
  "lon": 2.2763103,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Chalet",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 955190225,
  "lat": 48.8632435,
  "lon": 2.2744521,
  "tags": {
    "amenity": "restaurant",
    "name": "Tang",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 957321716,
  "lat": 48.8595315,
  "lon": 2.2787013,
  "tags": {
    "amenity": "restaurant",
    "name": "La Marée Passy",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 957779020,
  "lat": 48.9003632,
  "lon": 2.2610029,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Hayaci",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 960092604,
  "lat": 48.8966985,
  "lon": 2.2379979,
  "tags": {
    "amenity": "cafe",
    "name": "Starbucks",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 968152163,
  "lat": 48.8542991,
  "lon": 2.3674061,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'Area"
  }
},
{
  "type": "node",
  "id": 968153548,
  "lat": 48.8538841,
  "lon": 2.3681040,
  "tags": {
    "amenity": "restaurant",
    "name": "Brasserie Bofinger",
    "tourism": "attraction"
  }
},
{
  "type": "node",
  "id": 968171165,
  "lat": 48.8536236,
  "lon": 2.3667526,
  "tags": {
    "amenity": "cafe",
    "name": "Café le moderne"
  }
},
{
  "type": "node",
  "id": 968924197,
  "lat": 48.8396268,
  "lon": 2.3145492,
  "tags": {
    "amenity": "restaurant",
    "name": "La Scuderia"
  }
},
{
  "type": "node",
  "id": 968924204,
  "lat": 48.8403603,
  "lon": 2.3126619,
  "tags": {
    "amenity": "bar",
    "name": "Le Bréguet"
  }
},
{
  "type": "node",
  "id": 968924206,
  "lat": 48.8430176,
  "lon": 2.3242123,
  "tags": {
    "amenity": "restaurant",
    "name": "À Saint-Malo"
  }
},
{
  "type": "node",
  "id": 968924218,
  "lat": 48.8412580,
  "lon": 2.3079007,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 968924223,
  "lat": 48.8410422,
  "lon": 2.3148300,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Les Montparnos"
  }
},
{
  "type": "node",
  "id": 971476013,
  "lat": 48.8741142,
  "lon": 2.3446221,
  "tags": {
    "amenity": "restaurant",
    "name": "Les ailes"
  }
},
{
  "type": "node",
  "id": 971476014,
  "lat": 48.8742352,
  "lon": 2.3423076,
  "tags": {
    "amenity": "bar",
    "name": "Le Julyann"
  }
},
{
  "type": "node",
  "id": 971476045,
  "lat": 48.8762130,
  "lon": 2.3456817,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Hong Kong"
  }
},
{
  "type": "node",
  "id": 971476082,
  "lat": 48.8752057,
  "lon": 2.3418014,
  "tags": {
    "amenity": "bar",
    "name": "Le Flash"
  }
},
{
  "type": "node",
  "id": 971476150,
  "lat": 48.8750436,
  "lon": 2.3412323,
  "tags": {
    "amenity": "bar",
    "name": "Au Général la Fayette"
  }
},
{
  "type": "node",
  "id": 971476164,
  "lat": 48.8741144,
  "lon": 2.3424987,
  "tags": {
    "amenity": "bar",
    "name": "Le Faubourg"
  }
},
{
  "type": "node",
  "id": 971476175,
  "lat": 48.8738360,
  "lon": 2.3447471,
  "tags": {
    "amenity": "cafe",
    "name": "Folie café"
  }
},
{
  "type": "node",
  "id": 971811000,
  "lat": 48.8479223,
  "lon": 2.3736079,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "sandwich",
    "name": "Parce Que !",
    "note": "\"consommation sur place 11:30-15:00\"",
    "opening_hours": "Mo-We,Fr 10:00-16:00; Th 10:00-19:00",
    "phone": "+33953856463",
    "smoking": "no",
    "website": "http://www.parceque-paris12.fr/"
  }
},
{
  "type": "node",
  "id": 972295364,
  "lat": 48.8988500,
  "lon": 2.2466453,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "thai",
    "name": "Le Palais De Hon Sing"
  }
},
{
  "type": "node",
  "id": 974136692,
  "lat": 48.8282346,
  "lon": 2.2356895,
  "tags": {
    "addr:housenumber": "21",
    "addr:street": "Cours de l\'Île Seguin",
    "amenity": "pub",
    "name": "Doddy\'s Coffee",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 974136746,
  "lat": 48.8265574,
  "lon": 2.2338263,
  "tags": {
    "addr:housenumber": "101",
    "amenity": "restaurant",
    "cuisine": "salad",
    "name": "Greenday",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 974136913,
  "lat": 48.8287308,
  "lon": 2.2377847,
  "tags": {
    "addr:housenumber": "89",
    "amenity": "restaurant",
    "cuisine": "japanese"
  }
},
{
  "type": "node",
  "id": 974415586,
  "lat": 48.8719192,
  "lon": 2.2281701,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'Ourika"
  }
},
{
  "type": "node",
  "id": 974655235,
  "lat": 48.8516854,
  "lon": 2.3468389,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "vietnamese",
    "internet_access": "no",
    "name": "Pho 67",
    "smoking": "no",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 974661734,
  "lat": 48.8776819,
  "lon": 2.2846763,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "marocain",
    "internet_access": "no",
    "name": "Chez Bebert",
    "smoking": "no",
    "website": "http://www.chezbebert.com/"
  }
},
{
  "type": "node",
  "id": 975023635,
  "lat": 48.8551767,
  "lon": 2.2700634,
  "tags": {
    "amenity": "bar",
    "name": "Le Molière",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 975370218,
  "lat": 48.8411418,
  "lon": 2.3133493,
  "tags": {
    "amenity": "restaurant",
    "name": "Pizza Hinno"
  }
},
{
  "type": "node",
  "id": 975371467,
  "lat": 48.8575743,
  "lon": 2.2745958,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "lebanese",
    "name": "Le Bois le Vent",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 975958119,
  "lat": 48.8564304,
  "lon": 2.2797283,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le bistro des vignes",
    "website": "http://www.bistrotdesvignes.com/16/"
  }
},
{
  "type": "node",
  "id": 976164034,
  "lat": 48.8546720,
  "lon": 2.2831002,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Tournesol",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 976874541,
  "lat": 48.8529406,
  "lon": 2.2759784,
  "tags": {
    "amenity": "cafe",
    "name": "Café A la Fontaine",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 976900836,
  "lat": 48.8556834,
  "lon": 2.2695115,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Nem 101",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 976978218,
  "lat": 48.8365936,
  "lon": 2.2524586,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Toyama",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 976978220,
  "lat": 48.8363627,
  "lon": 2.2517490,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Sanki",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 976978222,
  "lat": 48.8360067,
  "lon": 2.2506468,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "L\'Antipasto",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 976978231,
  "lat": 48.8363254,
  "lon": 2.2516810,
  "tags": {
    "amenity": "cafe",
    "name": "La Fontaine",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 976978238,
  "lat": 48.8359322,
  "lon": 2.2504102,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Kintaro",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 976978241,
  "lat": 48.8358765,
  "lon": 2.2502285,
  "tags": {
    "amenity": "restaurant",
    "name": "La Marmite",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 976978249,
  "lat": 48.8347333,
  "lon": 2.2465525,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Café Édouard",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 976978255,
  "lat": 48.8356322,
  "lon": 2.2505063,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Plaisir des Mets",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 976978263,
  "lat": 48.8363123,
  "lon": 2.2527415,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "L\'AOC",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 977194666,
  "lat": 48.8445537,
  "lon": 2.3572323,
  "tags": {
    "amenity": "restaurant",
    "fax": "01.40.79.80.70",
    "name": "La Baleine",
    "operator": "Groupe Flo",
    "phone": "01.40.79.80.72",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 977194880,
  "lat": 48.8438344,
  "lon": 2.3546970,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'Écureil",
    "phone": "01.43.31.61.18"
  }
},
{
  "type": "node",
  "id": 979336349,
  "lat": 48.8510227,
  "lon": 2.2752660,
  "tags": {
    "amenity": "cafe",
    "name": "Le Dôme",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 979968964,
  "lat": 48.8540417,
  "lon": 2.2691956,
  "tags": {
    "amenity": "cafe",
    "name": "L\'Avenue",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 980154477,
  "lat": 48.8947991,
  "lon": 2.3827102,
  "tags": {
    "amenity": "cafe",
    "name": "La Sortie du Métro"
  }
},
{
  "type": "node",
  "id": 980154481,
  "lat": 48.8951764,
  "lon": 2.3824259,
  "tags": {
    "amenity": "restaurant",
    "name": "La Pièce de boeuf"
  }
},
{
  "type": "node",
  "id": 981370430,
  "lat": 48.8309473,
  "lon": 2.2404842,
  "tags": {
    "addr:housenumber": "158",
    "addr:street": "Rue du Vieux Pont de Sèvres",
    "amenity": "restaurant",
    "name": "158 Côté Piscine",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 981370446,
  "lat": 48.8305008,
  "lon": 2.2396075,
  "tags": {
    "addr:housenumber": "179",
    "addr:street": "Rue du Vieux Pont de Sèvres",
    "amenity": "restaurant",
    "cuisine": "crepe",
    "name": "La Crêperie",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 981370486,
  "lat": 48.8303619,
  "lon": 2.2388939,
  "tags": {
    "addr:housenumber": "170",
    "addr:street": "Rue du Vieux Pont de Sèvres",
    "amenity": "restaurant",
    "name": "Le Bistro de la Ferme",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 981370516,
  "lat": 48.8308465,
  "lon": 2.2339940,
  "tags": {
    "addr:housenumber": "110",
    "addr:street": "Avenue du Général Leclerc",
    "amenity": "restaurant",
    "cuisine": "moroccan",
    "name": "La Médina",
    "source": "survey",
    "takeaway": "yes"
  }
},
{
  "type": "node",
  "id": 981370572,
  "lat": 48.8308869,
  "lon": 2.2403082,
  "tags": {
    "addr:housenumber": "160",
    "addr:street": "Rue du Vieux Pont de Sèvres",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Fuji",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 981370622,
  "lat": 48.8312316,
  "lon": 2.2403064,
  "tags": {
    "addr:housenumber": "7bis",
    "addr:street": "Rue Heyrault",
    "amenity": "bar",
    "name": "Home Sweet Home",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 985435188,
  "lat": 48.8899959,
  "lon": 2.3389104,
  "tags": {
    "amenity": "bar",
    "name": "Le Refuge",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 986014233,
  "lat": 48.8353618,
  "lon": 2.2308268,
  "tags": {
    "addr:housenumber": "217",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Le Vivaldi",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 986014266,
  "lat": 48.8308137,
  "lon": 2.2338563,
  "tags": {
    "addr:housenumber": "112",
    "addr:street": "Avenue du Général Leclerc",
    "amenity": "bar",
    "name": "Le Brégère",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 986085896,
  "lat": 48.8307912,
  "lon": 2.2449650,
  "tags": {
    "amenity": "cafe",
    "name": "La Taverne Parisienne",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 986085923,
  "lat": 48.8304133,
  "lon": 2.2455409,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Donatello",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 986522763,
  "lat": 48.8799492,
  "lon": 2.2767198,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Chez Ly",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 986522770,
  "lat": 48.8790444,
  "lon": 2.2795621,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "seafood",
    "name": "Bar de la Mer",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 986522772,
  "lat": 48.8790829,
  "lon": 2.2793927,
  "tags": {
    "amenity": "restaurant",
    "name": "Sébillon",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 986522773,
  "lat": 48.8790076,
  "lon": 2.2796325,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Matsuri",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 986921159,
  "lat": 48.8406209,
  "lon": 2.3131425,
  "tags": {
    "amenity": "restaurant",
    "name": "Aux Artistes",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 986921168,
  "lat": 48.8408968,
  "lon": 2.3133874,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Dix Vins",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 986921171,
  "lat": 48.8366118,
  "lon": 2.3066363,
  "tags": {
    "amenity": "cafe",
    "name": "Le Relais de la Place",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 986921184,
  "lat": 48.8377889,
  "lon": 2.3112404,
  "tags": {
    "amenity": "restaurant",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 987112107,
  "lat": 48.8806037,
  "lon": 2.2718000,
  "tags": {
    "amenity": "cafe",
    "name": "Le Jardin",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 987112200,
  "lat": 48.8805556,
  "lon": 2.2751336,
  "tags": {
    "amenity": "cafe",
    "name": "Le Havane",
    "shop": "tobacco",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 987112247,
  "lat": 48.8805720,
  "lon": 2.2761648,
  "tags": {
    "amenity": "cafe",
    "name": "Le Capétien",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 987112256,
  "lat": 48.8801334,
  "lon": 2.2738575,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Foc Ly",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 987112276,
  "lat": 48.8803107,
  "lon": 2.2762910,
  "tags": {
    "amenity": "cafe",
    "name": "Le Relais des Sablons",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 987112288,
  "lat": 48.8807815,
  "lon": 2.2718987,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Séquoia Café",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 987112302,
  "lat": 48.8818292,
  "lon": 2.2707657,
  "tags": {
    "amenity": "cafe",
    "name": "Le Caféier",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 987614325,
  "lat": 48.8801236,
  "lon": 2.3667122,
  "tags": {
    "amenity": "restaurant",
    "name": "Bistrot Saint-Martin"
  }
},
{
  "type": "node",
  "id": 987614358,
  "lat": 48.8799930,
  "lon": 2.3669160,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Les Gamins",
    "old_name": "Poêle Deux Carottes"
  }
},
{
  "type": "node",
  "id": 987919341,
  "lat": 48.8349997,
  "lon": 2.2370107,
  "tags": {
    "addr:housenumber": "130",
    "addr:street": "Rue de Billancourt",
    "amenity": "bar",
    "name": "Sanana",
    "source": "survey",
    "tourism": "hotel"
  }
},
{
  "type": "node",
  "id": 987919343,
  "lat": 48.8339316,
  "lon": 2.2375593,
  "tags": {
    "addr:housenumber": "153",
    "addr:street": "Rue de Billancourt",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Caffè Peonia",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 988277537,
  "lat": 48.8827576,
  "lon": 2.2657201,
  "tags": {
    "amenity": "cafe",
    "name": "Le Gaulois",
    "shop": "tobacco",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 988277554,
  "lat": 48.8837479,
  "lon": 2.2626102,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Village de Neuilly",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 988277611,
  "lat": 48.8843165,
  "lon": 2.2608294,
  "tags": {
    "amenity": "cafe",
    "name": "Le Madrilène",
    "shop": "tobacco",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 988277627,
  "lat": 48.8828406,
  "lon": 2.2676334,
  "tags": {
    "amenity": "cafe",
    "name": "Le Goya",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 988948075,
  "lat": 48.8910215,
  "lon": 2.4011225,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 988948084,
  "lat": 48.8909532,
  "lon": 2.3762481,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 989039373,
  "lat": 48.8510948,
  "lon": 2.2675935,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Baguette Impériale",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 989286452,
  "lat": 48.8485486,
  "lon": 2.2609653,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Lory",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 989286977,
  "lat": 48.8485892,
  "lon": 2.2607508,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Beaujolais d\'Auteuil",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 989431360,
  "lat": 48.8842979,
  "lon": 2.2601747,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "seafood",
    "name": "Jarrasse",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 989431912,
  "lat": 48.8716440,
  "lon": 2.3678590,
  "tags": {
    "amenity": "bar",
    "name": "Le Carillon"
  }
},
{
  "type": "node",
  "id": 989448183,
  "lat": 48.8495519,
  "lon": 2.2685978,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Le Rialto",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 990033852,
  "lat": 48.8400023,
  "lon": 2.2451820,
  "tags": {
    "amenity": "restaurant",
    "name": "Paris Est",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 990033863,
  "lat": 48.8478164,
  "lon": 2.2424927,
  "tags": {
    "alt_name": "P.Lenôtre",
    "amenity": "restaurant",
    "name": "Le Pavillon des Princes",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 990033874,
  "lat": 48.8440513,
  "lon": 2.2426580,
  "tags": {
    "amenity": "cafe",
    "name": "Le Tilleul",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 990033878,
  "lat": 48.8451023,
  "lon": 2.2427871,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Chat Gourmet",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 990033886,
  "lat": 48.8429873,
  "lon": 2.2436382,
  "tags": {
    "amenity": "cafe",
    "name": "Le Balto",
    "shop": "tobacco",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 990384075,
  "lat": 48.8815607,
  "lon": 2.3646012,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Oishii"
  }
},
{
  "type": "node",
  "id": 990384086,
  "lat": 48.8817018,
  "lon": 2.3639112,
  "tags": {
    "amenity": "cafe",
    "name": "Le Louis Blanc"
  }
},
{
  "type": "node",
  "id": 990506359,
  "lat": 48.9029784,
  "lon": 2.2559430,
  "tags": {
    "amenity": "cafe",
    "name": "Le Carrefour",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 990536038,
  "lat": 48.8483714,
  "lon": 2.2664428,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Sakura",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 991196485,
  "lat": 48.8389160,
  "lon": 2.2475213,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Bistrot Japonais",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 991196511,
  "lat": 48.8399871,
  "lon": 2.2453632,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "lebanese",
    "name": "Chez Madeleine",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 992837875,
  "lat": 48.8880139,
  "lon": 2.3770318,
  "tags": {
    "amenity": "cafe",
    "name": "Le Bastringue",
    "source": "survey 2013"
  }
},
{
  "type": "node",
  "id": 992935764,
  "lat": 48.8243361,
  "lon": 2.3260774,
  "tags": {
    "addr:housenumber": "117",
    "addr:postcode": "75014",
    "addr:street": "Avenue du Général Leclerc",
    "amenity": "restaurant",
    "name": "Buffalo Grill",
    "operator": "Buffalo Bill"
  }
},
{
  "type": "node",
  "id": 992935784,
  "lat": 48.8235176,
  "lon": 2.3258353,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "crepe",
    "name": "Rouge Pomme"
  }
},
{
  "type": "node",
  "id": 993642089,
  "lat": 48.8388689,
  "lon": 2.2510240,
  "tags": {
    "amenity": "cafe",
    "name": "Les Sports",
    "shop": "tobacco",
    "source": "survey",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 993642101,
  "lat": 48.8389052,
  "lon": 2.2502313,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "couscous",
    "name": "Le Relais des Sultans",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 993828534,
  "lat": 48.8410150,
  "lon": 2.3160260,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Oxinara",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 993843715,
  "lat": 48.8482315,
  "lon": 2.2642376,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Village d\'Auteuil",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 993882366,
  "lat": 48.8483045,
  "lon": 2.2606905,
  "tags": {
    "amenity": "cafe",
    "name": "Forty One",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 994059157,
  "lat": 48.8381351,
  "lon": 2.2419345,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Saint-Paolo",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 994119178,
  "lat": 48.8982135,
  "lon": 2.2628133,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Chez Hong",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 994119189,
  "lat": 48.8977325,
  "lon": 2.2636296,
  "tags": {
    "amenity": "restaurant",
    "name": "Au Vieux Fusil",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 994119190,
  "lat": 48.9002740,
  "lon": 2.2607200,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "San Giovanni",
    "source": "survey",
    "takeaway": "yes"
  }
},
{
  "type": "node",
  "id": 994119210,
  "lat": 48.9036174,
  "lon": 2.2574309,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Grand Bé",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 995502854,
  "lat": 48.8255580,
  "lon": 2.2474234,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "La Trattoria",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 995502863,
  "lat": 48.8254119,
  "lon": 2.2479478,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "seafood",
    "name": "Café Côté Rive",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 995502869,
  "lat": 48.8261880,
  "lon": 2.2475892,
  "tags": {
    "amenity": "restaurant",
    "name": "Kyoto Sushi",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 997119522,
  "lat": 48.8278592,
  "lon": 2.2464301,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "La Padella",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 997119665,
  "lat": 48.8268414,
  "lon": 2.2472325,
  "tags": {
    "amenity": "cafe",
    "name": "Le Genêt d\'Or",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 997119715,
  "lat": 48.8294795,
  "lon": 2.2459734,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Bo Sushi",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 997919811,
  "lat": 48.8848152,
  "lon": 2.3606854,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 997919835,
  "lat": 48.8846300,
  "lon": 2.3608651,
  "tags": {
    "amenity": "pub",
    "name": "La Royale"
  }
},
{
  "type": "node",
  "id": 998667382,
  "lat": 48.8860315,
  "lon": 2.2576288,
  "tags": {
    "amenity": "pub",
    "name": "Saint-John",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 998797541,
  "lat": 48.8343325,
  "lon": 2.2462735,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Au Bon Vigneron",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 998797585,
  "lat": 48.8357664,
  "lon": 2.2446646,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Lol K-Fé",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 998797612,
  "lat": 48.8342774,
  "lon": 2.2450386,
  "tags": {
    "amenity": "restaurant",
    "name": "Chez Clément",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 998797617,
  "lat": 48.8345176,
  "lon": 2.2457809,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "O\'Sumo",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 998797623,
  "lat": 48.8341016,
  "lon": 2.2455299,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 998797624,
  "lat": 48.8342286,
  "lon": 2.2460308,
  "tags": {
    "amenity": "cafe",
    "name": "Jean-Claude et Moune",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1000230458,
  "lat": 48.8473334,
  "lon": 2.2588597,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Celou 2",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 1000473137,
  "lat": 48.8315183,
  "lon": 2.3664031,
  "tags": {
    "amenity": "cafe",
    "name": "Le Narval",
    "source": "http://www.geodruid.com/intl/fr/place/1467993-le-narval-restaurant-paris-france/description"
  }
},
{
  "type": "node",
  "id": 1000473139,
  "lat": 48.8314132,
  "lon": 2.3666206,
  "tags": {
    "addr:housenumber": "47",
    "addr:postcode": "75013",
    "addr:street": "Impasse Clisson",
    "amenity": "cafe",
    "name": "Lou pintou",
    "source": "http://www.koifaire.com/ile-de-france/lou,pintou-12901.html"
  }
},
{
  "type": "node",
  "id": 1000763317,
  "lat": 48.8271491,
  "lon": 2.3665620,
  "tags": {
    "amenity": "cafe",
    "name": "La Marquise",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1000763319,
  "lat": 48.8286456,
  "lon": 2.3651923,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Chez Trassoudaine",
    "note": "Restaurant traditionnel, brasserie",
    "website": "http://www.cheztrassoudaine.com/",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 1000815135,
  "lat": 48.8341265,
  "lon": 2.2397846,
  "tags": {
    "addr:city": "Boulogne-Billancourt",
    "addr:country": "FR",
    "addr:housenumber": "22",
    "addr:postcode": "92100",
    "addr:street": "Rue Paul Bert",
    "amenity": "restaurant",
    "name": "Il Gattopardo",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1000815168,
  "lat": 48.8344551,
  "lon": 2.2414909,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "korean",
    "name": "21 Corée",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1000815255,
  "lat": 48.8344641,
  "lon": 2.2415389,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Les Matins Bleus",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1000815266,
  "lat": 48.8342855,
  "lon": 2.2400070,
  "tags": {
    "addr:housenumber": "40",
    "amenity": "restaurant",
    "name": "Le Normandie",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1001216228,
  "lat": 48.8454540,
  "lon": 2.2578610,
  "tags": {
    "amenity": "restaurant",
    "name": "Park\'s Boulevard",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 1001216251,
  "lat": 48.8454223,
  "lon": 2.2590080,
  "tags": {
    "amenity": "cafe",
    "name": "Le Viaduc d\'Auteuil",
    "shop": "tobacco",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 1001281802,
  "lat": 48.8173865,
  "lon": 2.3727529,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Chaplin\'s"
  }
},
{
  "type": "node",
  "id": 1001505510,
  "lat": 48.9048366,
  "lon": 2.2562419,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Royal Courbevoie",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1001505538,
  "lat": 48.8998057,
  "lon": 2.2615566,
  "tags": {
    "amenity": "restaurant",
    "name": "Délices de l\'Inde",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1001505610,
  "lat": 48.8992587,
  "lon": 2.2621009,
  "tags": {
    "amenity": "cafe",
    "name": "Bar du Stade",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1001505621,
  "lat": 48.8974690,
  "lon": 2.2639030,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Pizza Hut",
    "source": "survey",
    "takeaway": "yes"
  }
},
{
  "type": "node",
  "id": 1001505638,
  "lat": 48.9030520,
  "lon": 2.2580125,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Pizza Mido",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1001505675,
  "lat": 48.8999224,
  "lon": 2.2614404,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Délice Impérial",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1001505718,
  "lat": 48.8996053,
  "lon": 2.2617742,
  "tags": {
    "amenity": "cafe",
    "name": "Le Saint-Claude",
    "shop": "tobacco",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1001505724,
  "lat": 48.9027859,
  "lon": 2.2586172,
  "tags": {
    "amenity": "cafe",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1001505757,
  "lat": 48.8986729,
  "lon": 2.2623562,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Dolemon Sushi",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1003155613,
  "lat": 48.8403652,
  "lon": 2.2284639,
  "tags": {
    "amenity": "cafe",
    "name": "Café des Arts",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1003594237,
  "lat": 48.8604747,
  "lon": 2.3677991,
  "tags": {
    "amenity": "restaurant",
    "drink:club-mate": "yes",
    "name": "Le Zero Zero"
  }
},
{
  "type": "node",
  "id": 1004182252,
  "lat": 48.8505335,
  "lon": 2.3887324,
  "tags": {
    "amenity": "restaurant",
    "name": "Le serpent qui danse"
  }
},
{
  "type": "node",
  "id": 1004498996,
  "lat": 48.8367818,
  "lon": 2.2364441,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "couscous",
    "name": "La Palmeraie",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1004499039,
  "lat": 48.8409810,
  "lon": 2.2290927,
  "tags": {
    "amenity": "restaurant",
    "name": "Brasserie Jean Baptiste",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1005318033,
  "lat": 48.8453467,
  "lon": 2.3836640,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "brasilian",
    "name": "Porta da Selva",
    "opening_hours": "Tu-Su 12:00-15:00,19:00-23:00; Mo 19:00-23:00"
  }
},
{
  "type": "node",
  "id": 1005346382,
  "lat": 48.8369274,
  "lon": 2.3592628,
  "tags": {
    "addr:housenumber": "88",
    "addr:street": "Boulevard de l\'Hôpital",
    "amenity": "restaurant",
    "cuisine": "shandong",
    "name": "Délices Shandong - 山东小馆"
  }
},
{
  "type": "node",
  "id": 1005362295,
  "lat": 48.8369053,
  "lon": 2.2522524,
  "tags": {
    "amenity": "restaurant",
    "name": "Chez Michel",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1005646330,
  "lat": 48.8513298,
  "lon": 2.3837511,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "berber",
    "name": "Mansouria"
  }
},
{
  "type": "node",
  "id": 1006225678,
  "lat": 48.8655911,
  "lon": 2.3030514,
  "tags": {
    "amenity": "restaurant",
    "name": "Maison Blanche",
    "phone": "01.47.23.55.99",
    "website": "http://www.maison-blanche.fr/"
  }
},
{
  "type": "node",
  "id": 1007326468,
  "lat": 48.8766152,
  "lon": 2.3574727,
  "tags": {
    "amenity": "pub",
    "name": "Extérieur Quai"
  }
},
{
  "type": "node",
  "id": 1008982444,
  "lat": 48.8240570,
  "lon": 2.3358712,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "25",
    "addr:postcode": "75014",
    "addr:street": "Avenue Reille",
    "amenity": "cafe",
    "name": "Chin Chin",
    "opening_hours": "08:00-24:00"
  }
},
{
  "type": "node",
  "id": 1009008546,
  "lat": 48.8574795,
  "lon": 2.2731244,
  "tags": {
    "addr:housenumber": "12",
    "addr:street": "Avenue Mozart",
    "amenity": "cafe",
    "name": "Le Mozart",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 1009073534,
  "lat": 48.8626372,
  "lon": 2.2404388,
  "tags": {
    "amenity": "restaurant",
    "name": "La Grande Cascade",
    "website": "http://www.grandecascade.com/"
  }
},
{
  "type": "node",
  "id": 1012296767,
  "lat": 48.8374390,
  "lon": 2.2377652,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Coti\'s Café",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1012296798,
  "lat": 48.8397960,
  "lon": 2.2376101,
  "tags": {
    "addr:housenumber": "97",
    "addr:postcode": "92100",
    "amenity": "cafe",
    "name": "Le Marigny",
    "shop": "tobacco",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1013351504,
  "lat": 48.8411949,
  "lon": 2.2287709,
  "tags": {
    "amenity": "cafe",
    "name": "Le Rond-Point",
    "shop": "tobacco",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1013351523,
  "lat": 48.8406358,
  "lon": 2.2310483,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Minato",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1013351540,
  "lat": 48.8406087,
  "lon": 2.2314457,
  "tags": {
    "amenity": "cafe",
    "name": "Le Narval",
    "shop": "tobacco",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1013351543,
  "lat": 48.8407526,
  "lon": 2.2297442,
  "tags": {
    "amenity": "restaurant",
    "name": "Monteko Resto",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1014486885,
  "lat": 48.8401087,
  "lon": 2.2368239,
  "tags": {
    "amenity": "restaurant",
    "name": "Le César",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1014487002,
  "lat": 48.8401868,
  "lon": 2.2358592,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Yozakura",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1014690183,
  "lat": 48.8594585,
  "lon": 2.3560654,
  "tags": {
    "amenity": "bar",
    "name": "La Fronde",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 1015358394,
  "lat": 48.8841660,
  "lon": 2.2895992,
  "tags": {
    "amenity": "bar",
    "name": "Le Galvani",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 1015359068,
  "lat": 48.8859681,
  "lon": 2.2911667,
  "tags": {
    "amenity": "cafe",
    "name": "Royal Village"
  }
},
{
  "type": "node",
  "id": 1015830169,
  "lat": 48.8875689,
  "lon": 2.3536169,
  "tags": {
    "amenity": "bar",
    "name": "Bar restaurant Les 3 frères"
  }
},
{
  "type": "node",
  "id": 1015855680,
  "lat": 48.8400181,
  "lon": 2.2378142,
  "tags": {
    "amenity": "cafe",
    "name": "A La Mesure",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1015855729,
  "lat": 48.8400441,
  "lon": 2.2377380,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Yapani Sushi",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1016455009,
  "lat": 48.8410440,
  "lon": 2.2651773,
  "tags": {
    "amenity": "cafe",
    "name": "Le comptoir du 16e",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 1016701570,
  "lat": 48.8362081,
  "lon": 2.2365261,
  "tags": {
    "addr:housenumber": "104",
    "addr:street": "Rue de Billancourt",
    "amenity": "bar",
    "name": "Le Chiquito"
  }
},
{
  "type": "node",
  "id": 1018176361,
  "lat": 48.8434737,
  "lon": 2.2380737,
  "tags": {
    "amenity": "cafe",
    "name": "Le Panier",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1020227377,
  "lat": 48.8713989,
  "lon": 2.3748429,
  "tags": {
    "amenity": "pub",
    "name": "Le Faubourg"
  }
},
{
  "type": "node",
  "id": 1020227449,
  "lat": 48.8717746,
  "lon": 2.3758883,
  "tags": {
    "amenity": "pub",
    "name": "Le Jean Bar",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 1020227490,
  "lat": 48.8719061,
  "lon": 2.3762543,
  "tags": {
    "amenity": "pub",
    "name": "Le Zorba",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 1020352074,
  "lat": 48.8715920,
  "lon": 2.3753803,
  "tags": {
    "amenity": "pub",
    "name": "La Source"
  }
},
{
  "type": "node",
  "id": 1020391890,
  "lat": 48.8710718,
  "lon": 2.3739992,
  "tags": {
    "amenity": "pub",
    "name": "Le Progrès"
  }
},
{
  "type": "node",
  "id": 1020780010,
  "lat": 48.8701560,
  "lon": 2.3711369,
  "tags": {
    "amenity": "pub",
    "name": "Floréal"
  }
},
{
  "type": "node",
  "id": 1020780016,
  "lat": 48.8705298,
  "lon": 2.3731250,
  "tags": {
    "amenity": "cafe",
    "brewery": "leffe;1664;Stella Artois",
    "name": "Au Val de Loire"
  }
},
{
  "type": "node",
  "id": 1021079693,
  "lat": 48.8449412,
  "lon": 2.2575407,
  "tags": {
    "alt_name": "Patrick Pignol",
    "amenity": "restaurant",
    "name": "Relais d\'Auteuil",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 1021081029,
  "lat": 48.8427216,
  "lon": 2.2550829,
  "tags": {
    "amenity": "cafe",
    "name": "Les Deux Stades",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 1021081516,
  "lat": 48.8452233,
  "lon": 2.2577704,
  "tags": {
    "amenity": "restaurant",
    "name": "Bistrot Le Jean Bouin",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 1022710328,
  "lat": 48.8707796,
  "lon": 2.3732614,
  "tags": {
    "amenity": "restaurant",
    "name": "Mektoub"
  }
},
{
  "type": "node",
  "id": 1022719451,
  "lat": 48.8385588,
  "lon": 2.2571545,
  "tags": {
    "amenity": "cafe",
    "name": "Aux Trois Obus",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1022803184,
  "lat": 48.8707630,
  "lon": 2.3736928,
  "tags": {
    "amenity": "pub",
    "name": "Le Café du Théatre"
  }
},
{
  "type": "node",
  "id": 1023168088,
  "lat": 48.8709201,
  "lon": 2.3740599,
  "tags": {
    "amenity": "restaurant",
    "name": "Grillades au Feu de Bois"
  }
},
{
  "type": "node",
  "id": 1023168193,
  "lat": 48.8710092,
  "lon": 2.3742679,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 1023222092,
  "lat": 48.8710893,
  "lon": 2.3748362,
  "tags": {
    "amenity": "bar",
    "name": "Café Belleville"
  }
},
{
  "type": "node",
  "id": 1025468199,
  "lat": 48.8376700,
  "lon": 2.2578586,
  "tags": {
    "amenity": "cafe",
    "name": "Indiana"
  }
},
{
  "type": "node",
  "id": 1025500276,
  "lat": 48.8394586,
  "lon": 2.2616545,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Havane",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 1025557845,
  "lat": 48.8403523,
  "lon": 2.2652749,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Le Pavillon de Jade",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 1025560096,
  "lat": 48.8402456,
  "lon": 2.2655127,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Iannello",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 1025944743,
  "lat": 48.8495059,
  "lon": 2.3954641,
  "tags": {
    "amenity": "cafe",
    "brewery": "1664;Grimbergen_blanche;Grimbergen;Kronenbourg;Biere_de_saison",
    "happy_hours": "Mo-Su 16:00-20:00",
    "name": "Royal VI Nation",
    "opening_hours": "Mo-Su 00:00-02:00,06:00-24:00",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 1025944745,
  "lat": 48.8484892,
  "lon": 2.3941720,
  "tags": {
    "amenity": "cafe",
    "brewery": "Heineken;Pelforth;Record;Affligem;Desperados;Edelweiss",
    "happy_hours": "Mo-Su 17:00-20:00",
    "name": "Au Canon de la Nation",
    "opening_hours": "Mo-Su 00:00-02:00,05:00-24:00",
    "smoking": "outside",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 1028527127,
  "lat": 48.8592147,
  "lon": 2.3578986,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Dôme du Marais",
    "opening_hours": "Mo-Su 12:00-01:00",
    "phone": "01 42 74 54 17",
    "source": "survey 2013",
    "website": "http://www.ledomedumarais.fr/",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 1029896793,
  "lat": 48.8407348,
  "lon": 2.2646847,
  "tags": {
    "addr:housenumber": "154",
    "addr:street": "Avenue de Versailles",
    "amenity": "restaurant",
    "name": "Gary\'s Café",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 1034179325,
  "lat": 48.8475082,
  "lon": 2.3756380,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "14",
    "addr:postcode": "75012",
    "addr:street": "Rue Abel",
    "amenity": "restaurant",
    "cuisine": "french",
    "phone": "+33 (0) 1 77 11 04 24",
    "wifi": "yes"
  }
},
{
  "type": "node",
  "id": 1035711035,
  "lat": 48.8862598,
  "lon": 2.3626862,
  "tags": {
    "amenity": "pub",
    "name": "Au rendez-vous des chauffeurs"
  }
},
{
  "type": "node",
  "id": 1035711050,
  "lat": 48.8860205,
  "lon": 2.3612559,
  "tags": {
    "amenity": "pub",
    "name": "La Coupole"
  }
},
{
  "type": "node",
  "id": 1035728774,
  "lat": 48.8897668,
  "lon": 2.3683274,
  "tags": {
    "amenity": "pub",
    "name": "Le Pascali"
  }
},
{
  "type": "node",
  "id": 1035778113,
  "lat": 48.8874695,
  "lon": 2.3672750,
  "tags": {
    "amenity": "pub",
    "name": "Lez\'Arts"
  }
},
{
  "type": "node",
  "id": 1035778132,
  "lat": 48.8873800,
  "lon": 2.3672402,
  "tags": {
    "amenity": "pub",
    "name": "Brasserie du Parc"
  }
},
{
  "type": "node",
  "id": 1035787952,
  "lat": 48.8872163,
  "lon": 2.3671561,
  "tags": {
    "amenity": "bar",
    "name": "Oued-Rhiou"
  }
},
{
  "type": "node",
  "id": 1038210008,
  "lat": 48.8418055,
  "lon": 2.2387582,
  "tags": {
    "amenity": "cafe",
    "name": "Le Paris",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1038210059,
  "lat": 48.8417887,
  "lon": 2.2390132,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "seafood",
    "name": "Les Huïtres du Bonhomme",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1038210062,
  "lat": 48.8412961,
  "lon": 2.2394074,
  "tags": {
    "amenity": "cafe",
    "name": "Le Maryland",
    "shop": "tobacco",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1040951964,
  "lat": 48.8134004,
  "lon": 2.3591607,
  "tags": {
    "amenity": "restaurant",
    "name": "Kabice",
    "old_name": "le leclerc"
  }
},
{
  "type": "node",
  "id": 1041097792,
  "lat": 48.8407276,
  "lon": 2.2396099,
  "tags": {
    "amenity": "restaurant",
    "name": "Thaï Café",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1041617651,
  "lat": 48.8378544,
  "lon": 2.2962158,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Yuki",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1042663143,
  "lat": 48.8672772,
  "lon": 2.3368959,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Yamamoto"
  }
},
{
  "type": "node",
  "id": 1042766756,
  "lat": 48.8326481,
  "lon": 2.2486367,
  "tags": {
    "amenity": "restaurant",
    "name": "Les Arcades",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1044767614,
  "lat": 48.8296616,
  "lon": 2.3177920,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Les Artistes"
  }
},
{
  "type": "node",
  "id": 1044767617,
  "lat": 48.8283684,
  "lon": 2.3161973,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le 14 juillet il y a toujours des lampions"
  }
},
{
  "type": "node",
  "id": 1045054743,
  "lat": 48.8866286,
  "lon": 2.3612403,
  "tags": {
    "amenity": "restaurant",
    "name": "Tony"
  }
},
{
  "type": "node",
  "id": 1045581368,
  "lat": 48.8902851,
  "lon": 2.3688154,
  "tags": {
    "amenity": "restaurant",
    "name": "Café Caché"
  }
},
{
  "type": "node",
  "id": 1046316249,
  "lat": 48.8900187,
  "lon": 2.3629443,
  "tags": {
    "amenity": "pub",
    "name": "Au RDV du voyage"
  }
},
{
  "type": "node",
  "id": 1048819977,
  "lat": 48.8397098,
  "lon": 2.2848132,
  "tags": {
    "addr:housenumber": "81",
    "addr:postcode": "75015",
    "addr:street": "Avenue Félix Faure",
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Pizzeria Romanella",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 1048820098,
  "lat": 48.8412353,
  "lon": 2.2879283,
  "tags": {
    "addr:housenumber": "44",
    "addr:postcode": "75015",
    "addr:street": "Avenue Félix Faure",
    "amenity": "restaurant",
    "name": "La Petite Rotonde"
  }
},
{
  "type": "node",
  "id": 1049450304,
  "lat": 48.8347149,
  "lon": 2.3277467,
  "tags": {
    "amenity": "restaurant",
    "name": "Escale Caraïbe"
  }
},
{
  "type": "node",
  "id": 1049450307,
  "lat": 48.8354063,
  "lon": 2.3258802,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Enzo",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 1049450321,
  "lat": 48.8358672,
  "lon": 2.3242187,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Plan B"
  }
},
{
  "type": "node",
  "id": 1049450325,
  "lat": 48.8355698,
  "lon": 2.3250292,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le bistrot des Pingouins",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 1049732000,
  "lat": 48.8348588,
  "lon": 2.3273891,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "greek",
    "name": "L\'Odyssée"
  }
},
{
  "type": "node",
  "id": 1049732005,
  "lat": 48.8350846,
  "lon": 2.3267608,
  "tags": {
    "amenity": "restaurant",
    "name": "Aux petits chandeliers",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 1049732030,
  "lat": 48.8341036,
  "lon": 2.3294199,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Café d\'Enfer",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 1049732032,
  "lat": 48.8324180,
  "lon": 2.3247172,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Félicie"
  }
},
{
  "type": "node",
  "id": 1049732037,
  "lat": 48.8342294,
  "lon": 2.3264332,
  "tags": {
    "addr:housenumber": "27",
    "addr:postcode": "75014",
    "addr:street": "rue Gassendi",
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Indian House",
    "website": "http://www.restaurabtindien-paris.fr/"
  }
},
{
  "type": "node",
  "id": 1051453407,
  "lat": 48.8322528,
  "lon": 2.2511039,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Pizza Italia",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1051453456,
  "lat": 48.8324805,
  "lon": 2.2517846,
  "tags": {
    "amenity": "cafe",
    "name": "Aux Trois Marches",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1051785708,
  "lat": 48.9032352,
  "lon": 2.3027218,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1052496570,
  "lat": 48.8463464,
  "lon": 2.3945644,
  "tags": {
    "amenity": "restaurant",
    "name": "Carpe Diem",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 1053995737,
  "lat": 48.8694854,
  "lon": 2.4165551,
  "tags": {
    "addr:housenumber": "8",
    "addr:street": "Rue Hoche",
    "amenity": "restaurant",
    "name": "Au Grenier"
  }
},
{
  "type": "node",
  "id": 1054432193,
  "lat": 48.8322360,
  "lon": 2.2520027,
  "tags": {
    "amenity": "restaurant",
    "name": "Mise en Saine",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1054432204,
  "lat": 48.8321896,
  "lon": 2.2529663,
  "tags": {
    "amenity": "pub",
    "name": "The Corner",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1054432207,
  "lat": 48.8321818,
  "lon": 2.2533138,
  "tags": {
    "amenity": "cafe",
    "name": "Le Cabotin",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1054432221,
  "lat": 48.8316186,
  "lon": 2.2526110,
  "tags": {
    "amenity": "cafe",
    "name": "Chez Débo",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1054432232,
  "lat": 48.8319631,
  "lon": 2.2528523,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Bruegel",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1056872517,
  "lat": 48.8689943,
  "lon": 2.4151668,
  "tags": {
    "amenity": "restaurant",
    "name": "La Résidence"
  }
},
{
  "type": "node",
  "id": 1067812861,
  "lat": 48.8795990,
  "lon": 2.2908850,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Au Petit Marguery",
    "outdoor_seating": "no"
  }
},
{
  "type": "node",
  "id": 1068630302,
  "lat": 48.8955070,
  "lon": 2.3483656,
  "tags": {
    "addr:housenumber": "16",
    "addr:street": "Rue Neuve de la Chardonniere",
    "amenity": "bar",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 1079716173,
  "lat": 48.8469807,
  "lon": 2.3416967,
  "tags": {
    "amenity": "cafe",
    "internet_access": "service",
    "name": "Milk",
    "opening_hours": "24/7"
  }
},
{
  "type": "node",
  "id": 1079716496,
  "lat": 48.8535250,
  "lon": 2.3447123,
  "tags": {
    "addr:street": "Boulevard Saint-Michel",
    "amenity": "cafe",
    "name": "Le Départ Saint-Michel"
  }
},
{
  "type": "node",
  "id": 1080956105,
  "lat": 48.8368961,
  "lon": 2.3177487,
  "tags": {
    "amenity": "restaurant",
    "name": "Millésimes 62"
  }
},
{
  "type": "node",
  "id": 1080956263,
  "lat": 48.8367758,
  "lon": 2.3180171,
  "tags": {
    "amenity": "restaurant",
    "name": "La Table de Chine"
  }
},
{
  "type": "node",
  "id": 1082016247,
  "lat": 48.8298713,
  "lon": 2.2516750,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Yako",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1085585236,
  "lat": 48.8281782,
  "lon": 2.2502030,
  "tags": {
    "amenity": "pub",
    "name": "Le Sunset",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1086972230,
  "lat": 48.8396082,
  "lon": 2.3324972,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Bistro T"
  }
},
{
  "type": "node",
  "id": 1088173736,
  "lat": 48.8764826,
  "lon": 2.2833917,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Il Maestro"
  }
},
{
  "type": "node",
  "id": 1088219400,
  "lat": 48.8258457,
  "lon": 2.2488766,
  "tags": {
    "amenity": "restaurant",
    "name": "Chez Manu et Diego",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1088219412,
  "lat": 48.8257357,
  "lon": 2.2487996,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Marina Sushi",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1089282938,
  "lat": 48.8559760,
  "lon": 2.3666852,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Cafe Hugo",
    "phone": "01 42 72 64 04",
    "website": "http://www.cafehugo.com/"
  }
},
{
  "type": "node",
  "id": 1089313449,
  "lat": 48.8499857,
  "lon": 2.3459367,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "regional",
    "name": "Le Pré Verre"
  }
},
{
  "type": "node",
  "id": 1094366292,
  "lat": 48.8626827,
  "lon": 2.3523046,
  "tags": {
    "addr:housenumber": "182",
    "addr:postcode": "75003",
    "addr:street": "rue Saint-Martin",
    "amenity": "bar",
    "internet_access": "no",
    "name": "Le Bar\'Ouf",
    "source": "https://fr-fr.facebook.com/BarOuf"
  }
},
{
  "type": "node",
  "id": 1094366310,
  "lat": 48.8618932,
  "lon": 2.3433243,
  "tags": {
    "amenity": "restaurant",
    "name": "Indiana"
  }
},
{
  "type": "node",
  "id": 1095016025,
  "lat": 48.8169487,
  "lon": 2.3795873,
  "tags": {
    "amenity": "cafe",
    "name": "Chez Sam",
    "shop": "tobacco",
    "source": "survey",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 1096116918,
  "lat": 48.8485371,
  "lon": 2.3779078,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "couscous"
  }
},
{
  "type": "node",
  "id": 1096116921,
  "lat": 48.8511475,
  "lon": 2.3804023,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "ivoirian",
    "cuisine:fr": "ivoirienne",
    "name": "La Banane ivoirienne"
  }
},
{
  "type": "node",
  "id": 1096116923,
  "lat": 48.8510187,
  "lon": 2.3802119,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1096116926,
  "lat": 48.8506286,
  "lon": 2.3783987,
  "tags": {
    "amenity": "cafe",
    "brewery": "Carlsberg;Grimbergen",
    "cuisine": "french",
    "name": "Le Chat Bossu",
    "opening_hours": "Mo-Su 19:30-21:30"
  }
},
{
  "type": "node",
  "id": 1096505107,
  "lat": 48.8344721,
  "lon": 2.2262916,
  "tags": {
    "amenity": "restaurant",
    "name": "La Grange",
    "source": "survey",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 1096663299,
  "lat": 48.8184928,
  "lon": 2.3783255,
  "tags": {
    "amenity": "bar",
    "name": "L\'Étoile d\'or"
  }
},
{
  "type": "node",
  "id": 1099779763,
  "lat": 48.8343270,
  "lon": 2.2547870,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Palais d\'Or",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1100494765,
  "lat": 48.8642832,
  "lon": 2.3420572,
  "tags": {
    "amenity": "restaurant",
    "name": "Kei"
  }
},
{
  "type": "node",
  "id": 1101942145,
  "lat": 48.8327917,
  "lon": 2.2534092,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "tapas",
    "name": "Tapèo Café",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1101942163,
  "lat": 48.8336573,
  "lon": 2.2543154,
  "tags": {
    "amenity": "cafe",
    "name": "Le Brazza",
    "shop": "tobacco",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1101942165,
  "lat": 48.8334149,
  "lon": 2.2538436,
  "tags": {
    "amenity": "restaurant",
    "name": "Eighty Wine",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1103198040,
  "lat": 48.8331390,
  "lon": 2.2511047,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Méditerranéen",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1103198044,
  "lat": 48.8343768,
  "lon": 2.2501778,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Pizzeria d\'Angelo",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1103198045,
  "lat": 48.8330859,
  "lon": 2.2513562,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Kyoto",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1103198052,
  "lat": 48.8332013,
  "lon": 2.2512698,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Le Palais du Dôme",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1103223493,
  "lat": 48.8141613,
  "lon": 2.3222538,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Ninja"
  }
},
{
  "type": "node",
  "id": 1105435953,
  "lat": 48.8950000,
  "lon": 2.2916639,
  "tags": {
    "amenity": "restaurant",
    "name": "Catania"
  }
},
{
  "type": "node",
  "id": 1107336088,
  "lat": 48.8772697,
  "lon": 2.2852126,
  "tags": {
    "amenity": "cafe",
    "name": "L\'Escale"
  }
},
{
  "type": "node",
  "id": 1107336093,
  "lat": 48.8773156,
  "lon": 2.2850715,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Il Naturale",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 1107336105,
  "lat": 48.8773806,
  "lon": 2.2848829,
  "tags": {
    "amenity": "restaurant",
    "name": "La Terrasse"
  }
},
{
  "type": "node",
  "id": 1107336112,
  "lat": 48.8774160,
  "lon": 2.2847302,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Maillot"
  }
},
{
  "type": "node",
  "id": 1107492857,
  "lat": 48.8350642,
  "lon": 2.2497018,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "La Strada",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1107514000,
  "lat": 48.8421287,
  "lon": 2.2398345,
  "tags": {
    "amenity": "cafe",
    "name": "Bar des Amis",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1107514004,
  "lat": 48.8417274,
  "lon": 2.2400986,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Rest\'o 61",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1108414665,
  "lat": 48.8533661,
  "lon": 2.3445967,
  "tags": {
    "addr:street": "Boulevard Saint-Michel",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Au Saint-Severin",
    "phone": "01 43 54 19 36",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1108731810,
  "lat": 48.8759686,
  "lon": 2.2866256,
  "tags": {
    "amenity": "cafe",
    "name": "Le Balto"
  }
},
{
  "type": "node",
  "id": 1108965154,
  "lat": 48.8331981,
  "lon": 2.2415616,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "JM Box",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1108965192,
  "lat": 48.8329662,
  "lon": 2.2408131,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Hoki Sushi",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1109398663,
  "lat": 48.8530250,
  "lon": 2.3465982,
  "tags": {
    "amenity": "cafe",
    "name": "Le Notre-Dame",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1109569346,
  "lat": 48.8527336,
  "lon": 2.3464352,
  "tags": {
    "amenity": "restaurant",
    "name": "Jardin Notre-Dame",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1109569673,
  "lat": 48.8525998,
  "lon": 2.3463499,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "turkish",
    "name": "Welcome To Istanbul",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1109677556,
  "lat": 48.8510655,
  "lon": 2.3458688,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "seafood",
    "name": "Le Bar à Huîtres",
    "phone": "+33-1-44072737",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "www.labarahuitres.fr"
  }
},
{
  "type": "node",
  "id": 1109781722,
  "lat": 48.8515005,
  "lon": 2.3480197,
  "tags": {
    "amenity": "restaurant",
    "microbrewery": "no",
    "name": "Hippopotamus",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 1109781731,
  "lat": 48.8505010,
  "lon": 2.3475831,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "seafood",
    "name": "Le Twickenham",
    "phone": "+33-1-43545244",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://www.letwickenham.com/"
  }
},
{
  "type": "node",
  "id": 1109781761,
  "lat": 48.8508738,
  "lon": 2.3460187,
  "tags": {
    "alt_name": "Le Cluny",
    "amenity": "restaurant",
    "name": "Grand Bar Cluny",
    "phone": "+33-1-43541456",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1110200038,
  "lat": 48.8656690,
  "lon": 2.3706000,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "74",
    "addr:postcode": "75011",
    "addr:street": "Rue de la Folie-Méricourt",
    "amenity": "restaurant",
    "cuisine": "burger",
    "delivery": "no",
    "internet_access": "wlan",
    "name": "American Bistrot",
    "opening_hours": "Mo-Su 12:00-23:00",
    "outdoor_seating": "yes",
    "phone": "09 81 86 99 72",
    "smoking": "outside",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "takeaway": "yes"
  }
},
{
  "type": "node",
  "id": 1110240921,
  "lat": 48.8900976,
  "lon": 2.2880684,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1110240932,
  "lat": 48.8902440,
  "lon": 2.2879262,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1110309677,
  "lat": 48.8331680,
  "lon": 2.2438930,
  "tags": {
    "amenity": "restaurant",
    "name": "Tribeca",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1110738581,
  "lat": 48.8467301,
  "lon": 2.3428821,
  "tags": {
    "amenity": "cafe",
    "name": "Les Fontaines",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1111551161,
  "lat": 48.8935510,
  "lon": 2.2892466,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 1111551168,
  "lat": 48.8938090,
  "lon": 2.2837460,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Hokkaido",
    "outdoor_seating": "yes"
  }
},
{
  "type": "node",
  "id": 1111551169,
  "lat": 48.8937283,
  "lon": 2.2911831,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Sabodet"
  }
},
{
  "type": "node",
  "id": 1111551181,
  "lat": 48.8938517,
  "lon": 2.2838394,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 1111551183,
  "lat": 48.8937212,
  "lon": 2.2889971,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 1111551191,
  "lat": 48.8945560,
  "lon": 2.2894380,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Bistrot de Lolotte"
  }
},
{
  "type": "node",
  "id": 1111551193,
  "lat": 48.8934011,
  "lon": 2.2904321,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1111551201,
  "lat": 48.8913934,
  "lon": 2.2825680,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "sushi",
    "name": "Kyoto"
  }
},
{
  "type": "node",
  "id": 1111551206,
  "lat": 48.8935485,
  "lon": 2.2891905,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1111551224,
  "lat": 48.8905381,
  "lon": 2.2794566,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "La Maiella"
  }
},
{
  "type": "node",
  "id": 1111551227,
  "lat": 48.8934469,
  "lon": 2.2901424,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 1111591397,
  "lat": 48.8356639,
  "lon": 2.2536826,
  "tags": {
    "amenity": "restaurant",
    "name": "Mon Bistrot",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1111591442,
  "lat": 48.8347537,
  "lon": 2.2519691,
  "tags": {
    "amenity": "restaurant",
    "name": "La Can Tin\'h",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1111593195,
  "lat": 48.9075401,
  "lon": 2.2405064,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Maitre Kanter"
  }
},
{
  "type": "node",
  "id": 1112952577,
  "lat": 48.8327812,
  "lon": 2.2455048,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Au Royal Pizza",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1112952582,
  "lat": 48.8342756,
  "lon": 2.2498523,
  "tags": {
    "amenity": "restaurant",
    "name": "Cuizine",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1112952585,
  "lat": 48.8339125,
  "lon": 2.2478483,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Kyoko",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1112952591,
  "lat": 48.8337228,
  "lon": 2.2480349,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Idéal Sushi",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1113455026,
  "lat": 48.8757885,
  "lon": 2.3583741,
  "tags": {
    "amenity": "cafe",
    "name": "Les Tramway de l\'Est"
  }
},
{
  "type": "node",
  "id": 1113738981,
  "lat": 48.8427362,
  "lon": 2.3122657,
  "tags": {
    "amenity": "bar",
    "name": "Au Métro"
  }
},
{
  "type": "node",
  "id": 1113738992,
  "lat": 48.8414932,
  "lon": 2.3132873,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "L\'Océan des Gourmands"
  }
},
{
  "type": "node",
  "id": 1113738997,
  "lat": 48.8429440,
  "lon": 2.3130453,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1113739028,
  "lat": 48.8425813,
  "lon": 2.3133329,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'Épicuriste"
  }
},
{
  "type": "node",
  "id": 1113739044,
  "lat": 48.8420308,
  "lon": 2.3127675,
  "tags": {
    "amenity": "bar",
    "name": "Brasserie Sauret"
  }
},
{
  "type": "node",
  "id": 1113739049,
  "lat": 48.8425225,
  "lon": 2.3124389,
  "tags": {
    "amenity": "restaurant",
    "name": "La Salle à Manger"
  }
},
{
  "type": "node",
  "id": 1114194416,
  "lat": 48.8712198,
  "lon": 2.3210983,
  "tags": {
    "amenity": "cafe",
    "name": "Le Dorian"
  }
},
{
  "type": "node",
  "id": 1114763101,
  "lat": 48.8848552,
  "lon": 2.3794020,
  "tags": {
    "amenity": "cafe",
    "name": "L\'Avenue"
  }
},
{
  "type": "node",
  "id": 1114763120,
  "lat": 48.8850887,
  "lon": 2.3797004,
  "tags": {
    "amenity": "bar",
    "name": "Le Gymnase"
  }
},
{
  "type": "node",
  "id": 1118434386,
  "lat": 48.8224551,
  "lon": 2.2678473,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 1119246160,
  "lat": 48.8773360,
  "lon": 2.3157316,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 1119816807,
  "lat": 48.8819430,
  "lon": 2.2356999,
  "tags": {
    "amenity": "cafe",
    "name": "Le Longchamp"
  }
},
{
  "type": "node",
  "id": 1119817075,
  "lat": 48.8829096,
  "lon": 2.2369686,
  "tags": {
    "amenity": "cafe",
    "name": "L\'armoric"
  }
},
{
  "type": "node",
  "id": 1125079287,
  "lat": 48.8566502,
  "lon": 2.3266740,
  "tags": {
    "amenity": "restaurant",
    "name": "Gaya Rive Gauche"
  }
},
{
  "type": "node",
  "id": 1126088147,
  "lat": 48.8611575,
  "lon": 2.3438966,
  "tags": {
    "amenity": "pub",
    "brewery": "Akerbeltz_ambrée",
    "cuisine": "french",
    "internet_access": "no",
    "name": "L\'Express"
  }
},
{
  "type": "node",
  "id": 1126610079,
  "lat": 48.8663775,
  "lon": 2.3472549,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Pain Quotidien Montorgueil",
    "phone": "+33 0142963170",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 1127252061,
  "lat": 48.8684512,
  "lon": 2.3417404,
  "tags": {
    "amenity": "cafe",
    "name": "Le Préaumur",
    "phone": "+33 1 42 60 00 44"
  }
},
{
  "type": "node",
  "id": 1128854284,
  "lat": 48.8696608,
  "lon": 2.3393758,
  "tags": {
    "amenity": "restaurant",
    "name": "Chez Pierre"
  }
},
{
  "type": "node",
  "id": 1129273824,
  "lat": 48.8226335,
  "lon": 2.3469267,
  "tags": {
    "amenity": "pub",
    "name": "N°13",
    "note": "bar/brasserie"
  }
},
{
  "type": "node",
  "id": 1129806595,
  "lat": 48.8485654,
  "lon": 2.3482310,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Pizza Roma",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1129920957,
  "lat": 48.8496798,
  "lon": 2.3526713,
  "tags": {
    "amenity": "restaurant",
    "name": "Les Arômes",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1130253133,
  "lat": 48.8444122,
  "lon": 2.3394917,
  "tags": {
    "amenity": "cafe",
    "name": "Le Bac Saint-Michel"
  }
},
{
  "type": "node",
  "id": 1133077162,
  "lat": 48.8515559,
  "lon": 2.3496810,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "9",
    "addr:postcode": "75005",
    "addr:street": "Quai de Montebello",
    "amenity": "restaurant",
    "name": "La Bouteille d\'Or",
    "phone": "+33 1 43 54 52 58",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://www.boparis.com"
  }
},
{
  "type": "node",
  "id": 1133077163,
  "lat": 48.8509952,
  "lon": 2.3511014,
  "tags": {
    "amenity": "cafe",
    "name": "L\'Île de France",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1133506543,
  "lat": 48.8974707,
  "lon": 2.2831618,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "La Table"
  }
},
{
  "type": "node",
  "id": 1133506557,
  "lat": 48.8993462,
  "lon": 2.2843033,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Chartier"
  }
},
{
  "type": "node",
  "id": 1133506558,
  "lat": 48.8931433,
  "lon": 2.2868820,
  "tags": {
    "amenity": "cafe",
    "cuisine": "french",
    "name": "Le Balto"
  }
},
{
  "type": "node",
  "id": 1133506568,
  "lat": 48.8921434,
  "lon": 2.2875365,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1133506584,
  "lat": 48.8992139,
  "lon": 2.2816989,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "steak_house",
    "name": "Hippopotamus"
  }
},
{
  "type": "node",
  "id": 1133510138,
  "lat": 48.8926226,
  "lon": 2.2871115,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1134402720,
  "lat": 48.8472106,
  "lon": 2.3483382,
  "tags": {
    "amenity": "restaurant",
    "name": "La Méthode",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1134402727,
  "lat": 48.8471676,
  "lon": 2.3484712,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Petit Café",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1134402749,
  "lat": 48.8471167,
  "lon": 2.3485711,
  "tags": {
    "amenity": "pub",
    "name": "Hurling Pub",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 1135295421,
  "lat": 48.8951159,
  "lon": 2.2878261,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1135295422,
  "lat": 48.8952452,
  "lon": 2.2877163,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1137858675,
  "lat": 48.8812607,
  "lon": 2.2371439,
  "tags": {
    "amenity": "cafe",
    "name": "Le Florence"
  }
},
{
  "type": "node",
  "id": 1137858687,
  "lat": 48.8811699,
  "lon": 2.2373374,
  "tags": {
    "amenity": "cafe",
    "name": "Le Lido"
  }
},
{
  "type": "node",
  "id": 1137860631,
  "lat": 48.8810242,
  "lon": 2.2382153,
  "tags": {
    "amenity": "cafe",
    "name": "Le Diplomate"
  }
},
{
  "type": "node",
  "id": 1138969685,
  "lat": 48.9066755,
  "lon": 2.2853937,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 1140477414,
  "lat": 48.8414796,
  "lon": 2.3258678,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "30",
    "addr:postcode": "75014",
    "addr:street": "Rue Delambre",
    "amenity": "pub",
    "brewery": "Leffe;Leffe Ruby",
    "cuisine": "french",
    "name": "Ty jos",
    "note": "Pub breton, crêperie. Musique à la cave jeudi, vendredi ..."
  }
},
{
  "type": "node",
  "id": 1140477426,
  "lat": 48.8407751,
  "lon": 2.3245796,
  "tags": {
    "amenity": "restaurant",
    "brewery": "Leffe",
    "cuisine": "french",
    "name": "Brasserie Gaité"
  }
},
{
  "type": "node",
  "id": 1140806422,
  "lat": 48.8114954,
  "lon": 2.2706802,
  "tags": {
    "amenity": "cafe",
    "cuisine": "french",
    "name": "La Fourche"
  }
},
{
  "type": "node",
  "id": 1142802917,
  "lat": 48.8431709,
  "lon": 2.3416539,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'Orée du Parc",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1142802952,
  "lat": 48.8426788,
  "lon": 2.3414503,
  "tags": {
    "addr:housename": "Le Risalé",
    "addr:housenumber": "245 bis",
    "addr:postcode": "75005",
    "addr:street": "Rue Saint-Jacques",
    "amenity": "restaurant",
    "cuisine": "turkish",
    "name": "Le Risalé",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://www.lerisale.fr/"
  }
},
{
  "type": "node",
  "id": 1143736503,
  "lat": 48.8575636,
  "lon": 2.3501179,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese;shandong",
    "cuisine:fr": "chinois;shandong"
  }
},
{
  "type": "node",
  "id": 1144156468,
  "lat": 48.8463554,
  "lon": 2.3405710,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Petit Journal",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1144156485,
  "lat": 48.8459922,
  "lon": 2.3409379,
  "tags": {
    "amenity": "cafe",
    "name": "Le Gay-Lussac",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1144196236,
  "lat": 48.8394458,
  "lon": 2.3383398,
  "tags": {
    "amenity": "cafe",
    "name": "Le Royal",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1144460595,
  "lat": 48.8376389,
  "lon": 2.3465515,
  "tags": {
    "amenity": "cafe",
    "name": "Café aux Marsouins",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1144460802,
  "lat": 48.8378226,
  "lon": 2.3456909,
  "tags": {
    "amenity": "cafe",
    "name": "Le Taiyo",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1144591712,
  "lat": 48.8393158,
  "lon": 2.3503572,
  "tags": {
    "amenity": "cafe",
    "name": "Le Café Saint-Médard",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1145667733,
  "lat": 48.8430338,
  "lon": 2.3494597,
  "tags": {
    "amenity": "restaurant",
    "name": "La Vieille Tour",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1145667745,
  "lat": 48.8425969,
  "lon": 2.3517238,
  "tags": {
    "amenity": "cafe",
    "name": "Au Rendez-Vous du Marché",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1145667767,
  "lat": 48.8431709,
  "lon": 2.3494420,
  "tags": {
    "amenity": "restaurant",
    "name": "La Fontaine",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1145745864,
  "lat": 48.8429356,
  "lon": 2.3483283,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Pot de Terre",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1145745867,
  "lat": 48.8428285,
  "lon": 2.3484260,
  "tags": {
    "amenity": "restaurant",
    "name": "Heureux Comme Alexandre",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1145745886,
  "lat": 48.8428073,
  "lon": 2.3483266,
  "tags": {
    "amenity": "cafe",
    "name": "La Montagne",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1145811883,
  "lat": 48.8450551,
  "lon": 2.3490236,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Volcan",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1145811897,
  "lat": 48.8455001,
  "lon": 2.3492453,
  "tags": {
    "amenity": "restaurant",
    "name": "La Maison de Verlaine",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1145811910,
  "lat": 48.8449589,
  "lon": 2.3493182,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Quartier Latin",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1145811915,
  "lat": 48.8452352,
  "lon": 2.3492038,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "libanese",
    "name": "L\'Olivier du Mage",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1145811928,
  "lat": 48.8453933,
  "lon": 2.3492411,
  "tags": {
    "amenity": "restaurant",
    "name": "La Brouette et La Chandelle",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1145811934,
  "lat": 48.8452357,
  "lon": 2.3490360,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "greek",
    "name": "Les Olympiades",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1145811945,
  "lat": 48.8451938,
  "lon": 2.3492149,
  "tags": {
    "amenity": "restaurant",
    "name": "Tire Bouchon",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1146152616,
  "lat": 48.8449425,
  "lon": 2.3498446,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "spanish",
    "name": "Buro Blanco",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1146152655,
  "lat": 48.8450354,
  "lon": 2.3496519,
  "tags": {
    "amenity": "cafe",
    "name": "Le Descartes",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1146152674,
  "lat": 48.8449041,
  "lon": 2.3498515,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Le Mondelo",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1151307310,
  "lat": 48.8948090,
  "lon": 2.2660450,
  "tags": {
    "amenity": "restaurant",
    "name": "au trou de bouzouls"
  }
},
{
  "type": "node",
  "id": 1151311322,
  "lat": 48.8946189,
  "lon": 2.2667966,
  "tags": {
    "amenity": "cafe",
    "name": "cha cha"
  }
},
{
  "type": "node",
  "id": 1155164311,
  "lat": 48.8389864,
  "lon": 2.3510927,
  "tags": {
    "amenity": "cafe",
    "name": "Dans les Landes",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1157983618,
  "lat": 48.8384619,
  "lon": 2.3563683,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "crepe",
    "name": "Le Petit Grumeau",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1157983703,
  "lat": 48.8384169,
  "lon": 2.3562199,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Romanella",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1157983736,
  "lat": 48.8387726,
  "lon": 2.3573303,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Domino\'s Pizza",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1158018449,
  "lat": 48.8395766,
  "lon": 2.3564711,
  "tags": {
    "amenity": "restaurant",
    "name": "Agapes Traditions et Gourmandises",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1163267661,
  "lat": 48.8449356,
  "lon": 2.2939406,
  "tags": {
    "amenity": "cafe",
    "name": "Brasserie Le Commerce"
  }
},
{
  "type": "node",
  "id": 1164839323,
  "lat": 48.8608198,
  "lon": 2.3503260,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Ozo",
    "opening_hours": "Mo-Th 19:30-00:00; Fr 19:30-00:30; Sa 19:30-01:00; Su 11:00-16:30",
    "phone": "0142771003",
    "smoking": "no",
    "website": "www.ozoresto.com",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 1164851248,
  "lat": 48.8420233,
  "lon": 2.2210343,
  "tags": {
    "addr:city": "Saint-Cloud",
    "addr:country": "FR",
    "addr:housenumber": "2 bis",
    "addr:postcode": "92210",
    "addr:street": "Rue Royale",
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "La Bénédiction",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1165739794,
  "lat": 48.8520143,
  "lon": 2.3467491,
  "tags": {
    "amenity": "bar",
    "name": "Caveau des Oubliettes"
  }
},
{
  "type": "node",
  "id": 1165762461,
  "lat": 48.8885709,
  "lon": 2.3479030,
  "tags": {
    "addr:housenumber": "18",
    "addr:street": "Rue Custine",
    "amenity": "cafe",
    "name": "Le Montmartre"
  }
},
{
  "type": "node",
  "id": 1165854618,
  "lat": 48.8386423,
  "lon": 2.3498590,
  "tags": {
    "amenity": "cafe",
    "name": "Café Léa",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1166299425,
  "lat": 48.8336090,
  "lon": 2.2573970,
  "tags": {
    "amenity": "bar",
    "name": "Le Point Du Jour"
  }
},
{
  "type": "node",
  "id": 1166504803,
  "lat": 48.8478519,
  "lon": 2.2606251,
  "tags": {
    "amenity": "bar",
    "name": "Le moulin d\'Auteuil"
  }
},
{
  "type": "node",
  "id": 1166729059,
  "lat": 48.8558414,
  "lon": 2.3601168,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "polonese",
    "name": "Le Ravaillac",
    "opening_hours": "Mo-Sa 12:30-23:00",
    "phone": "01 42 72 85 85"
  }
},
{
  "type": "node",
  "id": 1166729166,
  "lat": 48.8580164,
  "lon": 2.3612756,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "african",
    "name": "Le Petit Dakar",
    "opening_hours": "Tu-Sa 12:30-14:30;Tu-Su 19:30-22:30",
    "phone": "01 44 59 34 74",
    "website": "http://www.lepetitdakar.com/"
  }
},
{
  "type": "node",
  "id": 1166729214,
  "lat": 48.8603491,
  "lon": 2.3508475,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Parvis",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1168624594,
  "lat": 48.8184410,
  "lon": 2.2490040,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Sushi Fresh"
  }
},
{
  "type": "node",
  "id": 1170046666,
  "lat": 48.8209410,
  "lon": 2.2498960,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 1174439241,
  "lat": 48.8145970,
  "lon": 2.4594112,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "sandwich",
    "name": "Croq\'o\'pain",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1174439791,
  "lat": 48.8150905,
  "lon": 2.4611370,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Vilareal",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1179696276,
  "lat": 48.8584177,
  "lon": 2.3025456,
  "tags": {
    "amenity": "restaurant",
    "name": "La Fontaine de Mars",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1180644910,
  "lat": 48.8424857,
  "lon": 2.2416432,
  "tags": {
    "amenity": "restaurant",
    "name": "La Veranda",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1181374937,
  "lat": 48.8841171,
  "lon": 2.3650610,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "turkish",
    "name": "Meram"
  }
},
{
  "type": "node",
  "id": 1181634263,
  "lat": 48.8569221,
  "lon": 2.3035938,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Saint-Cirgues",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1186043364,
  "lat": 48.8464192,
  "lon": 2.2955310,
  "tags": {
    "addr:housenumber": "51",
    "addr:street": "Rue du Commerce",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Café du Commerce",
    "website": "http://www.lecafeducommerce.com/"
  }
},
{
  "type": "node",
  "id": 1186043590,
  "lat": 48.8435438,
  "lon": 2.2934604,
  "tags": {
    "amenity": "pub",
    "name": "Music pub"
  }
},
{
  "type": "node",
  "id": 1191165485,
  "lat": 48.8368456,
  "lon": 2.3591245,
  "tags": {
    "amenity": "bar",
    "name": "La Ménagerie"
  }
},
{
  "type": "node",
  "id": 1191167490,
  "lat": 48.8359122,
  "lon": 2.3596749,
  "tags": {
    "amenity": "restaurant",
    "name": "Bistrot 13",
    "source": "survey 2014"
  }
},
{
  "type": "node",
  "id": 1191402771,
  "lat": 48.8600034,
  "lon": 2.3094820,
  "tags": {
    "amenity": "cafe",
    "name": "Au Canon des Invalides",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1191403016,
  "lat": 48.8602874,
  "lon": 2.3097025,
  "tags": {
    "amenity": "restaurant",
    "name": "La Cantinella",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1191403042,
  "lat": 48.8602217,
  "lon": 2.3097138,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Clarisse",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1191784302,
  "lat": 48.8857653,
  "lon": 2.2296598,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 1192592453,
  "lat": 48.8375268,
  "lon": 2.2470780,
  "tags": {
    "amenity": "restaurant",
    "name": "La Plancha",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1193506966,
  "lat": 48.8530145,
  "lon": 2.3117479,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Vauban",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1194033471,
  "lat": 48.8501505,
  "lon": 2.3397562,
  "tags": {
    "amenity": "restaurant",
    "name": "Tokyotori"
  }
},
{
  "type": "node",
  "id": 1194067632,
  "lat": 48.8438157,
  "lon": 2.2438452,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Sweety",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1197621387,
  "lat": 48.8507370,
  "lon": 2.3741124,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Swan & Vincent"
  }
},
{
  "type": "node",
  "id": 1197621395,
  "lat": 48.8499922,
  "lon": 2.3740320,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "turkish",
    "name": "Le Cheval de Troye"
  }
},
{
  "type": "node",
  "id": 1197621396,
  "lat": 48.8516089,
  "lon": 2.3778622,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "turkish"
  }
},
{
  "type": "node",
  "id": 1197621414,
  "lat": 48.8503505,
  "lon": 2.3762126,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "tapas",
    "name": "Agua Limon"
  }
},
{
  "type": "node",
  "id": 1197653504,
  "lat": 48.8465347,
  "lon": 2.3810262,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese"
  }
},
{
  "type": "node",
  "id": 1197653535,
  "lat": 48.8452145,
  "lon": 2.3770818,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese"
  }
},
{
  "type": "node",
  "id": 1197653593,
  "lat": 48.8430680,
  "lon": 2.3837014,
  "tags": {
    "amenity": "cafe",
    "shop": "department_store"
  }
},
{
  "type": "node",
  "id": 1197653595,
  "lat": 48.8445706,
  "lon": 2.3835054,
  "tags": {
    "amenity": "cafe",
    "brewery": "Bavik;Petrus;Barbar_brune;Kasteel_rouge;Tripel_Karmeliet;Wittekerke",
    "happy_hours": "Mo-Sa 17:00-20:00",
    "name": "Le Mastroquet",
    "opening_hours": "Tu-Sa 00:00-02:00,10:00-24:00; Su 00:00-02:00; Mo 10:00-24:00",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 1198500834,
  "lat": 48.8560410,
  "lon": 2.3690859,
  "tags": {
    "addr:housenumber": "21",
    "addr:street": "Rue Amelot",
    "amenity": "bar",
    "name": "Le Tabarin",
    "phone": "01 48 07 15 22",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://letabarin.fr/"
  }
},
{
  "type": "node",
  "id": 1200417829,
  "lat": 48.9087485,
  "lon": 2.2468363,
  "tags": {
    "amenity": "bar",
    "name": "tabac du marche"
  }
},
{
  "type": "node",
  "id": 1200418746,
  "lat": 48.9088142,
  "lon": 2.2470921,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'instinct"
  }
},
{
  "type": "node",
  "id": 1200420404,
  "lat": 48.9090028,
  "lon": 2.2473769,
  "tags": {
    "amenity": "restaurant",
    "name": "Eleve11"
  }
},
{
  "type": "node",
  "id": 1200420971,
  "lat": 48.9090920,
  "lon": 2.2474142,
  "tags": {
    "amenity": "restaurant",
    "cuisine:fr": "crêpe",
    "name": "O11ze"
  }
},
{
  "type": "node",
  "id": 1200424775,
  "lat": 48.9093191,
  "lon": 2.2474343,
  "tags": {
    "amenity": "restaurant",
    "name": "Chez Lin"
  }
},
{
  "type": "node",
  "id": 1200428890,
  "lat": 48.9088780,
  "lon": 2.2461970,
  "tags": {
    "amenity": "restaurant",
    "name": "aux petits carreaux"
  }
},
{
  "type": "node",
  "id": 1200486093,
  "lat": 48.9094660,
  "lon": 2.2417330,
  "tags": {
    "amenity": "restaurant",
    "name": "Saveurs d\'Asie"
  }
},
{
  "type": "node",
  "id": 1200490734,
  "lat": 48.9095430,
  "lon": 2.2404680,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Départ"
  }
},
{
  "type": "node",
  "id": 1202444576,
  "lat": 48.8615378,
  "lon": 2.3364753,
  "tags": {
    "amenity": "cafe",
    "name": "Richelieu",
    "website": "http://www.elior-evenements.com/"
  }
},
{
  "type": "node",
  "id": 1202446831,
  "lat": 48.8606634,
  "lon": 2.3346215,
  "tags": {
    "amenity": "cafe",
    "level": "1",
    "name": "Mollien",
    "opening_hours": "Mo,Th,Sa,Su 10:30-17:00; We,Fr 10:30-19:00; Tu off; SH We,Fr 10:30-21:00",
    "phone": "01.49.27.99.83",
    "website": "http://www.elior-evenements.com/"
  }
},
{
  "type": "node",
  "id": 1204772803,
  "lat": 48.8584322,
  "lon": 2.3229184,
  "tags": {
    "amenity": "cafe",
    "name": "Mucha Café",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 1206262837,
  "lat": 48.9017549,
  "lon": 2.3172662,
  "tags": {
    "amenity": "bar",
    "name": "Le Futur"
  }
},
{
  "type": "node",
  "id": 1206738218,
  "lat": 48.8178358,
  "lon": 2.3756647,
  "tags": {
    "amenity": "cafe",
    "shop": "tobacco",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1206744538,
  "lat": 48.8160131,
  "lon": 2.3677039,
  "tags": {
    "amenity": "cafe",
    "shop": "tobacco",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1207293080,
  "lat": 48.8452328,
  "lon": 2.2357033,
  "tags": {
    "amenity": "restaurant",
    "name": "Plein Sud",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1210666304,
  "lat": 48.9059910,
  "lon": 2.2679610,
  "tags": {
    "amenity": "bar",
    "name": "Les Bruyères"
  }
},
{
  "type": "node",
  "id": 1210676351,
  "lat": 48.9070570,
  "lon": 2.2621440,
  "tags": {
    "amenity": "restaurant",
    "name": "Les 5 Sens"
  }
},
{
  "type": "node",
  "id": 1210678676,
  "lat": 48.9075420,
  "lon": 2.2617720,
  "tags": {
    "amenity": "restaurant",
    "name": "hoki sushi"
  }
},
{
  "type": "node",
  "id": 1210679097,
  "lat": 48.9077260,
  "lon": 2.2612360,
  "tags": {
    "amenity": "cafe",
    "name": "Nissa"
  }
},
{
  "type": "node",
  "id": 1210856552,
  "lat": 48.9069820,
  "lon": 2.2614950,
  "tags": {
    "amenity": "restaurant",
    "name": "La Crêperie"
  }
},
{
  "type": "node",
  "id": 1210865032,
  "lat": 48.9064886,
  "lon": 2.2676477,
  "tags": {
    "amenity": "cafe",
    "internet_access": "yes",
    "name": "Croque Cybernet",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1210867025,
  "lat": 48.9060900,
  "lon": 2.2681920,
  "tags": {
    "amenity": "bar",
    "name": "Les Sablières"
  }
},
{
  "type": "node",
  "id": 1210869467,
  "lat": 48.9061570,
  "lon": 2.2684760,
  "tags": {
    "amenity": "bar",
    "name": "Le Balto"
  }
},
{
  "type": "node",
  "id": 1210916716,
  "lat": 48.9064586,
  "lon": 2.2816265,
  "tags": {
    "addr:housenumber": "37 bis",
    "addr:postcode": "92600",
    "addr:street": "Avenue de la Marne",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Modjo"
  }
},
{
  "type": "node",
  "id": 1210931898,
  "lat": 48.9065759,
  "lon": 2.2862694,
  "tags": {
    "amenity": "restaurant",
    "name": "speedy pizza"
  }
},
{
  "type": "node",
  "id": 1210933683,
  "lat": 48.9064340,
  "lon": 2.2864102,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 1211030649,
  "lat": 48.9093500,
  "lon": 2.2874300,
  "tags": {
    "addr:housenumber": "26",
    "addr:postcode": "92600",
    "addr:street": "Rue Bapst",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Itoya",
    "source": "survey",
    "website": "http://www.restaurant-sushiitoya.com"
  }
},
{
  "type": "node",
  "id": 1211037797,
  "lat": 48.8958790,
  "lon": 2.2562610,
  "tags": {
    "amenity": "restaurant",
    "name": "iki"
  }
},
{
  "type": "node",
  "id": 1211038054,
  "lat": 48.8959300,
  "lon": 2.2562720,
  "tags": {
    "addr:housenumber": "17 ",
    "addr:postcode": "92400",
    "addr:street": "Rue de l\'Hôtel de Ville",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "L\'Eden d\'Armor"
  }
},
{
  "type": "node",
  "id": 1211041974,
  "lat": 48.9002710,
  "lon": 2.2598040,
  "tags": {
    "amenity": "restaurant",
    "name": "La Scène"
  }
},
{
  "type": "node",
  "id": 1211044605,
  "lat": 48.9026980,
  "lon": 2.2657300,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 1211052207,
  "lat": 48.9020270,
  "lon": 2.2684110,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 1211058688,
  "lat": 48.8954145,
  "lon": 2.2500209,
  "tags": {
    "addr:housenumber": "22",
    "addr:postcode": "92400",
    "addr:street": "Rue de Bezons",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Le Madrissio",
    "source:amenity": "survey",
    "telephone": "+33 (0)1 47882084",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 1211062820,
  "lat": 48.8970484,
  "lon": 2.2566305,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1211862797,
  "lat": 48.8446839,
  "lon": 2.2345561,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Clocher du Village",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1214708068,
  "lat": 48.8859856,
  "lon": 2.3190545,
  "tags": {
    "addr:housenumber": "57",
    "addr:postcode": "75017",
    "addr:street": "Rue des Batignolles",
    "amenity": "restaurant",
    "cuisine": "burger",
    "name": "Club des 5"
  }
},
{
  "type": "node",
  "id": 1215230554,
  "lat": 48.9007860,
  "lon": 2.2702160,
  "tags": {
    "amenity": "restaurant",
    "name": "Les Trois Marmites"
  }
},
{
  "type": "node",
  "id": 1215234431,
  "lat": 48.8980255,
  "lon": 2.2635604,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Figuier",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1215236269,
  "lat": 48.8960400,
  "lon": 2.2567550,
  "tags": {
    "amenity": "restaurant",
    "name": "Niagara café"
  }
},
{
  "type": "node",
  "id": 1215380047,
  "lat": 48.8353460,
  "lon": 2.2854410,
  "tags": {
    "addr:city": "paris",
    "addr:housenumber": "75",
    "addr:postcode": "75015",
    "addr:street": "Rue Vasco de Gama",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Yanase",
    "opening_hours": "Tu-Sa 12:00-14:30,19:30-22:30, Mo,Su off",
    "phone": "01.42.50.07.20",
    "website": "http://www.yanase.fr/"
  }
},
{
  "type": "node",
  "id": 1215494562,
  "lat": 48.8247155,
  "lon": 2.3622282,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Jardin d\'Asie",
    "note": "buffet à volonté",
    "type": "buffet"
  }
},
{
  "type": "node",
  "id": 1215502245,
  "lat": 48.8245453,
  "lon": 2.3629329,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Hawaii",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 1215516789,
  "lat": 48.8250539,
  "lon": 2.3658028,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1215516792,
  "lat": 48.8245418,
  "lon": 2.3643383,
  "tags": {
    "amenity": "cafe",
    "layer": "2"
  }
},
{
  "type": "node",
  "id": 1215516797,
  "lat": 48.8217881,
  "lon": 2.3649842,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Chine Massena"
  }
},
{
  "type": "node",
  "id": 1215521327,
  "lat": 48.8365061,
  "lon": 2.3589584,
  "tags": {
    "amenity": "cafe",
    "name": "Le Chiquito"
  }
},
{
  "type": "node",
  "id": 1215523659,
  "lat": 48.8462262,
  "lon": 2.3142889,
  "tags": {
    "addr:housenumber": "33",
    "addr:street": "Rue du Général Bertrand",
    "amenity": "restaurant",
    "name": "Le Sèvres",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1215524265,
  "lat": 48.8299382,
  "lon": 2.3626544,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chineses (Teochew) -  中国潮州",
    "name": "La Mer bleue - 北海"
  }
},
{
  "type": "node",
  "id": 1215879023,
  "lat": 48.8445104,
  "lon": 2.2342857,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'Intermittent",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1215879152,
  "lat": 48.8445718,
  "lon": 2.2345541,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "couscous",
    "name": "Les Oliviers du Sud",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1217472009,
  "lat": 48.8390907,
  "lon": 2.2359895,
  "tags": {
    "amenity": "cafe",
    "name": "Café du Parc",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1217472086,
  "lat": 48.8392494,
  "lon": 2.2360954,
  "tags": {
    "amenity": "restaurant",
    "name": "20 et Basilic",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1217472091,
  "lat": 48.8373142,
  "lon": 2.2363557,
  "tags": {
    "amenity": "restaurant",
    "name": "La Grillarderie",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1218355021,
  "lat": 48.8567106,
  "lon": 2.3947298,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Colibri"
  }
},
{
  "type": "node",
  "id": 1221140492,
  "lat": 48.8993180,
  "lon": 2.2667850,
  "tags": {
    "amenity": "restaurant",
    "name": "Chez José"
  }
},
{
  "type": "node",
  "id": 1223611309,
  "lat": 48.8710024,
  "lon": 2.3294337,
  "tags": {
    "amenity": "restaurant",
    "name": "Bertie"
  }
},
{
  "type": "node",
  "id": 1223768234,
  "lat": 48.8577097,
  "lon": 2.3005438,
  "tags": {
    "amenity": "restaurant",
    "name": "Restaurant Doïna",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1223768263,
  "lat": 48.8576592,
  "lon": 2.3004661,
  "tags": {
    "amenity": "cafe",
    "name": "Café Le Dôme",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1223805591,
  "lat": 48.8515887,
  "lon": 2.3004692,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "73",
    "addr:postcode": "75007",
    "addr:street": "Avenue de Suffren",
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Carmine",
    "phone": "+33 147349056",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1224640815,
  "lat": 48.8717034,
  "lon": 2.3766791,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "description": "Resto asiatique bon rapport qualité/prix",
    "name": "Da Lat"
  }
},
{
  "type": "node",
  "id": 1224673311,
  "lat": 48.8568923,
  "lon": 2.2921973,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "5",
    "addr:postcode": "75007",
    "addr:street": "Avenue de Suffren",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Castel Cafe",
    "phone": "0147341698",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1224788504,
  "lat": 48.8540230,
  "lon": 2.3997826,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1224788512,
  "lat": 48.8519846,
  "lon": 2.4014456,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1224788527,
  "lat": 48.8538606,
  "lon": 2.4025990,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1224788533,
  "lat": 48.8554207,
  "lon": 2.4011828,
  "tags": {
    "amenity": "pub",
    "name": "Le Moderne"
  }
},
{
  "type": "node",
  "id": 1224788566,
  "lat": 48.8529453,
  "lon": 2.4006573,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1224788588,
  "lat": 48.8516581,
  "lon": 2.3996110,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 1224788607,
  "lat": 48.8513810,
  "lon": 2.3980258,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1224795724,
  "lat": 48.8512398,
  "lon": 2.3832978,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french"
  }
},
{
  "type": "node",
  "id": 1224795726,
  "lat": 48.8508003,
  "lon": 2.3840730,
  "tags": {
    "amenity": "bar",
    "name": "Le Beyer Claude"
  }
},
{
  "type": "node",
  "id": 1224795728,
  "lat": 48.8505216,
  "lon": 2.3862840,
  "tags": {
    "amenity": "pub",
    "brewery": "guinness",
    "name": "Patrick’s Ballon Vert",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 1224795730,
  "lat": 48.8503732,
  "lon": 2.3908375,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 1224795732,
  "lat": 48.8502779,
  "lon": 2.3906229,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza"
  }
},
{
  "type": "node",
  "id": 1224795735,
  "lat": 48.8503887,
  "lon": 2.3930028,
  "tags": {
    "amenity": "cafe",
    "name": "Le Café Bonal",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 1224795736,
  "lat": 48.8502002,
  "lon": 2.3918245,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "korean",
    "name": "Kim et Kim",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 1224795739,
  "lat": 48.8507491,
  "lon": 2.3956735,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "Océan indien"
  }
},
{
  "type": "node",
  "id": 1225461874,
  "lat": 48.8670533,
  "lon": 2.3622765,
  "tags": {
    "amenity": "bar",
    "name": "Tabac du Temple",
    "shop": "kiosk"
  }
},
{
  "type": "node",
  "id": 1225597421,
  "lat": 48.8657517,
  "lon": 2.3712388,
  "tags": {
    "addr:housenumber": "32",
    "addr:street": "Avenue de la République",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "La Cantine République",
    "opening_hours": "Mo-Su 10:00-23:00",
    "phone": "09 53 33 56 06",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1225597461,
  "lat": 48.8650795,
  "lon": 2.3671616,
  "tags": {
    "addr:housenumber": "9",
    "addr:street": "Rue Jean-Pierre Timbaud",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Bozart",
    "phone": "01 43 57 69 83",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1225597596,
  "lat": 48.8655880,
  "lon": 2.3691209,
  "tags": {
    "addr:housenumber": "29",
    "addr:street": "Rue Jean-Pierre Timbaud",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "La Tête dans la Cuisine",
    "opening_hours": "Mo-Fr 9:00-19:00",
    "phone": "01 43 55 04 20",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1229535476,
  "lat": 48.8944130,
  "lon": 2.3404956,
  "tags": {
    "addr:housenumber": "65",
    "addr:postcode": "75018",
    "addr:street": "Rue du Ruisseau",
    "amenity": "restaurant",
    "cuisine": "spanish",
    "name": "Peña del Medio"
  }
},
{
  "type": "node",
  "id": 1231110978,
  "lat": 48.9061652,
  "lon": 2.2688958,
  "tags": {
    "addr:housenumber": "1",
    "addr:street": "Rue Madiraa",
    "amenity": "bar",
    "name": "Le Rallye",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1232263920,
  "lat": 48.8470710,
  "lon": 2.2396846,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "couscous",
    "name": "Restaurant des Délices",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1232263955,
  "lat": 48.8467946,
  "lon": 2.2389745,
  "tags": {
    "addr:city": "Boulogne-Billancourt",
    "addr:housenumber": "32",
    "addr:postcode": "92100",
    "addr:street": "Avenue Jean-Baptiste Clément",
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Inconito",
    "opening_hours": "Mo-Su 12:00-15:00,19:30-22:00; Fr-Sa 12:00-15:00,19:30-22:30",
    "phone": "01.46.03.01.29",
    "source": "survey",
    "website": "http://www.inconito-restaurant.fr/"
  }
},
{
  "type": "node",
  "id": 1232995904,
  "lat": 48.8752166,
  "lon": 2.3329602,
  "tags": {
    "addr:housenumber": "73",
    "addr:street": "Rue de la Victoire",
    "amenity": "restaurant",
    "cuisine": "vietnamese",
    "name": "mybobun",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1233032860,
  "lat": 48.8508393,
  "lon": 2.4402249,
  "tags": {
    "addr:housenumber": "41",
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Le nouveau Hong Kong"
  }
},
{
  "type": "node",
  "id": 1233034943,
  "lat": 48.8508331,
  "lon": 2.4404033,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Renine"
  }
},
{
  "type": "node",
  "id": 1233484757,
  "lat": 48.8464739,
  "lon": 2.2386129,
  "tags": {
    "amenity": "restaurant",
    "name": "Au Vrai Muscadet",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1233484765,
  "lat": 48.8464323,
  "lon": 2.2388072,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Hokkaido",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1233985913,
  "lat": 48.8759120,
  "lon": 2.3269790,
  "tags": {
    "amenity": "restaurant",
    "name": "La Ville d\'Argentan",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1234196514,
  "lat": 48.8830873,
  "lon": 2.3292402,
  "tags": {
    "addr:housenumber": "24",
    "addr:street": "Rue de Bruxelles",
    "amenity": "restaurant",
    "cuisine": "italian",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1234207118,
  "lat": 48.8810990,
  "lon": 2.3316104,
  "tags": {
    "addr:housenumber": "66",
    "addr:street": "Rue Blanche",
    "amenity": "cafe",
    "name": "Le BlaBla",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1235153111,
  "lat": 48.8717823,
  "lon": 2.3424721,
  "tags": {
    "amenity": "pub",
    "name": "Café Oz"
  }
},
{
  "type": "node",
  "id": 1235842549,
  "lat": 48.8785075,
  "lon": 2.2845239,
  "tags": {
    "amenity": "restaurant",
    "name": "Charly",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1235842550,
  "lat": 48.8786662,
  "lon": 2.2845930,
  "tags": {
    "amenity": "restaurant",
    "name": "Léon de Bruxelles",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1236456962,
  "lat": 48.8809300,
  "lon": 2.3404709,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'Auberge du Clou",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1236682811,
  "lat": 48.8818258,
  "lon": 2.3395224,
  "tags": {
    "amenity": "restaurant",
    "name": "Au Rendez-vous des Artistes",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1236950003,
  "lat": 48.8935790,
  "lon": 2.2765660,
  "tags": {
    "amenity": "cafe",
    "food": "yes",
    "name": "Le Rallye de Villiers",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1237100378,
  "lat": 48.8146713,
  "lon": 2.4518677,
  "tags": {
    "amenity": "restaurant",
    "name": "Les Salons de la Tourelle"
  }
},
{
  "type": "node",
  "id": 1240425293,
  "lat": 48.8368019,
  "lon": 2.2791434,
  "tags": {
    "amenity": "bar",
    "name": "Bistrot Balard"
  }
},
{
  "type": "node",
  "id": 1240426071,
  "lat": 48.8369546,
  "lon": 2.2791133,
  "tags": {
    "amenity": "bar",
    "name": "Le Balard"
  }
},
{
  "type": "node",
  "id": 1240426837,
  "lat": 48.8651635,
  "lon": 2.3419355,
  "tags": {
    "amenity": "bar",
    "name": "Le Rouergue"
  }
},
{
  "type": "node",
  "id": 1242439119,
  "lat": 48.8765185,
  "lon": 2.3448908,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "35",
    "addr:street": "Rue Montholon",
    "amenity": "restaurant",
    "cuisine": "latino",
    "name": "Mi Ranchito Paisa",
    "phone": "01 48 78 45 94",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1242530870,
  "lat": 48.8718967,
  "lon": 2.3415625,
  "tags": {
    "addr:housenumber": "14",
    "addr:street": "Boulevard Montmartre",
    "amenity": "restaurant",
    "name": "Hard Rock Café",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1242991243,
  "lat": 48.8853691,
  "lon": 2.3353615,
  "tags": {
    "addr:housenumber": "8",
    "addr:postcode": "75018",
    "addr:street": "Rue Aristide Bruant",
    "amenity": "restaurant",
    "cuisine": "moroccan",
    "name": "Le Taroudant"
  }
},
{
  "type": "node",
  "id": 1242991244,
  "lat": 48.8857113,
  "lon": 2.3355174,
  "tags": {
    "addr:housenumber": "52",
    "addr:postcode": "75018",
    "addr:street": "Rue des Abbesses",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "La Mascotte Montmartre",
    "website": "www.la-mascotte-montmartre.com"
  }
},
{
  "type": "node",
  "id": 1242991247,
  "lat": 48.8855561,
  "lon": 2.3353079,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "La Villa des Abbesses"
  }
},
{
  "type": "node",
  "id": 1242991249,
  "lat": 48.8855279,
  "lon": 2.3354474,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Café Bruant"
  }
},
{
  "type": "node",
  "id": 1243135669,
  "lat": 48.8438778,
  "lon": 2.3820130,
  "tags": {
    "amenity": "cafe",
    "name": "Le Remontalou"
  }
},
{
  "type": "node",
  "id": 1243135809,
  "lat": 48.8399742,
  "lon": 2.3934259,
  "tags": {
    "amenity": "restaurant",
    "name": "O\'you"
  }
},
{
  "type": "node",
  "id": 1243135873,
  "lat": 48.8407749,
  "lon": 2.3897142,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1243135895,
  "lat": 48.8366296,
  "lon": 2.4029905,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese"
  }
},
{
  "type": "node",
  "id": 1243135990,
  "lat": 48.8385089,
  "lon": 2.3991495,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 1243136021,
  "lat": 48.8426310,
  "lon": 2.3854954,
  "tags": {
    "amenity": "restaurant",
    "name": "Hippopotamus"
  }
},
{
  "type": "node",
  "id": 1243136089,
  "lat": 48.8347163,
  "lon": 2.4076218,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 1243136104,
  "lat": 48.8389784,
  "lon": 2.3959056,
  "tags": {
    "amenity": "cafe",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 1243322704,
  "lat": 48.8813769,
  "lon": 2.3721944,
  "tags": {
    "amenity": "bar",
    "name": "La bicylette"
  }
},
{
  "type": "node",
  "id": 1244411689,
  "lat": 48.8475270,
  "lon": 2.3021767,
  "tags": {
    "amenity": "cafe",
    "name": "Le Michelet"
  }
},
{
  "type": "node",
  "id": 1244411690,
  "lat": 48.8476742,
  "lon": 2.3009702,
  "tags": {
    "amenity": "cafe",
    "name": "Le Royal Cambronne"
  }
},
{
  "type": "node",
  "id": 1244411703,
  "lat": 48.8479740,
  "lon": 2.3007339,
  "tags": {
    "amenity": "restaurant",
    "name": "El Fares"
  }
},
{
  "type": "node",
  "id": 1244411708,
  "lat": 48.8468451,
  "lon": 2.3046139,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Fontanarosa",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1244411728,
  "lat": 48.8475414,
  "lon": 2.3012068,
  "tags": {
    "amenity": "restaurant",
    "name": "La Place"
  }
},
{
  "type": "node",
  "id": 1244411731,
  "lat": 48.8468990,
  "lon": 2.3044201,
  "tags": {
    "amenity": "bar",
    "name": "Les Coteaux",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1244411732,
  "lat": 48.8467540,
  "lon": 2.3049111,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "lebanese",
    "name": "Chez Rami",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1249809131,
  "lat": 48.8473611,
  "lon": 2.3081232,
  "tags": {
    "amenity": "cafe",
    "name": "Le Bistrot",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1249809141,
  "lat": 48.8470152,
  "lon": 2.3071391,
  "tags": {
    "amenity": "cafe",
    "name": "Le Ségur",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1252328175,
  "lat": 48.8416069,
  "lon": 2.2399970,
  "tags": {
    "amenity": "restaurant",
    "name": "Les 3 Gamins",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1252378956,
  "lat": 48.8390532,
  "lon": 2.3961644,
  "tags": {
    "amenity": "cafe",
    "name": "Au Métro"
  }
},
{
  "type": "node",
  "id": 1252378972,
  "lat": 48.9040569,
  "lon": 2.2992041,
  "tags": {
    "amenity": "cafe",
    "name": "Barroso"
  }
},
{
  "type": "node",
  "id": 1252379545,
  "lat": 48.8390560,
  "lon": 2.3924535,
  "tags": {
    "amenity": "restaurant",
    "name": "La Tour d\'Agadir",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1252380266,
  "lat": 48.8990511,
  "lon": 2.2962367,
  "tags": {
    "amenity": "cafe",
    "name": "Le Café de la Gare",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1252380570,
  "lat": 48.8378894,
  "lon": 2.3906889,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1252381095,
  "lat": 48.8984225,
  "lon": 2.2940571,
  "tags": {
    "amenity": "bar",
    "name": "Le Victor Hugo",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1252381570,
  "lat": 48.8385292,
  "lon": 2.3895336,
  "tags": {
    "amenity": "bar",
    "name": "Le Dugommier",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1252382310,
  "lat": 48.8397585,
  "lon": 2.3884230,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Touareg",
    "phone": "01.43.07.68.49"
  }
},
{
  "type": "node",
  "id": 1252382638,
  "lat": 48.8390438,
  "lon": 2.3923714,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "phone": "01.46.28.89.89",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1252383486,
  "lat": 48.9019857,
  "lon": 2.2956599,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Bella Justino",
    "phone": "01.47.31.77.70",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1252487298,
  "lat": 48.8654085,
  "lon": 2.3767039,
  "tags": {
    "amenity": "bar",
    "internet_access": "wlan",
    "internet_access:fee": "no",
    "name": "Bar Les Pirates",
    "opening_hours": "Mo-Su 12:00-02:00",
    "phone": "01 43 38 37 53",
    "smoking": "no",
    "website": "http://www.barlespirates.com",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 1255346273,
  "lat": 48.8457612,
  "lon": 2.2382910,
  "tags": {
    "amenity": "cafe",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1255346311,
  "lat": 48.8391920,
  "lon": 2.2439876,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'Essentiel Café",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1258709487,
  "lat": 48.8627451,
  "lon": 2.3395900,
  "tags": {
    "addr:housenumber": "10",
    "addr:postcode": "75001",
    "addr:street": "Rue Croix des Petits Champs",
    "amenity": "cafe",
    "name": "Café Blanc"
  }
},
{
  "type": "node",
  "id": 1260668940,
  "lat": 48.8482418,
  "lon": 2.3105178,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Sushi Eiffel",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1262015777,
  "lat": 48.8512285,
  "lon": 2.3098214,
  "tags": {
    "amenity": "cafe",
    "name": "Petit Ségur",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1262015834,
  "lat": 48.8505805,
  "lon": 2.3092017,
  "tags": {
    "alt_name": "Bruno Deligne",
    "amenity": "restaurant",
    "name": "Les Olivades",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1263347463,
  "lat": 48.8517546,
  "lon": 2.3104073,
  "tags": {
    "amenity": "restaurant",
    "name": "Vin Sobre",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1264662419,
  "lat": 48.8773925,
  "lon": 2.3384012,
  "tags": {
    "amenity": "pub",
    "name": "Le Bergerac"
  }
},
{
  "type": "node",
  "id": 1264875560,
  "lat": 48.8514424,
  "lon": 2.3108980,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Bistrot de Maëlle et Augustin",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1264875580,
  "lat": 48.8517685,
  "lon": 2.3133289,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Tonnelier de Breteuil",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1264875584,
  "lat": 48.8512872,
  "lon": 2.3111153,
  "tags": {
    "amenity": "cafe",
    "name": "Paris Duquesne",
    "shop": "tobacco",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1264875612,
  "lat": 48.8498367,
  "lon": 2.3124580,
  "tags": {
    "amenity": "restaurant",
    "name": "Lily Wang",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1264875628,
  "lat": 48.8517506,
  "lon": 2.3131416,
  "tags": {
    "amenity": "restaurant",
    "name": "Ly Lan",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1265023391,
  "lat": 48.8503624,
  "lon": 2.3488792,
  "tags": {
    "amenity": "pub",
    "name": "The Long Hop"
  }
},
{
  "type": "node",
  "id": 1265029228,
  "lat": 48.8503408,
  "lon": 2.3483420,
  "tags": {
    "amenity": "cafe",
    "name": "Le metro",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1266571559,
  "lat": 48.9045601,
  "lon": 2.4392757,
  "tags": {
    "addr:housenumber": "97",
    "addr:postcode": "93000",
    "addr:street": "Avenue Jean Jaurès",
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Délices Wok"
  }
},
{
  "type": "node",
  "id": 1266623669,
  "lat": 48.9058286,
  "lon": 2.4485091,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1270592256,
  "lat": 48.8470660,
  "lon": 2.3954688,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "L\'Églantine"
  }
},
{
  "type": "node",
  "id": 1271048322,
  "lat": 48.8446026,
  "lon": 2.3117965,
  "tags": {
    "addr:housenumber": "11",
    "addr:street": "Boulevard Pasteur",
    "amenity": "restaurant",
    "name": "Le Menhir"
  }
},
{
  "type": "node",
  "id": 1271063492,
  "lat": 48.8923694,
  "lon": 2.2714783,
  "tags": {
    "amenity": "restaurant",
    "name": "Lily de Neuilly",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1271063500,
  "lat": 48.8938245,
  "lon": 2.2700219,
  "tags": {
    "amenity": "cafe",
    "name": "Le Relais de la Jatte",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1271193306,
  "lat": 48.8792448,
  "lon": 2.4147210,
  "tags": {
    "amenity": "cafe",
    "name": "Le Café Lilas"
  }
},
{
  "type": "node",
  "id": 1272037727,
  "lat": 48.8828690,
  "lon": 2.3183304,
  "tags": {
    "amenity": "restaurant",
    "name": "Creperie"
  }
},
{
  "type": "node",
  "id": 1272037729,
  "lat": 48.8823081,
  "lon": 2.3158735,
  "tags": {
    "amenity": "restaurant",
    "name": "Un air de famille"
  }
},
{
  "type": "node",
  "id": 1272037730,
  "lat": 48.8825903,
  "lon": 2.3165065,
  "tags": {
    "amenity": "restaurant",
    "name": "I BO-BUN"
  }
},
{
  "type": "node",
  "id": 1272037732,
  "lat": 48.8829889,
  "lon": 2.3183223,
  "tags": {
    "amenity": "restaurant",
    "name": "Nagoya Sushi"
  }
},
{
  "type": "node",
  "id": 1272037737,
  "lat": 48.8829466,
  "lon": 2.3176571,
  "tags": {
    "amenity": "restaurant",
    "name": "Mems"
  }
},
{
  "type": "node",
  "id": 1272453341,
  "lat": 48.8710357,
  "lon": 2.3522560,
  "tags": {
    "addr:housenumber": "22",
    "addr:street": "Rue de Mazagran",
    "amenity": "bar",
    "name": "Le Xème",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1272453876,
  "lat": 48.8714920,
  "lon": 2.3541352,
  "tags": {
    "addr:housenumber": "91",
    "addr:street": "Passage Brady",
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Pooja",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://www.poojarestaurant.com",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 1272453911,
  "lat": 48.8716725,
  "lon": 2.3535841,
  "tags": {
    "addr:housenumber": "47",
    "addr:street": "Rue du Faubourg Saint-Denis",
    "amenity": "cafe",
    "cuisine": "french",
    "name": "Chez Jeanette",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1272477681,
  "lat": 48.8710551,
  "lon": 2.3579616,
  "tags": {
    "addr:housenumber": "27",
    "addr:street": "Rue Bouchardon",
    "amenity": "bar",
    "name": "L\'Horloge occitane",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1272931918,
  "lat": 48.8796268,
  "lon": 2.4148076,
  "tags": {
    "amenity": "restaurant",
    "name": "Barolo"
  }
},
{
  "type": "node",
  "id": 1272931923,
  "lat": 48.8774236,
  "lon": 2.4101645,
  "tags": {
    "amenity": "restaurant",
    "name": "Hippopotamus"
  }
},
{
  "type": "node",
  "id": 1272931932,
  "lat": 48.8805352,
  "lon": 2.4178356,
  "tags": {
    "amenity": "restaurant",
    "name": "Restaurant Le Royal des Lilas"
  }
},
{
  "type": "node",
  "id": 1272963735,
  "lat": 48.8435777,
  "lon": 2.2388089,
  "tags": {
    "amenity": "restaurant",
    "name": "La Maison du Beaujolais",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1273736829,
  "lat": 48.8445056,
  "lon": 2.3203943,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "5",
    "addr:postcode": "75015",
    "addr:street": "Avenue du Maine",
    "amenity": "restaurant",
    "cuisine": "lebanese",
    "internet_access": "no",
    "name": "Les Cèdres Du Liban",
    "outdoor_seating": "yes",
    "smoking": "outside",
    "takeaway": "no"
  }
},
{
  "type": "node",
  "id": 1274091269,
  "lat": 48.8446279,
  "lon": 2.3203361,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "3",
    "addr:postcode": "75015",
    "addr:street": "Avenue du Maine",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Au Comptoir Nippon",
    "website": "http://www.comptoirnippon.com"
  }
},
{
  "type": "node",
  "id": 1274822018,
  "lat": 48.8775262,
  "lon": 2.2949459,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "19",
    "addr:postcode": "75017",
    "addr:street": "Rue de l\'Étoile",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "La Fabbrica"
  }
},
{
  "type": "node",
  "id": 1275834537,
  "lat": 48.8973913,
  "lon": 2.3849076,
  "tags": {
    "amenity": "cafe",
    "cuisine": "japanese",
    "name": "Moshimoshi"
  }
},
{
  "type": "node",
  "id": 1277049069,
  "lat": 48.8458069,
  "lon": 2.3492233,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Au doux raisin"
  }
},
{
  "type": "node",
  "id": 1277051667,
  "lat": 48.8481138,
  "lon": 2.3765844,
  "tags": {
    "amenity": "cafe",
    "brewery": "1664;Grimbergen",
    "cuisine": "french",
    "happy_hours": "Mo-Sa 17:00-20:00",
    "name": "Les Temps Modernes",
    "opening_hours": "Mo-Sa 09:30-00:30"
  }
},
{
  "type": "node",
  "id": 1278107369,
  "lat": 48.8408822,
  "lon": 2.2372416,
  "tags": {
    "alt_name": "Chez Arezki",
    "amenity": "restaurant",
    "cuisine": "couscous",
    "name": "Le Viking",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1278107382,
  "lat": 48.8426436,
  "lon": 2.2368222,
  "tags": {
    "amenity": "restaurant",
    "name": "Pancracio Rapido",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1278464712,
  "lat": 48.8793095,
  "lon": 2.3546327,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "8",
    "addr:postcode": "75010",
    "addr:street": "Boulevard de Denain",
    "amenity": "pub",
    "atm": "no",
    "food": "yes",
    "internet_access": "no",
    "name": "Hide out Station",
    "outdoor_seating": "yes",
    "smoking": "outside",
    "takeaway": "no",
    "wifi": "no"
  }
},
{
  "type": "node",
  "id": 1278464815,
  "lat": 48.8791462,
  "lon": 2.3541109,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "3",
    "addr:postcode": "75010",
    "addr:street": "Boulevard de Denain",
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "china express Nord",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1278464877,
  "lat": 48.8796589,
  "lon": 2.3543864,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "9",
    "addr:postcode": "75010",
    "addr:street": "Boulevard de Denain",
    "amenity": "restaurant",
    "cuisine": "steak_house",
    "name": "Buffalo Grill",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1279440211,
  "lat": 48.8754540,
  "lon": 2.2867414,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Duret Mandarin"
  }
},
{
  "type": "node",
  "id": 1279440218,
  "lat": 48.8756436,
  "lon": 2.2866256,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Sushi"
  }
},
{
  "type": "node",
  "id": 1280192052,
  "lat": 48.8441035,
  "lon": 2.2365093,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "A Tavola",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1280192059,
  "lat": 48.8432899,
  "lon": 2.2365333,
  "tags": {
    "amenity": "restaurant",
    "name": "Violette et François",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1280199178,
  "lat": 48.8840623,
  "lon": 2.2576677,
  "tags": {
    "amenity": "cafe",
    "name": "Le Chistera",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1280606563,
  "lat": 48.8774219,
  "lon": 2.3704960,
  "tags": {
    "amenity": "cafe",
    "name": "Chez Fabien",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1281434407,
  "lat": 48.8753955,
  "lon": 2.2841014,
  "tags": {
    "amenity": "cafe",
    "name": "Café Les Muses"
  }
},
{
  "type": "node",
  "id": 1282084765,
  "lat": 48.8864564,
  "lon": 2.2609846,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'Adresse",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1282084766,
  "lat": 48.8872656,
  "lon": 2.2570934,
  "tags": {
    "amenity": "restaurant",
    "name": "Bistrot Quai",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1282084781,
  "lat": 48.8863726,
  "lon": 2.2592890,
  "tags": {
    "amenity": "cafe",
    "name": "Le Mistral",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1282084790,
  "lat": 48.8869743,
  "lon": 2.2581503,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Pizzeria Marinella",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1282116612,
  "lat": 48.8734790,
  "lon": 2.3750462,
  "tags": {
    "addr:housenumber": "25",
    "addr:street": "Boulevard de la Villette",
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Asian Soupe",
    "phone": "+33951427164",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1282166604,
  "lat": 48.8732283,
  "lon": 2.3745203,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "China Town Belleville",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre ; mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 1282625922,
  "lat": 48.8957042,
  "lon": 2.2623251,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "barbecue",
    "name": "Courtepaille"
  }
},
{
  "type": "node",
  "id": 1283013225,
  "lat": 48.8605552,
  "lon": 2.3544304,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "3",
    "addr:street": "Rue Geoffroy l\'Angevin",
    "amenity": "restaurant",
    "cuisine": "french,fondue",
    "name": "Pain Vin Fromages",
    "opening_hours": "Mo-Su 19:00-23:30",
    "phone": "01 42 74 07 52",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.painvinfromage.com/fr/"
  }
},
{
  "type": "node",
  "id": 1283404016,
  "lat": 48.8870020,
  "lon": 2.2598498,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Le Palais d\'Or",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1283404038,
  "lat": 48.8868037,
  "lon": 2.2601778,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Chambord",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1286567683,
  "lat": 48.8503634,
  "lon": 2.3868517,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "38",
    "addr:postcode": "75011",
    "addr:street": "Rue de Montreuil",
    "amenity": "restaurant",
    "cuisine": "korean",
    "name": "Midam 미담",
    "name:fr": "Midam",
    "name:ko": "미담",
    "phone": "+33 (0) 1 43 70 83 46"
  }
},
{
  "type": "node",
  "id": 1287933938,
  "lat": 48.8436549,
  "lon": 2.3146779,
  "tags": {
    "amenity": "cafe",
    "name": "Le Quesniau"
  }
},
{
  "type": "node",
  "id": 1287933955,
  "lat": 48.8438107,
  "lon": 2.3152002,
  "tags": {
    "amenity": "restaurant",
    "contact:phone": "01.47.83.45.45",
    "cuisine": "indian",
    "name": "Joyti"
  }
},
{
  "type": "node",
  "id": 1287933961,
  "lat": 48.8437516,
  "lon": 2.3150319,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "148 bis",
    "addr:street": "Rue de Vaugirard",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Da Maurizio"
  }
},
{
  "type": "node",
  "id": 1288240776,
  "lat": 48.8726908,
  "lon": 2.3752657,
  "tags": {
    "addr:housenumber": "11",
    "addr:street": "Rue Civiale",
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Ravioli Chinois Nord-Est",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1288280547,
  "lat": 48.8850834,
  "lon": 2.2583653,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Nomiya",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1288280548,
  "lat": 48.8871067,
  "lon": 2.2602368,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "kosher;pizza;sushi",
    "name": "OZ",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1290869697,
  "lat": 48.8655296,
  "lon": 2.3772848,
  "tags": {
    "amenity": "cafe",
    "name": "Le Dauville",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1290926414,
  "lat": 48.8674203,
  "lon": 2.3758861,
  "tags": {
    "addr:housenumber": "120",
    "addr:street": "Rue Saint-Maur",
    "amenity": "restaurant",
    "cuisine": "thai",
    "name": "Luangpra",
    "phone": "01 43 38 86 20",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1290926484,
  "lat": 48.8682312,
  "lon": 2.3751770,
  "tags": {
    "addr:housenumber": "134",
    "addr:street": "Rue Saint-Maur",
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Balaji",
    "phone": "01 47 00 59 58",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://balaji.fr/"
  }
},
{
  "type": "node",
  "id": 1290926892,
  "lat": 48.8655345,
  "lon": 2.3775152,
  "tags": {
    "addr:housenumber": "96",
    "addr:street": "Rue Saint-Maur",
    "amenity": "restaurant",
    "cuisine": "Cambodgien",
    "name": "L\'Alicheur",
    "opening_hours": "Mo-Fr 12:00-15:30,19:30-23:30",
    "phone": "01 43 38 61 38",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1291050598,
  "lat": 48.8890725,
  "lon": 2.3179865,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Bloc"
  }
},
{
  "type": "node",
  "id": 1291119292,
  "lat": 48.8684286,
  "lon": 2.3706080,
  "tags": {
    "addr:housenumber": "23",
    "addr:street": "Rue de la Fontaine au Roi",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "La Trottinette",
    "phone": "01 43 57 13 32",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1291119341,
  "lat": 48.8693522,
  "lon": 2.3713516,
  "tags": {
    "addr:housenumber": "129",
    "addr:street": "Avenue Parmentier",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Chateaubriand",
    "opening_hours": "Tu-Fr 12:00-14:00;Tu-Sa 20:00-23:30",
    "phone": "01 43 57 45 95",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://www.lechateaubriand.net/"
  }
},
{
  "type": "node",
  "id": 1291119594,
  "lat": 48.8692142,
  "lon": 2.3714534,
  "tags": {
    "addr:housenumber": "127",
    "addr:street": "Avenue Parmentier",
    "amenity": "restaurant",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1291119910,
  "lat": 48.8694819,
  "lon": 2.3712557,
  "tags": {
    "addr:housenumber": "131",
    "addr:street": "Avenue Parmentier",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Dauphin",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1291119975,
  "lat": 48.8673820,
  "lon": 2.3728092,
  "tags": {
    "addr:housenumber": "107",
    "addr:street": "Avenue Parmentier",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Les Fondus de la Raclette",
    "phone": "01 40 21 61 68",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://www.aux-fondus.com/site/index.php"
  }
},
{
  "type": "node",
  "id": 1291120195,
  "lat": 48.8673041,
  "lon": 2.3731992,
  "tags": {
    "addr:housenumber": "112",
    "addr:street": "Avenue Parmentier",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Foukuda Tokyo",
    "phone": "01 43 57 85 45",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1291120262,
  "lat": 48.8690400,
  "lon": 2.3726204,
  "tags": {
    "addr:housenumber": "2",
    "addr:street": "Rue des Goncourt",
    "amenity": "bar",
    "name": "On Cherche Encore",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1291172673,
  "lat": 48.8448779,
  "lon": 2.3106086,
  "tags": {
    "amenity": "cafe",
    "name": "O\' Café"
  }
},
{
  "type": "node",
  "id": 1291532230,
  "lat": 48.8848556,
  "lon": 2.2584062,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Shin Juku",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1291532243,
  "lat": 48.8841711,
  "lon": 2.2577872,
  "tags": {
    "amenity": "restaurant",
    "name": "Piccolo Mondo",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1291532250,
  "lat": 48.8846802,
  "lon": 2.2583877,
  "tags": {
    "amenity": "bar",
    "name": "Polly Maggoo",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1291532272,
  "lat": 48.8845984,
  "lon": 2.2581072,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Livio",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1291532292,
  "lat": 48.8843235,
  "lon": 2.2577845,
  "tags": {
    "amenity": "restaurant",
    "name": "Le P\'tit Rouge",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1291532323,
  "lat": 48.8849492,
  "lon": 2.2588142,
  "tags": {
    "amenity": "restaurant",
    "name": "Zinc Zinc",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1291954431,
  "lat": 48.8333957,
  "lon": 2.3653856,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Mandarin Dunois"
  }
},
{
  "type": "node",
  "id": 1291954808,
  "lat": 48.8678500,
  "lon": 2.3687750,
  "tags": {
    "addr:housenumber": "106",
    "addr:street": "Rue de la Folie-Méricourt",
    "amenity": "restaurant",
    "cuisine": "regional",
    "name": "Auberge Pyrénées Cévennes",
    "phone": "01 43 57 33 78",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1291954815,
  "lat": 48.8649857,
  "lon": 2.3752785,
  "tags": {
    "addr:housenumber": "52",
    "addr:street": "Avenue de la République",
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Slize",
    "opening_hours": "Tu-Su 12:00-15:00,19:00-23:30",
    "phone": "01 40 21 04 59",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://www.slize.fr/"
  }
},
{
  "type": "node",
  "id": 1292110220,
  "lat": 48.8733783,
  "lon": 2.3097112,
  "tags": {
    "amenity": "cafe",
    "cuisine": "coffee_shop",
    "internet_access": "yes",
    "name": "Starbucks",
    "wifi": "yes"
  }
},
{
  "type": "node",
  "id": 1292131305,
  "lat": 48.8660987,
  "lon": 2.3722759,
  "tags": {
    "addr:housenumber": "20",
    "addr:street": "Rue de Nemours",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Sushi Jade",
    "phone": "01 48 06 80 88",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1292143836,
  "lat": 48.8608995,
  "lon": 2.3677192,
  "tags": {
    "addr:housenumber": "93",
    "addr:street": "Rue Amelot",
    "amenity": "cafe",
    "cuisine": "italian",
    "name": "Italian Style Café",
    "opening_hours": "Mo-Su 7:00-2:00",
    "phone": "01 43 57 83 71",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1292143839,
  "lat": 48.8629957,
  "lon": 2.3672976,
  "tags": {
    "addr:housenumber": "108",
    "addr:street": "Rue Amelot",
    "amenity": "bar",
    "name": "Bar du Cirque",
    "phone": "01 48 05 53 06",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://www.barducirque.fr/"
  }
},
{
  "type": "node",
  "id": 1292143900,
  "lat": 48.8637121,
  "lon": 2.3670964,
  "tags": {
    "addr:housenumber": "116",
    "addr:street": "Rue Amelot",
    "amenity": "bar",
    "name": "Bodega Bay",
    "opening_hours": "Mo-Sa 11:00-15:30,18:00-2:00",
    "phone": "01 43 55 83 77",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://www.bodega-bay.fr/",
    "wifi": "yes"
  }
},
{
  "type": "node",
  "id": 1292143957,
  "lat": 48.8609387,
  "lon": 2.3678708,
  "tags": {
    "addr:housenumber": "82",
    "addr:street": "Rue Amelot",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Sushi Room",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1292271778,
  "lat": 48.8633327,
  "lon": 2.3688747,
  "tags": {
    "addr:housenumber": "17",
    "addr:street": "Rue Oberkampf",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Ober-Salé",
    "opening_hours": "Tu-Fr 12:00-14:00,19:30-22:30",
    "phone": "01 43 38 46 68",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://ober-sale.e-monsite.com/"
  }
},
{
  "type": "node",
  "id": 1292272076,
  "lat": 48.8633817,
  "lon": 2.3689965,
  "tags": {
    "addr:housenumber": "19",
    "addr:street": "Rue Oberkampf",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Angelo & Jacqueline",
    "opening_hours": "Tu-Fr 12:30-22:30;Sa 12:00-22:30",
    "phone": "01 48 06 37 94",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1292272088,
  "lat": 48.8663125,
  "lon": 2.3723460,
  "tags": {
    "addr:housenumber": "46",
    "addr:street": "Rue Jean-Pierre Timbaud",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Pearl",
    "opening_hours": "Mo-We 12:00-15:00;Mo-Fr 19:00-23:30;Sa 18:30-0:00",
    "phone": "01 48 07 48 98",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://restaurant-lepearl.fr/"
  }
},
{
  "type": "node",
  "id": 1292272154,
  "lat": 48.8649676,
  "lon": 2.3711282,
  "tags": {
    "addr:housenumber": "64",
    "addr:street": "Rue de la Folie-Méricourt",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "L\'Echappée",
    "opening_hours": "Mo-Fr 12:30-21:00;Sa-Su 10:30-14:00",
    "phone": "01 58 30 12 50",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://www.lechappee.com/"
  }
},
{
  "type": "node",
  "id": 1292272163,
  "lat": 48.8661552,
  "lon": 2.3797640,
  "tags": {
    "addr:housenumber": "122",
    "addr:street": "Rue Oberkampf",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Sans Gêne Oberkampf",
    "phone": "01 47 00 70 11",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1292272172,
  "lat": 48.8656909,
  "lon": 2.3777859,
  "tags": {
    "addr:housenumber": "96",
    "addr:street": "Rue Oberkampf",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Au Pied de Fouet",
    "phone": "01 48 06 46 98",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://www.aupieddefouet.com/"
  }
},
{
  "type": "node",
  "id": 1292272196,
  "lat": 48.8639261,
  "lon": 2.3703310,
  "tags": {
    "addr:housenumber": "35",
    "addr:street": "Rue Oberkampf",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "La Gondola",
    "phone": "01 49 23 02 63",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1292272209,
  "lat": 48.8670939,
  "lon": 2.3749249,
  "tags": {
    "addr:housenumber": "61",
    "addr:street": "Rue Jean-Pierre Timbaud",
    "amenity": "restaurant",
    "cuisine": "french;basque",
    "name": "Les Fabricants",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1292272228,
  "lat": 48.8671390,
  "lon": 2.3755303,
  "tags": {
    "addr:housenumber": "72b",
    "addr:street": "Rue Jean-Pierre Timbaud",
    "amenity": "bar",
    "name": "Orange Mécanique",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1292272358,
  "lat": 48.8639860,
  "lon": 2.3704728,
  "tags": {
    "addr:housenumber": "37",
    "addr:street": "Rue Oberkampf",
    "amenity": "restaurant",
    "name": "L\'Osteria dell\'Anima",
    "phone": "01 43 38 40 03",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1292272381,
  "lat": 48.8628367,
  "lon": 2.3676454,
  "tags": {
    "addr:housenumber": "3",
    "addr:street": "Rue Oberkampf",
    "amenity": "restaurant",
    "cuisine": "tapas",
    "name": "Mojita & Bob",
    "opening_hours": "Tu-Fr 12:00-15:00;Tu-Sa 18:00-2:00;Su 16:00-0:00",
    "phone": "01 58 30 88 59",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://www.mojitaetbob.com/"
  }
},
{
  "type": "node",
  "id": 1292272392,
  "lat": 48.8646935,
  "lon": 2.3723809,
  "tags": {
    "addr:housenumber": "55",
    "addr:street": "Rue Oberkampf",
    "amenity": "restaurant",
    "cuisine": "japanese,_french",
    "name": "Pierre Sang",
    "opening_hours": "Mo-Fr 12:00-22:30;Sa-Su 19:00-22:30",
    "phone": "08 99 18 35 76",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://pierresangboyer.com/"
  }
},
{
  "type": "node",
  "id": 1292272420,
  "lat": 48.8644002,
  "lon": 2.3730285,
  "tags": {
    "addr:housenumber": "15",
    "addr:street": "Rue Ternaux",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Amores",
    "opening_hours": "Mo-Fr 12:00-15:00,19:30-2:00",
    "phone": "01 48 06 10 53",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://www.amores.fr/"
  }
},
{
  "type": "node",
  "id": 1292272423,
  "lat": 48.8677794,
  "lon": 2.3780026,
  "tags": {
    "addr:housenumber": "96",
    "addr:street": "Rue Jean-Pierre Timbaud",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Les Belles Miettes",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1292272439,
  "lat": 48.8646865,
  "lon": 2.3738115,
  "tags": {
    "addr:housenumber": "2b",
    "addr:street": "Rue Neuve Popincourt",
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Al Taglio",
    "opening_hours": "Mo-Th, Su 12:00-23:00;Fr-Sa 12:00-0:00",
    "phone": "01 43 38 12 00",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1293504445,
  "lat": 48.8765188,
  "lon": 2.3353132,
  "tags": {
    "addr:housenumber": "77",
    "addr:postcode": "75009",
    "addr:street": "Rue Taitbout",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Nagano",
    "phone": "+33-1-48784744",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1293504454,
  "lat": 48.8767451,
  "lon": 2.3353322,
  "tags": {
    "addr:housenumber": "79",
    "addr:postcode": "75009",
    "addr:street": "Rue Taitbout",
    "amenity": "restaurant",
    "cuisine": "french",
    "description": "Traditionnal French bistro or \'Brasserie\'",
    "name": "L\'Hasard",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1293504460,
  "lat": 48.8764727,
  "lon": 2.3353018,
  "tags": {
    "addr:housenumber": "75",
    "addr:street": "Rue Taitbout",
    "amenity": "restaurant",
    "cuisine": "pasta",
    "description": "Small pasta-oriented restaurant / take-away",
    "name": "Pasta & Co"
  }
},
{
  "type": "node",
  "id": 1293504477,
  "lat": 48.8764220,
  "lon": 2.3352962,
  "tags": {
    "addr:housenumber": "75",
    "addr:street": "Rue Taitbout",
    "amenity": "restaurant",
    "cuisine": "thai",
    "name": "Thai Délices",
    "phone": "+33-8-50339999",
    "smoking": "no",
    "source": "survey",
    "website": "http://www.thai-delices.com"
  }
},
{
  "type": "node",
  "id": 1293868046,
  "lat": 48.8841246,
  "lon": 2.2582811,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Nouvelle Étoile",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1293868097,
  "lat": 48.8842217,
  "lon": 2.2595310,
  "tags": {
    "alt_name": "Le Bistro d\'À-Côté",
    "amenity": "restaurant",
    "name": "La Boutarde",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1294245729,
  "lat": 48.8449195,
  "lon": 2.3183472,
  "tags": {
    "addr:housenumber": "131",
    "addr:street": "Rue du Cherche-Midi",
    "amenity": "restaurant",
    "name": "Les Colock"
  }
},
{
  "type": "node",
  "id": 1294348044,
  "lat": 48.8453227,
  "lon": 2.3190283,
  "tags": {
    "amenity": "restaurant",
    "name": "La Fleur de Sel"
  }
},
{
  "type": "node",
  "id": 1294461173,
  "lat": 48.8454872,
  "lon": 2.3119300,
  "tags": {
    "addr:housenumber": "114",
    "addr:street": "Rue de Sèvres",
    "amenity": "cafe",
    "contact:phone": "01 47 83 20 45",
    "description": "Café Bar Brasserie",
    "name": "À La Tour de Nesle",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 1294579480,
  "lat": 48.8760923,
  "lon": 2.3383718,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "regional",
    "name": "Café Lorette",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1294579482,
  "lat": 48.8745269,
  "lon": 2.3383294,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese"
  }
},
{
  "type": "node",
  "id": 1294579501,
  "lat": 48.8751689,
  "lon": 2.3383360,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Laffitte",
    "phone": "+33-1-42800766",
    "smoking": "no",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1296659231,
  "lat": 48.8834371,
  "lon": 2.2594192,
  "tags": {
    "amenity": "restaurant",
    "name": "Il Punto",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1297115415,
  "lat": 48.8219925,
  "lon": 2.3300366,
  "tags": {
    "addr:housenumber": "2",
    "addr:postcode": "75014",
    "addr:street": "Rue Émile Faguet",
    "amenity": "cafe",
    "name": "Le Miami",
    "smoking": "separated",
    "website": "http://www.lemiami-paris.com"
  }
},
{
  "type": "node",
  "id": 1297439104,
  "lat": 48.8408412,
  "lon": 2.3543039,
  "tags": {
    "addr:housename": "Edony Café",
    "addr:housenumber": "16",
    "addr:postcode": "75013",
    "addr:street": "Rue Censier",
    "amenity": "cafe",
    "cuisine": "french",
    "name": "Edony Café"
  }
},
{
  "type": "node",
  "id": 1298336555,
  "lat": 48.8860686,
  "lon": 2.2607401,
  "tags": {
    "amenity": "cafe",
    "cuisine": "teahouse",
    "name": "Thé Cool",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1298336562,
  "lat": 48.8867017,
  "lon": 2.2598744,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Eboli",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1298787553,
  "lat": 48.8646004,
  "lon": 2.3751995,
  "tags": {
    "addr:housenumber": "82",
    "addr:street": "Avenue Parmentier",
    "amenity": "restaurant",
    "architect": "A. Sibien",
    "name": "Sur Un Petit Vélo",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "start_date": "1896"
  }
},
{
  "type": "node",
  "id": 1298787603,
  "lat": 48.8674715,
  "lon": 2.3750082,
  "tags": {
    "addr:housenumber": "45",
    "addr:street": "Rue des Trois Bornes",
    "amenity": "restaurant",
    "cuisine": "african",
    "name": "Le Zèbre rouge",
    "phone": "0143570067",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://www.lezebrerouge.fr/"
  }
},
{
  "type": "node",
  "id": 1298787680,
  "lat": 48.8632185,
  "lon": 2.3775523,
  "tags": {
    "addr:housenumber": "6",
    "addr:street": "Passage Saint-Ambroise",
    "amenity": "restaurant",
    "cuisine": "crêpe,_fish,_french",
    "name": "West Country Girl",
    "opening_hours": "Tu-Sa 12:00-14:30;We-Sa 19:00-22:00",
    "phone": "01 47 00 72 54",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://www.westcountrygirl.com/"
  }
},
{
  "type": "node",
  "id": 1298787987,
  "lat": 48.8646245,
  "lon": 2.3695884,
  "tags": {
    "addr:housenumber": "31",
    "addr:street": "Rue de Crussol",
    "amenity": "bar",
    "name": "L\'embuscade",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1298847647,
  "lat": 48.8637330,
  "lon": 2.3792298,
  "tags": {
    "addr:housenumber": "3",
    "addr:street": "Rue Saint-Hubert",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Nakagawa",
    "opening_hours": "Mo-Sa 12:00-15:00,19:30-22:30",
    "phone": "01 47 00 82 30",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://restaurant-nakagawa.com/1.aspx"
  }
},
{
  "type": "node",
  "id": 1299587200,
  "lat": 48.8903757,
  "lon": 2.2796456,
  "tags": {
    "amenity": "bar",
    "name": "Le Neptune"
  }
},
{
  "type": "node",
  "id": 1299587201,
  "lat": 48.8895750,
  "lon": 2.2804771,
  "tags": {
    "amenity": "restaurant",
    "name": "Le grain de sel"
  }
},
{
  "type": "node",
  "id": 1299587203,
  "lat": 48.8896897,
  "lon": 2.2803751,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Yanagawa"
  }
},
{
  "type": "node",
  "id": 1300595247,
  "lat": 48.8357188,
  "lon": 2.2496147,
  "tags": {
    "amenity": "pub",
    "name": "Le Sablier",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1300595272,
  "lat": 48.8359882,
  "lon": 2.2492059,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Petit Cap",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1300607549,
  "lat": 48.8766449,
  "lon": 2.2886055,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Mineko"
  }
},
{
  "type": "node",
  "id": 1300607554,
  "lat": 48.8767578,
  "lon": 2.2885461,
  "tags": {
    "amenity": "pub",
    "name": "Saint-Andrews"
  }
},
{
  "type": "node",
  "id": 1300607628,
  "lat": 48.8782254,
  "lon": 2.2853949,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Petit Maillot"
  }
},
{
  "type": "node",
  "id": 1300607685,
  "lat": 48.8777760,
  "lon": 2.2847660,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Grand Bistro Saint-Ferdinand"
  }
},
{
  "type": "node",
  "id": 1301125444,
  "lat": 48.8580218,
  "lon": 2.3685268,
  "tags": {
    "addr:housenumber": "53",
    "addr:street": "Rue Amelot",
    "amenity": "restaurant",
    "cuisine": "meditarean",
    "name": "Tchaikhana de Boukhara",
    "opening_hours": "Mo-Th, Sa-Su 12:00-14:30, Sa 19:00-23:00",
    "phone": "01 43 38 88 40",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1301125483,
  "lat": 48.8590678,
  "lon": 2.3683962,
  "tags": {
    "addr:housenumber": "50",
    "addr:street": "Rue Amelot",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Qui Plume la Lune",
    "phone": "01 48 07 45 48",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://www.quiplumelalune.fr"
  }
},
{
  "type": "node",
  "id": 1301172950,
  "lat": 48.8614297,
  "lon": 2.3705022,
  "tags": {
    "addr:housenumber": "36",
    "addr:street": "Rue Saint-Sébastien",
    "amenity": "restaurant",
    "cuisine": "thai",
    "name": "Doï Southep",
    "phone": "01 43 55 66 85",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1301173332,
  "lat": 48.8615437,
  "lon": 2.3705687,
  "tags": {
    "addr:housenumber": "33",
    "addr:street": "Rue Saint-Sébastien",
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Deux Fois Plus de Piment",
    "opening_hours": "Mo-Tu 12:00-14:00; Th-Su 12:00-14:00;Mo-Su 17:30-22:00",
    "phone": "06 51 09 88 56",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1301173357,
  "lat": 48.8611127,
  "lon": 2.3692968,
  "tags": {
    "addr:housenumber": "22",
    "addr:street": "Rue Saint-Sébastien",
    "amenity": "restaurant",
    "cuisine": "russian",
    "name": "Aux Trois Violons",
    "phone": "01 43 57 10 15",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1301310309,
  "lat": 48.8602229,
  "lon": 2.3727573,
  "tags": {
    "addr:housenumber": "64",
    "addr:street": "Boulevard Richard Lenoir",
    "amenity": "bar",
    "name": "La grosse bouteille",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1301310587,
  "lat": 48.8546701,
  "lon": 2.3693933,
  "tags": {
    "addr:housenumber": "3",
    "addr:street": "Boulevard Richard Lenoir",
    "amenity": "restaurant",
    "name": "L\'Angora",
    "phone": "01 47 00 25 00",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://anne.angora.free.fr/"
  }
},
{
  "type": "node",
  "id": 1301816368,
  "lat": 48.8468319,
  "lon": 2.2351399,
  "tags": {
    "amenity": "cafe",
    "name": "Chez Agnès",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1301858682,
  "lat": 48.8311607,
  "lon": 2.2424603,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Veni\'s",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1302120829,
  "lat": 48.8855402,
  "lon": 2.2592321,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 1302120992,
  "lat": 48.8660252,
  "lon": 2.3152733,
  "tags": {
    "amenity": "cafe",
    "name": "Le Jardin du Petit Palais",
    "website": "http://www.petitpalais.paris.fr/fr/votre-visite",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 1302121018,
  "lat": 48.8856715,
  "lon": 2.2588249,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 1305528752,
  "lat": 48.9089258,
  "lon": 2.2517647,
  "tags": {
    "amenity": "cafe",
    "name": "Le Plaisance"
  }
},
{
  "type": "node",
  "id": 1305748494,
  "lat": 48.8292537,
  "lon": 2.2441957,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Cappuccino",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1305748496,
  "lat": 48.8291958,
  "lon": 2.2445460,
  "tags": {
    "amenity": "cafe",
    "name": "L\'Artistique",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1305748500,
  "lat": 48.8292739,
  "lon": 2.2468401,
  "tags": {
    "amenity": "restaurant",
    "name": "Le 5",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1305927682,
  "lat": 48.8366253,
  "lon": 2.3205727,
  "tags": {
    "addr:housenumber": "33",
    "addr:street": "Rue de l\'Ouest",
    "amenity": "pub",
    "brewery": "Chouffe;Guinness;Tripel_Karmeliet",
    "internet_access": "wlan",
    "name": "Osmoz Café",
    "opening_hours": "Mo-Sa 08:00-02:00",
    "phone": "0183760894",
    "smoking": "no",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre;mise à jour : 2011",
    "website": "http://www.osmozcafe.fr/"
  }
},
{
  "type": "node",
  "id": 1305927840,
  "lat": 48.8323092,
  "lon": 2.3130666,
  "tags": {
    "addr:housenumber": "149",
    "addr:street": "Rue de l\'Ouest",
    "amenity": "restaurant",
    "cuisine": "kebab",
    "name": "L\'escale de plaisance",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre ; mise à jour : 2011",
    "takeaway": "yes"
  }
},
{
  "type": "node",
  "id": 1306051233,
  "lat": 48.8408906,
  "lon": 2.2877004,
  "tags": {
    "amenity": "cafe",
    "cuisine": "american",
    "int_name": "Starbucks cafe",
    "name": "Starbucks Cafe",
    "wifi": "yes"
  }
},
{
  "type": "node",
  "id": 1306054109,
  "lat": 48.8390609,
  "lon": 2.3002902,
  "tags": {
    "amenity": "cafe",
    "int_name": "Starbucks",
    "name": "Starbucks Coffee",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 1306563390,
  "lat": 48.8254617,
  "lon": 2.3652375,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 1306589616,
  "lat": 48.8826774,
  "lon": 2.3602875,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Chettinadu"
  }
},
{
  "type": "node",
  "id": 1307127534,
  "lat": 48.8571479,
  "lon": 2.3729822,
  "tags": {
    "amenity": "cafe",
    "cuisine": "french",
    "name": "Le Café Truc",
    "phone": "01 48 05 62 38",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://www.cafetruc.com/"
  }
},
{
  "type": "node",
  "id": 1307180083,
  "lat": 48.8555583,
  "lon": 2.3708327,
  "tags": {
    "addr:housenumber": "1",
    "addr:street": "Rue Sedaine",
    "amenity": "restaurant",
    "cuisine": "american",
    "name": "Blues Bar-B-Q",
    "opening_hours": "Tu-Sa 12:00-22:00;Su 12:00-20:00",
    "phone": "01 48 06 79 53",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://www.bluesbarbq.fr/"
  }
},
{
  "type": "node",
  "id": 1307180562,
  "lat": 48.8569621,
  "lon": 2.3721314,
  "tags": {
    "addr:housenumber": "9",
    "addr:street": "Rue Boulle",
    "amenity": "restaurant",
    "cuisine": "regional",
    "name": "Le P\'tit Breguet",
    "phone": "01 48 05 52 09",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1307180982,
  "lat": 48.8567777,
  "lon": 2.3726141,
  "tags": {
    "addr:housenumber": "14",
    "addr:street": "Rue Boulle",
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Katmandou",
    "opening_hours": "Mo-Su 12:00-15:00,19:00-0:00",
    "phone": "01 48 05 36 36",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://katmandou.fr/"
  }
},
{
  "type": "node",
  "id": 1307181192,
  "lat": 48.8558410,
  "lon": 2.3721540,
  "tags": {
    "addr:housenumber": "16",
    "addr:street": "Rue Sedaine",
    "amenity": "restaurant",
    "name": "Café de l\'Industrie",
    "opening_hours": "Mo-Su 10:00-2:00",
    "phone": "01 47 00 13 53",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1307259062,
  "lat": 48.8618278,
  "lon": 2.3730557,
  "tags": {
    "addr:housenumber": "60",
    "addr:street": "Boulevard Voltaire",
    "amenity": "restaurant",
    "cuisine": "burger",
    "diet:vegetarian": "yes",
    "name": "East Side Burgers",
    "opening_hours": "Tu-Th 12:00-18:00;Fr-Sa 12:00-20:00",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://www.eastsideburgers.fr/"
  }
},
{
  "type": "node",
  "id": 1307259082,
  "lat": 48.8545648,
  "lon": 2.3719500,
  "tags": {
    "addr:housenumber": "19",
    "addr:street": "Rue de la Roquette",
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Taj",
    "opening_hours": "Mo-Su 12:00-14:30,19:00-23:30",
    "phone": "01 48 05 69 19",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "restaurant-taj.com"
  }
},
{
  "type": "node",
  "id": 1307259117,
  "lat": 48.8536042,
  "lon": 2.3707268,
  "tags": {
    "addr:housenumber": "12",
    "addr:street": "Rue de la Roquette",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "internet_access": "no",
    "name": "Sukiyaki",
    "opening_hours": "Mo-Su 12:00-23:30",
    "phone": "+33 (0) 1 49 23 04 98",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://www.restosukiyaki.com/",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 1307259134,
  "lat": 48.8536882,
  "lon": 2.3708103,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "14",
    "addr:postcode": "75012",
    "addr:street": "Rue de la Roquette",
    "amenity": "bar",
    "brewery": "Stella;Leffe;Hoegaarden;",
    "internet_access": "no",
    "name": "Bastille bar",
    "opening_hours": "Mo-Su 08:00-02:00",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 1307259157,
  "lat": 48.8538783,
  "lon": 2.3707951,
  "tags": {
    "addr:housenumber": "5",
    "addr:street": "Rue de la Roquette",
    "amenity": "restaurant",
    "cuisine": "korean",
    "name": "Chez Heang",
    "phone": "01 48 07 80 98",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1307259205,
  "lat": 48.8546993,
  "lon": 2.3708799,
  "tags": {
    "addr:housenumber": "16",
    "addr:street": "Rue Daval",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Relais Massif Central",
    "opening_hours": "Mo-Sa 12:00-14:30;Mo-Sa 19:30-23:30;Su 19:00-23:00",
    "phone": "01 47 00 46 55",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1307259214,
  "lat": 48.8557897,
  "lon": 2.3753324,
  "tags": {
    "addr:housenumber": "74",
    "addr:street": "Rue de la Roquette",
    "amenity": "bar",
    "name": "Les furieux",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://www.lesfurieux.fr/index2.htm"
  }
},
{
  "type": "node",
  "id": 1307259239,
  "lat": 48.8573966,
  "lon": 2.3799370,
  "tags": {
    "amenity": "cafe",
    "name": "Le Rey",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1307259285,
  "lat": 48.8545778,
  "lon": 2.3710477,
  "tags": {
    "addr:housename": "Bar\'Ock",
    "addr:housenumber": "18",
    "addr:postcode": "75011",
    "addr:street": "Rue Daval",
    "alt_name": "Bar\'Ock",
    "amenity": "bar",
    "name": "Bar\'Ock",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://www.bar-ock.com",
    "wifi": "free"
  }
},
{
  "type": "node",
  "id": 1307270891,
  "lat": 48.8548025,
  "lon": 2.3759275,
  "tags": {
    "addr:housenumber": "20",
    "addr:street": "Rue Keller",
    "amenity": "bar",
    "name": "Le Bubblebar",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "source:name": "survey"
  }
},
{
  "type": "node",
  "id": 1307645923,
  "lat": 48.8480733,
  "lon": 2.3112387,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Côté Asie",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1311964030,
  "lat": 48.8345104,
  "lon": 2.3934103,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "korean",
    "name": "Namou"
  }
},
{
  "type": "node",
  "id": 1311964035,
  "lat": 48.8455102,
  "lon": 2.3829497,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "korean;japanese",
    "name": "Yaki Wasabi"
  }
},
{
  "type": "node",
  "id": 1312774883,
  "lat": 48.8553433,
  "lon": 2.3747935,
  "tags": {
    "addr:housenumber": "24",
    "addr:street": "Rue des Taillandiers",
    "amenity": "restaurant",
    "cuisine": "marocan",
    "name": "Au P\'tit Cahoua",
    "opening_hours": "Mo-Su 12:00-15:00,19:30-23:00",
    "phone": "01 47 00 20 42",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1313398477,
  "lat": 48.8101956,
  "lon": 2.3007095,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Sushi Addict",
    "source": "local Knowledge"
  }
},
{
  "type": "node",
  "id": 1313543610,
  "lat": 48.8538434,
  "lon": 2.3724806,
  "tags": {
    "addr:housenumber": "17",
    "addr:street": "Rue de Lappe",
    "amenity": "restaurant",
    "cuisine": "mexican",
    "name": "Cielito Lindo",
    "opening_hours": "Mo-Sa 18:30-2:00",
    "phone": "01 43 57 91 12",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://www.cielitolindo.net/"
  }
},
{
  "type": "node",
  "id": 1314035501,
  "lat": 48.8446232,
  "lon": 2.2335506,
  "tags": {
    "amenity": "cafe",
    "name": "Les Compagnons",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1314226916,
  "lat": 48.8418339,
  "lon": 2.3497835,
  "tags": {
    "addr:housename": "Paris",
    "addr:housenumber": "85",
    "addr:postcode": "75005",
    "addr:street": "Rue Mouffetard",
    "amenity": "restaurant",
    "cuisine": "greek",
    "name": "La Crete"
  }
},
{
  "type": "node",
  "id": 1314241473,
  "lat": 48.8835544,
  "lon": 2.3321896,
  "tags": {
    "amenity": "cafe",
    "name": "Starbucks"
  }
},
{
  "type": "node",
  "id": 1315008927,
  "lat": 48.8443660,
  "lon": 2.2339586,
  "tags": {
    "amenity": "restaurant",
    "name": "Au Comte",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1316079346,
  "lat": 48.8416745,
  "lon": 2.2374790,
  "tags": {
    "amenity": "bar",
    "name": "L\'Imprévu",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1318760452,
  "lat": 48.8853585,
  "lon": 2.2574922,
  "tags": {
    "amenity": "cafe",
    "name": "Le Celtique",
    "shop": "tobacco",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1318760454,
  "lat": 48.8853007,
  "lon": 2.2576348,
  "tags": {
    "amenity": "restaurant",
    "name": "Pasta Bar",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1319162691,
  "lat": 48.8517205,
  "lon": 2.3567051,
  "tags": {
    "amenity": "cafe",
    "cuisine": "ice_cream",
    "name": "Berthillon"
  }
},
{
  "type": "node",
  "id": 1319170656,
  "lat": 48.8549268,
  "lon": 2.3539661,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Trumilou"
  }
},
{
  "type": "node",
  "id": 1319967012,
  "lat": 48.8264546,
  "lon": 2.3410881,
  "tags": {
    "addr:housenumber": "1 bis",
    "addr:postcode": "75014",
    "addr:street": "Rue d\'Alésia",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Shinotaku"
  }
},
{
  "type": "node",
  "id": 1326677896,
  "lat": 48.8862540,
  "lon": 2.3333605,
  "tags": {
    "addr:housenumber": "15",
    "addr:postcode": "75018",
    "addr:street": "Rue Joseph de Maistre",
    "alt_name": "Le 20 Heures Vin",
    "amenity": "bar",
    "name": "Le Vingt Heures Vin",
    "phone": "+33 9 54665067"
  }
},
{
  "type": "node",
  "id": 1326727945,
  "lat": 48.8570588,
  "lon": 2.3798634,
  "tags": {
    "addr:housenumber": "49",
    "addr:street": "Rue Godefroy Cavaignac",
    "amenity": "restaurant",
    "cuisine": "vietnamese",
    "name": "Grain De Riz",
    "opening_hours": "Mo-Sa 11:30-22:30",
    "phone": "01 44 93 00 08",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://legrainderiz.free.fr/"
  }
},
{
  "type": "node",
  "id": 1327343914,
  "lat": 48.8850965,
  "lon": 2.2632053,
  "tags": {
    "amenity": "restaurant",
    "name": "Chez Thaï",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1327343919,
  "lat": 48.8850015,
  "lon": 2.2630851,
  "tags": {
    "amenity": "restaurant",
    "name": "La Table des Oliviers",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1327343924,
  "lat": 48.8853866,
  "lon": 2.2629330,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Ventadour",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1327343927,
  "lat": 48.8841537,
  "lon": 2.2652938,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Maison Wok",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1327343933,
  "lat": 48.8852816,
  "lon": 2.2634797,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "couscous",
    "name": "Mogador",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1327343941,
  "lat": 48.8840476,
  "lon": 2.2655818,
  "tags": {
    "amenity": "restaurant",
    "name": "PB2",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1328467045,
  "lat": 48.8803792,
  "lon": 2.2712184,
  "tags": {
    "amenity": "cafe",
    "name": "Café de la Porte des Sablons",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1328467053,
  "lat": 48.8848010,
  "lon": 2.2668307,
  "tags": {
    "amenity": "cafe",
    "name": "Le Café du Centre",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1328467054,
  "lat": 48.8838002,
  "lon": 2.2655162,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Comptoir Loz",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1330565399,
  "lat": 48.8958659,
  "lon": 2.3827194,
  "tags": {
    "addr:housenumber": "34",
    "addr:postcode": "75019",
    "addr:street": "Rue de Cambrai",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le ptit Hugo"
  }
},
{
  "type": "node",
  "id": 1332199303,
  "lat": 48.8787659,
  "lon": 2.2783047,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "delicatessen",
    "name": "Rotz",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1338927195,
  "lat": 48.8303551,
  "lon": 2.3540212,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "thai",
    "name": "Sukhothai",
    "source": "survey",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 1340959108,
  "lat": 48.8546913,
  "lon": 2.3857584,
  "tags": {
    "amenity": "restaurant",
    "int_name": "Le Rouge Limé",
    "name": "Le Rouge Limé"
  }
},
{
  "type": "node",
  "id": 1341982786,
  "lat": 48.8752655,
  "lon": 2.2891768,
  "tags": {
    "amenity": "cafe",
    "name": "Bert\'s"
  }
},
{
  "type": "node",
  "id": 1341982788,
  "lat": 48.8756259,
  "lon": 2.2879821,
  "tags": {
    "amenity": "cafe",
    "name": "L\'Aiglon"
  }
},
{
  "type": "node",
  "id": 1341982789,
  "lat": 48.8757441,
  "lon": 2.2876138,
  "tags": {
    "amenity": "cafe",
    "name": "Contre-Allée"
  }
},
{
  "type": "node",
  "id": 1343225908,
  "lat": 48.8543018,
  "lon": 2.3064024,
  "tags": {
    "amenity": "cafe",
    "name": "Café des officiers"
  }
},
{
  "type": "node",
  "id": 1343230023,
  "lat": 48.8564566,
  "lon": 2.3025481,
  "tags": {
    "amenity": "restaurant",
    "name": "Pizza la Gourmandise"
  }
},
{
  "type": "node",
  "id": 1343409679,
  "lat": 48.8314493,
  "lon": 2.3411256,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 1343409684,
  "lat": 48.8315129,
  "lon": 2.3409781,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1344479450,
  "lat": 48.8594440,
  "lon": 2.3503990,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian",
    "diet:vegetarian": "yes",
    "name": "Les Sommets de l\'Himalaya"
  }
},
{
  "type": "node",
  "id": 1344487714,
  "lat": 48.8594790,
  "lon": 2.3504550,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Hello Sushi"
  }
},
{
  "type": "node",
  "id": 1347770062,
  "lat": 48.8380307,
  "lon": 2.2817398,
  "tags": {
    "addr:housenumber": "3",
    "addr:postcode": "75015",
    "addr:street": "Rue Vasco de Gama",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "L\'Os à Moelle"
  }
},
{
  "type": "node",
  "id": 1349129240,
  "lat": 48.8837859,
  "lon": 2.2598705,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "seafood",
    "name": "La Criée",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1350464575,
  "lat": 48.8649900,
  "lon": 2.3816769,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1350641895,
  "lat": 48.8472498,
  "lon": 2.3715912,
  "tags": {
    "amenity": "cafe",
    "name": "La Ville de Lyon",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1351907682,
  "lat": 48.8502019,
  "lon": 2.3688037,
  "tags": {
    "addr:housenumber": "34",
    "addr:street": "Boulevard de la Bastille",
    "amenity": "cafe",
    "name": "Les quais",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1351907683,
  "lat": 48.8503931,
  "lon": 2.3688912,
  "tags": {
    "addr:housenumber": "36",
    "addr:street": "Boulevard de la Bastille",
    "amenity": "restaurant",
    "capacity": "50",
    "cuisine": "french",
    "name": "Café de la presse",
    "smoking": "outside",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1351907694,
  "lat": 48.8506208,
  "lon": 2.3689945,
  "tags": {
    "addr:housenumber": "40",
    "addr:street": "Boulevard de la Bastille",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Chez papa",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1352878654,
  "lat": 48.8437902,
  "lon": 2.2929719,
  "tags": {
    "amenity": "cafe",
    "name": "A la Tour Eiffel"
  }
},
{
  "type": "node",
  "id": 1352878662,
  "lat": 48.8833475,
  "lon": 2.2875083,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Guersant"
  }
},
{
  "type": "node",
  "id": 1352879262,
  "lat": 48.8453517,
  "lon": 2.2976315,
  "tags": {
    "amenity": "restaurant",
    "name": "Ristorante Fellini",
    "source:date": "201107"
  }
},
{
  "type": "node",
  "id": 1353062973,
  "lat": 48.8493300,
  "lon": 2.3749472,
  "tags": {
    "addr:housenumber": "44",
    "addr:street": "Rue Traversière",
    "amenity": "restaurant",
    "cuisine": "vietnamese",
    "name": "Saveur Bar",
    "opening_hours": "Mo-Fr 13:00-16:00",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1354936699,
  "lat": 48.8927687,
  "lon": 2.2391006,
  "tags": {
    "amenity": "cafe",
    "indoor": "yes",
    "layer": "-1",
    "level": "-1",
    "name": "Café New Yorkais",
    "shop": "yes",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 1355008309,
  "lat": 48.8927880,
  "lon": 2.2390530,
  "tags": {
    "amenity": "cafe",
    "indoor": "yes",
    "layer": "0",
    "level": "0",
    "name": "Café de la Place",
    "shop": "yes",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1358006954,
  "lat": 48.9055732,
  "lon": 2.2824943,
  "tags": {
    "addr:city": "Asnière Sur Seine",
    "addr:housenumber": "23",
    "addr:postcode": "92600",
    "addr:street": "Rue de Bretagne",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Hokkaido"
  }
},
{
  "type": "node",
  "id": 1359287737,
  "lat": 48.8434159,
  "lon": 2.2318181,
  "tags": {
    "alt_name": "Cyrille Legoux",
    "amenity": "restaurant",
    "name": "L\'Auberge",
    "source": "survey",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 1359287745,
  "lat": 48.8432830,
  "lon": 2.2316414,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Palais de l\'Hirondelle",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1359287751,
  "lat": 48.8434574,
  "lon": 2.2322843,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Touya",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1360431343,
  "lat": 48.8341870,
  "lon": 2.3157058,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "104",
    "addr:postcode": "75014",
    "addr:street": "Rue de l\'Ouest",
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Aanchal"
  }
},
{
  "type": "node",
  "id": 1361563038,
  "lat": 48.8216474,
  "lon": 2.3653328,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1362686067,
  "lat": 48.8410025,
  "lon": 2.2294180,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Fujiyama",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1362686069,
  "lat": 48.8411774,
  "lon": 2.2292287,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Fujiyama",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1362686083,
  "lat": 48.8420021,
  "lon": 2.2299078,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Okura",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1362686097,
  "lat": 48.8425588,
  "lon": 2.2304538,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Scoozy",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1362774915,
  "lat": 48.8232565,
  "lon": 2.3578824,
  "tags": {
    "amenity": "cafe",
    "name": "Pourquoi pas"
  }
},
{
  "type": "node",
  "id": 1362787033,
  "lat": 48.8224620,
  "lon": 2.3587564,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "turkish",
    "name": "Le Bosphore"
  }
},
{
  "type": "node",
  "id": 1362787035,
  "lat": 48.8225668,
  "lon": 2.3587247,
  "tags": {
    "amenity": "cafe",
    "name": "La Maison Blanche"
  }
},
{
  "type": "node",
  "id": 1365367497,
  "lat": 48.8452541,
  "lon": 2.2717989,
  "tags": {
    "addr:housenumber": "97",
    "addr:postcode": "75016",
    "addr:street": "Avenue de Versailles",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Chez Antoine"
  }
},
{
  "type": "node",
  "id": 1366641289,
  "lat": 48.8400603,
  "lon": 2.2864594,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Granite",
    "phone": "01.45.58.43.17"
  }
},
{
  "type": "node",
  "id": 1366677532,
  "lat": 48.8236607,
  "lon": 2.2969988,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Spiga d\'Oro"
  }
},
{
  "type": "node",
  "id": 1367031303,
  "lat": 48.9048702,
  "lon": 2.2685670,
  "tags": {
    "amenity": "cafe",
    "name": "Bécon tabac"
  }
},
{
  "type": "node",
  "id": 1368047404,
  "lat": 48.8437006,
  "lon": 2.2963141,
  "tags": {
    "addr:housename": "Le vent de sable",
    "amenity": "restaurant",
    "cuisine": "international",
    "name": "Le vent de sable",
    "website": "http://www.leventdesable.com/"
  }
},
{
  "type": "node",
  "id": 1369136502,
  "lat": 48.8744843,
  "lon": 2.3304643,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Tian Fu",
    "phone": "+33142821028"
  }
},
{
  "type": "node",
  "id": 1369172433,
  "lat": 48.8449901,
  "lon": 2.2972313,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "int_name": "La véraison",
    "name": "La véraison",
    "source": "http://www.laveraison.com/"
  }
},
{
  "type": "node",
  "id": 1370190340,
  "lat": 48.8502257,
  "lon": 2.3782954,
  "tags": {
    "addr:housenumber": "24",
    "addr:street": "Rue de Cotte",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Miel et Paprika",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1370190345,
  "lat": 48.8503235,
  "lon": 2.3783645,
  "tags": {
    "addr:housenumber": "26",
    "addr:street": "Rue de Cotte",
    "amenity": "restaurant",
    "cuisine": "regional",
    "name": "Vilia",
    "opening_hours": "Mo-Sa 11:00-14:30,19:30-23:00",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1370205049,
  "lat": 48.8495013,
  "lon": 2.3784402,
  "tags": {
    "addr:housenumber": "15",
    "addr:street": "Rue d\'Aligre",
    "amenity": "restaurant",
    "cuisine": "kebab",
    "name": "Aux délices du maghreb",
    "opening_hours": "Mo-Fr 09:30-20:00",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1372919991,
  "lat": 48.8515963,
  "lon": 2.3430149,
  "tags": {
    "addr:housenumber": "20",
    "addr:street": "Boulevard Saint-Michel",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Del\'Arte"
  }
},
{
  "type": "node",
  "id": 1373609050,
  "lat": 48.8492402,
  "lon": 2.2880111,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "47",
    "addr:postcode": "75015",
    "addr:street": "Place Saint-Charles",
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Villa 15"
  }
},
{
  "type": "node",
  "id": 1373829660,
  "lat": 48.8704365,
  "lon": 2.3414021,
  "tags": {
    "addr:housenumber": "10",
    "addr:postcode": "75002",
    "addr:street": "Rue Saint-Marc",
    "amenity": "cafe",
    "name": "Cafe Elgi",
    "wifi": "free"
  }
},
{
  "type": "node",
  "id": 1374463830,
  "lat": 48.8831571,
  "lon": 2.3884076,
  "tags": {
    "amenity": "bar",
    "name": "Bar de la piscine"
  }
},
{
  "type": "node",
  "id": 1374463835,
  "lat": 48.8850543,
  "lon": 2.3872280,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 1379439283,
  "lat": 48.8820903,
  "lon": 2.2863199,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "delivery": "yes",
    "name": "Pizza Pino",
    "source": "Survey",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 1393155090,
  "lat": 48.8720949,
  "lon": 2.3323339,
  "tags": {
    "addr:city": "Paris",
    "addr:housename": "Palais Garnier",
    "addr:postcode": "75009",
    "addr:street": "Place Jacques Rouché",
    "amenity": "restaurant",
    "capacity": "160",
    "cuisine": "french",
    "name": "L\'Opéra Restaurant",
    "opening_hours": "Mo-Su 08:00-23:59",
    "phone": "+33 1 42 68 86 80",
    "smoking": "outside",
    "source": "www.opera-restaurant.fr",
    "website": "www.opera-restaurant.fr",
    "wheelchair": "yes",
    "wifi": "yes",
    "wikipedia": "en:L\'Opéra restaurant"
  }
},
{
  "type": "node",
  "id": 1393162468,
  "lat": 48.8705731,
  "lon": 2.3103284,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "8",
    "addr:postcode": "75008",
    "addr:street": "Avenue Franklin Delano Roosevelt",
    "amenity": "restaurant",
    "capacity": "150",
    "cuisine": "french",
    "name": "Villa Spicy",
    "opening_hours": "Mo-Su 11:00-15:00,18:00-23:59",
    "phone": "+33 1 56 59 62 59",
    "source": "www.spicyrestaurant.com",
    "website": "www.spicyrestaurant.com",
    "wifi": "yes"
  }
},
{
  "type": "node",
  "id": 1393686036,
  "lat": 48.8274648,
  "lon": 2.2348084,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Café Seguin",
    "source": "survey",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 1395428219,
  "lat": 48.8401706,
  "lon": 2.3924398,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Yeko",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1396700524,
  "lat": 48.8290910,
  "lon": 2.3744112,
  "tags": {
    "amenity": "restaurant",
    "name": "Restaurant universitaire CROUS Tolbiac",
    "website": "http://www.crous-paris.fr/article.asp?idcat=AAAB&idart=ADBN",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 1401461533,
  "lat": 48.8846283,
  "lon": 2.3670547,
  "tags": {
    "addr:housenumber": "5",
    "addr:street": "Rue de Tanger",
    "amenity": "cafe",
    "name": "Les Dunes"
  }
},
{
  "type": "node",
  "id": 1401461536,
  "lat": 48.8843707,
  "lon": 2.3678261,
  "tags": {
    "amenity": "cafe",
    "name": "Au Roi du café"
  }
},
{
  "type": "node",
  "id": 1401461537,
  "lat": 48.8847919,
  "lon": 2.3672165,
  "tags": {
    "addr:housenumber": "7",
    "addr:postcode": "75019",
    "addr:street": "Rue de Tanger",
    "amenity": "restaurant",
    "cuisine": "senegalese",
    "name": "Le Senegal"
  }
},
{
  "type": "node",
  "id": 1403259534,
  "lat": 48.8256182,
  "lon": 2.2343299,
  "tags": {
    "addr:housenumber": "58",
    "amenity": "restaurant",
    "name": "Café Renaud",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1403610363,
  "lat": 48.8494222,
  "lon": 2.3777750,
  "tags": {
    "amenity": "cafe",
    "cuisine": "french",
    "internet_access": "wlan",
    "name": "K\'fe"
  }
},
{
  "type": "node",
  "id": 1404449817,
  "lat": 48.8570855,
  "lon": 2.3550986,
  "tags": {
    "amenity": "bar",
    "name": "Les Souffleurs"
  }
},
{
  "type": "node",
  "id": 1407040035,
  "lat": 48.8243806,
  "lon": 2.3892291,
  "tags": {
    "amenity": "restaurant",
    "name": "Hippopotamus",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 1411160041,
  "lat": 48.8282490,
  "lon": 2.2350110,
  "tags": {
    "amenity": "restaurant",
    "name": "Meatpacking District",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1412068906,
  "lat": 48.8284550,
  "lon": 2.2352710,
  "tags": {
    "addr:housenumber": "8",
    "amenity": "restaurant",
    "name": "L\'Atelier",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1417916067,
  "lat": 48.8283297,
  "lon": 2.3816403,
  "tags": {
    "amenity": "restaurant",
    "name": "Restaurant administratif CROUS"
  }
},
{
  "type": "node",
  "id": 1420443168,
  "lat": 48.8502152,
  "lon": 2.3848125,
  "tags": {
    "amenity": "cafe",
    "name": "Le Bidule",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1420824066,
  "lat": 48.8351017,
  "lon": 2.3201496,
  "tags": {
    "addr:housenumber": "38",
    "addr:street": "Rue Raymond Losserand",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Les Tontons"
  }
},
{
  "type": "node",
  "id": 1420824069,
  "lat": 48.8351935,
  "lon": 2.3203079,
  "tags": {
    "addr:housenumber": "36",
    "addr:street": "Rue Raymond Losserand",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Il Gallo Nero",
    "website": "http://www.ilgallonero.fr/"
  }
},
{
  "type": "node",
  "id": 1420874415,
  "lat": 48.8218202,
  "lon": 2.3423613,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Jix Xin Lou"
  }
},
{
  "type": "node",
  "id": 1423028966,
  "lat": 48.8444522,
  "lon": 2.3901640,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Deliceo"
  }
},
{
  "type": "node",
  "id": 1423028980,
  "lat": 48.8443813,
  "lon": 2.3902545,
  "tags": {
    "amenity": "restaurant",
    "name": "Traiteur Maillet",
    "note:fr": "au 3 sept 2011 en travaux d\'ouverture",
    "phone": "01.43..43.19.55"
  }
},
{
  "type": "node",
  "id": 1423029047,
  "lat": 48.8444028,
  "lon": 2.3766004,
  "tags": {
    "amenity": "cafe",
    "brewery": "affligem",
    "layer": "-1"
  }
},
{
  "type": "node",
  "id": 1423517464,
  "lat": 48.8802165,
  "lon": 2.2224099,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1423880044,
  "lat": 48.9064157,
  "lon": 2.3245313,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Victor Hugo"
  }
},
{
  "type": "node",
  "id": 1424194869,
  "lat": 48.8260323,
  "lon": 2.3598011,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Le Mandarin de Choisy"
  }
},
{
  "type": "node",
  "id": 1424194870,
  "lat": 48.8226689,
  "lon": 2.3629591,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Au bonheur d\'Asie",
    "note": "buffet à volonté",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 1425553560,
  "lat": 48.8432368,
  "lon": 2.3854870,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "L\'Alchimiste",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1425578588,
  "lat": 48.8448130,
  "lon": 2.3836511,
  "tags": {
    "addr:housenumber": "7",
    "addr:street": "Place du Colonel Bourgoin",
    "amenity": "cafe",
    "brewery": "Stella;Biere_de_saison;Leffe;Loburg",
    "name": "La Boutique à Boire et à Manger",
    "opening_hours": "Mo-Sa 07:00-24:00; Su 09:00-19:30",
    "smoking": "outside",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1426066936,
  "lat": 48.8412644,
  "lon": 2.2282610,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Wakayama",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1429442329,
  "lat": 48.8469638,
  "lon": 2.3755868,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1429604973,
  "lat": 48.8370059,
  "lon": 2.2837291,
  "tags": {
    "amenity": "restaurant",
    "name": "Au Derrick Catalan"
  }
},
{
  "type": "node",
  "id": 1429604978,
  "lat": 48.8358112,
  "lon": 2.2786030,
  "tags": {
    "amenity": "cafe",
    "name": "Café Victor"
  }
},
{
  "type": "node",
  "id": 1429604981,
  "lat": 48.8365516,
  "lon": 2.2821427,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Domo Sushi",
    "phone": "01.45.54.53.45"
  }
},
{
  "type": "node",
  "id": 1429604988,
  "lat": 48.8356895,
  "lon": 2.2807712,
  "tags": {
    "addr:housenumber": "3",
    "addr:postcode": "75015",
    "addr:street": "Boulevard Victor",
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Meyliwa"
  }
},
{
  "type": "node",
  "id": 1429604991,
  "lat": 48.8354976,
  "lon": 2.2815391,
  "tags": {
    "addr:housenumber": "5",
    "addr:postcode": "75015",
    "addr:street": "Boulevard Victor",
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Pizza Villa Eva",
    "phone": "01.45.32.68.39"
  }
},
{
  "type": "node",
  "id": 1429604995,
  "lat": 48.8370362,
  "lon": 2.2836115,
  "tags": {
    "amenity": "restaurant",
    "name": "Vasco de Gama"
  }
},
{
  "type": "node",
  "id": 1430135343,
  "lat": 48.8713001,
  "lon": 2.3766068,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "vietnamese",
    "name": "Tin tin - 東東",
    "name:fr": "Tin tin",
    "name:zh": "東東",
    "name:zh_pinyin": "dōngdōng"
  }
},
{
  "type": "node",
  "id": 1430135351,
  "lat": 48.8704762,
  "lon": 2.3775322,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "thai"
  }
},
{
  "type": "node",
  "id": 1430135356,
  "lat": 48.8704356,
  "lon": 2.3764056,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "vietnamese"
  }
},
{
  "type": "node",
  "id": 1430135363,
  "lat": 48.8712066,
  "lon": 2.3768241,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "vietnamese",
    "name": "Dong huong"
  }
},
{
  "type": "node",
  "id": 1432223015,
  "lat": 48.8449997,
  "lon": 2.4059414,
  "tags": {
    "addr:housenumber": "54",
    "addr:street": "Avenue du Docteur Arnold Netter",
    "amenity": "restaurant",
    "name": "Le Bel Air",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1432223250,
  "lat": 48.8470725,
  "lon": 2.4064857,
  "tags": {
    "addr:housenumber": "82",
    "addr:street": "Cours de Vincennes",
    "amenity": "restaurant",
    "name": "Le Netter",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1432256093,
  "lat": 48.8391796,
  "lon": 2.3955829,
  "tags": {
    "amenity": "restaurant",
    "name": "Va-et-vient",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 1434075749,
  "lat": 48.8497121,
  "lon": 2.3553355,
  "tags": {
    "amenity": "bar",
    "name": "Le Rallye Tournelle",
    "phone": "+33 143542965"
  }
},
{
  "type": "node",
  "id": 1437579349,
  "lat": 48.8716241,
  "lon": 2.3914872,
  "tags": {
    "amenity": "bar",
    "name": "La fontaine Henri IV"
  }
},
{
  "type": "node",
  "id": 1440250986,
  "lat": 48.8776662,
  "lon": 2.3398701,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Chez Vous",
    "smoking": "separated",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1440251000,
  "lat": 48.8765486,
  "lon": 2.3385813,
  "tags": {
    "amenity": "cafe",
    "cuisine": "teahouse",
    "name": "Les Cakes de Bertrand",
    "opening_hours": "Mo-Sa 12:30-19:30",
    "phone": "+33-1-40161628",
    "smoking": "no",
    "source": "survey",
    "website": "http://www.lescakesdebertrand.com/"
  }
},
{
  "type": "node",
  "id": 1440842571,
  "lat": 48.8387420,
  "lon": 2.3963264,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Robata",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1440858020,
  "lat": 48.8390768,
  "lon": 2.3942535,
  "tags": {
    "amenity": "restaurant",
    "name": "Au Trou Gascon",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1440883085,
  "lat": 48.8371288,
  "lon": 2.3917395,
  "tags": {
    "amenity": "pub",
    "name": "La Chope",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1440883088,
  "lat": 48.8370556,
  "lon": 2.3918823,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Krapaillo",
    "source": "survey 2014"
  }
},
{
  "type": "node",
  "id": 1440883097,
  "lat": 48.8372166,
  "lon": 2.3915674,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Toyama",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 1440913071,
  "lat": 48.8387373,
  "lon": 2.3961225,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Zic-Zinc",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1442297617,
  "lat": 48.8601399,
  "lon": 2.2750024,
  "tags": {
    "amenity": "restaurant",
    "name": "Bon",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1445091467,
  "lat": 48.8516698,
  "lon": 2.3805401,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "senegalese",
    "cuisine:fr": "sénégalaise",
    "name": "Le Nilaja"
  }
},
{
  "type": "node",
  "id": 1445872328,
  "lat": 48.8764828,
  "lon": 2.3370142,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Georgette",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1445872332,
  "lat": 48.8766560,
  "lon": 2.3371844,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Mian Fan",
    "opening_hours": "Mo-Su 12:00-15:00, 18:30-23:00",
    "phone": "+33-1-45262289",
    "smoking": "no",
    "source": "survey",
    "website": "http://www.mianfan.fr/"
  }
},
{
  "type": "node",
  "id": 1446934499,
  "lat": 48.8615448,
  "lon": 2.2755202,
  "tags": {
    "amenity": "cafe",
    "name": "Café Seize",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1448552958,
  "lat": 48.8706953,
  "lon": 2.3490853,
  "tags": {
    "amenity": "cafe",
    "name": "Delaville",
    "opening_hours": "Mo-Sa 11:00-02:00; Su 12:00-02:00",
    "phone": "+33-1-48244809",
    "smoking": "separated",
    "website": "http://www.delavillecafe.com/"
  }
},
{
  "type": "node",
  "id": 1448552959,
  "lat": 48.8703131,
  "lon": 2.3487884,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "seafood",
    "fax": "+33-1-55348081",
    "name": "La Criée",
    "operator": "La Criée",
    "phone": "+33-1-55348080",
    "website": "http://lacriee.fr"
  }
},
{
  "type": "node",
  "id": 1449497778,
  "lat": 48.8646079,
  "lon": 2.2780408,
  "tags": {
    "amenity": "cafe",
    "name": "Le Montespan",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1450939214,
  "lat": 48.8278377,
  "lon": 2.4034794,
  "tags": {
    "amenity": "bar",
    "name": "La tendresse"
  }
},
{
  "type": "node",
  "id": 1450939216,
  "lat": 48.8277778,
  "lon": 2.4042796,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "old_name": "Bambou vert"
  }
},
{
  "type": "node",
  "id": 1450939223,
  "lat": 48.8284062,
  "lon": 2.4034364,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "international",
    "name": "kanoun"
  }
},
{
  "type": "node",
  "id": 1450939226,
  "lat": 48.8277070,
  "lon": 2.4036725,
  "tags": {
    "amenity": "bar",
    "name": "Chez moustache"
  }
},
{
  "type": "node",
  "id": 1452096830,
  "lat": 48.8533507,
  "lon": 2.4016216,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1453551286,
  "lat": 48.8385818,
  "lon": 2.2889747,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "local",
    "name": "Le Lutèce",
    "source": "survey 2013"
  }
},
{
  "type": "node",
  "id": 1453551861,
  "lat": 48.8383246,
  "lon": 2.2880446,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "local",
    "name": "Vente à emporter"
  }
},
{
  "type": "node",
  "id": 1453551987,
  "lat": 48.8381278,
  "lon": 2.2872162,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "local"
  }
},
{
  "type": "node",
  "id": 1453588861,
  "lat": 48.8377112,
  "lon": 2.2593212,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "local",
    "name": "L\'Affiche"
  }
},
{
  "type": "node",
  "id": 1453604332,
  "lat": 48.8327770,
  "lon": 2.2562304,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "franco-orientales",
    "name": "L\'Auberge des Peupliers",
    "phone": "0146212215"
  }
},
{
  "type": "node",
  "id": 1454687141,
  "lat": 48.8662293,
  "lon": 2.3379767,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le grand véfour"
  }
},
{
  "type": "node",
  "id": 1454780816,
  "lat": 48.8663764,
  "lon": 2.2798730,
  "tags": {
    "amenity": "cafe",
    "name": "Presto Caffe",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1456695053,
  "lat": 48.8675784,
  "lon": 2.2807278,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "seafood",
    "name": "Le Stella",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1456695104,
  "lat": 48.8667500,
  "lon": 2.2803710,
  "tags": {
    "amenity": "restaurant",
    "name": "120 Cafe",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1459478739,
  "lat": 48.8594342,
  "lon": 2.4029865,
  "tags": {
    "amenity": "bar",
    "name": "La Flèche d\'Or"
  }
},
{
  "type": "node",
  "id": 1460886633,
  "lat": 48.8687850,
  "lon": 2.3380000,
  "tags": {
    "amenity": "restaurant",
    "name": "La Tour L"
  }
},
{
  "type": "node",
  "id": 1465462971,
  "lat": 48.8703423,
  "lon": 2.3428105,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Couronne d\'argent",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1465462980,
  "lat": 48.8710339,
  "lon": 2.3430453,
  "tags": {
    "amenity": "pub",
    "internet_access": "wlan",
    "internet_access:fee": "no",
    "microbrewery": "yes",
    "name": "French Beer Factory",
    "opening_hours": "Mo-Sa 10:00-02:00",
    "phone": "+33 1 44820472",
    "source": "survey",
    "website": "http://www.frenchbeerfactory.fr/"
  }
},
{
  "type": "node",
  "id": 1465803276,
  "lat": 48.8640834,
  "lon": 2.4423192,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Lys",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1466724635,
  "lat": 48.8731247,
  "lon": 2.3808610,
  "tags": {
    "addr:housenumber": "49",
    "addr:street": "Rue de Belleville",
    "amenity": "restaurant",
    "cuisine": "thai",
    "name": "Lao Siam"
  }
},
{
  "type": "node",
  "id": 1472157575,
  "lat": 48.8854582,
  "lon": 2.2983252,
  "tags": {
    "amenity": "cafe",
    "source": "survey",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 1473027347,
  "lat": 48.8324047,
  "lon": 2.2390508,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Le Soleil Levant",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1473397603,
  "lat": 48.8566013,
  "lon": 2.3030438,
  "tags": {
    "amenity": "restaurant",
    "name": "Au Gros Caillou"
  }
},
{
  "type": "node",
  "id": 1474889038,
  "lat": 48.8447537,
  "lon": 2.3186687,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "138",
    "addr:street": "Rue de Vaugirard",
    "amenity": "restaurant",
    "cuisine": "korean",
    "name": "L\'Arbre de Sel",
    "opening_hours": "Mo-Sa 12:00-15:00,19:00-23:00",
    "phone": "01 47 83 29 52",
    "website": "http://www.larbredesel-paris.com/"
  }
},
{
  "type": "node",
  "id": 1476820593,
  "lat": 48.8376916,
  "lon": 2.3077038,
  "tags": {
    "amenity": "cafe",
    "name": "Dis Vin Gaulois",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 1477602783,
  "lat": 48.8662137,
  "lon": 2.3353607,
  "tags": {
    "addr:housenumber": "37",
    "addr:postcode": "75001",
    "addr:street": "Rue Sainte-Anne",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Izakaya Taisho Ken 3"
  }
},
{
  "type": "node",
  "id": 1477602784,
  "lat": 48.8660390,
  "lon": 2.3352910,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Naniwa-ya"
  }
},
{
  "type": "node",
  "id": 1477602785,
  "lat": 48.8657884,
  "lon": 2.3351488,
  "tags": {
    "addr:housenumber": "7",
    "addr:postcode": "75001",
    "addr:street": "Rue Sainte-Anne",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "laï-laï ken - 来ㇰ"
  }
},
{
  "type": "node",
  "id": 1477617247,
  "lat": 48.8649854,
  "lon": 2.3569095,
  "tags": {
    "addr:housenumber": "9",
    "addr:postcode": "75003",
    "addr:street": "Rue Volta",
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Chez Xu",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 1477622193,
  "lat": 48.8645459,
  "lon": 2.3566348,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Bienvenue - 家乡菜",
    "name:fr": "Bienvenue",
    "name:zh": "家乡菜"
  }
},
{
  "type": "node",
  "id": 1477656343,
  "lat": 48.8635544,
  "lon": 2.3694256,
  "tags": {
    "addr:housenumber": "25",
    "addr:street": "Rue Oberkampf",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Petit Bal perdu",
    "opening_hours": "Mo-Fr 11:00-2:00;Sa 17:00-2:00",
    "phone": "01 48 06 28 23",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1477656351,
  "lat": 48.8634434,
  "lon": 2.3691079,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "maltese",
    "name": "Au coin de malte"
  }
},
{
  "type": "node",
  "id": 1477656356,
  "lat": 48.8637107,
  "lon": 2.3697771,
  "tags": {
    "amenity": "bar",
    "name": "Le Bar au mètre"
  }
},
{
  "type": "node",
  "id": 1481765820,
  "lat": 48.8719692,
  "lon": 2.3361261,
  "tags": {
    "amenity": "restaurant",
    "name": "Barramundi",
    "website": "www.barramundi.fr"
  }
},
{
  "type": "node",
  "id": 1481765828,
  "lat": 48.8715773,
  "lon": 2.3365388,
  "tags": {
    "amenity": "restaurant",
    "name": "Grand B"
  }
},
{
  "type": "node",
  "id": 1481765837,
  "lat": 48.8714095,
  "lon": 2.3355863,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Paradis Du Fruit"
  }
},
{
  "type": "node",
  "id": 1481765838,
  "lat": 48.8713898,
  "lon": 2.3354731,
  "tags": {
    "amenity": "pub",
    "name": "Léon de Bruxelles"
  }
},
{
  "type": "node",
  "id": 1482958090,
  "lat": 48.8752025,
  "lon": 2.3376055,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "greek",
    "email": "costa.rallis@sfr.fr",
    "name": "Athenais",
    "opening_hours": "Mo-Fr 12:00-02:00; Sa 18:00-02:00",
    "phone": "+33-1-48742887",
    "smoking": "no",
    "source": "survey",
    "website": "http://www.athenais-opera.com/"
  }
},
{
  "type": "node",
  "id": 1482958091,
  "lat": 48.8751468,
  "lon": 2.3355442,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "regional",
    "name": "Le Chantereine",
    "phone": "+33-148744986",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1482958092,
  "lat": 48.8750628,
  "lon": 2.3386203,
  "tags": {
    "amenity": "bar",
    "name": "Les Domaines de Sophie",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1482958093,
  "lat": 48.8750364,
  "lon": 2.3392304,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "fax": "+33-9-50556668",
    "internet_access": "wlan",
    "name": "Paradis des Pâtes",
    "opening_hours": "Mo-Sa 11:00-23:00",
    "smoking": "no",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1483017712,
  "lat": 48.8766742,
  "lon": 2.3373282,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "thai",
    "name": "Anko-Thaï",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1483017713,
  "lat": 48.8766460,
  "lon": 2.3368602,
  "tags": {
    "amenity": "restaurant",
    "name": "Café Aventura",
    "smoking": "no",
    "source": "survey",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 1483017719,
  "lat": 48.8769295,
  "lon": 2.3383704,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Jean",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1483017721,
  "lat": 48.8769349,
  "lon": 2.3331592,
  "tags": {
    "amenity": "restaurant",
    "name": "La Pommeraie"
  }
},
{
  "type": "node",
  "id": 1483017722,
  "lat": 48.8766672,
  "lon": 2.3325273,
  "tags": {
    "amenity": "cafe",
    "internet_access": "no",
    "name": "La Rotonde",
    "smoking": "no"
  }
},
{
  "type": "node",
  "id": 1483017723,
  "lat": 48.8767858,
  "lon": 2.3369975,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "regional",
    "name": "Le Bouquet",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1483017724,
  "lat": 48.8768033,
  "lon": 2.3372248,
  "tags": {
    "amenity": "pub",
    "name": "Le Saint-Georges",
    "smoking": "no"
  }
},
{
  "type": "node",
  "id": 1483017727,
  "lat": 48.8768072,
  "lon": 2.3364970,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Mamtajmahal",
    "smoking": "no",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1483017732,
  "lat": 48.8758550,
  "lon": 2.3388379,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Seize Neuf",
    "smoking": "no",
    "source": "survey",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 1483017733,
  "lat": 48.8767868,
  "lon": 2.3367967,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Yokhama",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1483017735,
  "lat": 48.8767450,
  "lon": 2.3377873,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1484054970,
  "lat": 48.8710457,
  "lon": 2.3357596,
  "tags": {
    "amenity": "bar",
    "name": "Le Vénitien"
  }
},
{
  "type": "node",
  "id": 1484054976,
  "lat": 48.8717139,
  "lon": 2.3340286,
  "tags": {
    "amenity": "pub",
    "name": "Murphy\'s House",
    "website": "http://www.murphyshouse.com"
  }
},
{
  "type": "node",
  "id": 1484054979,
  "lat": 48.8710277,
  "lon": 2.3356624,
  "tags": {
    "amenity": "restaurant",
    "name": "Patata"
  }
},
{
  "type": "node",
  "id": 1484054981,
  "lat": 48.8708929,
  "lon": 2.3349679,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Pizza Hut",
    "operator": "Yum! Brands"
  }
},
{
  "type": "node",
  "id": 1484054985,
  "lat": 48.8710045,
  "lon": 2.3355038,
  "tags": {
    "amenity": "restaurant",
    "name": "Pizza Pino"
  }
},
{
  "type": "node",
  "id": 1484054990,
  "lat": 48.8716898,
  "lon": 2.3334554,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 1486313938,
  "lat": 48.8716416,
  "lon": 2.3409433,
  "tags": {
    "amenity": "restaurant",
    "name": "Cedrus"
  }
},
{
  "type": "node",
  "id": 1486313943,
  "lat": 48.8734969,
  "lon": 2.3525798,
  "tags": {
    "amenity": "restaurant",
    "name": "Chez Madame Gen"
  }
},
{
  "type": "node",
  "id": 1486313953,
  "lat": 48.8711315,
  "lon": 2.3440128,
  "tags": {
    "amenity": "pub",
    "brewery": "guinness",
    "email": "contact@corcorans.fr",
    "name": "Corcoran\'s",
    "phone": "+33 1 40 39 00 16",
    "website": "www.corcorans.fr"
  }
},
{
  "type": "node",
  "id": 1486313964,
  "lat": 48.8706004,
  "lon": 2.3472072,
  "tags": {
    "amenity": "cafe",
    "name": "Deli\'s Cafe"
  }
},
{
  "type": "node",
  "id": 1486313975,
  "lat": 48.8706911,
  "lon": 2.3467398,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Express Bonne Nouvelle"
  }
},
{
  "type": "node",
  "id": 1486313987,
  "lat": 48.8709873,
  "lon": 2.3449321,
  "tags": {
    "amenity": "pub",
    "brewery": "chouffe",
    "name": "James Hetfeeld\'s Pub"
  }
},
{
  "type": "node",
  "id": 1486314015,
  "lat": 48.8707711,
  "lon": 2.3461822,
  "tags": {
    "amenity": "cafe",
    "name": "La Croissanterie"
  }
},
{
  "type": "node",
  "id": 1486314020,
  "lat": 48.8712885,
  "lon": 2.3431427,
  "tags": {
    "amenity": "cafe",
    "name": "La Porte Montmartre",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1486314023,
  "lat": 48.8721862,
  "lon": 2.3501755,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Duc D\'Enghien"
  }
},
{
  "type": "node",
  "id": 1486314025,
  "lat": 48.8708723,
  "lon": 2.3480533,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Gymnase"
  }
},
{
  "type": "node",
  "id": 1486314027,
  "lat": 48.8706525,
  "lon": 2.3467197,
  "tags": {
    "amenity": "bar",
    "name": "Le Petit Bistrot"
  }
},
{
  "type": "node",
  "id": 1486314048,
  "lat": 48.8737265,
  "lon": 2.3505928,
  "tags": {
    "amenity": "pub",
    "name": "Le Vizir"
  }
},
{
  "type": "node",
  "id": 1486314052,
  "lat": 48.8704690,
  "lon": 2.3480544,
  "tags": {
    "amenity": "restaurant",
    "name": "Madeleine Bastille"
  }
},
{
  "type": "node",
  "id": 1486314078,
  "lat": 48.8713484,
  "lon": 2.3428832,
  "tags": {
    "amenity": "cafe",
    "name": "O\'Sullivans café bar",
    "source": "survey",
    "website": "http://montmartre.osullivans-pubs.com"
  }
},
{
  "type": "node",
  "id": 1486314082,
  "lat": 48.8716176,
  "lon": 2.3411379,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Pastapapà"
  }
},
{
  "type": "node",
  "id": 1486314083,
  "lat": 48.8707327,
  "lon": 2.3464923,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Valponi"
  }
},
{
  "type": "node",
  "id": 1486314086,
  "lat": 48.8714861,
  "lon": 2.3419548,
  "tags": {
    "amenity": "restaurant",
    "name": "Victoria Station"
  }
},
{
  "type": "node",
  "id": 1486314116,
  "lat": 48.8715254,
  "lon": 2.3499824,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1486314120,
  "lat": 48.8716074,
  "lon": 2.3412011,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "sushi"
  }
},
{
  "type": "node",
  "id": 1486314143,
  "lat": 48.8716782,
  "lon": 2.3500401,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1488746015,
  "lat": 48.8829465,
  "lon": 2.2773171,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese"
  }
},
{
  "type": "node",
  "id": 1488753774,
  "lat": 48.8751154,
  "lon": 2.3557100,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'escalier"
  }
},
{
  "type": "node",
  "id": 1488753775,
  "lat": 48.8749802,
  "lon": 2.3559340,
  "tags": {
    "amenity": "restaurant",
    "name": "Sahil"
  }
},
{
  "type": "node",
  "id": 1488753776,
  "lat": 48.8744702,
  "lon": 2.3552896,
  "tags": {
    "amenity": "restaurant",
    "name": "Swinging Londress"
  }
},
{
  "type": "node",
  "id": 1488753777,
  "lat": 48.8742779,
  "lon": 2.3554847,
  "tags": {
    "amenity": "cafe",
    "name": "Virage Café"
  }
},
{
  "type": "node",
  "id": 1488772080,
  "lat": 48.8784174,
  "lon": 2.3564644,
  "tags": {
    "amenity": "bar",
    "name": "Aux Deux Gares"
  }
},
{
  "type": "node",
  "id": 1488772083,
  "lat": 48.8753708,
  "lon": 2.3561756,
  "tags": {
    "amenity": "cafe",
    "name": "Cafe de la Poste"
  }
},
{
  "type": "node",
  "id": 1488772084,
  "lat": 48.8769831,
  "lon": 2.3560361,
  "tags": {
    "amenity": "cafe",
    "name": "Café Royal"
  }
},
{
  "type": "node",
  "id": 1488772085,
  "lat": 48.8775010,
  "lon": 2.3561316,
  "tags": {
    "amenity": "cafe",
    "name": "Capuccino"
  }
},
{
  "type": "node",
  "id": 1488772087,
  "lat": 48.8773577,
  "lon": 2.3564531,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "african",
    "name": "Chez Carine"
  }
},
{
  "type": "node",
  "id": 1488772091,
  "lat": 48.8785393,
  "lon": 2.3568626,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Enquan"
  }
},
{
  "type": "node",
  "id": 1488772092,
  "lat": 48.8767619,
  "lon": 2.3563475,
  "tags": {
    "amenity": "restaurant",
    "name": "Grill Aspendos"
  }
},
{
  "type": "node",
  "id": 1488772096,
  "lat": 48.8786854,
  "lon": 2.3569358,
  "tags": {
    "amenity": "restaurant",
    "name": "Lahore"
  }
},
{
  "type": "node",
  "id": 1488772097,
  "lat": 48.8796001,
  "lon": 2.3577149,
  "tags": {
    "amenity": "bar",
    "name": "Le Camélia"
  }
},
{
  "type": "node",
  "id": 1488772098,
  "lat": 48.8779934,
  "lon": 2.3562593,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Catrina"
  }
},
{
  "type": "node",
  "id": 1488772099,
  "lat": 48.8782144,
  "lon": 2.3566970,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Laguiole"
  }
},
{
  "type": "node",
  "id": 1488772100,
  "lat": 48.8759988,
  "lon": 2.3559438,
  "tags": {
    "amenity": "cafe",
    "name": "Le Prevoyant"
  }
},
{
  "type": "node",
  "id": 1488772104,
  "lat": 48.8768603,
  "lon": 2.3560228,
  "tags": {
    "amenity": "bar",
    "name": "Stop Nord Est"
  }
},
{
  "type": "node",
  "id": 1488931969,
  "lat": 48.8837144,
  "lon": 2.2777607,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Romantica Caffé"
  }
},
{
  "type": "node",
  "id": 1488931971,
  "lat": 48.8807088,
  "lon": 2.2758590,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 1489177428,
  "lat": 48.8799927,
  "lon": 2.3591789,
  "tags": {
    "amenity": "restaurant",
    "name": "Chiaapas"
  }
},
{
  "type": "node",
  "id": 1489177440,
  "lat": 48.8822759,
  "lon": 2.3688196,
  "tags": {
    "amenity": "cafe",
    "name": "La Pointe La Fayette"
  }
},
{
  "type": "node",
  "id": 1489177443,
  "lat": 48.8811904,
  "lon": 2.3637372,
  "tags": {
    "amenity": "bar",
    "name": "La Rose Rouge"
  }
},
{
  "type": "node",
  "id": 1489177444,
  "lat": 48.8826836,
  "lon": 2.3705827,
  "tags": {
    "amenity": "cafe",
    "name": "Le Cadran Bleu",
    "source": "survey 2013"
  }
},
{
  "type": "node",
  "id": 1489177449,
  "lat": 48.8828802,
  "lon": 2.3713360,
  "tags": {
    "amenity": "cafe",
    "name": "Le Conservatoire"
  }
},
{
  "type": "node",
  "id": 1489177451,
  "lat": 48.8835025,
  "lon": 2.3736534,
  "tags": {
    "amenity": "cafe",
    "name": "Le Florent"
  }
},
{
  "type": "node",
  "id": 1489177454,
  "lat": 48.8827558,
  "lon": 2.3708586,
  "tags": {
    "amenity": "bar",
    "name": "Le Rond Point"
  }
},
{
  "type": "node",
  "id": 1489177467,
  "lat": 48.8812174,
  "lon": 2.3638517,
  "tags": {
    "amenity": "restaurant",
    "name": "Shebelé"
  }
},
{
  "type": "node",
  "id": 1489467283,
  "lat": 48.8750088,
  "lon": 2.3393609,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "regional",
    "name": "Le Cap Breton",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1489467285,
  "lat": 48.8757800,
  "lon": 2.3396684,
  "tags": {
    "amenity": "pub",
    "name": "Le Monaco",
    "smoking": "no",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1490090138,
  "lat": 48.8664385,
  "lon": 2.3508954,
  "tags": {
    "amenity": "cafe",
    "name": "Café Lazar"
  }
},
{
  "type": "node",
  "id": 1490172773,
  "lat": 48.8215923,
  "lon": 2.2625180,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "kebab"
  }
},
{
  "type": "node",
  "id": 1490181536,
  "lat": 48.8188921,
  "lon": 2.2554665,
  "tags": {
    "addr:city": "Issy-les-Moulineaux",
    "addr:housename": "Issy Guinguette",
    "addr:housenumber": "113bis",
    "addr:postcode": "92130",
    "addr:street": "Avenue de Verdun",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Issy Guinguette",
    "website": "http://www.chemindesvignes.fr/html/restaurant/restaurant.php"
  }
},
{
  "type": "node",
  "id": 1490547176,
  "lat": 48.8796296,
  "lon": 2.3553194,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "23",
    "addr:postcode": "75010",
    "addr:street": "Rue de Dunkerque",
    "amenity": "restaurant",
    "cuisine": "french",
    "internet_access": "no",
    "name": "Aux Villes du Nord",
    "outdoor_seating": "yes",
    "phone": "0145263155",
    "smoking": "outside",
    "takeaway": "no"
  }
},
{
  "type": "node",
  "id": 1490547177,
  "lat": 48.8800642,
  "lon": 2.3523843,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "internet_access": "wlan",
    "internet_access:fee": "no",
    "name": "Au bout en train",
    "phone": "0148789346"
  }
},
{
  "type": "node",
  "id": 1490547178,
  "lat": 48.8809546,
  "lon": 2.3510669,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "VILLA DEL PADRE",
    "phone": "0142852624",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 1490922320,
  "lat": 48.8689508,
  "lon": 2.3362959,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Anti Pasti"
  }
},
{
  "type": "node",
  "id": 1490922325,
  "lat": 48.8700724,
  "lon": 2.3349268,
  "tags": {
    "amenity": "bar",
    "name": "Aux Gorges du Tarn"
  }
},
{
  "type": "node",
  "id": 1490922333,
  "lat": 48.8667422,
  "lon": 2.3365735,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Chez Wong"
  }
},
{
  "type": "node",
  "id": 1490922341,
  "lat": 48.8682398,
  "lon": 2.3365168,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "sushi",
    "name": "Fuji Sushi"
  }
},
{
  "type": "node",
  "id": 1490922343,
  "lat": 48.8696120,
  "lon": 2.3356753,
  "tags": {
    "amenity": "restaurant",
    "name": "Grand Comptoir"
  }
},
{
  "type": "node",
  "id": 1490922346,
  "lat": 48.8676561,
  "lon": 2.3370904,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Hokkaido"
  }
},
{
  "type": "node",
  "id": 1490922355,
  "lat": 48.8675328,
  "lon": 2.3370273,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Kyotori"
  }
},
{
  "type": "node",
  "id": 1490922360,
  "lat": 48.8698393,
  "lon": 2.3358297,
  "tags": {
    "amenity": "restaurant",
    "name": "La Bombe"
  }
},
{
  "type": "node",
  "id": 1490922362,
  "lat": 48.8708380,
  "lon": 2.3349612,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "La Marina"
  }
},
{
  "type": "node",
  "id": 1490922368,
  "lat": 48.8681500,
  "lon": 2.3362914,
  "tags": {
    "amenity": "bar",
    "name": "La Tartine"
  }
},
{
  "type": "node",
  "id": 1490922371,
  "lat": 48.8672079,
  "lon": 2.3368573,
  "tags": {
    "amenity": "bar",
    "name": "Le Cesar"
  }
},
{
  "type": "node",
  "id": 1490922373,
  "lat": 48.8688219,
  "lon": 2.3359090,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Petit Choiseul"
  }
},
{
  "type": "node",
  "id": 1490922378,
  "lat": 48.8688160,
  "lon": 2.3362566,
  "tags": {
    "amenity": "restaurant",
    "name": "Okinawa"
  }
},
{
  "type": "node",
  "id": 1490922393,
  "lat": 48.8688035,
  "lon": 2.3365534,
  "tags": {
    "amenity": "restaurant",
    "name": "Restaurant Indien Gandhi Opera"
  }
},
{
  "type": "node",
  "id": 1490922397,
  "lat": 48.8666564,
  "lon": 2.3369830,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Satoshi"
  }
},
{
  "type": "node",
  "id": 1490922403,
  "lat": 48.8669153,
  "lon": 2.3365074,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Toyotomi"
  }
},
{
  "type": "node",
  "id": 1490922416,
  "lat": 48.8702490,
  "lon": 2.3349166,
  "tags": {
    "amenity": "restaurant",
    "name": "Tresor du Kashmir"
  }
},
{
  "type": "node",
  "id": 1490922421,
  "lat": 48.8688150,
  "lon": 2.3361103,
  "tags": {
    "amenity": "restaurant",
    "name": "Yuxi"
  }
},
{
  "type": "node",
  "id": 1490922437,
  "lat": 48.8676983,
  "lon": 2.3366997,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 1490922439,
  "lat": 48.8681903,
  "lon": 2.3364995,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "sushi"
  }
},
{
  "type": "node",
  "id": 1490922461,
  "lat": 48.8678747,
  "lon": 2.3364447,
  "tags": {
    "amenity": "restaurant",
    "name": "noodle"
  }
},
{
  "type": "node",
  "id": 1491245208,
  "lat": 48.8200189,
  "lon": 2.2399919,
  "tags": {
    "amenity": "cafe",
    "name": "L\'Historic"
  }
},
{
  "type": "node",
  "id": 1491914923,
  "lat": 48.8974645,
  "lon": 2.2563407,
  "tags": {
    "amenity": "bar",
    "name": "Le Chichito"
  }
},
{
  "type": "node",
  "id": 1494181759,
  "lat": 48.8145410,
  "lon": 2.2347570,
  "tags": {
    "amenity": "cafe",
    "name": "Les Tilleuls",
    "shop": "newsagent",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1494182280,
  "lat": 48.8149500,
  "lon": 2.2347290,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "crepe",
    "name": "Le Belem",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1494265643,
  "lat": 48.8751334,
  "lon": 2.3514260,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "diet:vegetarian": "yes",
    "name": "Nanashi"
  }
},
{
  "type": "node",
  "id": 1499641686,
  "lat": 48.8493398,
  "lon": 2.2978655,
  "tags": {
    "FIXME": "add name, ajouter le nom",
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1499642085,
  "lat": 48.8501986,
  "lon": 2.2951340,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1503093260,
  "lat": 48.8658609,
  "lon": 2.3370619,
  "tags": {
    "amenity": "restaurant",
    "name": "Damouri"
  }
},
{
  "type": "node",
  "id": 1503093266,
  "lat": 48.8641660,
  "lon": 2.3361960,
  "tags": {
    "amenity": "restaurant",
    "name": "Eric Sertour"
  }
},
{
  "type": "node",
  "id": 1503093273,
  "lat": 48.8656996,
  "lon": 2.3366338,
  "tags": {
    "addr:housenumber": "39",
    "addr:street": "Rue de Richelieu",
    "amenity": "restaurant",
    "cuisine": "american",
    "fax": "+3340150327",
    "name": "H.A.N.D (Have A Nice Day)",
    "phone": "+3340150327",
    "ref:FR:SIRET": "440 514 495",
    "source": "http://gouessej.wordpress.com/2014/04/07/h-a-n-d-have-a-nice-day-restaurant-americain-a-paris-h-a-n-d-have-a-nice-day-american-restaurant-in-paris/"
  }
},
{
  "type": "node",
  "id": 1503093275,
  "lat": 48.8651667,
  "lon": 2.3364852,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'Ecrin"
  }
},
{
  "type": "node",
  "id": 1503093277,
  "lat": 48.8652254,
  "lon": 2.3367395,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'Oustaou"
  }
},
{
  "type": "node",
  "id": 1503093279,
  "lat": 48.8658764,
  "lon": 2.3368066,
  "tags": {
    "amenity": "bar",
    "name": "La Fontaine Molière"
  }
},
{
  "type": "node",
  "id": 1503093287,
  "lat": 48.8659797,
  "lon": 2.3371165,
  "tags": {
    "amenity": "cafe",
    "name": "Siva\'s Lunch Coffee"
  }
},
{
  "type": "node",
  "id": 1504098164,
  "lat": 48.8599096,
  "lon": 2.3178151,
  "tags": {
    "amenity": "cafe",
    "name": "Au Petit Palais"
  }
},
{
  "type": "node",
  "id": 1504098175,
  "lat": 48.8698972,
  "lon": 2.3290820,
  "tags": {
    "amenity": "cafe",
    "name": "Capucine"
  }
},
{
  "type": "node",
  "id": 1504098176,
  "lat": 48.8703362,
  "lon": 2.3315753,
  "tags": {
    "amenity": "restaurant",
    "name": "Chez Clément"
  }
},
{
  "type": "node",
  "id": 1504098192,
  "lat": 48.8597079,
  "lon": 2.3182507,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'Assemblee"
  }
},
{
  "type": "node",
  "id": 1504098202,
  "lat": 48.8666350,
  "lon": 2.3099131,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Grand Palais"
  }
},
{
  "type": "node",
  "id": 1504098203,
  "lat": 48.8703978,
  "lon": 2.3225405,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Savio"
  }
},
{
  "type": "node",
  "id": 1504098216,
  "lat": 48.8710247,
  "lon": 2.3249533,
  "tags": {
    "amenity": "cafe",
    "name": "Madeleine"
  }
},
{
  "type": "node",
  "id": 1504098218,
  "lat": 48.8702620,
  "lon": 2.3312290,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Opera Mandarin"
  }
},
{
  "type": "node",
  "id": 1504098227,
  "lat": 48.8702706,
  "lon": 2.3312786,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Opera Ramen"
  }
},
{
  "type": "node",
  "id": 1504098233,
  "lat": 48.8706031,
  "lon": 2.3221827,
  "tags": {
    "amenity": "restaurant",
    "name": "Pancake Square"
  }
},
{
  "type": "node",
  "id": 1504098325,
  "lat": 48.8707016,
  "lon": 2.3218346,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 1506448889,
  "lat": 48.8275825,
  "lon": 2.3495237,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1506448896,
  "lat": 48.8275665,
  "lon": 2.3493951,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 1506448899,
  "lat": 48.8277214,
  "lon": 2.3493461,
  "tags": {
    "amenity": "restaurant",
    "name": "Les Cailloux"
  }
},
{
  "type": "node",
  "id": 1506448904,
  "lat": 48.8278072,
  "lon": 2.3494399,
  "tags": {
    "amenity": "cafe",
    "name": "Le Diamant"
  }
},
{
  "type": "node",
  "id": 1506480687,
  "lat": 48.8747866,
  "lon": 2.3414819,
  "tags": {
    "amenity": "pub",
    "internet_access": "no",
    "name": "Saint-Georges\' Tavern",
    "smoking": "isolated",
    "source": "survey 2013"
  }
},
{
  "type": "node",
  "id": 1506812684,
  "lat": 48.8906470,
  "lon": 2.2452910,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Au Jardin des Corolles",
    "phone": "01.46.98.07.81",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1506812737,
  "lat": 48.8959928,
  "lon": 2.2259452,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Kyoto",
    "opening_hours": "Mo-Sa 00:00-03:00,10:30-14:00,15:00-24:00",
    "source": "survey",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 1506812747,
  "lat": 48.8946436,
  "lon": 2.2272591,
  "tags": {
    "amenity": "restaurant",
    "name": "LUNIVIA (ouverture prochaine)",
    "note:fr": "Bar - Restaurant - Brasserie",
    "ref:FR:SIRET": "53362089400014",
    "ref:RCS": "Nanterre B 533 620 894",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1506812952,
  "lat": 48.8906510,
  "lon": 2.2435817,
  "tags": {
    "amenity": "cafe",
    "name": "Starbucks Coffee",
    "source": "survey",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 1507133861,
  "lat": 48.8190063,
  "lon": 2.2498915,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "31"
  }
},
{
  "type": "node",
  "id": 1507655307,
  "lat": 48.8582656,
  "lon": 2.3882446,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Little Hanoi",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 1512693745,
  "lat": 48.8131923,
  "lon": 2.3197787,
  "tags": {
    "addr:postcode": "92120",
    "amenity": "bar",
    "name": "Chistera"
  }
},
{
  "type": "node",
  "id": 1514137511,
  "lat": 48.9016173,
  "lon": 2.2435133,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "source:amenity": "survey"
  }
},
{
  "type": "node",
  "id": 1514201692,
  "lat": 48.8952846,
  "lon": 2.2510001,
  "tags": {
    "amenity": "pub",
    "name": "Garden Café",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 1514595760,
  "lat": 48.8881295,
  "lon": 2.3773067,
  "tags": {
    "amenity": "cafe",
    "name": "Le Bellerive",
    "source": "survey 2013"
  }
},
{
  "type": "node",
  "id": 1515730556,
  "lat": 48.9080631,
  "lon": 2.2676004,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese"
  }
},
{
  "type": "node",
  "id": 1517547950,
  "lat": 48.8973926,
  "lon": 2.2478899,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "sushi",
    "source:amenity": "survey"
  }
},
{
  "type": "node",
  "id": 1518215330,
  "lat": 48.8166355,
  "lon": 2.3215022,
  "tags": {
    "addr:postcode": "92120",
    "addr:street": "Avenue Henri Ginoux",
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Pizza Roma",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 1519206517,
  "lat": 48.9044410,
  "lon": 2.3289474,
  "tags": {
    "amenity": "cafe",
    "name": "L\'atlantique"
  }
},
{
  "type": "node",
  "id": 1519435252,
  "lat": 48.9042873,
  "lon": 2.2732179,
  "tags": {
    "amenity": "restaurant",
    "name": "Douce Heure"
  }
},
{
  "type": "node",
  "id": 1519804081,
  "lat": 48.8658900,
  "lon": 2.3506042,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Delice Leader - 有名堂",
    "name:en": "Delice Leader",
    "name:fr": "Delice Leader",
    "name:zh": "有名堂"
  }
},
{
  "type": "node",
  "id": 1519809386,
  "lat": 48.8543675,
  "lon": 2.3835627,
  "tags": {
    "addr:housenumber": "97",
    "addr:street": "Rue de Charonne",
    "amenity": "restaurant",
    "cuisine": "chinese - Fondue pékinoise",
    "name": "Au ciel - 锅色天香",
    "name:fr": "Au ciel",
    "name:zh": "锅色天香",
    "name:zh_pinyin": "guō sè tiān xiāng"
  }
},
{
  "type": "node",
  "id": 1520970436,
  "lat": 48.8658986,
  "lon": 2.3742587,
  "tags": {
    "amenity": "restaurant",
    "name": "La Gouttière"
  }
},
{
  "type": "node",
  "id": 1520970441,
  "lat": 48.8663671,
  "lon": 2.3715603,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "sushi",
    "name": "Sakura"
  }
},
{
  "type": "node",
  "id": 1520973124,
  "lat": 48.8648305,
  "lon": 2.3731176,
  "tags": {
    "addr:housenumber": "63",
    "addr:street": "Rue Oberkampf",
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Asian Wok",
    "phone": "01 43 57 63 24",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1522002983,
  "lat": 48.8972266,
  "lon": 2.3855240,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "steak_house",
    "name": "Hippopotamus"
  }
},
{
  "type": "node",
  "id": 1526196957,
  "lat": 48.8249349,
  "lon": 2.2442024,
  "tags": {
    "amenity": "restaurant",
    "name": "Ten Bar",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1528450503,
  "lat": 48.8796615,
  "lon": 2.3550800,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "23",
    "addr:postcode": "75010",
    "addr:street": "Rue de Dunkerque",
    "amenity": "restaurant",
    "cuisine": "french",
    "internet_access": "no",
    "name": "Terminus Nord",
    "outdoor_seating": "yes",
    "smoking": "outside",
    "takeaway": "no",
    "website": "www.terminusnord.com"
  }
},
{
  "type": "node",
  "id": 1528612281,
  "lat": 48.8818140,
  "lon": 2.3525350,
  "tags": {
    "amenity": "cafe",
    "created_by": "iLOE 1.9",
    "name": "Ambroise Pare"
  }
},
{
  "type": "node",
  "id": 1528618340,
  "lat": 48.8798780,
  "lon": 2.3540920,
  "tags": {
    "amenity": "restaurant",
    "created_by": "iLOE 1.9",
    "name": "Le zinc du Nord"
  }
},
{
  "type": "node",
  "id": 1528620557,
  "lat": 48.8795907,
  "lon": 2.3547699,
  "tags": {
    "amenity": "cafe",
    "atm": "no",
    "drive_through": "no",
    "name": "Au baroudeur patient",
    "outdoor_seating": "yes",
    "smoking": "outside",
    "takeaway": "no"
  }
},
{
  "type": "node",
  "id": 1528665349,
  "lat": 48.8613780,
  "lon": 2.3495790,
  "tags": {
    "amenity": "restaurant",
    "name": "Paris Halles Café"
  }
},
{
  "type": "node",
  "id": 1528675432,
  "lat": 48.8575110,
  "lon": 2.3466500,
  "tags": {
    "amenity": "restaurant",
    "created_by": "iLOE 1.9",
    "name": "Au vieux Chatelet"
  }
},
{
  "type": "node",
  "id": 1528681211,
  "lat": 48.8549950,
  "lon": 2.3458720,
  "tags": {
    "amenity": "restaurant",
    "created_by": "iLOE 1.9",
    "name": "L\'annexe"
  }
},
{
  "type": "node",
  "id": 1528684099,
  "lat": 48.8543860,
  "lon": 2.3452440,
  "tags": {
    "amenity": "restaurant",
    "created_by": "iLOE 1.9",
    "name": "Le soleil d\'or"
  }
},
{
  "type": "node",
  "id": 1528685379,
  "lat": 48.8538530,
  "lon": 2.3437110,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Paradis du Fruit"
  }
},
{
  "type": "node",
  "id": 1528700502,
  "lat": 48.8526640,
  "lon": 2.3534610,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Flore en l’Isle"
  }
},
{
  "type": "node",
  "id": 1528701852,
  "lat": 48.8530320,
  "lon": 2.3533850,
  "tags": {
    "amenity": "restaurant",
    "name": "La Brasserie de l’île Saint-Louis"
  }
},
{
  "type": "node",
  "id": 1528702647,
  "lat": 48.8529300,
  "lon": 2.3536810,
  "tags": {
    "amenity": "cafe",
    "name": "Le Saint-Régis"
  }
},
{
  "type": "node",
  "id": 1528705381,
  "lat": 48.8546430,
  "lon": 2.3547940,
  "tags": {
    "amenity": "cafe",
    "created_by": "iLOE 1.9",
    "name": "Cafe Louis Philippe"
  }
},
{
  "type": "node",
  "id": 1528726436,
  "lat": 48.8523740,
  "lon": 2.3670920,
  "tags": {
    "amenity": "restaurant",
    "created_by": "iLOE 1.9",
    "name": "Le week-end"
  }
},
{
  "type": "node",
  "id": 1528967380,
  "lat": 48.8978723,
  "lon": 2.2405927,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "turkish",
    "name": "Arda Kebab",
    "source:amenity": "survey",
    "source:cuisine": "survey"
  }
},
{
  "type": "node",
  "id": 1528967397,
  "lat": 48.8979806,
  "lon": 2.2408931,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "A la Bonne Adresse",
    "source": "Microsoft Bing satellite",
    "source:amenity": "survey",
    "source:cuisine": "survey",
    "source:name": "survey"
  }
},
{
  "type": "node",
  "id": 1528972863,
  "lat": 48.8980639,
  "lon": 2.2411239,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Lune Sushi",
    "source": "Microsoft Bing satellite",
    "source:amenity": "survey",
    "source:cuisine": "survey",
    "source:name": "survey"
  }
},
{
  "type": "node",
  "id": 1528994342,
  "lat": 48.9003498,
  "lon": 2.2451603,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "turkish",
    "name": "Paristanbul",
    "source:amenity": "survey",
    "source:cuisine": "survey",
    "source:name": "survey"
  }
},
{
  "type": "node",
  "id": 1531018549,
  "lat": 48.8805044,
  "lon": 2.3746913,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 1531951109,
  "lat": 48.8986483,
  "lon": 2.2465446,
  "tags": {
    "amenity": "bar",
    "name": "Kenflo",
    "source": "Microsoft Bing satellite",
    "source:amenity": "survey",
    "source:cuisine": "survey",
    "source:name": "survey"
  }
},
{
  "type": "node",
  "id": 1531951131,
  "lat": 48.8982751,
  "lon": 2.2468894,
  "tags": {
    "amenity": "bar",
    "name": "Le Porto",
    "source": "Microsoft Bing satellite",
    "source:amenity": "survey",
    "source:cuisine": "survey",
    "source:name": "survey"
  }
},
{
  "type": "node",
  "id": 1531951326,
  "lat": 48.8991473,
  "lon": 2.2457779,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "thai",
    "source": "Microsoft Bing satellite",
    "source:amenity": "survey",
    "source:cuisine": "survey",
    "source:name": "survey"
  }
},
{
  "type": "node",
  "id": 1534084672,
  "lat": 48.8237696,
  "lon": 2.2494657,
  "tags": {
    "amenity": "restaurant",
    "name": "Brasserie de l\'Île",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1539869669,
  "lat": 48.8361075,
  "lon": 2.3240698,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Aasman",
    "source:amenity": "survey",
    "source:cuisine": "survey",
    "source:name": "survey"
  }
},
{
  "type": "node",
  "id": 1540095195,
  "lat": 48.9031057,
  "lon": 2.2683584,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Don Luigi"
  }
},
{
  "type": "node",
  "id": 1540095205,
  "lat": 48.9022712,
  "lon": 2.2682084,
  "tags": {
    "amenity": "restaurant",
    "name": "Le St Charles"
  }
},
{
  "type": "node",
  "id": 1541468836,
  "lat": 48.8246134,
  "lon": 2.4085703,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Bistro de Charenton"
  }
},
{
  "type": "node",
  "id": 1541468839,
  "lat": 48.8245079,
  "lon": 2.4087393,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "L\'alliance"
  }
},
{
  "type": "node",
  "id": 1541591953,
  "lat": 48.8697793,
  "lon": 2.3750857,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "couscous",
    "name": "Café Hafa",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1541591959,
  "lat": 48.8694594,
  "lon": 2.3740498,
  "tags": {
    "amenity": "cafe",
    "name": "Le Saint-Joseph",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1541591962,
  "lat": 48.8695851,
  "lon": 2.3744330,
  "tags": {
    "amenity": "pub",
    "name": "Les Artistes Pub",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1542715734,
  "lat": 48.8616152,
  "lon": 2.3446790,
  "tags": {
    "amenity": "restaurant",
    "name": "Hippopotamus"
  }
},
{
  "type": "node",
  "id": 1542715737,
  "lat": 48.8616509,
  "lon": 2.3443800,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Louchébem",
    "opening_hours": "Mo-Sa 12:30-15:00,19:00-23:00",
    "phone": "01 42 33 12 99",
    "website": "http://le-louchebem.pagesperso-orange.fr/home.html"
  }
},
{
  "type": "node",
  "id": 1544137673,
  "lat": 48.8188554,
  "lon": 2.2495009,
  "tags": {
    "amenity": "restaurant",
    "name": "Palais Lotus",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1544866091,
  "lat": 48.8537952,
  "lon": 2.4109052,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'étoile de Montreuil"
  }
},
{
  "type": "node",
  "id": 1544866110,
  "lat": 48.8535604,
  "lon": 2.4103242,
  "tags": {
    "amenity": "bar",
    "name": "Le Davout"
  }
},
{
  "type": "node",
  "id": 1544890363,
  "lat": 48.8258219,
  "lon": 2.4066625,
  "tags": {
    "amenity": "cafe",
    "name": "Caffé du Métro"
  }
},
{
  "type": "node",
  "id": 1544890365,
  "lat": 48.8258786,
  "lon": 2.4044670,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "L\'esplanade"
  }
},
{
  "type": "node",
  "id": 1544890373,
  "lat": 48.8530681,
  "lon": 2.4104272,
  "tags": {
    "amenity": "bar",
    "name": "La Reale"
  }
},
{
  "type": "node",
  "id": 1544890380,
  "lat": 48.8259571,
  "lon": 2.4071178,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Paris-Sports"
  }
},
{
  "type": "node",
  "id": 1544890386,
  "lat": 48.8257808,
  "lon": 2.4073707,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Le pavillon céleste"
  }
},
{
  "type": "node",
  "id": 1544919390,
  "lat": 48.8251812,
  "lon": 2.4076886,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Bienvenue"
  }
},
{
  "type": "node",
  "id": 1544948497,
  "lat": 48.8261537,
  "lon": 2.4058090,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Angelo"
  }
},
{
  "type": "node",
  "id": 1544961967,
  "lat": 48.8275343,
  "lon": 2.4045775,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "lebanese",
    "name": "Léa"
  }
},
{
  "type": "node",
  "id": 1545804603,
  "lat": 48.8108498,
  "lon": 2.3136914,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "sushi",
    "name": "Sushi Yaki"
  }
},
{
  "type": "node",
  "id": 1546164123,
  "lat": 48.8598716,
  "lon": 2.3677862,
  "tags": {
    "amenity": "restaurant",
    "diet:vegan": "only",
    "name": "Loving Hut",
    "opening_hours": "Mo-Sa 11:30-15:00,18:00-22:30",
    "phone": "+33148064384",
    "website": "www.lovinghut.fr"
  }
},
{
  "type": "node",
  "id": 1547149710,
  "lat": 48.8171415,
  "lon": 2.2485515,
  "tags": {
    "amenity": "restaurant",
    "name": "Nova Kfé",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1547149714,
  "lat": 48.8175649,
  "lon": 2.2490205,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Thon",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1547972240,
  "lat": 48.8498873,
  "lon": 2.3503879,
  "tags": {
    "amenity": "restaurant",
    "name": "Anahuacalli"
  }
},
{
  "type": "node",
  "id": 1548438603,
  "lat": 48.9087233,
  "lon": 2.4544409,
  "tags": {
    "addr:street": "Promenade Jean Rostand",
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Farmento"
  }
},
{
  "type": "node",
  "id": 1548662473,
  "lat": 48.8165085,
  "lon": 2.2475633,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Anandh",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1548662481,
  "lat": 48.8163747,
  "lon": 2.2474381,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Oïsushi",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1548662482,
  "lat": 48.8162734,
  "lon": 2.2473883,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "crepe",
    "name": "Sucré Salé",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1552648428,
  "lat": 48.8176100,
  "lon": 2.4671043,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Le Palais d\'Or de Joinville"
  }
},
{
  "type": "node",
  "id": 1563764760,
  "lat": 48.8376093,
  "lon": 2.3551119,
  "tags": {
    "amenity": "bar",
    "name": "Au Petit Bar",
    "wifi": "yes"
  }
},
{
  "type": "node",
  "id": 1563766079,
  "lat": 48.8377658,
  "lon": 2.3556217,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'Anacréon"
  }
},
{
  "type": "node",
  "id": 1564466945,
  "lat": 48.8484590,
  "lon": 2.3503760,
  "tags": {
    "amenity": "cafe",
    "cuisine": "french",
    "name": "St-Victor",
    "outdoor_seating": "yes"
  }
},
{
  "type": "node",
  "id": 1567274179,
  "lat": 48.8956140,
  "lon": 2.2800285,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 1568009723,
  "lat": 48.8373866,
  "lon": 2.2787503,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "99",
    "addr:postcode": "75015",
    "addr:street": "Rue Balard",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "CokiSushi",
    "website": "http://www.cokisushi.fr"
  }
},
{
  "type": "node",
  "id": 1568009731,
  "lat": 48.8324214,
  "lon": 2.2790418,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Eau des Lys"
  }
},
{
  "type": "node",
  "id": 1568009735,
  "lat": 48.8376849,
  "lon": 2.2783476,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "98",
    "addr:postcode": "75015",
    "addr:street": "Rue Balard",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Eizosushi"
  }
},
{
  "type": "node",
  "id": 1568009760,
  "lat": 48.8380700,
  "lon": 2.2782824,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "90",
    "addr:postcode": "75015",
    "addr:street": "Rue Balard",
    "amenity": "cafe",
    "name": "L\'Authentik"
  }
},
{
  "type": "node",
  "id": 1568009811,
  "lat": 48.8321145,
  "lon": 2.2799037,
  "tags": {
    "amenity": "bar",
    "name": "Le Commensal"
  }
},
{
  "type": "node",
  "id": 1568009816,
  "lat": 48.8370124,
  "lon": 2.2782827,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Terminus Balard"
  }
},
{
  "type": "node",
  "id": 1568009835,
  "lat": 48.8373420,
  "lon": 2.2787571,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "99",
    "addr:postcode": "75015",
    "addr:street": "Rue Balard",
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Pizza Marina"
  }
},
{
  "type": "node",
  "id": 1569032833,
  "lat": 48.8584947,
  "lon": 2.3265348,
  "tags": {
    "FIXME": "deux café avec le même nom ?",
    "amenity": "restaurant",
    "name": "Le Café des Lettres"
  }
},
{
  "type": "node",
  "id": 1569035224,
  "lat": 48.8640655,
  "lon": 2.3345802,
  "tags": {
    "addr:housenumber": "8",
    "addr:street": "Rue de l\'Échelle",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Zen",
    "phone": "01 42 61 93 99",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 1574980708,
  "lat": 48.8936313,
  "lon": 2.3222087,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Chez Irene et Bernard"
  }
},
{
  "type": "node",
  "id": 1574981367,
  "lat": 48.8943755,
  "lon": 2.3204813,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Andy Sushi"
  }
},
{
  "type": "node",
  "id": 1574982593,
  "lat": 48.8935220,
  "lon": 2.3225305,
  "tags": {
    "amenity": "cafe",
    "name": "Le voltigeur"
  }
},
{
  "type": "node",
  "id": 1579618626,
  "lat": 48.8248377,
  "lon": 2.3236483,
  "tags": {
    "addr:housenumber": "34",
    "addr:postcode": "75014",
    "addr:street": "Rue Friant",
    "amenity": "restaurant",
    "cuisine": "vietnamese",
    "name": "La baie d\'Halong"
  }
},
{
  "type": "node",
  "id": 1579618645,
  "lat": 48.8238612,
  "lon": 2.3234793,
  "tags": {
    "addr:housenumber": "179",
    "addr:postcode": "75014",
    "addr:street": "Boulevard Brune",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Casanova"
  }
},
{
  "type": "node",
  "id": 1579618649,
  "lat": 48.8239653,
  "lon": 2.3231923,
  "tags": {
    "addr:housenumber": "177",
    "addr:postcode": "75014",
    "addr:street": "Boulevard Brune",
    "amenity": "bar",
    "name": "La Bouffarde"
  }
},
{
  "type": "node",
  "id": 1579618654,
  "lat": 48.8243856,
  "lon": 2.3234123,
  "tags": {
    "addr:housenumber": "40",
    "addr:postcode": "75014",
    "addr:street": "Rue Friant",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Les Vendanges",
    "website": "http://www.lesvendanges-paris.fr"
  }
},
{
  "type": "node",
  "id": 1579618676,
  "lat": 48.8238600,
  "lon": 2.3236681,
  "tags": {
    "amenity": "cafe",
    "name": "L\'Olivier"
  }
},
{
  "type": "node",
  "id": 1579618722,
  "lat": 48.8242408,
  "lon": 2.3233372,
  "tags": {
    "addr:housenumber": "42",
    "addr:postcode": "75014",
    "addr:street": "Rue Friant",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Sonatines",
    "note": "formerly \"A la Bonne Table\""
  }
},
{
  "type": "node",
  "id": 1579628422,
  "lat": 48.8270872,
  "lon": 2.3248231,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1579642945,
  "lat": 48.8280919,
  "lon": 2.3264056,
  "tags": {
    "amenity": "restaurant",
    "name": "Brasserie Zeyer"
  }
},
{
  "type": "node",
  "id": 1579642957,
  "lat": 48.8274776,
  "lon": 2.3257190,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1579646872,
  "lat": 48.8280761,
  "lon": 2.3273229,
  "tags": {
    "amenity": "bar",
    "name": "Le Bouquet d\'Alésia"
  }
},
{
  "type": "node",
  "id": 1579656826,
  "lat": 48.8291215,
  "lon": 2.3276639,
  "tags": {
    "amenity": "cafe",
    "name": "Starbuck\'s"
  }
},
{
  "type": "node",
  "id": 1579656828,
  "lat": 48.8290544,
  "lon": 2.3276046,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "steak_house",
    "name": "Hippopotamus"
  }
},
{
  "type": "node",
  "id": 1579657907,
  "lat": 48.8291991,
  "lon": 2.3278057,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1579665766,
  "lat": 48.8236221,
  "lon": 2.3247553,
  "tags": {
    "amenity": "cafe",
    "name": "Auto Passion",
    "website": "http://www.autopassioncafe.fr"
  }
},
{
  "type": "node",
  "id": 1581691060,
  "lat": 48.8474011,
  "lon": 2.3777561,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "103",
    "addr:street": "Rue de Charenton",
    "amenity": "cafe",
    "brewery": "kronenbourg",
    "cuisine": "french",
    "name": "L\'escale de Lyon",
    "opening_hours": "Mo-Fr 09:00-20:00"
  }
},
{
  "type": "node",
  "id": 1582327745,
  "lat": 48.8752927,
  "lon": 2.3875604,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "brunch",
    "name": "Les 400 coups",
    "website": "http://www.les400coups.eu"
  }
},
{
  "type": "node",
  "id": 1583624747,
  "lat": 48.8403734,
  "lon": 2.3690860,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "I Fratelli"
  }
},
{
  "type": "node",
  "id": 1583624750,
  "lat": 48.8388484,
  "lon": 2.3702978,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Kleemend\'s"
  }
},
{
  "type": "node",
  "id": 1583628947,
  "lat": 48.8376057,
  "lon": 2.3732965,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Lili & Marcel"
  }
},
{
  "type": "node",
  "id": 1583628948,
  "lat": 48.8365782,
  "lon": 2.3714028,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Djoon"
  }
},
{
  "type": "node",
  "id": 1583739852,
  "lat": 48.8397347,
  "lon": 2.3696009,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Vauxhall"
  }
},
{
  "type": "node",
  "id": 1583739853,
  "lat": 48.8359107,
  "lon": 2.3720037,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Bureau"
  }
},
{
  "type": "node",
  "id": 1585168700,
  "lat": 48.8458375,
  "lon": 2.4227748,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Cadre",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2012"
  }
},
{
  "type": "node",
  "id": 1585523625,
  "lat": 48.8315850,
  "lon": 2.3242790,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "16",
    "addr:postcode": "75014",
    "addr:street": "Rue des Plantes",
    "amenity": "restaurant",
    "cuisine": "french",
    "delivery": "no",
    "name": "Le Bis",
    "outdoor_seating": "yes",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 1585553163,
  "lat": 48.8732552,
  "lon": 2.3604924,
  "tags": {
    "amenity": "restaurant",
    "name": "La Paella"
  }
},
{
  "type": "node",
  "id": 1585553334,
  "lat": 48.8731705,
  "lon": 2.3596985,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 1585558964,
  "lat": 48.8720524,
  "lon": 2.3605992,
  "tags": {
    "addr:housenumber": "15",
    "addr:postcode": "75010",
    "addr:street": "Rue Lucien Sampaix",
    "amenity": "restaurant",
    "name": "Bob\'s juice bar"
  }
},
{
  "type": "node",
  "id": 1589659194,
  "lat": 48.8203080,
  "lon": 2.4643270,
  "tags": {
    "amenity": "bar",
    "name": "Le Joinville",
    "tobbaco": "yes"
  }
},
{
  "type": "node",
  "id": 1592376720,
  "lat": 48.8235289,
  "lon": 2.2607503,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Moulin d\'Issy"
  }
},
{
  "type": "node",
  "id": 1594571356,
  "lat": 48.8521286,
  "lon": 2.3374207,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 1594953922,
  "lat": 48.9045461,
  "lon": 2.3050336,
  "tags": {
    "addr:housenumber": "102 bis",
    "addr:postcode": "92110",
    "addr:street": "Rue Martre",
    "amenity": "restaurant",
    "name": "Fire & Stone",
    "source": "local knowledge",
    "website": "http://www.fire-et-stone.fr"
  }
},
{
  "type": "node",
  "id": 1595250086,
  "lat": 48.8892175,
  "lon": 2.3514659,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1595252875,
  "lat": 48.8891328,
  "lon": 2.3517824,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1596069013,
  "lat": 48.8759986,
  "lon": 2.3816785,
  "tags": {
    "addr:country": "FR",
    "amenity": "bar",
    "internet_access": "wlan",
    "internet_access:fee": "no",
    "name": "Jovial Café"
  }
},
{
  "type": "node",
  "id": 1596738672,
  "lat": 48.8469541,
  "lon": 2.4077243,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Sushi Star"
  }
},
{
  "type": "node",
  "id": 1598071225,
  "lat": 48.8337665,
  "lon": 2.3191153,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1598071236,
  "lat": 48.8341125,
  "lon": 2.3181604,
  "tags": {
    "amenity": "bar",
    "brewery": "chouffe;tripel_karmeliet",
    "name": "Au Métro"
  }
},
{
  "type": "node",
  "id": 1598894927,
  "lat": 48.8271351,
  "lon": 2.2353993,
  "tags": {
    "addr:housenumber": "76",
    "amenity": "restaurant",
    "name": "Les Domaines Qui Montent",
    "shop": "alcohol",
    "source": "survey",
    "website": "http://www.lesdomainesquimontent.com"
  }
},
{
  "type": "node",
  "id": 1605061495,
  "lat": 48.8704717,
  "lon": 2.3031606,
  "tags": {
    "amenity": "pub",
    "food": "yes",
    "name": "Cottage Elysée"
  }
},
{
  "type": "node",
  "id": 1615612171,
  "lat": 48.8182515,
  "lon": 2.2514494,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Cathay Thai",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1615612177,
  "lat": 48.8190906,
  "lon": 2.2512723,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Daikichi",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1615612201,
  "lat": 48.8183243,
  "lon": 2.2516576,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Pizza Siciliana",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1615663126,
  "lat": 48.8274260,
  "lon": 2.2416079,
  "tags": {
    "addr:housenumber": "4",
    "amenity": "restaurant",
    "name": "La Régie",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1616554740,
  "lat": 48.8276245,
  "lon": 2.2415257,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "L\'Osteria",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1616811990,
  "lat": 48.8634629,
  "lon": 2.3440772,
  "tags": {
    "addr:housenumber": "5",
    "addr:postcode": "75001",
    "addr:street": "Rue du Jour",
    "amenity": "pub",
    "name": "Quigley\'s Point"
  }
},
{
  "type": "node",
  "id": 1616985533,
  "lat": 48.8830455,
  "lon": 2.3398008,
  "tags": {
    "amenity": "restaurant",
    "email": "contact@michou.com",
    "fax": "+33 1 42 64 50 50",
    "name": "Cabaret Chez Michou",
    "phone": "+33 1 46 06 16 04",
    "website": "http://www.michou.com/"
  }
},
{
  "type": "node",
  "id": 1616985541,
  "lat": 48.8823251,
  "lon": 2.3397496,
  "tags": {
    "amenity": "bar",
    "name": "La Fourmi",
    "phone": "+33 1 42 64 70 35",
    "smoking": "no"
  }
},
{
  "type": "node",
  "id": 1617770474,
  "lat": 48.8294166,
  "lon": 2.2603300,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "River Café",
    "phone": "+33140935020",
    "website": "http://rivercafe.fr/"
  }
},
{
  "type": "node",
  "id": 1618002590,
  "lat": 48.8873987,
  "lon": 2.3561308,
  "tags": {
    "amenity": "bar",
    "name": "La Francaise"
  }
},
{
  "type": "node",
  "id": 1618621677,
  "lat": 48.9058642,
  "lon": 2.2817280,
  "tags": {
    "amenity": "pub",
    "name": "Le Tendance"
  }
},
{
  "type": "node",
  "id": 1619521147,
  "lat": 48.8910970,
  "lon": 2.3741558,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Auberge du Bonheur",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1619521160,
  "lat": 48.8911479,
  "lon": 2.3740014,
  "tags": {
    "amenity": "restaurant",
    "name": "Chez Yaïr",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1619521171,
  "lat": 48.8907671,
  "lon": 2.3759930,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Fuji Yama",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1619521172,
  "lat": 48.8912248,
  "lon": 2.3734447,
  "tags": {
    "amenity": "cafe",
    "name": "Huafu Café",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1619521176,
  "lat": 48.8914269,
  "lon": 2.3723843,
  "tags": {
    "amenity": "cafe",
    "name": "Le Mathis",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1620251719,
  "lat": 48.8274574,
  "lon": 2.2428608,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Petit Bistro",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1620425824,
  "lat": 48.8658704,
  "lon": 2.3983197,
  "tags": {
    "addr:postcode": "75020",
    "addr:street": "Rue du Cambodge",
    "amenity": "bar",
    "name": "Au bon coin"
  }
},
{
  "type": "node",
  "id": 1625841486,
  "lat": 48.8485558,
  "lon": 2.3279413,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "microbrewery": "no",
    "name": "L\'Hippocampus",
    "phone": "+33 1 45 48 10 03",
    "smoking": "no",
    "website": "http://www.hippocampus-jazz.fr/",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 1636594183,
  "lat": 48.8390548,
  "lon": 2.2577341,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Le Palais du Bonheur",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1636594185,
  "lat": 48.8388575,
  "lon": 2.2576602,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "New Delice\'s",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1637095702,
  "lat": 48.8114048,
  "lon": 2.3261009,
  "tags": {
    "amenity": "bar",
    "name": "Le Carves",
    "wifi": "no"
  }
},
{
  "type": "node",
  "id": 1640452949,
  "lat": 48.8404902,
  "lon": 2.2580804,
  "tags": {
    "amenity": "restaurant",
    "name": "La Garçonnière",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1640781482,
  "lat": 48.8778515,
  "lon": 2.3272456,
  "tags": {
    "amenity": "cafe",
    "cuisine": "french",
    "name": "Comptoir de l\'Europe",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 1642477322,
  "lat": 48.8476438,
  "lon": 2.3479747,
  "tags": {
    "addr:housenumber": "8",
    "addr:street": "Rue de l\'École Polytechnique",
    "amenity": "restaurant",
    "cuisine": "ethiopian",
    "name": "Godjo",
    "phone": "01 40 46 82 21",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.godjo.com/"
  }
},
{
  "type": "node",
  "id": 1643654550,
  "lat": 48.8264889,
  "lon": 2.3633645,
  "tags": {
    "amenity": "cafe",
    "name": "Le Prétexte",
    "old_name": "Le Biarritz Café"
  }
},
{
  "type": "node",
  "id": 1644290382,
  "lat": 48.8263479,
  "lon": 2.2372708,
  "tags": {
    "addr:housenumber": "54",
    "amenity": "restaurant",
    "cuisine": "thai;japanese",
    "name": "Fusion",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1645356641,
  "lat": 48.8735546,
  "lon": 2.3841519,
  "tags": {
    "addr:housenumber": "78",
    "addr:postcode": "75019",
    "addr:street": "Rue de Belleville",
    "amenity": "restaurant",
    "cuisine": "vietnamese",
    "name": "Cyclo"
  }
},
{
  "type": "node",
  "id": 1645622366,
  "lat": 48.8743059,
  "lon": 2.3351845,
  "tags": {
    "amenity": "cafe",
    "cuisine": "french",
    "name": "La Calèche",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1648740488,
  "lat": 48.8121013,
  "lon": 2.2473177,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 1649702461,
  "lat": 48.8703892,
  "lon": 2.3212386,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1650160704,
  "lat": 48.8956894,
  "lon": 2.3411820,
  "tags": {
    "addr:housenumber": "99",
    "addr:postcode": "75018",
    "addr:street": "Rue Championnet",
    "amenity": "bar",
    "name": "Point Bar"
  }
},
{
  "type": "node",
  "id": 1650275490,
  "lat": 48.8228525,
  "lon": 2.2761185,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 1654298287,
  "lat": 48.8495928,
  "lon": 2.3812853,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Siffleur de Ballons",
    "phone": "01 58 51 14 04"
  }
},
{
  "type": "node",
  "id": 1654620959,
  "lat": 48.8618926,
  "lon": 2.3832643,
  "tags": {
    "amenity": "cafe",
    "name": "Le Moderne"
  }
},
{
  "type": "node",
  "id": 1654621063,
  "lat": 48.8615272,
  "lon": 2.3827496,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1657568440,
  "lat": 48.8955112,
  "lon": 2.4038602,
  "tags": {
    "addr:housenumber": "22/24",
    "addr:postcode": "93500",
    "addr:street": "quai de l\'aisne",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Brunello"
  }
},
{
  "type": "node",
  "id": 1657637003,
  "lat": 48.9033962,
  "lon": 2.3941664,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 1657948395,
  "lat": 48.8908275,
  "lon": 2.3460063,
  "tags": {
    "addr:housenumber": "2",
    "addr:postcode": "75018",
    "addr:street": "Rue Eugène Sue",
    "amenity": "restaurant",
    "name": "Pulcinella"
  }
},
{
  "type": "node",
  "id": 1657969162,
  "lat": 48.8905461,
  "lon": 2.3453913,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Illios",
    "website": "http://illiosrestaurant.blogspot.fr/"
  }
},
{
  "type": "node",
  "id": 1657974487,
  "lat": 48.8911373,
  "lon": 2.3471492,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "La Table d\'Eugène"
  }
},
{
  "type": "node",
  "id": 1657977654,
  "lat": 48.8907355,
  "lon": 2.3482159,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian"
  }
},
{
  "type": "node",
  "id": 1659198584,
  "lat": 48.8287894,
  "lon": 2.3699667,
  "tags": {
    "amenity": "cafe",
    "name": "Café Tabac Jeanne d\'Arc",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1659198624,
  "lat": 48.8295186,
  "lon": 2.3712567,
  "tags": {
    "amenity": "restaurant",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1661533104,
  "lat": 48.8514513,
  "lon": 2.3805785,
  "tags": {
    "amenity": "bar",
    "name": "Le Réservoir"
  }
},
{
  "type": "node",
  "id": 1666054488,
  "lat": 48.8851558,
  "lon": 2.3360026,
  "tags": {
    "addr:housenumber": "8",
    "addr:postcode": "75018",
    "addr:street": "Rue Audran",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Pizza Caratello",
    "website": "http://www.caratello.fr/pizza/"
  }
},
{
  "type": "node",
  "id": 1666564705,
  "lat": 48.8352398,
  "lon": 2.3696811,
  "tags": {
    "amenity": "cafe",
    "name": "La Nouvelle Gare",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2012"
  }
},
{
  "type": "node",
  "id": 1666903793,
  "lat": 48.8410271,
  "lon": 2.2662469,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "8",
    "addr:postcode": "75016",
    "addr:street": "Rue Chapu",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Vin dans les Voiles",
    "website": "http://www.vindanslesvoiles.fr/"
  }
},
{
  "type": "node",
  "id": 1667195861,
  "lat": 48.8420173,
  "lon": 2.3480157,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Chez Lena et Mimile"
  }
},
{
  "type": "node",
  "id": 1667270058,
  "lat": 48.8431426,
  "lon": 2.3492259,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "L\'Atlantide"
  }
},
{
  "type": "node",
  "id": 1667270064,
  "lat": 48.8428742,
  "lon": 2.3485446,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Restaurant Basque"
  }
},
{
  "type": "node",
  "id": 1667270067,
  "lat": 48.8430296,
  "lon": 2.3492151,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Hoki Sushi"
  }
},
{
  "type": "node",
  "id": 1667270068,
  "lat": 48.8430013,
  "lon": 2.3491186,
  "tags": {
    "amenity": "restaurant",
    "name": "Cap 99"
  }
},
{
  "type": "node",
  "id": 1667270078,
  "lat": 48.8428672,
  "lon": 2.3484588,
  "tags": {
    "amenity": "bar",
    "name": "Hide out"
  }
},
{
  "type": "node",
  "id": 1667546981,
  "lat": 48.8334354,
  "lon": 2.3313239,
  "tags": {
    "amenity": "pub",
    "cuisine": "french",
    "name": "Café Daguerre",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 1667560925,
  "lat": 48.8945691,
  "lon": 2.3441669,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "89",
    "addr:postcode": "75018",
    "addr:street": "Rue Duhesme",
    "amenity": "restaurant",
    "atm": "no",
    "cuisine": "regional",
    "name": "Patakrep",
    "phone": "+33951594924"
  }
},
{
  "type": "node",
  "id": 1667562696,
  "lat": 48.8946670,
  "lon": 2.3443629,
  "tags": {
    "amenity": "bar",
    "name": "Le Village",
    "wifi": "no"
  }
},
{
  "type": "node",
  "id": 1667563844,
  "lat": 48.8949500,
  "lon": 2.3433680,
  "tags": {
    "addr:city": "Paris",
    "addr:postcode": "75018",
    "addr:street": "Rue Versigny",
    "amenity": "bar",
    "description": "Tobacco",
    "food": "no",
    "name": "Le Diplomate",
    "outdoor_seating": "no",
    "smoking": "outside",
    "tobacco": "yes",
    "wifi": "no"
  }
},
{
  "type": "node",
  "id": 1667567942,
  "lat": 48.8944316,
  "lon": 2.3452559,
  "tags": {
    "amenity": "restaurant",
    "name": "La Timbale",
    "wifi": "no"
  }
},
{
  "type": "node",
  "id": 1667577644,
  "lat": 48.8937368,
  "lon": 2.3473963,
  "tags": {
    "amenity": "bar",
    "name": "Le Clin\'s bar"
  }
},
{
  "type": "node",
  "id": 1667577648,
  "lat": 48.8938461,
  "lon": 2.3475036,
  "tags": {
    "amenity": "bar",
    "name": "Le Simplon"
  }
},
{
  "type": "node",
  "id": 1667862960,
  "lat": 48.8645796,
  "lon": 2.3718543,
  "tags": {
    "addr:housenumber": "45",
    "addr:street": "Rue Oberkampf",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "aux deux amis",
    "opening_hours": "Tu-Sa 12:00-14:30,18:30-22:30",
    "phone": "+33 1 58 30 38 13",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 1668659716,
  "lat": 48.8528026,
  "lon": 2.3743383,
  "tags": {
    "addr:housenumber": "13",
    "addr:postcode": "75011",
    "addr:street": "Rue de Charonne",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Chez Paul",
    "website": "http://www.chezpaul.com/"
  }
},
{
  "type": "node",
  "id": 1668675883,
  "lat": 48.8935060,
  "lon": 2.3426870,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "Le Reinitas"
  }
},
{
  "type": "node",
  "id": 1668686161,
  "lat": 48.8936330,
  "lon": 2.3428880,
  "tags": {
    "amenity": "restaurant",
    "created_by": "iLOE 1.9",
    "name": "Joli môme"
  }
},
{
  "type": "node",
  "id": 1668713289,
  "lat": 48.8940560,
  "lon": 2.3431940,
  "tags": {
    "addr:city": "Paris",
    "addr:postcode": "75018",
    "addr:street": "Rue Letort",
    "amenity": "restaurant",
    "created_by": "iLOE 1.9",
    "cuisine": "french",
    "name": "Les Toqués",
    "outdoor_seating": "yes",
    "phone": "09 54 20 94 08",
    "smoking": "outside",
    "takeaway": "no",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 1668715840,
  "lat": 48.8941520,
  "lon": 2.3429690,
  "tags": {
    "amenity": "restaurant",
    "created_by": "iLOE 1.9",
    "name": "L\'Oriental"
  }
},
{
  "type": "node",
  "id": 1668717671,
  "lat": 48.8943730,
  "lon": 2.3432450,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "La tour de Pise"
  }
},
{
  "type": "node",
  "id": 1668721943,
  "lat": 48.8951370,
  "lon": 2.3433760,
  "tags": {
    "amenity": "restaurant",
    "created_by": "iLOE 1.9",
    "name": "Chez Paula"
  }
},
{
  "type": "node",
  "id": 1668724955,
  "lat": 48.8943990,
  "lon": 2.3447720,
  "tags": {
    "amenity": "restaurant",
    "created_by": "iLOE 1.9",
    "name": "Au citron vert"
  }
},
{
  "type": "node",
  "id": 1668732887,
  "lat": 48.8942700,
  "lon": 2.3458810,
  "tags": {
    "amenity": "restaurant",
    "created_by": "iLOE 1.9",
    "name": "Chez Yves et Yolande"
  }
},
{
  "type": "node",
  "id": 1668733595,
  "lat": 48.8941300,
  "lon": 2.3458060,
  "tags": {
    "amenity": "restaurant",
    "created_by": "iLOE 1.9",
    "name": "Les fondus de la raclette"
  }
},
{
  "type": "node",
  "id": 1668734745,
  "lat": 48.8941720,
  "lon": 2.3462340,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "Le bénin"
  }
},
{
  "type": "node",
  "id": 1668735604,
  "lat": 48.8941340,
  "lon": 2.3463850,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "Le Costa Rica"
  }
},
{
  "type": "node",
  "id": 1668740214,
  "lat": 48.8940340,
  "lon": 2.3461900,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9"
  }
},
{
  "type": "node",
  "id": 1668766274,
  "lat": 48.8936100,
  "lon": 2.3477290,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "Le flash",
    "shop": "tobacco"
  }
},
{
  "type": "node",
  "id": 1668781071,
  "lat": 48.8928950,
  "lon": 2.3433840,
  "tags": {
    "amenity": "restaurant",
    "created_by": "iLOE 1.9",
    "name": "Haifa"
  }
},
{
  "type": "node",
  "id": 1668852308,
  "lat": 48.8930400,
  "lon": 2.3435230,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "caffe Poteau"
  }
},
{
  "type": "node",
  "id": 1669016557,
  "lat": 48.8948510,
  "lon": 2.3409210,
  "tags": {
    "amenity": "restaurant",
    "created_by": "iLOE 1.9",
    "name": "La piscine"
  }
},
{
  "type": "node",
  "id": 1670102655,
  "lat": 48.8732230,
  "lon": 2.3544700,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "Le Cadran du faubourg"
  }
},
{
  "type": "node",
  "id": 1670106050,
  "lat": 48.8712160,
  "lon": 2.3580210,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "Le réveil du Xe"
  }
},
{
  "type": "node",
  "id": 1670111247,
  "lat": 48.8706730,
  "lon": 2.3594270,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "Le petit château d\'eau"
  }
},
{
  "type": "node",
  "id": 1670112642,
  "lat": 48.8703550,
  "lon": 2.3596000,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "Le Taylor"
  }
},
{
  "type": "node",
  "id": 1670117368,
  "lat": 48.8703260,
  "lon": 2.3600480,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "Le navy",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 1670126985,
  "lat": 48.8697550,
  "lon": 2.3610960,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "L\'Eclipse"
  }
},
{
  "type": "node",
  "id": 1670131209,
  "lat": 48.8694730,
  "lon": 2.3616430,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "Le côte d\'azur"
  }
},
{
  "type": "node",
  "id": 1670141077,
  "lat": 48.8691880,
  "lon": 2.3617720,
  "tags": {
    "amenity": "restaurant",
    "created_by": "iLOE 1.9",
    "name": "Les parigots"
  }
},
{
  "type": "node",
  "id": 1670150646,
  "lat": 48.8694980,
  "lon": 2.3633100,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "La barrique"
  }
},
{
  "type": "node",
  "id": 1670155821,
  "lat": 48.8693370,
  "lon": 2.3635590,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Les magiciens"
  }
},
{
  "type": "node",
  "id": 1670158851,
  "lat": 48.8691390,
  "lon": 2.3634440,
  "tags": {
    "amenity": "restaurant",
    "created_by": "iLOE 1.9",
    "name": "Elgi"
  }
},
{
  "type": "node",
  "id": 1670163781,
  "lat": 48.8688800,
  "lon": 2.3629980,
  "tags": {
    "amenity": "cafe",
    "name": "Le café Pierre"
  }
},
{
  "type": "node",
  "id": 1670169655,
  "lat": 48.8691820,
  "lon": 2.3631770,
  "tags": {
    "amenity": "restaurant",
    "created_by": "iLOE 1.9"
  }
},
{
  "type": "node",
  "id": 1670170944,
  "lat": 48.8697450,
  "lon": 2.3637220,
  "tags": {
    "amenity": "restaurant",
    "created_by": "iLOE 1.9",
    "name": "Au pied de vigne"
  }
},
{
  "type": "node",
  "id": 1670265700,
  "lat": 48.8686940,
  "lon": 2.3597770,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Café Petite"
  }
},
{
  "type": "node",
  "id": 1670265992,
  "lat": 48.8686410,
  "lon": 2.3599800,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese"
  }
},
{
  "type": "node",
  "id": 1670269743,
  "lat": 48.8689770,
  "lon": 2.3602190,
  "tags": {
    "amenity": "restaurant",
    "created_by": "iLOE 1.9",
    "name": "La Petite Rose des Sables"
  }
},
{
  "type": "node",
  "id": 1670270776,
  "lat": 48.8690369,
  "lon": 2.3600697,
  "tags": {
    "addr:housenumber": "5",
    "addr:street": "Rue de Lancry",
    "amenity": "restaurant",
    "name": "Da-niet",
    "phone": "01 44 52 91 63",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010"
  }
},
{
  "type": "node",
  "id": 1670294664,
  "lat": 48.8701370,
  "lon": 2.3610220,
  "tags": {
    "amenity": "restaurant",
    "created_by": "iLOE 1.9"
  }
},
{
  "type": "node",
  "id": 1670301398,
  "lat": 48.8704690,
  "lon": 2.3610130,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9"
  }
},
{
  "type": "node",
  "id": 1670305377,
  "lat": 48.8709730,
  "lon": 2.3613960,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "Au métro"
  }
},
{
  "type": "node",
  "id": 1670306610,
  "lat": 48.8710750,
  "lon": 2.3612300,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9"
  }
},
{
  "type": "node",
  "id": 1670347985,
  "lat": 48.8715680,
  "lon": 2.3620320,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "L\'Ariel",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 1670388305,
  "lat": 48.8718820,
  "lon": 2.3623620,
  "tags": {
    "amenity": "restaurant",
    "created_by": "iLOE 1.9",
    "name": "Alberto Pizzeria"
  }
},
{
  "type": "node",
  "id": 1670389118,
  "lat": 48.8719160,
  "lon": 2.3626810,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "Le cinquante"
  }
},
{
  "type": "node",
  "id": 1670391140,
  "lat": 48.8721550,
  "lon": 2.3626770,
  "tags": {
    "amenity": "restaurant",
    "created_by": "iLOE 1.9",
    "name": "Seoul"
  }
},
{
  "type": "node",
  "id": 1670399738,
  "lat": 48.8724460,
  "lon": 2.3632870,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "thai",
    "name": "Mme Shawn"
  }
},
{
  "type": "node",
  "id": 1670400019,
  "lat": 48.8726535,
  "lon": 2.3631861,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Fuxia"
  }
},
{
  "type": "node",
  "id": 1670401972,
  "lat": 48.8726860,
  "lon": 2.3635650,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "La patache"
  }
},
{
  "type": "node",
  "id": 1670404081,
  "lat": 48.8732160,
  "lon": 2.3629280,
  "tags": {
    "amenity": "restaurant",
    "created_by": "iLOE 1.9",
    "name": "Céline et Maurice"
  }
},
{
  "type": "node",
  "id": 1670553014,
  "lat": 48.8711140,
  "lon": 2.3337868,
  "tags": {
    "amenity": "cafe",
    "name": "Le Grand Café Capucines",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1670553026,
  "lat": 48.8300641,
  "lon": 2.3145322,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "african",
    "name": "Le Surré Royal",
    "old_name": "La Salamandre"
  }
},
{
  "type": "node",
  "id": 1670553088,
  "lat": 48.8285724,
  "lon": 2.3161086,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 1672098387,
  "lat": 48.8508024,
  "lon": 2.3768778,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 1672130894,
  "lat": 48.8502524,
  "lon": 2.3764928,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Square Trousseau",
    "opening_hours": "Mo-Sa 08:00-02:00"
  }
},
{
  "type": "node",
  "id": 1672309991,
  "lat": 48.8679829,
  "lon": 2.3864573,
  "tags": {
    "amenity": "cafe",
    "name": "L\'Ariel Café"
  }
},
{
  "type": "node",
  "id": 1672310005,
  "lat": 48.8684217,
  "lon": 2.3859196,
  "tags": {
    "amenity": "cafe",
    "name": "L\'Émir"
  }
},
{
  "type": "node",
  "id": 1672310007,
  "lat": 48.8681803,
  "lon": 2.3861104,
  "tags": {
    "amenity": "cafe",
    "name": "La Pétanque"
  }
},
{
  "type": "node",
  "id": 1672752431,
  "lat": 48.8145900,
  "lon": 2.3605822,
  "tags": {
    "addr:city": "Le Kremlin-Bicêtre",
    "addr:housenumber": "24",
    "addr:postcode": "94270",
    "addr:street": "Avenue de Fontainebleau",
    "amenity": "restaurant",
    "cuisine": "kebab",
    "name": "Village du pacha"
  }
},
{
  "type": "node",
  "id": 1673086771,
  "lat": 48.8417557,
  "lon": 2.3487402,
  "tags": {
    "amenity": "restaurant",
    "name": "Restaurant Administratif"
  }
},
{
  "type": "node",
  "id": 1673656597,
  "lat": 48.8722479,
  "lon": 2.3978396,
  "tags": {
    "amenity": "bar",
    "name": "Chez Lilette"
  }
},
{
  "type": "node",
  "id": 1674486376,
  "lat": 48.8146701,
  "lon": 2.4140452,
  "tags": {
    "addr:housenumber": "19",
    "addr:postcode": "94140",
    "addr:street": "Rue Véron",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Sushi d\'Alfortville",
    "source": "local knowlege"
  }
},
{
  "type": "node",
  "id": 1674539439,
  "lat": 48.8383331,
  "lon": 2.2340740,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "kosher",
    "name": "Momento Café",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1674671108,
  "lat": 48.8566955,
  "lon": 2.3731518,
  "tags": {
    "addr:housenumber": "5",
    "addr:street": "Rue Froment",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Petit cheval de manège",
    "opening_hours": "Mo-Fr 12:30-14:00;Tu-Sa 19:30-22:30",
    "phone": "09 82 37 18 52"
  }
},
{
  "type": "node",
  "id": 1674677810,
  "lat": 48.8570910,
  "lon": 2.3727607,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Pizzeria Santa Lucia"
  }
},
{
  "type": "node",
  "id": 1674750593,
  "lat": 48.9082393,
  "lon": 2.2579471,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Pizzeria Philomena"
  }
},
{
  "type": "node",
  "id": 1674783647,
  "lat": 48.8127393,
  "lon": 2.2729821,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Via Mamma"
  }
},
{
  "type": "node",
  "id": 1674784116,
  "lat": 48.8126439,
  "lon": 2.2728158,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Restaurant asiatique"
  }
},
{
  "type": "node",
  "id": 1674855139,
  "lat": 48.8914670,
  "lon": 2.3493410,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "Le Rallye",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 1674934463,
  "lat": 48.8931040,
  "lon": 2.3440780,
  "tags": {
    "amenity": "restaurant",
    "created_by": "iLOE 1.9",
    "name": "Metis"
  }
},
{
  "type": "node",
  "id": 1674935278,
  "lat": 48.8929850,
  "lon": 2.3440490,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "Bistrot le Sainte-Isaure"
  }
},
{
  "type": "node",
  "id": 1674941085,
  "lat": 48.8926550,
  "lon": 2.3442290,
  "tags": {
    "amenity": "restaurant",
    "created_by": "iLOE 1.9",
    "name": "Le Nord-Sud"
  }
},
{
  "type": "node",
  "id": 1674952793,
  "lat": 48.8937130,
  "lon": 2.3451630,
  "tags": {
    "amenity": "restaurant",
    "created_by": "iLOE 1.9",
    "name": "O.J."
  }
},
{
  "type": "node",
  "id": 1674952998,
  "lat": 48.8937300,
  "lon": 2.3449020,
  "tags": {
    "amenity": "restaurant",
    "created_by": "iLOE 1.9"
  }
},
{
  "type": "node",
  "id": 1674955048,
  "lat": 48.8939200,
  "lon": 2.3452590,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9"
  }
},
{
  "type": "node",
  "id": 1675068861,
  "lat": 48.8405023,
  "lon": 2.2650429,
  "tags": {
    "addr:housenumber": "23",
    "addr:postcode": "75016",
    "addr:street": "Boulevard Exelmans",
    "amenity": "bar",
    "name": "Le Royal Exelmans",
    "wifi": "free"
  }
},
{
  "type": "node",
  "id": 1675451555,
  "lat": 48.8731527,
  "lon": 2.3385700,
  "tags": {
    "addr:housenumber": "25",
    "addr:postcode": "75009",
    "addr:street": "Rue Le Peletier",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Au Petit Riche",
    "website": "www.restaurant-aupetitriche.com"
  }
},
{
  "type": "node",
  "id": 1675722344,
  "lat": 48.8505156,
  "lon": 2.3091488,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "spanish",
    "name": "Casa Hugo"
  }
},
{
  "type": "node",
  "id": 1675723914,
  "lat": 48.8433389,
  "lon": 2.3495892,
  "tags": {
    "amenity": "cafe",
    "cuisine": "vegetarian",
    "diet:vegetarian": "only",
    "name": "Vegan Folies"
  }
},
{
  "type": "node",
  "id": 1675825617,
  "lat": 48.8333499,
  "lon": 2.2287218,
  "tags": {
    "amenity": "restaurant",
    "name": "Thai-A-isane",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1675825622,
  "lat": 48.8334771,
  "lon": 2.2286559,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Bella Vita",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1675825640,
  "lat": 48.8386143,
  "lon": 2.2304310,
  "tags": {
    "amenity": "cafe",
    "name": "Le Gaulois",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1675825650,
  "lat": 48.8336213,
  "lon": 2.2285811,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Tokoyama",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1675825715,
  "lat": 48.8376679,
  "lon": 2.2305776,
  "tags": {
    "amenity": "restaurant",
    "name": "Food & Drinks",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1676562497,
  "lat": 48.8664049,
  "lon": 2.3413812,
  "tags": {
    "addr:housenumber": "1",
    "addr:postcode": "75002",
    "addr:street": "Rue du Mail",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Chez Georges"
  }
},
{
  "type": "node",
  "id": 1676563319,
  "lat": 48.8687508,
  "lon": 2.3345042,
  "tags": {
    "addr:housenumber": "16 - 18",
    "addr:postcode": "75002",
    "addr:street": "Place Gaillon",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Drouant",
    "website": "www.drouant.com"
  }
},
{
  "type": "node",
  "id": 1676564009,
  "lat": 48.8692412,
  "lon": 2.3299818,
  "tags": {
    "addr:housenumber": "8",
    "addr:postcode": "75002",
    "addr:street": "Rue Volney",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Bistro Volney",
    "website": "www.bistrovolnay.fr"
  }
},
{
  "type": "node",
  "id": 1676570193,
  "lat": 48.8465656,
  "lon": 2.4185668,
  "tags": {
    "amenity": "cafe",
    "name": "Le Paris"
  }
},
{
  "type": "node",
  "id": 1676574135,
  "lat": 48.8707775,
  "lon": 2.3387098,
  "tags": {
    "addr:housenumber": "32",
    "addr:postcode": "75002",
    "addr:street": "Rue Saint-Marc",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Aux Lyonnais",
    "website": "www.auxlyonnais.com"
  }
},
{
  "type": "node",
  "id": 1676583419,
  "lat": 48.8689281,
  "lon": 2.3302927,
  "tags": {
    "addr:housename": "Park Hyatt Paris-Vendôme",
    "addr:housenumber": "5",
    "addr:postcode": "75002",
    "addr:street": "Rue de la Paix",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Pur\'",
    "website": "paris-restaurant-pur.fr"
  }
},
{
  "type": "node",
  "id": 1676596928,
  "lat": 48.8695802,
  "lon": 2.3230555,
  "tags": {
    "addr:housenumber": "9",
    "addr:postcode": "75008",
    "addr:street": "Place de la Madeleine",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Senderens",
    "website": "www.senderens.fr"
  }
},
{
  "type": "node",
  "id": 1676694799,
  "lat": 48.8107068,
  "lon": 2.2479222,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 1676992736,
  "lat": 48.8410914,
  "lon": 2.3489485,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Golozino"
  }
},
{
  "type": "node",
  "id": 1676994737,
  "lat": 48.8446176,
  "lon": 2.3491298,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "greek",
    "name": "L\'île de Crête"
  }
},
{
  "type": "node",
  "id": 1677008778,
  "lat": 48.8355202,
  "lon": 2.2319957,
  "tags": {
    "amenity": "cafe",
    "name": "Les Délices de l\'Île Maurice",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1677048302,
  "lat": 48.8664844,
  "lon": 2.3389311,
  "tags": {
    "addr:housenumber": "2",
    "addr:postcode": "75002",
    "addr:street": "Rue Vivienne",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Grand Colbert",
    "website": "legrandcolbert.fr"
  }
},
{
  "type": "node",
  "id": 1677055602,
  "lat": 48.8700770,
  "lon": 2.3223918,
  "tags": {
    "addr:housenumber": "41",
    "addr:postcode": "75008",
    "addr:street": "Rue Boissy d\'Anglas",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Tante Louise",
    "website": "www.bernard-loiseau.com"
  }
},
{
  "type": "node",
  "id": 1677068307,
  "lat": 48.8675314,
  "lon": 2.3020548,
  "tags": {
    "addr:housenumber": "5",
    "addr:postcode": "75008",
    "addr:street": "Rue Marbeuf",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "La Fermette Marbeuf",
    "website": "www.fermettemarbeuf.com"
  }
},
{
  "type": "node",
  "id": 1677071922,
  "lat": 48.8696595,
  "lon": 2.3052249,
  "tags": {
    "addr:housenumber": "37",
    "addr:postcode": "75008",
    "addr:street": "Rue Marbeuf",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "La Maison de l\'Aubrac",
    "website": "www.maison-aubrac.com"
  }
},
{
  "type": "node",
  "id": 1677082793,
  "lat": 48.8662502,
  "lon": 2.3285392,
  "tags": {
    "addr:housenumber": "14",
    "addr:postcode": "75001",
    "addr:street": "Rue de Castiglione",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Carré des Feuillants",
    "website": "www.carredesfeuillants.fr"
  }
},
{
  "type": "node",
  "id": 1677167520,
  "lat": 48.8739879,
  "lon": 2.3430920,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Pizza Capri"
  }
},
{
  "type": "node",
  "id": 1677189805,
  "lat": 48.8442421,
  "lon": 2.2944260,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Pizzeria San-Marino"
  }
},
{
  "type": "node",
  "id": 1677212113,
  "lat": 48.8486566,
  "lon": 2.2967202,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "korean",
    "name": "Seoul"
  }
},
{
  "type": "node",
  "id": 1677615620,
  "lat": 48.8147908,
  "lon": 2.3897357,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "international",
    "name": "Guinguette du Monde"
  }
},
{
  "type": "node",
  "id": 1678007548,
  "lat": 48.8419574,
  "lon": 2.3290304,
  "tags": {
    "addr:housenumber": "108",
    "addr:postcode": "75014",
    "addr:street": "Boulevard du Montparnasse",
    "amenity": "restaurant",
    "cuisine": "fish",
    "name": "Le Dôme"
  }
},
{
  "type": "node",
  "id": 1678043347,
  "lat": 48.8529638,
  "lon": 2.3701915,
  "tags": {
    "addr:housenumber": "6",
    "addr:postcode": "75012",
    "addr:street": "Place de la Bastille",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Les Grandes Marches",
    "website": "www.groupe-bertrand.com",
    "wikipedia": "fr:Place de la Bastille"
  }
},
{
  "type": "node",
  "id": 1678050141,
  "lat": 48.8634808,
  "lon": 2.3437738,
  "tags": {
    "addr:housenumber": "6",
    "addr:postcode": "75001",
    "addr:street": "Rue Coquillière",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Au Pied de Cochon",
    "opening_hours": "24/7",
    "website": "www.pieddecochon.com"
  }
},
{
  "type": "node",
  "id": 1678243041,
  "lat": 48.8110754,
  "lon": 2.3780355,
  "tags": {
    "amenity": "bar",
    "name": "Au ptit bonheur"
  }
},
{
  "type": "node",
  "id": 1678472772,
  "lat": 48.8153748,
  "lon": 2.4436623,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 1678955961,
  "lat": 48.8135916,
  "lon": 2.3885631,
  "tags": {
    "addr:housenumber": "70",
    "addr:postcode": "94200",
    "addr:street": "Avenue Georges Gosnat",
    "amenity": "cafe",
    "name": "Ciné Phil Café"
  }
},
{
  "type": "node",
  "id": 1679234684,
  "lat": 48.8718416,
  "lon": 2.3144851,
  "tags": {
    "addr:housenumber": "114",
    "addr:postcode": "75008",
    "addr:street": "Rue du Faubourg Saint-Honoré",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le 114 Faubourg",
    "website": "www.lebristolparis.com"
  }
},
{
  "type": "node",
  "id": 1679235561,
  "lat": 48.8696738,
  "lon": 2.3309961,
  "tags": {
    "addr:housenumber": "15",
    "addr:postcode": "75002",
    "addr:street": "Rue Daunou",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Céladon",
    "website": "www.leceladon.com"
  }
},
{
  "type": "node",
  "id": 1679236711,
  "lat": 48.8724435,
  "lon": 2.3281256,
  "tags": {
    "addr:housenumber": "39",
    "addr:postcode": "75009",
    "addr:street": "Rue de Caumartin",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Clos Bourguignon"
  }
},
{
  "type": "node",
  "id": 1679239832,
  "lat": 48.8628275,
  "lon": 2.3277881,
  "tags": {
    "addr:postcode": "75001",
    "addr:street": "Jardins des Tuileries",
    "amenity": "cafe",
    "name": "La Terrasse de Pomone",
    "source": "terrassedepomone.fr"
  }
},
{
  "type": "node",
  "id": 1679386774,
  "lat": 48.8521273,
  "lon": 2.3846642,
  "tags": {
    "addr:housenumber": "15",
    "addr:postcode": "75011",
    "addr:street": "Rue Paul Bert",
    "amenity": "restaurant",
    "cuisine": "argentinian",
    "name": "Unico",
    "source": "www.resto-unico.com",
    "website": "www.resto-unico.com"
  }
},
{
  "type": "node",
  "id": 1679463071,
  "lat": 48.8914220,
  "lon": 2.3515420,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "Chez Gaston"
  }
},
{
  "type": "node",
  "id": 1679463986,
  "lat": 48.8915940,
  "lon": 2.3516290,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "Le provencial"
  }
},
{
  "type": "node",
  "id": 1679467252,
  "lat": 48.8917510,
  "lon": 2.3517290,
  "tags": {
    "amenity": "bar",
    "name": "L\'Adriatique",
    "newsagent": "yes",
    "source": "Obs. pers.",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 1679470399,
  "lat": 48.8919510,
  "lon": 2.3518460,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "Aux rendez-vous des amis"
  }
},
{
  "type": "node",
  "id": 1679502927,
  "lat": 48.8947860,
  "lon": 2.3445300,
  "tags": {
    "amenity": "restaurant",
    "created_by": "iLOE 1.9",
    "name": "La cocotte"
  }
},
{
  "type": "node",
  "id": 1679523256,
  "lat": 48.8716249,
  "lon": 2.3434418,
  "tags": {
    "addr:housenumber": "32",
    "addr:postcode": "75009",
    "addr:street": "Boulevard Poissonnière",
    "amenity": "cafe",
    "cuisine": "french",
    "name": "Le Brébant",
    "website": "http://www.cafelebrebantparis.com/"
  }
},
{
  "type": "node",
  "id": 1681138284,
  "lat": 48.8724800,
  "lon": 2.3404835,
  "tags": {
    "addr:housenumber": "4",
    "addr:postcode": "75009",
    "addr:street": "Rue Drouot",
    "amenity": "restaurant",
    "cuisine": "regional",
    "name": "J\'Go",
    "source": "www.lejgo.com",
    "website": "www.lejgo.com"
  }
},
{
  "type": "node",
  "id": 1681149237,
  "lat": 48.8724927,
  "lon": 2.3528401,
  "tags": {
    "addr:housenumber": "7",
    "addr:postcode": "75010",
    "addr:street": "Cour des Petites Écuries",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Brasserie Flo",
    "source": "www.flobrasseries.com",
    "website": "brasserieflo-paris.com"
  }
},
{
  "type": "node",
  "id": 1681152231,
  "lat": 48.8714038,
  "lon": 2.3104401,
  "tags": {
    "addr:housenumber": "34",
    "addr:postcode": "75008",
    "addr:street": "Rue du Colisée",
    "amenity": "restaurant",
    "cuisine": "french",
    "description": "Brasserie",
    "name": "Le Boeuf sur le Toit",
    "source": "www.flobrasseries.com",
    "website": "www.boeufsurletoit.com"
  }
},
{
  "type": "node",
  "id": 1681440239,
  "lat": 48.8644111,
  "lon": 2.3256564,
  "tags": {
    "addr:postcode": "75001",
    "addr:street": "Jardins des Tuileries",
    "amenity": "cafe",
    "cuisine": "italian",
    "name": "Café Reale",
    "source": "www.eliancemusees.com",
    "website": "www.eliancemusees.com",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 1681555581,
  "lat": 48.8436740,
  "lon": 2.3495038,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Edogawa"
  }
},
{
  "type": "node",
  "id": 1681560354,
  "lat": 48.8348389,
  "lon": 2.2271861,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "portuguese",
    "name": "Le Chaves",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1682765919,
  "lat": 48.8715946,
  "lon": 2.3262057,
  "tags": {
    "addr:housenumber": "21",
    "addr:postcode": "75008",
    "addr:street": "Rue Vignon",
    "amenity": "restaurant",
    "cuisine": "regional",
    "description": "Restaurant spécialiste de la truffe",
    "name": "Terres de Truffes",
    "source": "www.terresdetruffes.com",
    "website": "www.terresdetruffes.com"
  }
},
{
  "type": "node",
  "id": 1682769547,
  "lat": 48.8669510,
  "lon": 2.3270370,
  "tags": {
    "addr:housenumber": "251",
    "addr:postcode": "75001",
    "addr:street": "Rue Saint-Honoré",
    "alt_name": "Thierry Marx",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Sur Mesure",
    "source": "www.mandarinoriental.com",
    "website": "www.mandarinoriental.com"
  }
},
{
  "type": "node",
  "id": 1682771444,
  "lat": 48.8706950,
  "lon": 2.3313289,
  "tags": {
    "addr:housenumber": "5",
    "addr:postcode": "75009",
    "addr:street": "Place de l\'Opéra",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Café de la Paix",
    "source": "www.cafedelapaix.fr",
    "website": "www.cafedelapaix.fr",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 1682819498,
  "lat": 48.8673862,
  "lon": 2.2911822,
  "tags": {
    "addr:housenumber": "6",
    "addr:postcode": "75016",
    "addr:street": "Rue Galilée",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "L\'Aéro-Club de France",
    "source": "www.salons-aeroclub.com",
    "website": "www.salons-aeroclub.com"
  }
},
{
  "type": "node",
  "id": 1684658935,
  "lat": 48.8445643,
  "lon": 2.3491518,
  "tags": {
    "amenity": "bar",
    "name": "Le Requin Chagrin"
  }
},
{
  "type": "node",
  "id": 1684658940,
  "lat": 48.8451117,
  "lon": 2.3493401,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "korean",
    "name": "Miam-Miam"
  }
},
{
  "type": "node",
  "id": 1684658945,
  "lat": 48.8449670,
  "lon": 2.3488185,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian"
  }
},
{
  "type": "node",
  "id": 1684658949,
  "lat": 48.8448364,
  "lon": 2.3492811,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "spanish",
    "name": "Casa Pépé"
  }
},
{
  "type": "node",
  "id": 1684658954,
  "lat": 48.8448928,
  "lon": 2.3492758,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "mexican",
    "name": "Chido"
  }
},
{
  "type": "node",
  "id": 1684818337,
  "lat": 48.8431091,
  "lon": 2.3419694,
  "tags": {
    "amenity": "bar",
    "name": "Le Mauzac"
  }
},
{
  "type": "node",
  "id": 1685437012,
  "lat": 48.8679841,
  "lon": 2.3255481,
  "tags": {
    "addr:housenumber": "9",
    "addr:postcode": "75001",
    "addr:street": "Rue Duphot",
    "amenity": "restaurant",
    "cuisine": "fish",
    "name": "Goumard",
    "source": "www.goumard.com",
    "website": "www.goumard.com"
  }
},
{
  "type": "node",
  "id": 1685483804,
  "lat": 48.8706291,
  "lon": 2.3297804,
  "tags": {
    "addr:housenumber": "1",
    "addr:postcode": "75009",
    "addr:street": "Rue Scribe",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Lumière",
    "source": "www.hotel-scribe.com",
    "website": "www.hotel-scribe.com"
  }
},
{
  "type": "node",
  "id": 1685494665,
  "lat": 48.8693141,
  "lon": 2.3323713,
  "tags": {
    "addr:housenumber": "4",
    "addr:postcode": "75002",
    "addr:street": "Rue Daunou",
    "amenity": "bar",
    "name": "MKP Opéra",
    "source": "www.mkpbar.com",
    "website": "www.mkpbar.com"
  }
},
{
  "type": "node",
  "id": 1686623823,
  "lat": 48.8636829,
  "lon": 2.3283540,
  "tags": {
    "addr:postcode": "75001",
    "addr:street": "Jardins des Tuileries",
    "amenity": "cafe",
    "cuisine": "french",
    "name": "Café Diane",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 1686629756,
  "lat": 48.8547085,
  "lon": 2.3620151,
  "tags": {
    "addr:housenumber": "95",
    "addr:postcode": "75004",
    "addr:street": "Rue Saint-Antoine",
    "amenity": "cafe",
    "name": "Méo 7",
    "source": "www.meo.fr"
  }
},
{
  "type": "node",
  "id": 1686635237,
  "lat": 48.8680526,
  "lon": 2.3287936,
  "tags": {
    "addr:housename": "Le Ritz",
    "addr:housenumber": "15",
    "addr:postcode": "75001",
    "addr:street": "Place Vendôme",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "L\'espadon",
    "source": "fr.ritzparis.com",
    "website": "fr.ritzparis.com"
  }
},
{
  "type": "node",
  "id": 1686639133,
  "lat": 48.8684086,
  "lon": 2.3268250,
  "tags": {
    "addr:housename": "Castille",
    "addr:housenumber": "37",
    "addr:postcode": "75001",
    "addr:street": "Rue Cambon",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "L\'Assagio",
    "source": "www.castille.com",
    "website": "www.castille.com"
  }
},
{
  "type": "node",
  "id": 1686704119,
  "lat": 48.8578218,
  "lon": 2.2945636,
  "tags": {
    "addr:housename": "Tour Eiffet",
    "addr:housenumber": "2ème étage",
    "addr:postcode": "75007",
    "addr:street": "Avenue Gustave Eiffel",
    "amenity": "restaurant",
    "cuisine": "french",
    "level": "2",
    "name": "Le Jules Verne",
    "source": "www.lejulesverne-paris.com",
    "website": "www.lejulesverne-paris.com",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 1688086523,
  "lat": 48.8662803,
  "lon": 2.3394262,
  "tags": {
    "addr:housename": "Galerie Vivienne",
    "addr:housenumber": "4",
    "addr:postcode": "75002",
    "addr:street": "Rue des Petits Champs",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Bistrot Vivienne",
    "source": "www.bistrotvivienne.com",
    "website": "www.bistrotvivienne.com"
  }
},
{
  "type": "node",
  "id": 1688088636,
  "lat": 48.8710959,
  "lon": 2.3416366,
  "tags": {
    "addr:housename": "Passage des Panoramas",
    "addr:housenumber": "53",
    "addr:postcode": "75002",
    "addr:street": "Passage des Panoramas",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Passage 53",
    "source": "www.passage53.com",
    "website": "www.passage53.com"
  }
},
{
  "type": "node",
  "id": 1690488051,
  "lat": 48.8651186,
  "lon": 2.3284372,
  "tags": {
    "addr:housenumber": "226",
    "addr:postcode": "75001",
    "addr:street": "Rue de Rivoli",
    "amenity": "cafe",
    "cuisine": "coffee_shop",
    "description": "Salon de thé",
    "name": "Angelina",
    "source": "www.angelina-paris.fr",
    "website": "www.angelina-paris.fr"
  }
},
{
  "type": "node",
  "id": 1691558834,
  "lat": 48.8862067,
  "lon": 2.3175438,
  "tags": {
    "addr:housenumber": "61",
    "addr:postcode": "75017",
    "addr:street": "Rue Legendre",
    "amenity": "bar",
    "name": "West Bar"
  }
},
{
  "type": "node",
  "id": 1691584270,
  "lat": 48.8699813,
  "lon": 2.3246311,
  "tags": {
    "addr:housename": "Église de la Madeleine",
    "addr:postcode": "75008",
    "addr:street": "Place de la Madeleine",
    "amenity": "restaurant",
    "cuisine": "french",
    "description": "Restaurant associatif",
    "name": "Foyer de la Madeleine",
    "source": "http://www.foyerdelamadeleine.fr/",
    "website": "http://www.foyerdelamadeleine.fr/"
  }
},
{
  "type": "node",
  "id": 1691818977,
  "lat": 48.8445379,
  "lon": 2.3489273,
  "tags": {
    "amenity": "restaurant",
    "name": "Le vieux cèdre"
  }
},
{
  "type": "node",
  "id": 1691818978,
  "lat": 48.8445159,
  "lon": 2.3485397,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "tibetan",
    "name": "Tampsa"
  }
},
{
  "type": "node",
  "id": 1691823176,
  "lat": 48.8433693,
  "lon": 2.3513433,
  "tags": {
    "amenity": "cafe",
    "email": "info@maisondestroisthes.com",
    "fax": "+33 (0)1 42 17 07 85",
    "name": "Maison des Trois Thés",
    "phone": "+33 (0)1 43 36 93 84",
    "website": "http://maisondestroisthes.com/"
  }
},
{
  "type": "node",
  "id": 1692097042,
  "lat": 48.8624680,
  "lon": 2.3549738,
  "tags": {
    "amenity": "bar",
    "name": "Le Duplex"
  }
},
{
  "type": "node",
  "id": 1692159052,
  "lat": 48.8279876,
  "lon": 2.3272822,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "77",
    "addr:postcode": "75014",
    "addr:street": "Avenue du Général Leclerc",
    "amenity": "cafe",
    "name": "Dominique Saibron",
    "website": "http://dominique-saibron.com",
    "wheelchair": "yes",
    "wheelchair:description": "Very good pastries , breads , cakes."
  }
},
{
  "type": "node",
  "id": 1692228845,
  "lat": 48.8215244,
  "lon": 2.2529641,
  "tags": {
    "amenity": "bar",
    "brewery": "leffe",
    "name": "Le Maryland"
  }
},
{
  "type": "node",
  "id": 1692228848,
  "lat": 48.8186087,
  "lon": 2.2494343,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 1693086227,
  "lat": 48.8275402,
  "lon": 2.2846932,
  "tags": {
    "addr:housenumber": "19",
    "amenity": "bar",
    "name": "Les Quartauts"
  }
},
{
  "type": "node",
  "id": 1695095164,
  "lat": 48.8193240,
  "lon": 2.3236972,
  "tags": {
    "addr:postcode": "92120",
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Le Lotus Celeste",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 1695098751,
  "lat": 48.8191333,
  "lon": 2.3230642,
  "tags": {
    "addr:postcode": "92120",
    "addr:street": "Avenue Henri Ginoux",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Yakigushi"
  }
},
{
  "type": "node",
  "id": 1695115854,
  "lat": 48.8158654,
  "lon": 2.3111202,
  "tags": {
    "amenity": "restaurant",
    "contact:housenumber": "18",
    "contact:postcode": "92120",
    "contact:street": "Place Jean Jaurès",
    "cuisine": "french",
    "name": "Le Rond-Point"
  }
},
{
  "type": "node",
  "id": 1695622635,
  "lat": 48.8597088,
  "lon": 2.3086607,
  "tags": {
    "addr:housenumber": "79",
    "addr:postcode": "75007",
    "addr:street": "Rue Saint-Dominique",
    "amenity": "restaurant",
    "cuisine": "french",
    "description": "Brasserie",
    "name": "Thoumieux",
    "source": "www.thoumieux.fr",
    "website": "www.thoumieux.fr"
  }
},
{
  "type": "node",
  "id": 1695637600,
  "lat": 48.8529952,
  "lon": 2.3376020,
  "tags": {
    "addr:housenumber": "142",
    "addr:postcode": "75006",
    "addr:street": "Boulevard Saint-Germain",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Vagenende",
    "source": "www.vagenende.com",
    "website": "www.vagenende.com"
  }
},
{
  "type": "node",
  "id": 1695642573,
  "lat": 48.8501520,
  "lon": 2.3419436,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Bouillon Racine",
    "phone": "+33-1-44321560",
    "source": "www.bouillon-racine.com",
    "website": "www.bouillon-racine.com"
  }
},
{
  "type": "node",
  "id": 1695694207,
  "lat": 48.8687853,
  "lon": 2.3250184,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Royal Madeleine Chez Monsieur",
    "source": "www.royalmadeleine.com",
    "website": "www.royalmadeleine.com"
  }
},
{
  "type": "node",
  "id": 1696040499,
  "lat": 48.8434300,
  "lon": 2.3494242,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Au piano muet"
  }
},
{
  "type": "node",
  "id": 1696040500,
  "lat": 48.8432628,
  "lon": 2.3494718,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Vieux Bistrot"
  }
},
{
  "type": "node",
  "id": 1696042961,
  "lat": 48.8447332,
  "lon": 2.3491164,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "kebab",
    "name": "Le Cèdre"
  }
},
{
  "type": "node",
  "id": 1696042962,
  "lat": 48.8446591,
  "lon": 2.3491299,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Oi Sushi"
  }
},
{
  "type": "node",
  "id": 1696254281,
  "lat": 48.9007082,
  "lon": 2.2485068,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "algerian",
    "name": "Le Dattier"
  }
},
{
  "type": "node",
  "id": 1696343703,
  "lat": 48.8153466,
  "lon": 2.3179502,
  "tags": {
    "addr:postcode": "92120",
    "amenity": "bar",
    "name": "L\'Entr\'Acte",
    "wifi": "no"
  }
},
{
  "type": "node",
  "id": 1697395767,
  "lat": 48.8688647,
  "lon": 2.2646951,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Pavillon Royal",
    "website": "http://www.pavillon-royal.fr/"
  }
},
{
  "type": "node",
  "id": 1697395774,
  "lat": 48.8635574,
  "lon": 2.2602856,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Chalet des Iles",
    "website": "http://www.chalet-des-iles.com/"
  }
},
{
  "type": "node",
  "id": 1697702172,
  "lat": 48.8437358,
  "lon": 2.3472026,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese"
  }
},
{
  "type": "node",
  "id": 1698682462,
  "lat": 48.8384430,
  "lon": 2.3563154,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "kebab",
    "name": "Capitole",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1699294660,
  "lat": 48.8272621,
  "lon": 2.2645220,
  "tags": {
    "addr:street": "Rue Michel Jazy",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Yugen"
  }
},
{
  "type": "node",
  "id": 1699320210,
  "lat": 48.8271901,
  "lon": 2.2647017,
  "tags": {
    "addr:street": "Rue Michel Jazy",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Il Midi"
  }
},
{
  "type": "node",
  "id": 1699565606,
  "lat": 48.8373350,
  "lon": 2.3058145,
  "tags": {
    "amenity": "cafe",
    "name": "Le Royal d\'Alleray",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2012"
  }
},
{
  "type": "node",
  "id": 1700623112,
  "lat": 48.8660415,
  "lon": 2.3361004,
  "tags": {
    "addr:housenumber": "6",
    "addr:postcode": "75001",
    "addr:street": "Rue Thérèse",
    "amenity": "restaurant",
    "name": "Jantchi"
  }
},
{
  "type": "node",
  "id": 1701111405,
  "lat": 48.8349766,
  "lon": 2.2830210,
  "tags": {
    "addr:housenumber": "15 Bis",
    "addr:postcode": "75015",
    "addr:street": "Boulevard Victor",
    "amenity": "restaurant",
    "cuisine": "sushi",
    "name": "Okyama",
    "note": "buffet à volonté"
  }
},
{
  "type": "node",
  "id": 1701111406,
  "lat": 48.8327742,
  "lon": 2.2887456,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "407",
    "addr:postcode": "75015",
    "addr:street": "Rue de Vaugirard",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Chez Clément",
    "note:fr": "Restaurant d\'Hôtes",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1702449830,
  "lat": 48.8883787,
  "lon": 2.3534523,
  "tags": {
    "amenity": "bar",
    "name": "L’Omadys"
  }
},
{
  "type": "node",
  "id": 1702570597,
  "lat": 48.8447791,
  "lon": 2.3492894,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "regional",
    "name": "Le Grenier"
  }
},
{
  "type": "node",
  "id": 1702570598,
  "lat": 48.8435770,
  "lon": 2.3493886,
  "tags": {
    "amenity": "restaurant",
    "name": "Chez Nicos"
  }
},
{
  "type": "node",
  "id": 1703126078,
  "lat": 48.8507180,
  "lon": 2.4380396,
  "tags": {
    "addr:housenumber": "20",
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Renine"
  }
},
{
  "type": "node",
  "id": 1704374874,
  "lat": 48.8170494,
  "lon": 2.3215311,
  "tags": {
    "addr:postcode": "92120",
    "amenity": "cafe",
    "name": "Le Disque Bleu"
  }
},
{
  "type": "node",
  "id": 1705579063,
  "lat": 48.8377834,
  "lon": 2.3909830,
  "tags": {
    "addr:housenumber": "233",
    "addr:postcode": "75012",
    "addr:street": "Rue de Charenton",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Atelier d\'Antan"
  }
},
{
  "type": "node",
  "id": 1706225572,
  "lat": 48.8939174,
  "lon": 2.3431529,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Sonia"
  }
},
{
  "type": "node",
  "id": 1706235999,
  "lat": 48.8911748,
  "lon": 2.3607925,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Tin Tin"
  }
},
{
  "type": "node",
  "id": 1710459798,
  "lat": 48.8683505,
  "lon": 2.3748549,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Muras"
  }
},
{
  "type": "node",
  "id": 1711318534,
  "lat": 48.8437872,
  "lon": 2.3493332,
  "tags": {
    "amenity": "bar",
    "name": "Student Bar"
  }
},
{
  "type": "node",
  "id": 1711318535,
  "lat": 48.8442707,
  "lon": 2.3492157,
  "tags": {
    "amenity": "restaurant",
    "name": "Oulala"
  }
},
{
  "type": "node",
  "id": 1712021058,
  "lat": 48.8873877,
  "lon": 2.3371180,
  "tags": {
    "alt_name": "Moulin Radet",
    "amenity": "restaurant",
    "man_made": "windmill",
    "name": "Moulin de la Galette",
    "wikipedia": "fr:Moulin de la galette"
  }
},
{
  "type": "node",
  "id": 1714118279,
  "lat": 48.8401572,
  "lon": 2.3240577,
  "tags": {
    "addr:housenumber": "15",
    "addr:postcode": "75014",
    "addr:street": "Rue de la Gaîté",
    "amenity": "restaurant",
    "cuisine": "fish",
    "name": "Aux Iles Marquises"
  }
},
{
  "type": "node",
  "id": 1717703281,
  "lat": 48.8412056,
  "lon": 2.3941921,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Estaminet Jenlain"
  }
},
{
  "type": "node",
  "id": 1717774498,
  "lat": 48.8799295,
  "lon": 2.3575665,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian",
    "diet:vegetarian": "only",
    "name": "Saravanaa Bhavan"
  }
},
{
  "type": "node",
  "id": 1719495039,
  "lat": 48.8418196,
  "lon": 2.3905033,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "32-34",
    "addr:postcode": "75012",
    "addr:street": "Allée Vivaldi",
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Les Jardins de Mandchourie 龍鄉飯莊",
    "name:fr": "Les Jardins de Mandchourie",
    "name:zh": "龍鄉飯莊",
    "phone": "+33 1 43455888"
  }
},
{
  "type": "node",
  "id": 1721884559,
  "lat": 48.8864168,
  "lon": 2.3442029,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "2",
    "addr:postcode": "75018",
    "addr:street": "Rue Lamarck",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Babalou"
  }
},
{
  "type": "node",
  "id": 1721885337,
  "lat": 48.8866377,
  "lon": 2.3443434,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "8",
    "addr:postcode": "75018",
    "addr:street": "Rue Lamarck",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Grand 8"
  }
},
{
  "type": "node",
  "id": 1723256855,
  "lat": 48.8294590,
  "lon": 2.3017660,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "117",
    "addr:postcode": "75015",
    "addr:street": "Rue Brancion",
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "San Polo",
    "phone": "+33 1 48 28 03 60",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2012"
  }
},
{
  "type": "node",
  "id": 1725567118,
  "lat": 48.8899236,
  "lon": 2.3398500,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Hope Café",
    "organic": "yes"
  }
},
{
  "type": "node",
  "id": 1725571311,
  "lat": 48.8865304,
  "lon": 2.3443480,
  "tags": {
    "addr:housename": "4",
    "addr:postcode": "75018",
    "addr:street": "Rue Lamarck",
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Chez Yin"
  }
},
{
  "type": "node",
  "id": 1727787833,
  "lat": 48.8965094,
  "lon": 2.2460807,
  "tags": {
    "addr:housenumber": "61",
    "addr:postcode": "92400",
    "addr:street": "Rue de Bitche",
    "amenity": "restaurant",
    "entrance": "yes",
    "name": "Les pieds sous la table"
  }
},
{
  "type": "node",
  "id": 1728920091,
  "lat": 48.8977353,
  "lon": 2.2477848,
  "tags": {
    "amenity": "cafe",
    "entrance": "yes",
    "name": "Le Mately\'S"
  }
},
{
  "type": "node",
  "id": 1728936579,
  "lat": 48.8972006,
  "lon": 2.2478433,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "turkish",
    "entrance": "yes"
  }
},
{
  "type": "node",
  "id": 1728954413,
  "lat": 48.8968267,
  "lon": 2.2481443,
  "tags": {
    "amenity": "bar",
    "entrance": "yes",
    "name": "Bar des sportifs"
  }
},
{
  "type": "node",
  "id": 1729160220,
  "lat": 48.8962532,
  "lon": 2.2486063,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "entrance": "yes",
    "name": "Chez Yong"
  }
},
{
  "type": "node",
  "id": 1731675367,
  "lat": 48.8441758,
  "lon": 2.3479878,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le resto"
  }
},
{
  "type": "node",
  "id": 1731675378,
  "lat": 48.8445200,
  "lon": 2.3486356,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "korean",
    "name": "Han Lim"
  }
},
{
  "type": "node",
  "id": 1731675379,
  "lat": 48.8445253,
  "lon": 2.3488180,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "La truffière"
  }
},
{
  "type": "node",
  "id": 1732342194,
  "lat": 48.8969020,
  "lon": 2.2398156,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "La Table des Artistes",
    "phone": "+33 1 46350776"
  }
},
{
  "type": "node",
  "id": 1734988687,
  "lat": 48.8570416,
  "lon": 2.3726643,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Kathmandou"
  }
},
{
  "type": "node",
  "id": 1736157828,
  "lat": 48.8535516,
  "lon": 2.3746079,
  "tags": {
    "addr:housenumber": "8",
    "addr:postcode": "75011",
    "addr:street": "Passage Thiéré",
    "amenity": "pub",
    "name": "La mécanique ondulatoire",
    "source": "www.myspace.com/lamecanique",
    "website": "www.myspace.com/lamecanique"
  }
},
{
  "type": "node",
  "id": 1740732511,
  "lat": 48.8615684,
  "lon": 2.3783425,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Acqualina in bocca"
  }
},
{
  "type": "node",
  "id": 1741247144,
  "lat": 48.8857166,
  "lon": 2.3381509,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "description": "Brasserie",
    "name": "Le Relais de la Butte"
  }
},
{
  "type": "node",
  "id": 1741253764,
  "lat": 48.8846283,
  "lon": 2.3377325,
  "tags": {
    "amenity": "cafe",
    "name": "Le Saint-Jean"
  }
},
{
  "type": "node",
  "id": 1741254171,
  "lat": 48.8849290,
  "lon": 2.3370700,
  "tags": {
    "amenity": "cafe",
    "name": "Le Vrai Paris"
  }
},
{
  "type": "node",
  "id": 1741258648,
  "lat": 48.8846072,
  "lon": 2.3383226,
  "tags": {
    "amenity": "cafe",
    "name": "Le Petit Montmartre"
  }
},
{
  "type": "node",
  "id": 1743665619,
  "lat": 48.8475785,
  "lon": 2.4004192,
  "tags": {
    "amenity": "restaurant",
    "name": "Au régal Couscous"
  }
},
{
  "type": "node",
  "id": 1744513600,
  "lat": 48.8274320,
  "lon": 2.3314214,
  "tags": {
    "amenity": "restaurant",
    "name": "Carré d\'Or"
  }
},
{
  "type": "node",
  "id": 1745568376,
  "lat": 48.8743992,
  "lon": 2.3636352,
  "tags": {
    "amenity": "restaurant",
    "name": "Bang"
  }
},
{
  "type": "node",
  "id": 1745776064,
  "lat": 48.8702183,
  "lon": 2.2459747,
  "tags": {
    "amenity": "restaurant",
    "name": "Les Jardins de Bagatelle",
    "website": "http://www.bagatellelerestaurant.com/"
  }
},
{
  "type": "node",
  "id": 1745776084,
  "lat": 48.8704089,
  "lon": 2.2499763,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1746296696,
  "lat": 48.8690004,
  "lon": 2.3384279,
  "tags": {
    "addr:housenumber": "77",
    "addr:postcode": "75002",
    "addr:street": "Rue de Richelieu",
    "amenity": "restaurant",
    "cuisine": "french",
    "email": "lemesturet@wanadoo.fr",
    "name": "Le Mesturet",
    "phone": "01 42 97 40 68",
    "source": "www.lemesturet.com",
    "website": "www.lemesturet.com"
  }
},
{
  "type": "node",
  "id": 1746634556,
  "lat": 48.8510173,
  "lon": 2.2932405,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "corean",
    "name": "Coreen Woury"
  }
},
{
  "type": "node",
  "id": 1746655068,
  "lat": 48.8509119,
  "lon": 2.2937166,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Le Taj-Mahal"
  }
},
{
  "type": "node",
  "id": 1746658386,
  "lat": 48.8508690,
  "lon": 2.2932272,
  "tags": {
    "amenity": "restaurant",
    "name": "La Cigalle"
  }
},
{
  "type": "node",
  "id": 1746658721,
  "lat": 48.8535259,
  "lon": 2.4120078,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese"
  }
},
{
  "type": "node",
  "id": 1750350273,
  "lat": 48.8439446,
  "lon": 2.3493055,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Jardin d\'Artémis"
  }
},
{
  "type": "node",
  "id": 1750350274,
  "lat": 48.8438873,
  "lon": 2.3493114,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Chez Ann"
  }
},
{
  "type": "node",
  "id": 1750435701,
  "lat": 48.8485015,
  "lon": 2.3421189,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Les Patios"
  }
},
{
  "type": "node",
  "id": 1750441372,
  "lat": 48.8501669,
  "lon": 2.3420537,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Bouillon des colonies",
    "source": "www.bouillondescolonies.com",
    "website": "www.bouillondescolonies.com"
  }
},
{
  "type": "node",
  "id": 1750443570,
  "lat": 48.8455001,
  "lon": 2.3427289,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "La muraille du phénix"
  }
},
{
  "type": "node",
  "id": 1750728906,
  "lat": 48.8663676,
  "lon": 2.3860046,
  "tags": {
    "amenity": "bar",
    "name": "La Cale Sèche"
  }
},
{
  "type": "node",
  "id": 1750728908,
  "lat": 48.8686610,
  "lon": 2.3900468,
  "tags": {
    "amenity": "bar",
    "name": "La Laverie"
  }
},
{
  "type": "node",
  "id": 1754603251,
  "lat": 48.8739830,
  "lon": 2.3725892,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Sainte-Marthe",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1754603252,
  "lat": 48.8742654,
  "lon": 2.3727129,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Galopin"
  }
},
{
  "type": "node",
  "id": 1756137328,
  "lat": 48.8549412,
  "lon": 2.2694565,
  "tags": {
    "amenity": "cafe",
    "name": "Amadeus"
  }
},
{
  "type": "node",
  "id": 1756138087,
  "lat": 48.8545591,
  "lon": 2.2694726,
  "tags": {
    "amenity": "cafe",
    "name": "Bô-Zinc"
  }
},
{
  "type": "node",
  "id": 1756259322,
  "lat": 48.8334129,
  "lon": 2.3092754,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1756731229,
  "lat": 48.8434049,
  "lon": 2.2987789,
  "tags": {
    "amenity": "restaurant",
    "name": "Au Pois Chiche",
    "note:fr": "Couscous, Mechoui, Brochettes, Grillades",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1756731231,
  "lat": 48.8408842,
  "lon": 2.2997786,
  "tags": {
    "amenity": "bar",
    "name": "Bistrot Le Cap",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1756731237,
  "lat": 48.8407778,
  "lon": 2.2998335,
  "tags": {
    "amenity": "bar",
    "name": "L\'Auvergne à Paris",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1761213445,
  "lat": 48.8736424,
  "lon": 2.3076398,
  "tags": {
    "amenity": "restaurant",
    "name": "Apicius",
    "phone": "01.43.80.19.66",
    "website": "http://www.restaurant-apicius.com"
  }
},
{
  "type": "node",
  "id": 1763203309,
  "lat": 48.8877530,
  "lon": 2.3182328,
  "tags": {
    "amenity": "pub",
    "name": "Le Manoir",
    "wifi": "yes"
  }
},
{
  "type": "node",
  "id": 1764249685,
  "lat": 48.8566315,
  "lon": 2.4020574,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "43",
    "addr:postcode": "75020",
    "addr:street": "Rue des Orteaux",
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Les Noces d\'Or"
  }
},
{
  "type": "node",
  "id": 1765154127,
  "lat": 48.8984060,
  "lon": 2.3445732,
  "tags": {
    "amenity": "restaurant",
    "name": "Restaurant universitaire Rabelais",
    "opening_hours": "Mo-Fr 11:15-14:00"
  }
},
{
  "type": "node",
  "id": 1765177761,
  "lat": 48.8436087,
  "lon": 2.3253227,
  "tags": {
    "amenity": "cafe",
    "name": "Alberto",
    "opening_hours": "Mo-Su 11:00-23:00"
  }
},
{
  "type": "node",
  "id": 1765177764,
  "lat": 48.8433712,
  "lon": 2.3246895,
  "tags": {
    "amenity": "restaurant",
    "name": "Hippopotamus"
  }
},
{
  "type": "node",
  "id": 1765177766,
  "lat": 48.8438272,
  "lon": 2.3247198,
  "tags": {
    "amenity": "cafe",
    "name": "La Consigne"
  }
},
{
  "type": "node",
  "id": 1765177767,
  "lat": 48.8437155,
  "lon": 2.3249989,
  "tags": {
    "amenity": "cafe",
    "name": "La Ruche",
    "opening_hours": "Mo-Su 00:00-02:00,06:00-24:00"
  }
},
{
  "type": "node",
  "id": 1765177769,
  "lat": 48.8435643,
  "lon": 2.3254572,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Sakura",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 1765229206,
  "lat": 48.8828717,
  "lon": 2.3288427,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Gourmet"
  }
},
{
  "type": "node",
  "id": 1765229208,
  "lat": 48.8827209,
  "lon": 2.3281869,
  "tags": {
    "amenity": "pub",
    "name": "Brasserie des Banques"
  }
},
{
  "type": "node",
  "id": 1765229211,
  "lat": 48.8827606,
  "lon": 2.3283572,
  "tags": {
    "amenity": "restaurant",
    "capacity": "50",
    "cuisine": "japanese",
    "name": "Kim"
  }
},
{
  "type": "node",
  "id": 1765257980,
  "lat": 48.8476850,
  "lon": 2.4080780,
  "tags": {
    "addr:housenumber": "87",
    "amenity": "restaurant",
    "name": "L\'Europe",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2012"
  }
},
{
  "type": "node",
  "id": 1765475937,
  "lat": 48.8135611,
  "lon": 2.4211854,
  "tags": {
    "addr:housenumber": "46",
    "addr:street": "Avenue du Général de Gaulle",
    "amenity": "restaurant",
    "name": "Le Soleil Levant",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1765475996,
  "lat": 48.8150093,
  "lon": 2.4203075,
  "tags": {
    "addr:housenumber": "20",
    "addr:street": "Avenue du Général de Gaulle",
    "amenity": "restaurant",
    "name": "Saveurs d\'Ici et d\'Ailleurs",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1767499359,
  "lat": 48.8203160,
  "lon": 2.2497057,
  "tags": {
    "addr:housenumber": "32",
    "addr:postcode": "92130",
    "addr:street": " Rue Jean Pierre Timbaud",
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Toscanini",
    "website": "http://www.tripadvisor.fr/Restaurant_Review-g196569-d1322285-Reviews-Toscanini-Issy_les_Moulineaux_Hauts_de_Seine_Ile_de_France.html"
  }
},
{
  "type": "node",
  "id": 1767749621,
  "lat": 48.8188257,
  "lon": 2.2542569,
  "tags": {
    "addr:city": "Issy-les-Moulineaux",
    "addr:housenumber": "123",
    "addr:postcode": "92130",
    "addr:street": "Avenue de Verdun",
    "amenity": "restaurant",
    "cuisine": "regional",
    "name": "La perle des antilles",
    "website": "http://www.laperledesantilles.com"
  }
},
{
  "type": "node",
  "id": 1768091355,
  "lat": 48.8268672,
  "lon": 2.2637587,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "internet_access": "wlan",
    "internet_access:fee": "no",
    "name": "OyaKouKou",
    "opening_hours": "Mo-Sa 11:00-15:00,18:00-22:30",
    "operator": "OYAKOUKOU ISSY",
    "phone": "+33146457335",
    "smoking": "separated",
    "website": "http://oyakoukou.fr",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 1768572992,
  "lat": 48.8193695,
  "lon": 2.3042381,
  "tags": {
    "amenity": "pub",
    "contact:housenumber": "107",
    "name": "L\'Oustalou",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1768575731,
  "lat": 48.8192147,
  "lon": 2.3045762,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Au Régal de Chine"
  }
},
{
  "type": "node",
  "id": 1768576355,
  "lat": 48.8192385,
  "lon": 2.3046650,
  "tags": {
    "amenity": "bar",
    "name": "Le Celia"
  }
},
{
  "type": "node",
  "id": 1768583150,
  "lat": 48.8194462,
  "lon": 2.3048644,
  "tags": {
    "amenity": "restaurant",
    "contact:housenumber": "115",
    "cuisine": "italian",
    "name": "Au Coeur de l\'Italie"
  }
},
{
  "type": "node",
  "id": 1768595695,
  "lat": 48.8195932,
  "lon": 2.3058005,
  "tags": {
    "amenity": "restaurant",
    "contact:housenumber": "129",
    "cuisine": "regional",
    "name": "La Crêperie"
  }
},
{
  "type": "node",
  "id": 1768798727,
  "lat": 48.8947658,
  "lon": 2.2268443,
  "tags": {
    "amenity": "restaurant",
    "description:fr": "Créperie, Sacaderie",
    "name": "Le P\'tit Breton",
    "old_name": "Crépes Délices",
    "phone": "01.41.18.74.77",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1768812165,
  "lat": 48.8196148,
  "lon": 2.3059423,
  "tags": {
    "amenity": "bar",
    "name": "Brasserie Le Carrefour"
  }
},
{
  "type": "node",
  "id": 1769442128,
  "lat": 48.8402155,
  "lon": 2.3458349,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Parigot"
  }
},
{
  "type": "node",
  "id": 1770232050,
  "lat": 48.8421407,
  "lon": 2.3455456,
  "tags": {
    "amenity": "bar",
    "name": "K-Fêt",
    "wifi": "yes"
  }
},
{
  "type": "node",
  "id": 1772681392,
  "lat": 48.8935993,
  "lon": 2.3230562,
  "tags": {
    "addr:housenumber": "48",
    "addr:postcode": "75017",
    "addr:street": "Rue de la Jonquière",
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Taj Indien"
  }
},
{
  "type": "node",
  "id": 1775391369,
  "lat": 48.8508424,
  "lon": 2.4062247,
  "tags": {
    "addr:housenumber": "43",
    "addr:postcode": "75020",
    "addr:street": "Rue des Pyrénées",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "L\'A Vin Première",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2012"
  }
},
{
  "type": "node",
  "id": 1775407497,
  "lat": 48.8525397,
  "lon": 2.4062717,
  "tags": {
    "addr:housenumber": "60",
    "amenity": "bar",
    "name": "Le Monte Christo",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2012"
  }
},
{
  "type": "node",
  "id": 1776225357,
  "lat": 48.9022557,
  "lon": 2.3765142,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Arrets de Jeu",
    "website": "http://www.arretsdejeu.com"
  }
},
{
  "type": "node",
  "id": 1777460022,
  "lat": 48.8356633,
  "lon": 2.3751497,
  "tags": {
    "amenity": "restaurant",
    "name": "Buffalo Grill"
  }
},
{
  "type": "node",
  "id": 1778496031,
  "lat": 48.8489864,
  "lon": 2.3403461,
  "tags": {
    "amenity": "restaurant",
    "name": "Au Père Louis"
  }
},
{
  "type": "node",
  "id": 1778519709,
  "lat": 48.8519186,
  "lon": 2.3373763,
  "tags": {
    "amenity": "pub",
    "name": "Les Caves Alliées"
  }
},
{
  "type": "node",
  "id": 1779444212,
  "lat": 48.8147362,
  "lon": 2.3193931,
  "tags": {
    "addr:postcode": "92120",
    "amenity": "bar",
    "name": "Comptoir du Marché"
  }
},
{
  "type": "node",
  "id": 1780508213,
  "lat": 48.8555899,
  "lon": 2.3867736,
  "tags": {
    "amenity": "restaurant",
    "contact:phone": "+33143705927",
    "contact:website": "www.melac.fr",
    "cuisine": "french",
    "name": "Mélac",
    "opening_hours": "Tu-Sa 18:00-24:00; Su-Mo off; Aug off",
    "smoking": "no",
    "takeaway": "no",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 1780512473,
  "lat": 48.8560496,
  "lon": 2.3884378,
  "tags": {
    "amenity": "restaurant",
    "contact:email": "restaurant@latabledeclaire.fr",
    "contact:phone": "+33143705984",
    "contact:website": "www.latabledeclaire.fr",
    "cuisine": "french",
    "name": "La Table de Claire",
    "opening_hours": "Tu-Sa 11:00-14:00, 18:00-24:00; Su-Mo off",
    "organic": "yes",
    "source": "website, survey"
  }
},
{
  "type": "node",
  "id": 1781353157,
  "lat": 48.8653554,
  "lon": 2.2634557,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1781353159,
  "lat": 48.8674127,
  "lon": 2.2620797,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1781383958,
  "lat": 48.8668318,
  "lon": 2.2544028,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Relais du Bois de Boulogne"
  }
},
{
  "type": "node",
  "id": 1784619141,
  "lat": 48.8934373,
  "lon": 2.3232735,
  "tags": {
    "addr:housenumber": "43",
    "addr:postcode": "75017",
    "addr:street": "Rue de la Jonquière",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Chez Lucette"
  }
},
{
  "type": "node",
  "id": 1785271479,
  "lat": 48.8527233,
  "lon": 2.3765138,
  "tags": {
    "amenity": "bar",
    "name": "Le Motel"
  }
},
{
  "type": "node",
  "id": 1785271492,
  "lat": 48.8531504,
  "lon": 2.3773721,
  "tags": {
    "amenity": "restaurant",
    "name": "Bistrot des Peintres"
  }
},
{
  "type": "node",
  "id": 1785271501,
  "lat": 48.8513051,
  "lon": 2.3765410,
  "tags": {
    "amenity": "restaurant",
    "name": "Sushi Shop",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 1785271517,
  "lat": 48.8501042,
  "lon": 2.3782626,
  "tags": {
    "amenity": "bar",
    "name": "Nul bar ailleurs"
  }
},
{
  "type": "node",
  "id": 1785271569,
  "lat": 48.8532457,
  "lon": 2.3759666,
  "tags": {
    "amenity": "bar",
    "name": "Les Abeilles"
  }
},
{
  "type": "node",
  "id": 1785271580,
  "lat": 48.8511667,
  "lon": 2.3770664,
  "tags": {
    "amenity": "cafe",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 1785369632,
  "lat": 48.8349006,
  "lon": 2.3856248,
  "tags": {
    "amenity": "restaurant",
    "name": "Zendo",
    "phone": "+33 1 43 44 88 60",
    "wheelchair": "limited",
    "wheelchair:description": "Une marche"
  }
},
{
  "type": "node",
  "id": 1785632170,
  "lat": 48.8427645,
  "lon": 2.2780599,
  "tags": {
    "addr:housenumber": "7",
    "addr:postcode": "75015",
    "addr:street": "Rue André Lefebvre",
    "amenity": "restaurant",
    "cuisine": "sushi",
    "name": "Kaiseki",
    "website": "http://www.kaiseki.com"
  }
},
{
  "type": "node",
  "id": 1785987575,
  "lat": 48.8583239,
  "lon": 2.4334742,
  "tags": {
    "amenity": "bar",
    "name": "Le bar du marché"
  }
},
{
  "type": "node",
  "id": 1786107869,
  "lat": 48.8827020,
  "lon": 2.2390261,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 1786108265,
  "lat": 48.8827126,
  "lon": 2.2389966,
  "tags": {
    "amenity": "bar",
    "brewery:note": "Jenlain",
    "name": "Le coupole d\'argent"
  }
},
{
  "type": "node",
  "id": 1786991616,
  "lat": 48.8795704,
  "lon": 2.3522406,
  "tags": {
    "amenity": "restaurant",
    "name": "Chez Michel"
  }
},
{
  "type": "node",
  "id": 1786993190,
  "lat": 48.8793693,
  "lon": 2.3525786,
  "tags": {
    "amenity": "restaurant",
    "name": "Chez Casimir"
  }
},
{
  "type": "node",
  "id": 1787097079,
  "lat": 48.8865873,
  "lon": 2.3128095,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "127",
    "addr:postcode": "75017",
    "addr:street": "Rue Cardinet",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Bouchon et l\'assiette"
  }
},
{
  "type": "node",
  "id": 1787424954,
  "lat": 48.8404972,
  "lon": 2.3950481,
  "tags": {
    "addr:housenumber": "125",
    "addr:postcode": "75012",
    "addr:street": "Rue de Reuilly",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Les Souris dansent"
  }
},
{
  "type": "node",
  "id": 1788397850,
  "lat": 48.8535620,
  "lon": 2.4697010,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1788496378,
  "lat": 48.8573906,
  "lon": 2.4710419,
  "tags": {
    "addr:housenumber": "19",
    "addr:postcode": "94120",
    "addr:street": "rue Emile Zola",
    "amenity": "restaurant",
    "cuisine": "chicken",
    "name": "Le roi du poulet",
    "source": "local_knowledge"
  }
},
{
  "type": "node",
  "id": 1789300011,
  "lat": 48.8762899,
  "lon": 2.3352405,
  "tags": {
    "amenity": "cafe",
    "name": "Colombus Café",
    "operator": "Colombus Café",
    "source": "survey",
    "website": "http://www.columbuscafe.com/"
  }
},
{
  "type": "node",
  "id": 1789894287,
  "lat": 48.8660229,
  "lon": 2.3666774,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1789895626,
  "lat": 48.8661411,
  "lon": 2.3671105,
  "tags": {
    "amenity": "restaurant",
    "name": "Sept\'n"
  }
},
{
  "type": "node",
  "id": 1789944746,
  "lat": 48.8668369,
  "lon": 2.3739208,
  "tags": {
    "addr:housenumber": "49",
    "addr:postcode": "75011",
    "addr:street": "Rue Jean-Pierre Timbaud",
    "amenity": "bar",
    "name": "UFO Bar"
  }
},
{
  "type": "node",
  "id": 1789946258,
  "lat": 48.8667946,
  "lon": 2.3743500,
  "tags": {
    "addr:housenumber": "64",
    "addr:postcode": "75011",
    "addr:street": "Rue Jean-Pierre Timbaud",
    "amenity": "bar",
    "name": "L\'alimentation générale",
    "website": "http://www.alimentation-generale.net/"
  }
},
{
  "type": "node",
  "id": 1790138373,
  "lat": 48.8566794,
  "lon": 2.3823726,
  "tags": {
    "addr:housenumber": "127 bis",
    "addr:postcode": "75011",
    "addr:street": "Boulevard Voltaire",
    "amenity": "cafe",
    "cuisine": "french",
    "internet_access": "no",
    "name": "Chez Justin"
  }
},
{
  "type": "node",
  "id": 1790147925,
  "lat": 48.8714714,
  "lon": 2.3280397,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "21",
    "addr:postcode": "75009",
    "addr:street": "Rue de Caumartin",
    "amenity": "restaurant",
    "name": "Les Bacchantes",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 1790156781,
  "lat": 48.8939500,
  "lon": 2.2576639,
  "tags": {
    "addr:city": "Courbevoie",
    "addr:housenumber": "17",
    "addr:postcode": "92400",
    "addr:street": "Rue Sainte-Marie",
    "amenity": "restaurant",
    "name": "Crêperie Ker Lili",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 1791332016,
  "lat": 48.8171355,
  "lon": 2.4674995,
  "tags": {
    "amenity": "cafe",
    "name": "Le Cheval Blanc"
  }
},
{
  "type": "node",
  "id": 1791412478,
  "lat": 48.8914883,
  "lon": 2.3506742,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Portobello"
  }
},
{
  "type": "node",
  "id": 1791641575,
  "lat": 48.8867280,
  "lon": 2.3409619,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 1791656237,
  "lat": 48.8286998,
  "lon": 2.3507416,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "spanish",
    "name": "Chez Les Filles",
    "website": "http://www.restaurant-papagallo.com/"
  }
},
{
  "type": "node",
  "id": 1791657805,
  "lat": 48.8286000,
  "lon": 2.3506267,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "regional",
    "name": "Chez Mamane"
  }
},
{
  "type": "node",
  "id": 1791678323,
  "lat": 48.8427006,
  "lon": 2.2950967,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "Sud-Ouest France",
    "name": "Chez Papa"
  }
},
{
  "type": "node",
  "id": 1793051135,
  "lat": 48.8332718,
  "lon": 2.3868776,
  "tags": {
    "amenity": "cafe",
    "name": "espressamente illy",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 1793052282,
  "lat": 48.8332740,
  "lon": 2.3869138,
  "tags": {
    "amenity": "restaurant",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 1793358623,
  "lat": 48.8979441,
  "lon": 2.2873076,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Chez Aldo"
  }
},
{
  "type": "node",
  "id": 1793370419,
  "lat": 48.8984450,
  "lon": 2.2863648,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1793380831,
  "lat": 48.8967999,
  "lon": 2.2878266,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese"
  }
},
{
  "type": "node",
  "id": 1793380832,
  "lat": 48.8967594,
  "lon": 2.2876065,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1793385451,
  "lat": 48.8986444,
  "lon": 2.2864560,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Pizza Da Paolo"
  }
},
{
  "type": "node",
  "id": 1793385971,
  "lat": 48.8987202,
  "lon": 2.2866491,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Karaké"
  }
},
{
  "type": "node",
  "id": 1793396452,
  "lat": 48.8985721,
  "lon": 2.2867751,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "sandwich",
    "name": "Aux Pains Perdus"
  }
},
{
  "type": "node",
  "id": 1793527745,
  "lat": 48.8729261,
  "lon": 2.3537842,
  "tags": {
    "amenity": "pub",
    "cuisine": "french",
    "name": "La Ferme"
  }
},
{
  "type": "node",
  "id": 1793527746,
  "lat": 48.8736230,
  "lon": 2.3526886,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Martel"
  }
},
{
  "type": "node",
  "id": 1793527747,
  "lat": 48.8729261,
  "lon": 2.3542213,
  "tags": {
    "amenity": "pub",
    "name": "Le Napoléon"
  }
},
{
  "type": "node",
  "id": 1793946959,
  "lat": 48.8552626,
  "lon": 2.4326105,
  "tags": {
    "amenity": "cafe",
    "name": "Armony",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1793946960,
  "lat": 48.8570793,
  "lon": 2.4330413,
  "tags": {
    "amenity": "cafe",
    "cuisine": "yes",
    "internet_access": "no",
    "name": "Le Huit bar",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1793946962,
  "lat": 48.8554303,
  "lon": 2.4324705,
  "tags": {
    "amenity": "cafe",
    "cuisine": "yes",
    "name": "Vin par là",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1793946963,
  "lat": 48.8527467,
  "lon": 2.4312145,
  "tags": {
    "amenity": "cafe",
    "name": "Montana"
  }
},
{
  "type": "node",
  "id": 1793946964,
  "lat": 48.8528536,
  "lon": 2.4314057,
  "tags": {
    "amenity": "cafe",
    "name": "La Comédia"
  }
},
{
  "type": "node",
  "id": 1793946965,
  "lat": 48.8532404,
  "lon": 2.4304022,
  "tags": {
    "amenity": "cafe",
    "name": "Pourquoi Pas"
  }
},
{
  "type": "node",
  "id": 1794262385,
  "lat": 48.8130605,
  "lon": 2.3197069,
  "tags": {
    "amenity": "restaurant",
    "contact:housenumber": "119",
    "contact:postcode": "92120",
    "contact:street": "Avenue Henri Ginoux",
    "cuisine": "japanese",
    "name": "Takenoko"
  }
},
{
  "type": "node",
  "id": 1794416184,
  "lat": 48.8806132,
  "lon": 2.2410630,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "regional",
    "name": "Crêperie Fest Noz"
  }
},
{
  "type": "node",
  "id": 1795167273,
  "lat": 48.8972685,
  "lon": 2.2380256,
  "tags": {
    "amenity": "cafe",
    "name": "Bistrot d\'Édouard"
  }
},
{
  "type": "node",
  "id": 1795299687,
  "lat": 48.8412651,
  "lon": 2.3237285,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza"
  }
},
{
  "type": "node",
  "id": 1795299697,
  "lat": 48.8412198,
  "lon": 2.3236119,
  "tags": {
    "addr:housenumber": "21",
    "addr:street": "Boulevard Edgar Quinet",
    "amenity": "restaurant",
    "cuisine": "vegetarian",
    "diet:vegetarian": "only",
    "entrance": "yes",
    "name": "Le paradis du fruit"
  }
},
{
  "type": "node",
  "id": 1795694033,
  "lat": 48.8979610,
  "lon": 2.2850933,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1795714858,
  "lat": 48.8987776,
  "lon": 2.2860694,
  "tags": {
    "amenity": "restaurant",
    "name": "Kaobab"
  }
},
{
  "type": "node",
  "id": 1795716842,
  "lat": 48.8986877,
  "lon": 2.2873461,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "sandwich"
  }
},
{
  "type": "node",
  "id": 1796793478,
  "lat": 48.8359076,
  "lon": 2.3859497,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "2",
    "addr:postcode": "75012",
    "addr:street": "Rue de Bercy",
    "amenity": "cafe",
    "name": "La terrasse",
    "phone": "01 43 43 15 54",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 1796804553,
  "lat": 48.8789434,
  "lon": 2.3780844,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "burger",
    "name": "Danny Hills"
  }
},
{
  "type": "node",
  "id": 1796812747,
  "lat": 48.8717406,
  "lon": 2.3715881,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "latino",
    "name": "Poco Loco"
  }
},
{
  "type": "node",
  "id": 1797945074,
  "lat": 48.8183068,
  "lon": 2.3303100,
  "tags": {
    "amenity": "restaurant",
    "contact:housenumber": "7",
    "contact:postcode": "92120",
    "contact:street": "Rue Danton",
    "cuisine": "indian",
    "name": "Eat\'n\'cure"
  }
},
{
  "type": "node",
  "id": 1797977729,
  "lat": 48.8111631,
  "lon": 2.3142453,
  "tags": {
    "addr:housenumber": "2",
    "addr:postcode": "92120",
    "addr:street": "Rue Georges Messier",
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Le Vendôme"
  }
},
{
  "type": "node",
  "id": 1799874666,
  "lat": 48.8685692,
  "lon": 2.2245926,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "crepe",
    "name": "Ma petite île"
  }
},
{
  "type": "node",
  "id": 1800349948,
  "lat": 48.8276580,
  "lon": 2.3500100,
  "tags": {
    "amenity": "pub",
    "brewery": "chouffe;leffe;tripel_karmeliet;guinness;chimay",
    "name": "Chez Michel"
  }
},
{
  "type": "node",
  "id": 1800352592,
  "lat": 48.8276701,
  "lon": 2.3500783,
  "tags": {
    "amenity": "restaurant",
    "name": "Des Crêpes et des Cailles"
  }
},
{
  "type": "node",
  "id": 1801525675,
  "lat": 48.8423579,
  "lon": 2.3222342,
  "tags": {
    "access": "private",
    "amenity": "restaurant",
    "level": "-1",
    "name": "Restaurant Inter-entreprises",
    "operator": "Avenance (groupe Elior)",
    "short_name": "RIE",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 1801535574,
  "lat": 48.8426136,
  "lon": 2.3217510,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "level": "1",
    "name": "Del Arte",
    "website": "http://www.delarte.fr"
  }
},
{
  "type": "node",
  "id": 1801536450,
  "lat": 48.8425995,
  "lon": 2.3220085,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "sandwich",
    "level": "0",
    "name": "Brioche Dorée",
    "website": "http://www.briochedoree.fr"
  }
},
{
  "type": "node",
  "id": 1801537946,
  "lat": 48.8424434,
  "lon": 2.3219416,
  "tags": {
    "amenity": "cafe",
    "level": "0",
    "name": "Le Mail"
  }
},
{
  "type": "node",
  "id": 1801601973,
  "lat": 48.8426424,
  "lon": 2.3222812,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "american",
    "name": "Still Good"
  }
},
{
  "type": "node",
  "id": 1801637583,
  "lat": 48.8421833,
  "lon": 2.3220777,
  "tags": {
    "amenity": "restaurant",
    "level": "56",
    "name": "Le ciel de Paris"
  }
},
{
  "type": "node",
  "id": 1802179904,
  "lat": 48.8722395,
  "lon": 2.3541753,
  "tags": {
    "amenity": "cafe",
    "name": "Café Launi"
  }
},
{
  "type": "node",
  "id": 1802179905,
  "lat": 48.8733313,
  "lon": 2.3530301,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "W for Wok"
  }
},
{
  "type": "node",
  "id": 1802179921,
  "lat": 48.8732730,
  "lon": 2.3532176,
  "tags": {
    "amenity": "bar",
    "name": "El Papi Chulo"
  }
},
{
  "type": "node",
  "id": 1802179931,
  "lat": 48.8727613,
  "lon": 2.3519183,
  "tags": {
    "amenity": "restaurant",
    "name": "Les Majungais"
  }
},
{
  "type": "node",
  "id": 1802179932,
  "lat": 48.8727251,
  "lon": 2.3521315,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Petit Resto dans la Prairie"
  }
},
{
  "type": "node",
  "id": 1802275517,
  "lat": 48.9014992,
  "lon": 2.3033005,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 1803669708,
  "lat": 48.8526377,
  "lon": 2.4062734,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Delices de Satori"
  }
},
{
  "type": "node",
  "id": 1803858162,
  "lat": 48.8418212,
  "lon": 2.3214760,
  "tags": {
    "amenity": "restaurant",
    "level": "-1",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 1803957302,
  "lat": 48.8817044,
  "lon": 2.3525759,
  "tags": {
    "addr:housenumber": "23",
    "addr:postcode": "75010",
    "addr:street": "Rue Saint-Vincent de Paul",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Ze Bistrot"
  }
},
{
  "type": "node",
  "id": 1806357932,
  "lat": 48.8211226,
  "lon": 2.3412820,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "internet_access": "no",
    "internet_access:fee": "no",
    "name": "Jardin de Montsouris",
    "phone": "+33 1 45 88 36 66",
    "smoking": "no"
  }
},
{
  "type": "node",
  "id": 1808731754,
  "lat": 48.8333002,
  "lon": 2.3325229,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Lakanal"
  }
},
{
  "type": "node",
  "id": 1810201769,
  "lat": 48.8216927,
  "lon": 2.2879167,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Sushi-Ba"
  }
},
{
  "type": "node",
  "id": 1810721934,
  "lat": 48.8488761,
  "lon": 2.3682264,
  "tags": {
    "amenity": "restaurant",
    "diet:vegan": "only",
    "email": "restaurant@gentlegourmetcafe.com",
    "name": "Gentle Gourmet Café",
    "opening_hours": "Tu-Sa 08:00-23:00;Su 10:00-15:00",
    "phone": "+33 1 43434849",
    "smoking": "no",
    "website": "http://gentlegourmetcafe.com/"
  }
},
{
  "type": "node",
  "id": 1812608411,
  "lat": 48.8239958,
  "lon": 2.2620673,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian"
  }
},
{
  "type": "node",
  "id": 1812627233,
  "lat": 48.8245740,
  "lon": 2.2706260,
  "tags": {
    "addr:housenumber": "27",
    "addr:postcode": "92130",
    "addr:street": "Rue Danton",
    "amenity": "restaurant",
    "cuisine": "bavarian",
    "name": "Le Relais de Bavière"
  }
},
{
  "type": "node",
  "id": 1812646130,
  "lat": 48.8928740,
  "lon": 2.3287813,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Christophe Colomb"
  }
},
{
  "type": "node",
  "id": 1812659246,
  "lat": 48.8793707,
  "lon": 2.3458902,
  "tags": {
    "amenity": "bar",
    "name": "La Manufacture"
  }
},
{
  "type": "node",
  "id": 1813136026,
  "lat": 48.8783213,
  "lon": 2.4114864,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Sushi Bar"
  }
},
{
  "type": "node",
  "id": 1813684597,
  "lat": 48.8449764,
  "lon": 2.3549028,
  "tags": {
    "amenity": "pub",
    "brewery": "affligem",
    "name": "Les Arènes"
  }
},
{
  "type": "node",
  "id": 1814987258,
  "lat": 48.8211831,
  "lon": 2.3635911,
  "tags": {
    "addr:housenumber": "23",
    "addr:postcode": "75013",
    "addr:street": "Avenue de Choisy",
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Hao Hao"
  }
},
{
  "type": "node",
  "id": 1817596632,
  "lat": 48.8752613,
  "lon": 2.3705179,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "46",
    "addr:postcode": "75010",
    "addr:street": "Avenue Claude Vellefaux",
    "amenity": "restaurant",
    "cuisine": "burger",
    "name": "Le Déli Parisien",
    "smoking": "no"
  }
},
{
  "type": "node",
  "id": 1818323176,
  "lat": 48.8509430,
  "lon": 2.3489714,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "kebab",
    "name": "Al Dar Restaurant Libanais"
  }
},
{
  "type": "node",
  "id": 1818323179,
  "lat": 48.8476389,
  "lon": 2.3773813,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "97",
    "addr:street": "Rue de Charenton",
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Shan goût",
    "opening_hours": "Mo-Fr 12:00-20:00,19:00-23:30"
  }
},
{
  "type": "node",
  "id": 1818518797,
  "lat": 48.8801808,
  "lon": 2.3373122,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Petit Canard"
  }
},
{
  "type": "node",
  "id": 1821668285,
  "lat": 48.8777152,
  "lon": 2.3320765,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Brigadier",
    "phone": "+33-1-48748716"
  }
},
{
  "type": "node",
  "id": 1821668286,
  "lat": 48.8777130,
  "lon": 2.3318740,
  "tags": {
    "amenity": "restaurant",
    "name": "Les Comédiens",
    "smoking": "no"
  }
},
{
  "type": "node",
  "id": 1821668290,
  "lat": 48.8761690,
  "lon": 2.3320880,
  "tags": {
    "amenity": "cafe",
    "name": "Royal Trinité",
    "outdoor_seating": "yes",
    "smoking": "separated",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 1821733209,
  "lat": 48.8752392,
  "lon": 2.3359440,
  "tags": {
    "amenity": "cafe",
    "name": "Zen Café",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1821967153,
  "lat": 48.8717988,
  "lon": 2.3422890,
  "tags": {
    "amenity": "cafe",
    "name": "Café Grévin"
  }
},
{
  "type": "node",
  "id": 1821967157,
  "lat": 48.8720797,
  "lon": 2.3405228,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "mexican",
    "name": "Chipotle",
    "opening_hours": "Mo-Su 11:00-22:00"
  }
},
{
  "type": "node",
  "id": 1821967213,
  "lat": 48.8720485,
  "lon": 2.3407198,
  "tags": {
    "amenity": "cafe",
    "name": "Starbucks Coffee"
  }
},
{
  "type": "node",
  "id": 1821967296,
  "lat": 48.8717651,
  "lon": 2.3403142,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 1822082605,
  "lat": 48.8708172,
  "lon": 2.3482539,
  "tags": {
    "amenity": "restaurant",
    "name": "Indiana Café"
  }
},
{
  "type": "node",
  "id": 1822082609,
  "lat": 48.8710210,
  "lon": 2.3469210,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "La Patacca"
  }
},
{
  "type": "node",
  "id": 1822082693,
  "lat": 48.8701778,
  "lon": 2.3512504,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1822082748,
  "lat": 48.8710522,
  "lon": 2.3467304,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 1822926032,
  "lat": 48.8829700,
  "lon": 2.3205585,
  "tags": {
    "addr:housenumber": "7",
    "addr:postcode": "75017",
    "addr:street": "Rue Boursault",
    "amenity": "restaurant",
    "internet_access": "wlan",
    "internet_access:fee": "no",
    "name": "Le Wagon Bleu"
  }
},
{
  "type": "node",
  "id": 1823094981,
  "lat": 48.9022643,
  "lon": 2.2677592,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Valerianne"
  }
},
{
  "type": "node",
  "id": 1823138916,
  "lat": 48.8553805,
  "lon": 2.3368914,
  "tags": {
    "amenity": "cafe",
    "name": "La Palette"
  }
},
{
  "type": "node",
  "id": 1823207574,
  "lat": 48.8380973,
  "lon": 2.3926743,
  "tags": {
    "addr:housenumber": "18",
    "addr:postcode": "75012",
    "addr:street": "Rue Taine",
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Sourire d\'Asie"
  }
},
{
  "type": "node",
  "id": 1823551357,
  "lat": 48.8820557,
  "lon": 2.3285353,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "thai",
    "email": "CONTACT@aroi-restaurant.fr",
    "name": "Aroï",
    "phone": "+33-1-83565818",
    "website": "http://aroi-restaurant.fr/"
  }
},
{
  "type": "node",
  "id": 1823551358,
  "lat": 48.8810393,
  "lon": 2.3287050,
  "tags": {
    "amenity": "cafe",
    "name": "Art Bistrot",
    "phone": "+33-1-42814137"
  }
},
{
  "type": "node",
  "id": 1823551360,
  "lat": 48.8780225,
  "lon": 2.3319547,
  "tags": {
    "amenity": "cafe",
    "cuisine": "french",
    "name": "Bistrot des 2 Théâtres",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 1823551361,
  "lat": 48.8812217,
  "lon": 2.3283853,
  "tags": {
    "amenity": "cafe",
    "cuisine": "french",
    "name": "Brasserie du Théâtre"
  }
},
{
  "type": "node",
  "id": 1823551364,
  "lat": 48.8819163,
  "lon": 2.3282898,
  "tags": {
    "addr:housenumber": "66",
    "addr:street": "Rue de Clichy",
    "amenity": "cafe",
    "name": "Café Salé",
    "phone": "+33-9-81349922",
    "website": "http://www.cafesaleparis.fr/"
  }
},
{
  "type": "node",
  "id": 1823551387,
  "lat": 48.8801158,
  "lon": 2.3291143,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "creole",
    "name": "La Table de Clichy",
    "phone": "+33-1-48740016"
  }
},
{
  "type": "node",
  "id": 1823551388,
  "lat": 48.8809390,
  "lon": 2.3290257,
  "tags": {
    "amenity": "cafe",
    "cuisine": "french",
    "name": "Le Béguin"
  }
},
{
  "type": "node",
  "id": 1823551393,
  "lat": 48.8815002,
  "lon": 2.3282628,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Ma Sushi"
  }
},
{
  "type": "node",
  "id": 1823551400,
  "lat": 48.8814226,
  "lon": 2.3285073,
  "tags": {
    "amenity": "pub",
    "name": "Parme Clichy"
  }
},
{
  "type": "node",
  "id": 1823551410,
  "lat": 48.8817375,
  "lon": 2.3283675,
  "tags": {
    "addr:housenumber": "64",
    "addr:street": "Rue de Clichy",
    "amenity": "pub",
    "name": "The Coq & Bulldog",
    "phone": "+33-9-82405636",
    "website": "http://www.facebook.com/pages/The-Coq-Bulldog-Pub/226637367401560"
  }
},
{
  "type": "node",
  "id": 1823551413,
  "lat": 48.8812070,
  "lon": 2.3286079,
  "tags": {
    "amenity": "cafe",
    "name": "Le déjeuner sur l\'herbe"
  }
},
{
  "type": "node",
  "id": 1824334810,
  "lat": 48.8571157,
  "lon": 2.3684747,
  "tags": {
    "addr:housenumber": "48",
    "addr:postcode": "75011",
    "addr:street": "Boulevard Beaumarchais",
    "amenity": "bar",
    "name": "Cuba Compagnie",
    "website": "http://www.cubacompagnie.com/",
    "wifi": "yes"
  }
},
{
  "type": "node",
  "id": 1824374964,
  "lat": 48.8578918,
  "lon": 2.3464512,
  "tags": {
    "addr:housenumber": "17",
    "addr:street": "Avenue Victoria",
    "amenity": "pub",
    "brewery": "guinness;carlsberg;kronenbourg;grimbergen",
    "internet_access": "wlan",
    "name": "Le Dernier Bar Avant la Fin du Monde",
    "phone": "+33-1-53009895",
    "website": "www.dernierbar.com"
  }
},
{
  "type": "node",
  "id": 1824509104,
  "lat": 48.8742801,
  "lon": 2.3357676,
  "tags": {
    "amenity": "restaurant",
    "name": "Cuizines",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1824509121,
  "lat": 48.8742391,
  "lon": 2.3333145,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "mediterranean",
    "diet:vegetarian": "yes",
    "name": "Fructidor",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1824509122,
  "lat": 48.8742191,
  "lon": 2.3339210,
  "tags": {
    "amenity": "cafe",
    "cuisine": "italian",
    "name": "Gioia Mia",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 1824509139,
  "lat": 48.8742326,
  "lon": 2.3334984,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Kiriko",
    "phone": "+33-1-48746517",
    "source": "survey",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 1824509181,
  "lat": 48.8741848,
  "lon": 2.3351560,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Soleil de Paris",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1824509184,
  "lat": 48.8743601,
  "lon": 2.3329097,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Stan & Co",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1824509204,
  "lat": 48.8742439,
  "lon": 2.3332327,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Yokhama 2",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1824509206,
  "lat": 48.8742300,
  "lon": 2.3335755,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "crepe",
    "name": "Le 63",
    "opening_hours": "Mo-Fr 11:45-15:30",
    "phone": "+33-1-48786700",
    "source": "survey",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 1824509207,
  "lat": 48.8742269,
  "lon": 2.3336382,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Les petits pois sont rouges",
    "source": "survey",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 1824826034,
  "lat": 48.8728885,
  "lon": 2.3451791,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Saveurs et Coïncedences"
  }
},
{
  "type": "node",
  "id": 1825232922,
  "lat": 48.8906853,
  "lon": 2.2917439,
  "tags": {
    "addr:housenumber": "41",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Shogun Shusi",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 1826085661,
  "lat": 48.8357356,
  "lon": 2.3522840,
  "tags": {
    "addr:housenumber": "32",
    "addr:postcode": "75013",
    "addr:street": "Avenue des Gobelins",
    "amenity": "bar",
    "name": "Le Réveil-Matin",
    "wifi": "yes"
  }
},
{
  "type": "node",
  "id": 1826159121,
  "lat": 48.8329777,
  "lon": 2.3472248,
  "tags": {
    "amenity": "cafe",
    "name": "Café Noisette",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 1827138878,
  "lat": 48.8765391,
  "lon": 2.3394762,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Alex & Pierre",
    "smoking": "no",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 1827138879,
  "lat": 48.8763100,
  "lon": 2.3399916,
  "tags": {
    "amenity": "cafe",
    "cuisine": "french",
    "name": "Au p\'tit creux du faubourg"
  }
},
{
  "type": "node",
  "id": 1827138887,
  "lat": 48.8762070,
  "lon": 2.3400723,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Kamado",
    "phone": "+33-1-42803992"
  }
},
{
  "type": "node",
  "id": 1827138888,
  "lat": 48.8765114,
  "lon": 2.3406889,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Kung Fu",
    "smoking": "no",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1827138891,
  "lat": 48.8766343,
  "lon": 2.3407712,
  "tags": {
    "amenity": "bar",
    "name": "Le Dreamlight\'s"
  }
},
{
  "type": "node",
  "id": 1827138892,
  "lat": 48.8765191,
  "lon": 2.3406058,
  "tags": {
    "amenity": "pub",
    "name": "Le Fontenoy",
    "smoking": "no",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1827138893,
  "lat": 48.8765034,
  "lon": 2.3395297,
  "tags": {
    "amenity": "pub",
    "name": "Le Havane",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 1827138894,
  "lat": 48.8766574,
  "lon": 2.3401427,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "regional",
    "email": "info@restaurant-les-saisons.com",
    "name": "Les Saisons",
    "opening_hours": "12:00-14:30,19:15-22:45",
    "phone": "+33-1-40160800",
    "website": "http://www.restaurant-les-saisons.com/",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 1827138908,
  "lat": 48.8764750,
  "lon": 2.3395753,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "korean",
    "name": "Sambuja",
    "phone": "+33-1-53210789"
  }
},
{
  "type": "node",
  "id": 1827138913,
  "lat": 48.8766574,
  "lon": 2.3405656,
  "tags": {
    "amenity": "restaurant",
    "name": "Les madeleines parisiennes"
  }
},
{
  "type": "node",
  "id": 1827281176,
  "lat": 48.8395564,
  "lon": 2.3497363,
  "tags": {
    "amenity": "restaurant",
    "name": "La Salle à Manger"
  }
},
{
  "type": "node",
  "id": 1827357911,
  "lat": 48.8500694,
  "lon": 2.2761219,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 1827357923,
  "lat": 48.8498994,
  "lon": 2.2724503,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 1827357924,
  "lat": 48.8514931,
  "lon": 2.2777343,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 1827357929,
  "lat": 48.8512248,
  "lon": 2.2780374,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "2",
    "addr:postcode": "75016",
    "addr:street": "Avenue de Versailles",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Les Ondes",
    "opening_hours": "Mo-Su 06:00-24:00",
    "phone": "01.45.27.88.63"
  }
},
{
  "type": "node",
  "id": 1827357946,
  "lat": 48.8515019,
  "lon": 2.2777745,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1827365954,
  "lat": 48.8506071,
  "lon": 2.2713372,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 1828149078,
  "lat": 48.8761627,
  "lon": 2.3401745,
  "tags": {
    "amenity": "cafe",
    "name": "Café M"
  }
},
{
  "type": "node",
  "id": 1829425276,
  "lat": 48.8400881,
  "lon": 2.3806431,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Cap de Bercy"
  }
},
{
  "type": "node",
  "id": 1829576516,
  "lat": 48.8240405,
  "lon": 2.3250200,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Ganesh"
  }
},
{
  "type": "node",
  "id": 1829581022,
  "lat": 48.8517277,
  "lon": 2.3664938,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "9",
    "addr:postcode": "75004",
    "addr:state": "Île-de-France",
    "addr:street": "Rue de la Cerisaie",
    "amenity": "restaurant",
    "cuisine": "vegetarian",
    "diet:vegetarian": "only",
    "name": "Grand Appétit"
  }
},
{
  "type": "node",
  "id": 1830649549,
  "lat": 48.8359510,
  "lon": 2.3274377,
  "tags": {
    "addr:housenumber": "6",
    "addr:postcode": "75014",
    "addr:street": "Rue Gassendi",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Chez papa",
    "phone": "+33 1 43 22 41 19",
    "website": "http://www.chezpapa.com/index.html"
  }
},
{
  "type": "node",
  "id": 1830661957,
  "lat": 48.8648511,
  "lon": 2.3817815,
  "tags": {
    "addr:housenumber": "6",
    "addr:postcode": "75011",
    "addr:street": "Avenue Jean Aicard",
    "amenity": "bar",
    "brewery": "Brewdog",
    "name": "La Fine Mousse",
    "website": "lafinemousse.fr"
  }
},
{
  "type": "node",
  "id": 1834645747,
  "lat": 48.9023480,
  "lon": 2.2687560,
  "tags": {
    "addr:city": "Courbevoie",
    "addr:country": "FR",
    "addr:housenumber": "25",
    "addr:postcode": "92400",
    "addr:street": "Rue Edith Cavell",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "drive_in": "no",
    "microbrewery": "no",
    "name": "Washi",
    "phone": "+33 149978082",
    "smoking": "separated",
    "wheelchair": "limited",
    "wifi": "no"
  }
},
{
  "type": "node",
  "id": 1834662701,
  "lat": 48.8337887,
  "lon": 2.2902462,
  "tags": {
    "addr:housenumber": "397",
    "addr:postcode": "75015",
    "addr:street": "Rue de Vaugirard",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Autour De..."
  }
},
{
  "type": "node",
  "id": 1834665718,
  "lat": 48.8339105,
  "lon": 2.2899243,
  "tags": {
    "addr:housenumber": "256",
    "addr:postcode": "75015",
    "addr:street": "Rue de la Croix Nivert",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Verre Galant"
  }
},
{
  "type": "node",
  "id": 1834668634,
  "lat": 48.8339582,
  "lon": 2.2904983,
  "tags": {
    "addr:housenumber": "395",
    "addr:postcode": "75015",
    "addr:street": "Rue de Vaugirard",
    "amenity": "cafe",
    "cuisine": "regional",
    "name": "Le Ferryville",
    "wifi": "no"
  }
},
{
  "type": "node",
  "id": 1834682698,
  "lat": 48.8332825,
  "lon": 2.2894710,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "La Prima",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1835765099,
  "lat": 48.8328925,
  "lon": 2.2883940,
  "tags": {
    "addr:housenumber": "386",
    "addr:postcode": "75015",
    "addr:street": "Rue de Vaugirard",
    "amenity": "bar",
    "name": "Dupont Versailles",
    "website": "http://www.dupontversailles.com/"
  }
},
{
  "type": "node",
  "id": 1835773228,
  "lat": 48.8331362,
  "lon": 2.2888144,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Bonsai"
  }
},
{
  "type": "node",
  "id": 1835785385,
  "lat": 48.8331750,
  "lon": 2.2888680,
  "tags": {
    "amenity": "cafe",
    "name": "Le Lutèce",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 1837377467,
  "lat": 48.8116794,
  "lon": 2.3155243,
  "tags": {
    "amenity": "restaurant",
    "contact:housenumber": "139",
    "contact:postcode": "92120",
    "contact:street": "Avenue de la République",
    "cuisine": "chinese",
    "name": "Palais de Rui An"
  }
},
{
  "type": "node",
  "id": 1838552620,
  "lat": 48.8490395,
  "lon": 2.3485570,
  "tags": {
    "amenity": "bar",
    "brewery": "chouffe;Brooklyn lager",
    "name": "La lucha libre"
  }
},
{
  "type": "node",
  "id": 1843639315,
  "lat": 48.8680574,
  "lon": 2.3417881,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Divinamente Italiano"
  }
},
{
  "type": "node",
  "id": 1843639323,
  "lat": 48.8655111,
  "lon": 2.3426280,
  "tags": {
    "amenity": "cafe",
    "cuisine": "sandwich",
    "name": "Lina\'s"
  }
},
{
  "type": "node",
  "id": 1843639328,
  "lat": 48.8698783,
  "lon": 2.3425685,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Shun Fa"
  }
},
{
  "type": "node",
  "id": 1843639329,
  "lat": 48.8691169,
  "lon": 2.3422291,
  "tags": {
    "amenity": "restaurant",
    "name": "The Hollywood Savoy"
  }
},
{
  "type": "node",
  "id": 1843639330,
  "lat": 48.8702023,
  "lon": 2.3421494,
  "tags": {
    "amenity": "restaurant",
    "name": "Vert Midi"
  }
},
{
  "type": "node",
  "id": 1843639342,
  "lat": 48.8650391,
  "lon": 2.3428079,
  "tags": {
    "amenity": "cafe",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 1847414030,
  "lat": 48.8935265,
  "lon": 2.2583642,
  "tags": {
    "addr:city": "Courbevoie",
    "addr:housenumber": "10",
    "addr:postcode": "92400",
    "addr:street": "Rue Sainte-Marie",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Grand Café",
    "website": "http://www.legrandcafe-courbevoie.com/"
  }
},
{
  "type": "node",
  "id": 1849395045,
  "lat": 48.8515069,
  "lon": 2.4066855,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le provençal"
  }
},
{
  "type": "node",
  "id": 1852738852,
  "lat": 48.8351363,
  "lon": 2.3445567,
  "tags": {
    "addr:housenumber": "52",
    "addr:postcode": "75013",
    "addr:street": "Boulevard Arago",
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Viva La Pizza",
    "website": "http://www.qype.fr/place/1494787-Viva-la-Pizza-Paris",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 1852739812,
  "lat": 48.8260954,
  "lon": 2.3467344,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "L\'Arôme Antique"
  }
},
{
  "type": "node",
  "id": 1852757544,
  "lat": 48.8304114,
  "lon": 2.3551773,
  "tags": {
    "amenity": "restaurant",
    "name": "Hippopotamus",
    "operator": "Hippopotamus"
  }
},
{
  "type": "node",
  "id": 1859307155,
  "lat": 48.8641319,
  "lon": 2.3484339,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Pierrot"
  }
},
{
  "type": "node",
  "id": 1861767365,
  "lat": 48.8709579,
  "lon": 2.3576608,
  "tags": {
    "amenity": "bar",
    "name": "Open Café",
    "wifi": "no"
  }
},
{
  "type": "node",
  "id": 1865299715,
  "lat": 48.8865801,
  "lon": 2.3354932,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 1865299716,
  "lat": 48.8872935,
  "lon": 2.3361945,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 1865299718,
  "lat": 48.8853856,
  "lon": 2.3359893,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "49",
    "addr:postcode": "75018",
    "addr:street": "Rue des Abbesses",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Chinon",
    "telephone": "+33 01.42.62.07.17"
  }
},
{
  "type": "node",
  "id": 1865299720,
  "lat": 48.8873015,
  "lon": 2.3360309,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 1865299721,
  "lat": 48.8858892,
  "lon": 2.3361945,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Café Burq"
  }
},
{
  "type": "node",
  "id": 1867384174,
  "lat": 48.8881851,
  "lon": 2.3480652,
  "tags": {
    "addr:housenumber": "17",
    "addr:street": "Rue Custine",
    "amenity": "bar",
    "name": "Le coude à coude"
  }
},
{
  "type": "node",
  "id": 1867397539,
  "lat": 48.8884653,
  "lon": 2.3485324,
  "tags": {
    "addr:housenumber": "102",
    "addr:postcode": "75018",
    "addr:street": "Rue Doudeauville",
    "amenity": "bar",
    "name": "Le Patio"
  }
},
{
  "type": "node",
  "id": 1867428325,
  "lat": 48.8869647,
  "lon": 2.3478228,
  "tags": {
    "addr:housenumber": "40",
    "addr:street": "Rue de Clignancourt",
    "amenity": "bar",
    "name": "La Chope du Château Rouge"
  }
},
{
  "type": "node",
  "id": 1867431078,
  "lat": 48.8867173,
  "lon": 2.3477674,
  "tags": {
    "addr:housenumber": "36",
    "addr:street": "Rue de Clignancourt",
    "amenity": "cafe",
    "name": "Café Le Troquet"
  }
},
{
  "type": "node",
  "id": 1868462009,
  "lat": 48.8883991,
  "lon": 2.3510703,
  "tags": {
    "addr:housenumber": "80",
    "addr:street": "Rue Doudeauville",
    "amenity": "restaurant",
    "name": "Bar Brochette \"Aux deux Provinces\""
  }
},
{
  "type": "node",
  "id": 1868467393,
  "lat": 48.8869141,
  "lon": 2.3514696,
  "tags": {
    "addr:housenumber": "64",
    "addr:street": "Rue Myrha",
    "amenity": "restaurant",
    "name": "Grillades Algérien"
  }
},
{
  "type": "node",
  "id": 1868564093,
  "lat": 48.8635328,
  "lon": 2.3632361,
  "tags": {
    "addr:housenumber": "57",
    "addr:street": "Rue Charlot",
    "amenity": "restaurant",
    "description": "Restaurant fusion bio (influence janaise)",
    "name": "Nanashi",
    "website": "www.nanashi.fr"
  }
},
{
  "type": "node",
  "id": 1868643692,
  "lat": 48.8825806,
  "lon": 2.3672397,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Le Lotus"
  }
},
{
  "type": "node",
  "id": 1869060190,
  "lat": 48.8920227,
  "lon": 2.3428666,
  "tags": {
    "amenity": "bar",
    "brewery": "chouffe",
    "internet_access": "no",
    "name": "L\'Alibi"
  }
},
{
  "type": "node",
  "id": 1869081297,
  "lat": 48.8245551,
  "lon": 2.3763634,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Paris Orléans"
  }
},
{
  "type": "node",
  "id": 1869850882,
  "lat": 48.8857577,
  "lon": 2.3451141,
  "tags": {
    "amenity": "bar",
    "name": "No Problemo"
  }
},
{
  "type": "node",
  "id": 1869857245,
  "lat": 48.8857859,
  "lon": 2.3452590,
  "tags": {
    "amenity": "restaurant",
    "name": "Collines d\'Asie"
  }
},
{
  "type": "node",
  "id": 1871182829,
  "lat": 48.8554636,
  "lon": 2.3337901,
  "tags": {
    "amenity": "bar",
    "name": "La Hune"
  }
},
{
  "type": "node",
  "id": 1871186489,
  "lat": 48.8604940,
  "lon": 2.3409119,
  "tags": {
    "amenity": "bar",
    "name": "Le Fumoir",
    "wifi": "yes"
  }
},
{
  "type": "node",
  "id": 1871763498,
  "lat": 48.8812525,
  "lon": 2.3584914,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Pizza Hut"
  }
},
{
  "type": "node",
  "id": 1872840266,
  "lat": 48.8830046,
  "lon": 2.3650381,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "african",
    "name": "Keur Mariame"
  }
},
{
  "type": "node",
  "id": 1872840272,
  "lat": 48.8830637,
  "lon": 2.3612591,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Gowri Vilas"
  }
},
{
  "type": "node",
  "id": 1874144305,
  "lat": 48.8728704,
  "lon": 2.3813019,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese"
  }
},
{
  "type": "node",
  "id": 1875819752,
  "lat": 48.8846517,
  "lon": 2.3291078,
  "tags": {
    "amenity": "pub",
    "internet_access": "no",
    "name": "Clichy\'s Tavern",
    "source": "local_knowledge"
  }
},
{
  "type": "node",
  "id": 1875831351,
  "lat": 48.8847090,
  "lon": 2.3292720,
  "tags": {
    "addr:housenumber": "128",
    "addr:postcode": "75018",
    "addr:street": "Boulevard de Clichy",
    "amenity": "cafe",
    "name": "Palace Café"
  }
},
{
  "type": "node",
  "id": 1876202748,
  "lat": 48.8688487,
  "lon": 2.2348654,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza"
  }
},
{
  "type": "node",
  "id": 1876323280,
  "lat": 48.8834736,
  "lon": 2.3604504,
  "tags": {
    "amenity": "restaurant",
    "name": "Ganesha Corner"
  }
},
{
  "type": "node",
  "id": 1877343572,
  "lat": 48.8896591,
  "lon": 2.3426912,
  "tags": {
    "addr:housenumber": "122",
    "addr:street": "Rue Caulaincourt",
    "amenity": "restaurant",
    "name": "Francis Labutte"
  }
},
{
  "type": "node",
  "id": 1877343722,
  "lat": 48.8898849,
  "lon": 2.3426094,
  "tags": {
    "amenity": "cafe",
    "name": "Café Francoeur"
  }
},
{
  "type": "node",
  "id": 1877443643,
  "lat": 48.8857760,
  "lon": 2.3287243,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "1",
    "addr:postcode": "75018",
    "addr:street": "Rue Cavallotti",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Bouclard",
    "source": "local_knowledge",
    "website": "http://www.bouclard.com/"
  }
},
{
  "type": "node",
  "id": 1877475420,
  "lat": 48.8910607,
  "lon": 2.3394636,
  "tags": {
    "amenity": "bar",
    "name": "L\'étoile de Montmartre"
  }
},
{
  "type": "node",
  "id": 1877521427,
  "lat": 48.8849775,
  "lon": 2.3295394,
  "tags": {
    "addr:housenumber": "80",
    "addr:postcode": "75018",
    "addr:street": "Boulevard de Clichy",
    "amenity": "restaurant",
    "cuisine": "international",
    "name": "Flunch",
    "website": "http://www.flunch.fr/"
  }
},
{
  "type": "node",
  "id": 1877647088,
  "lat": 48.8902288,
  "lon": 2.3476015,
  "tags": {
    "amenity": "restaurant",
    "name": "Kahina couscous"
  }
},
{
  "type": "node",
  "id": 1879230440,
  "lat": 48.8465148,
  "lon": 2.4289319,
  "tags": {
    "amenity": "restaurant",
    "name": "Bistrot des Idoles"
  }
},
{
  "type": "node",
  "id": 1879638998,
  "lat": 48.8466235,
  "lon": 2.4291176,
  "tags": {
    "addr:housenumber": "9",
    "addr:postcode": "94300",
    "addr:street": "Avenue de la République",
    "amenity": "bar",
    "int_name": "Le Coste Bleu",
    "name": "Le Coste Bleu"
  }
},
{
  "type": "node",
  "id": 1881131630,
  "lat": 48.8461814,
  "lon": 2.4288952,
  "tags": {
    "amenity": "bar",
    "name": "Le Berlioz"
  }
},
{
  "type": "node",
  "id": 1884433764,
  "lat": 48.8429926,
  "lon": 2.3485399,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "18",
    "addr:postcode": "75005",
    "addr:street": "Rue du Pot de Fer",
    "amenity": "bar;pub",
    "brewery": "brewdog;various",
    "name": "Brewberry",
    "shop": "beverages",
    "website": "http://www.brewberry.fr"
  }
},
{
  "type": "node",
  "id": 1886081456,
  "lat": 48.8827601,
  "lon": 2.3372823,
  "tags": {
    "amenity": "bar",
    "internet_access": "no",
    "name": "Rock \'n Roll Circus",
    "smoking": "no"
  }
},
{
  "type": "node",
  "id": 1887354890,
  "lat": 48.8248510,
  "lon": 2.3607452,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "vietnamese",
    "name": "Ny Hav"
  }
},
{
  "type": "node",
  "id": 1887533200,
  "lat": 48.8416788,
  "lon": 2.3272221,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Sushi Gozen",
    "source": "Survey"
  }
},
{
  "type": "node",
  "id": 1889510835,
  "lat": 48.8519424,
  "lon": 2.3384522,
  "tags": {
    "amenity": "bar",
    "name": "Café les Editeurs"
  }
},
{
  "type": "node",
  "id": 1889681337,
  "lat": 48.9035103,
  "lon": 2.2522892,
  "tags": {
    "amenity": "restaurant",
    "name": "Au coin fleuri"
  }
},
{
  "type": "node",
  "id": 1889706600,
  "lat": 48.9016106,
  "lon": 2.2512895,
  "tags": {
    "amenity": "bar",
    "name": "Café Baraka"
  }
},
{
  "type": "node",
  "id": 1894575616,
  "lat": 48.8880810,
  "lon": 2.2979280,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "moroccan",
    "name": "Le Riad"
  }
},
{
  "type": "node",
  "id": 1894585956,
  "lat": 48.8883514,
  "lon": 2.2971194,
  "tags": {
    "amenity": "bar",
    "name": "Le Senlis"
  }
},
{
  "type": "node",
  "id": 1896063146,
  "lat": 48.8556751,
  "lon": 2.3337849,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 1896094212,
  "lat": 48.8974737,
  "lon": 2.3312683,
  "tags": {
    "addr:housenumber": "137 Bis",
    "addr:postcode": "75018",
    "addr:street": "Boulevard Ney",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Pizzeria"
  }
},
{
  "type": "node",
  "id": 1896097719,
  "lat": 48.8974684,
  "lon": 2.3313997,
  "tags": {
    "addr:housenumber": "137",
    "addr:postcode": "75018",
    "addr:street": "Boulevard Ney",
    "amenity": "cafe",
    "name": "Le Sultan - Salon de thé-Chicha",
    "wifi": "no"
  }
},
{
  "type": "node",
  "id": 1896099864,
  "lat": 48.8959871,
  "lon": 2.3304855,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "82",
    "addr:postcode": "75018",
    "addr:street": "Villa Vauvenargues",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Edo"
  }
},
{
  "type": "node",
  "id": 1896104342,
  "lat": 48.8942027,
  "lon": 2.3330493,
  "tags": {
    "amenity": "cafe",
    "name": "Bar-Tabac"
  }
},
{
  "type": "node",
  "id": 1896121030,
  "lat": 48.8940060,
  "lon": 2.3343407,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1896122217,
  "lat": 48.8934673,
  "lon": 2.3364114,
  "tags": {
    "amenity": "cafe",
    "name": "La bande à bonne eau"
  }
},
{
  "type": "node",
  "id": 1896127602,
  "lat": 48.8915644,
  "lon": 2.3350420,
  "tags": {
    "amenity": "cafe",
    "name": "La Poste"
  }
},
{
  "type": "node",
  "id": 1896131267,
  "lat": 48.8919172,
  "lon": 2.3352889,
  "tags": {
    "amenity": "cafe",
    "name": "Le Dauphin"
  }
},
{
  "type": "node",
  "id": 1896148527,
  "lat": 48.8872260,
  "lon": 2.3324699,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 1896163367,
  "lat": 48.8975918,
  "lon": 2.3378236,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1896172332,
  "lat": 48.8972744,
  "lon": 2.3443681,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1896179425,
  "lat": 48.8974684,
  "lon": 2.3451031,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1896179669,
  "lat": 48.8973379,
  "lon": 2.3453284,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1896234388,
  "lat": 48.8960577,
  "lon": 2.3464495,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1896234483,
  "lat": 48.8956490,
  "lon": 2.3465730,
  "tags": {
    "addr:city": "Paris",
    "addr:postcode": "75018",
    "addr:street": "Boulevard Ornano",
    "amenity": "cafe",
    "name": "Le Fontenoy",
    "outdoor_seating": "yes",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 1896243268,
  "lat": 48.8956839,
  "lon": 2.3432577,
  "tags": {
    "amenity": "cafe",
    "name": "Café des fleurs"
  }
},
{
  "type": "node",
  "id": 1896260584,
  "lat": 48.8904006,
  "lon": 2.3349160,
  "tags": {
    "addr:housenumber": "91",
    "addr:postcode": "75018",
    "addr:street": "Rue Lamarck",
    "amenity": "restaurant",
    "cuisine": "regional",
    "name": "Crép\'uscule"
  }
},
{
  "type": "node",
  "id": 1896283672,
  "lat": 48.8905328,
  "lon": 2.3349026,
  "tags": {
    "addr:housenumber": "112",
    "addr:postcode": "75018",
    "addr:street": "Rue Lamarck",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Chiyoda"
  }
},
{
  "type": "node",
  "id": 1896325529,
  "lat": 48.8884483,
  "lon": 2.3329205,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Pucinella"
  }
},
{
  "type": "node",
  "id": 1896326814,
  "lat": 48.8875488,
  "lon": 2.3327381,
  "tags": {
    "addr:housenumber": "10",
    "addr:postcode": "75018",
    "addr:street": "Rue Damrémont",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Mimura"
  }
},
{
  "type": "node",
  "id": 1896352723,
  "lat": 48.8915645,
  "lon": 2.3352835,
  "tags": {
    "addr:housenumber": "185",
    "addr:postcode": "75018",
    "addr:street": "Rue Marcadet",
    "amenity": "restaurant",
    "cuisine": "regional",
    "name": "Chez Papa"
  }
},
{
  "type": "node",
  "id": 1896371545,
  "lat": 48.8953965,
  "lon": 2.3375071,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese"
  }
},
{
  "type": "node",
  "id": 1896376768,
  "lat": 48.8933968,
  "lon": 2.3371262,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1899126641,
  "lat": 48.8876293,
  "lon": 2.4644255,
  "tags": {
    "amenity": "bar",
    "name": "4-2-1"
  }
},
{
  "type": "node",
  "id": 1899146447,
  "lat": 48.8947683,
  "lon": 2.4630776,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1901211000,
  "lat": 48.8344267,
  "lon": 2.2884194,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "2",
    "addr:postcode": "75015",
    "addr:street": "Rue de Cadix",
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Swades"
  }
},
{
  "type": "node",
  "id": 1901252458,
  "lat": 48.8338498,
  "lon": 2.2894608,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "14",
    "addr:postcode": "75015",
    "addr:street": "Rue de Cadix",
    "amenity": "restaurant",
    "cuisine": "crepe",
    "name": "Le Refuge"
  }
},
{
  "type": "node",
  "id": 1902788158,
  "lat": 48.8396619,
  "lon": 2.3229538,
  "tags": {
    "addr:housename": "La Pachanga",
    "addr:housenumber": "8",
    "addr:street": "Rue Vandamme",
    "amenity": "restaurant",
    "cuisine": "international",
    "name": "La Pachanga",
    "website": "http://www.lapachanga.fr/"
  }
},
{
  "type": "node",
  "id": 1903151252,
  "lat": 48.9068220,
  "lon": 2.3319403,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Montmartre"
  }
},
{
  "type": "node",
  "id": 1903151255,
  "lat": 48.9082535,
  "lon": 2.3327986,
  "tags": {
    "amenity": "cafe",
    "name": "Batignolles"
  }
},
{
  "type": "node",
  "id": 1904540725,
  "lat": 48.8879853,
  "lon": 2.3396455,
  "tags": {
    "amenity": "restaurant",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1904888779,
  "lat": 48.8521891,
  "lon": 2.3465789,
  "tags": {
    "amenity": "bar",
    "name": "Les Trois Maillets",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 1904888784,
  "lat": 48.8518599,
  "lon": 2.3446879,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Heureux comme Alexandre",
    "note": "fondues",
    "phone": "0143264966"
  }
},
{
  "type": "node",
  "id": 1905655545,
  "lat": 48.8527027,
  "lon": 2.3467086,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Petit Pont"
  }
},
{
  "type": "node",
  "id": 1905655546,
  "lat": 48.8526083,
  "lon": 2.3466482,
  "tags": {
    "amenity": "pub",
    "brewery": "guinness;stella artois",
    "name": "Shywawa"
  }
},
{
  "type": "node",
  "id": 1905679041,
  "lat": 48.8887735,
  "lon": 2.3938208,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1907104708,
  "lat": 48.8514101,
  "lon": 2.4052556,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Les Allobroges",
    "phone": "01 43 73 40 00"
  }
},
{
  "type": "node",
  "id": 1907114068,
  "lat": 48.8514486,
  "lon": 2.4064449,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "couscous",
    "name": "Le Royal Pyrénées"
  }
},
{
  "type": "node",
  "id": 1907153748,
  "lat": 48.8491856,
  "lon": 2.4063562,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Shiun Hausu"
  }
},
{
  "type": "node",
  "id": 1907153763,
  "lat": 48.8490772,
  "lon": 2.4063369,
  "tags": {
    "amenity": "bar",
    "name": "L\'Autobus"
  }
},
{
  "type": "node",
  "id": 1907327271,
  "lat": 48.8480831,
  "lon": 2.4040261,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Le Patio"
  }
},
{
  "type": "node",
  "id": 1909140798,
  "lat": 48.8222536,
  "lon": 2.3618120,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "vietnamese",
    "name": "Yuan Xin"
  }
},
{
  "type": "node",
  "id": 1909142035,
  "lat": 48.8221935,
  "lon": 2.3616081,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Long Hoa"
  }
},
{
  "type": "node",
  "id": 1909143167,
  "lat": 48.8221264,
  "lon": 2.3613884,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "vietnamese",
    "name": "Pho Tai"
  }
},
{
  "type": "node",
  "id": 1909145621,
  "lat": 48.8222287,
  "lon": 2.3611417,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "vietnamese",
    "name": "Pho Tai Tai",
    "phone": "01 45 86 25 82",
    "website": "http://www.qype.fr/place/1750473-Pho-tai-tai-Paris"
  }
},
{
  "type": "node",
  "id": 1909146445,
  "lat": 48.8221688,
  "lon": 2.3609429,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "vietnamese",
    "name": "La Tonkinoise"
  }
},
{
  "type": "node",
  "id": 1909147230,
  "lat": 48.8221335,
  "lon": 2.3607766,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Hang Meas"
  }
},
{
  "type": "node",
  "id": 1909186940,
  "lat": 48.8975354,
  "lon": 2.3338607,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1909187152,
  "lat": 48.8975417,
  "lon": 2.3342523,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1909235653,
  "lat": 48.8939135,
  "lon": 2.3350409,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1909243311,
  "lat": 48.8939770,
  "lon": 2.3330775,
  "tags": {
    "amenity": "bar",
    "name": "Le Kiez"
  }
},
{
  "type": "node",
  "id": 1909254294,
  "lat": 48.8935624,
  "lon": 2.3293592,
  "tags": {
    "amenity": "bar",
    "name": "Bar de l\'Espérance"
  }
},
{
  "type": "node",
  "id": 1909834932,
  "lat": 48.8947585,
  "lon": 2.3282626,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Miyazaki"
  }
},
{
  "type": "node",
  "id": 1909836168,
  "lat": 48.8951888,
  "lon": 2.3279944,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1909836698,
  "lat": 48.8954780,
  "lon": 2.3285255,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1909836883,
  "lat": 48.8959929,
  "lon": 2.3286918,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese"
  }
},
{
  "type": "node",
  "id": 1909838773,
  "lat": 48.8964866,
  "lon": 2.3287937,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1909840831,
  "lat": 48.8974071,
  "lon": 2.3296252,
  "tags": {
    "amenity": "bar",
    "name": "Le Terminus"
  }
},
{
  "type": "node",
  "id": 1909862522,
  "lat": 48.8957777,
  "lon": 2.3393455,
  "tags": {
    "amenity": "bar",
    "name": "L\'Anjou"
  }
},
{
  "type": "node",
  "id": 1909863030,
  "lat": 48.8961868,
  "lon": 2.3389271,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Le Kashmir"
  }
},
{
  "type": "node",
  "id": 1913301372,
  "lat": 48.8162326,
  "lon": 2.3106308,
  "tags": {
    "amenity": "restaurant",
    "contact:housenumber": "1",
    "contact:postcode": "92120",
    "contact:street": "Rue Camille Pelletan",
    "cuisine": "french",
    "name": "Le Rouge-Gorge",
    "website": "http://lerougegorge.org/"
  }
},
{
  "type": "node",
  "id": 1913304257,
  "lat": 48.8160420,
  "lon": 2.3100781,
  "tags": {
    "addr:postcode": "92120",
    "addr:street": "Avenue Verdier",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Bomunsa"
  }
},
{
  "type": "node",
  "id": 1913304531,
  "lat": 48.8160807,
  "lon": 2.3094238,
  "tags": {
    "amenity": "restaurant",
    "contact:housenumber": "103",
    "contact:postcode": "92120",
    "contact:street": "Avenue Verdier",
    "name": "Le Haut Mesnil",
    "website": "http://lehautmesnil.com"
  }
},
{
  "type": "node",
  "id": 1913339718,
  "lat": 48.8389227,
  "lon": 2.3824998,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1915637690,
  "lat": 48.8355123,
  "lon": 2.2896152,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:postcode": "75015",
    "amenity": "cafe",
    "name": "Le Week-End",
    "note:fr": "PMU, Tabac, Loto",
    "source": "survey 2013"
  }
},
{
  "type": "node",
  "id": 1915692164,
  "lat": 48.8347833,
  "lon": 2.2887478,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "La Petite Auberge"
  }
},
{
  "type": "node",
  "id": 1915756167,
  "lat": 48.8342967,
  "lon": 2.2879777,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "La Roma",
    "takeaway": "yes"
  }
},
{
  "type": "node",
  "id": 1915796233,
  "lat": 48.8341388,
  "lon": 2.2878870,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "couscous",
    "name": "La Table marocaine"
  }
},
{
  "type": "node",
  "id": 1915886307,
  "lat": 48.8335658,
  "lon": 2.2868046,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "53",
    "addr:postcode": "75015",
    "addr:street": "Boulevard Victor",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Trattoria Victoria"
  }
},
{
  "type": "node",
  "id": 1915925744,
  "lat": 48.8221897,
  "lon": 2.3589982,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "vietnamese",
    "name": "Dong Khanh"
  }
},
{
  "type": "node",
  "id": 1916015767,
  "lat": 48.8354116,
  "lon": 2.2892340,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "corean",
    "name": "Amo"
  }
},
{
  "type": "node",
  "id": 1916123028,
  "lat": 48.8350746,
  "lon": 2.2888425,
  "tags": {
    "amenity": "bar",
    "name": "Le Petit Hameau"
  }
},
{
  "type": "node",
  "id": 1916173366,
  "lat": 48.8337101,
  "lon": 2.2863906,
  "tags": {
    "addr:housenumber": "49",
    "addr:postcode": "75015",
    "addr:street": "Boulevard Victor",
    "amenity": "restaurant",
    "cuisine": "brasserie",
    "name": "Les Salons"
  }
},
{
  "type": "node",
  "id": 1916173383,
  "lat": 48.8340535,
  "lon": 2.2873426,
  "tags": {
    "amenity": "bar",
    "name": "La Bauloise"
  }
},
{
  "type": "node",
  "id": 1916353716,
  "lat": 48.8895550,
  "lon": 2.3338045,
  "tags": {
    "addr:housenumber": "40",
    "brewery": "Brewdog",
    "name": "Bières Cultes",
    "shop": "beverages",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2012"
  }
},
{
  "type": "node",
  "id": 1917523407,
  "lat": 48.8219714,
  "lon": 2.3582637,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Régal de Titi",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1917523408,
  "lat": 48.8221377,
  "lon": 2.3582427,
  "tags": {
    "amenity": "bar",
    "name": "La Croix du Sud"
  }
},
{
  "type": "node",
  "id": 1917523418,
  "lat": 48.8220277,
  "lon": 2.3582482,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Arashi Yama"
  }
},
{
  "type": "node",
  "id": 1918939891,
  "lat": 48.8685568,
  "lon": 2.3683059,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Casa Nostra"
  }
},
{
  "type": "node",
  "id": 1919225886,
  "lat": 48.8825100,
  "lon": 2.3378415,
  "tags": {
    "addr:housenumber": "18",
    "addr:postcode": "75018",
    "addr:street": "Boulevard de Clichy",
    "amenity": "restaurant",
    "cuisine": "burger",
    "name": "McDonald´s",
    "phone": "0142232727",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2012"
  }
},
{
  "type": "node",
  "id": 1919985125,
  "lat": 48.9059350,
  "lon": 2.2509240,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Montecatini"
  }
},
{
  "type": "node",
  "id": 1919985128,
  "lat": 48.9059090,
  "lon": 2.2512603,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "couscous",
    "name": "La Koutoubia"
  }
},
{
  "type": "node",
  "id": 1919986499,
  "lat": 48.9060060,
  "lon": 2.2504318,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Villa de Chine"
  }
},
{
  "type": "node",
  "id": 1919991766,
  "lat": 48.9059168,
  "lon": 2.2529631,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Cardinal"
  }
},
{
  "type": "node",
  "id": 1919991802,
  "lat": 48.9059264,
  "lon": 2.2528287,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "regional",
    "name": "La grange aux crêpes"
  }
},
{
  "type": "node",
  "id": 1919991916,
  "lat": 48.9056340,
  "lon": 2.2533725,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Auberge du 14 Juillet"
  }
},
{
  "type": "node",
  "id": 1920041351,
  "lat": 48.8979142,
  "lon": 2.2403144,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Le bistrot de Courbevoie"
  }
},
{
  "type": "node",
  "id": 1920074480,
  "lat": 48.8234610,
  "lon": 2.3537855,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "La Fine Gueule"
  }
},
{
  "type": "node",
  "id": 1920884178,
  "lat": 48.8846868,
  "lon": 2.3416679,
  "tags": {
    "addr:housenumber": "13",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Il Piccolo Rifugio",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2012"
  }
},
{
  "type": "node",
  "id": 1920884203,
  "lat": 48.8843749,
  "lon": 2.3411643,
  "tags": {
    "addr:housenumber": "15",
    "addr:postcode": "75018",
    "addr:street": "Rue des Trois Frères",
    "amenity": "restaurant",
    "cuisine": "algerian",
    "name": "La Gazelle chez Leila",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2012"
  }
},
{
  "type": "node",
  "id": 1920884233,
  "lat": 48.8846003,
  "lon": 2.3411844,
  "tags": {
    "addr:housenumber": "18",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "La Vache et Le Cuisinier",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2012"
  }
},
{
  "type": "node",
  "id": 1920885246,
  "lat": 48.8841743,
  "lon": 2.3417867,
  "tags": {
    "addr:housenumber": "8",
    "amenity": "cafe",
    "name": "Le Café Chappe",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2012",
    "source:amenity": "survey",
    "source:name": "survey"
  }
},
{
  "type": "node",
  "id": 1920885247,
  "lat": 48.8842759,
  "lon": 2.3413619,
  "tags": {
    "addr:housenumber": "8",
    "amenity": "cafe",
    "name": "Salon de Thé",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2012",
    "source:name": "survey"
  }
},
{
  "type": "node",
  "id": 1925410043,
  "lat": 48.8820510,
  "lon": 2.4101920,
  "tags": {
    "addr:housenumber": "54",
    "addr:postcode": "93310",
    "addr:street": "Avenue Edouard Vaillant",
    "amenity": "restaurant",
    "cuisine": "regional",
    "name": "Le Bonheur dans le Pré"
  }
},
{
  "type": "node",
  "id": 1926937176,
  "lat": 48.8803114,
  "lon": 2.4117221,
  "tags": {
    "amenity": "cafe",
    "name": "Au petit bar"
  }
},
{
  "type": "node",
  "id": 1926961499,
  "lat": 48.8803256,
  "lon": 2.4120198,
  "tags": {
    "addr:housenumber": "24",
    "addr:postcode": "93260",
    "addr:street": "Avenue Faidherbe",
    "amenity": "restaurant",
    "name": "Le Marocain",
    "website": "http://www.restaurant-le-marocain.fr/"
  }
},
{
  "type": "node",
  "id": 1927627184,
  "lat": 48.8912689,
  "lon": 2.3395224,
  "tags": {
    "addr:housenumber": "134",
    "addr:postcode": "75018",
    "addr:street": "Rue Marcadet",
    "amenity": "bar",
    "internet_access": "wlan",
    "internet_access:fee": "no",
    "name": "La Cave Café",
    "website": "http://lacavecafe.fr/"
  }
},
{
  "type": "node",
  "id": 1928724911,
  "lat": 48.8753270,
  "lon": 2.3689900,
  "tags": {
    "amenity": "restaurant",
    "created_by": "iLOE 1.9",
    "name": "Procopio Angelo"
  }
},
{
  "type": "node",
  "id": 1928798044,
  "lat": 48.8720517,
  "lon": 2.3351032,
  "tags": {
    "addr:housenumber": "12",
    "addr:street": "Rue du Helder",
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Autour du Yangtse (食尚煮意)",
    "name:fr": "Autour du Yangtse",
    "name:zh": "食尚煮意",
    "name:zh_pinyin": "shí shàng zhǔ yì",
    "opening_hours": "Mo-Sa 12:00-15:00,18:00-22:00",
    "phone": "+33 (0) 153340578",
    "website": "http://autourduyangtse.com"
  }
},
{
  "type": "node",
  "id": 1928827624,
  "lat": 48.8298312,
  "lon": 2.3567979,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Autour du Yangtse (食尚煮意)",
    "name:fr": "Autour du Yangtse",
    "name:zh": "食尚煮意",
    "name:zh_pinyin": "shí shàng zhǔ yì",
    "opening_hours": "Mo-We,Fr-Su 12:00-15:00,18:00-22:00",
    "phone": "+33 (0) 145840081",
    "website": "http://autourduyangtse.com"
  }
},
{
  "type": "node",
  "id": 1928862528,
  "lat": 48.8662620,
  "lon": 2.3356061,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Kadoya"
  }
},
{
  "type": "node",
  "id": 1928862529,
  "lat": 48.8670216,
  "lon": 2.3359869,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Taishoken",
    "name:ja": "大勝軒"
  }
},
{
  "type": "node",
  "id": 1930249941,
  "lat": 48.8683080,
  "lon": 2.3897771,
  "tags": {
    "amenity": "bar",
    "name": "Le Lieu Dit",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 1930542206,
  "lat": 48.8464932,
  "lon": 2.3439185,
  "tags": {
    "amenity": "cafe",
    "name": "Le Comptoir du Panthéon",
    "note:fr": "Café Restaurant"
  }
},
{
  "type": "node",
  "id": 1930542208,
  "lat": 48.8484873,
  "lon": 2.3463043,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Coupe-Chou",
    "phone": "+33-1-46336869",
    "website": "www.lecoupechou.com"
  }
},
{
  "type": "node",
  "id": 1930542222,
  "lat": 48.8500822,
  "lon": 2.3477323,
  "tags": {
    "amenity": "restaurant",
    "name": "Pain Chau Express"
  }
},
{
  "type": "node",
  "id": 1930542223,
  "lat": 48.8507620,
  "lon": 2.3449853,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Pizzeria La Sirena"
  }
},
{
  "type": "node",
  "id": 1930542226,
  "lat": 48.8463607,
  "lon": 2.3432591,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Restaurant Perraudin",
    "website": "http://www.restaurant-perraudin.com/"
  }
},
{
  "type": "node",
  "id": 1930542329,
  "lat": 48.8464051,
  "lon": 2.3430548,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian"
  }
},
{
  "type": "node",
  "id": 1931490819,
  "lat": 48.8748542,
  "lon": 2.3087625,
  "tags": {
    "amenity": "bar",
    "name": "Le Florence",
    "note:fr": "Bar, restaurant; Salle au Sous Pot",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1931492402,
  "lat": 48.8302605,
  "lon": 2.3138234,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1931492454,
  "lat": 48.8308414,
  "lon": 2.3123480,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian"
  }
},
{
  "type": "node",
  "id": 1931492488,
  "lat": 48.8311654,
  "lon": 2.3137963,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza"
  }
},
{
  "type": "node",
  "id": 1931492530,
  "lat": 48.8316692,
  "lon": 2.3141635,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1932009754,
  "lat": 48.8854279,
  "lon": 2.2345719,
  "tags": {
    "addr:housenumber": "18",
    "addr:postcode": "92800",
    "addr:street": "Rue Charles Lorilleux",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "L\'Escargot",
    "website": "http://www.lescargot1903.com/"
  }
},
{
  "type": "node",
  "id": 1932388420,
  "lat": 48.8444941,
  "lon": 2.3897502,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1932388422,
  "lat": 48.8471824,
  "lon": 2.3866402,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 1933419996,
  "lat": 48.8926280,
  "lon": 2.2534754,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Gavroche"
  }
},
{
  "type": "node",
  "id": 1935204529,
  "lat": 48.8781869,
  "lon": 2.2884063,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "La Maison"
  }
},
{
  "type": "node",
  "id": 1937157675,
  "lat": 48.8502006,
  "lon": 2.2918459,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "8",
    "addr:postcode": "75015",
    "addr:street": "Rue de Lourmel",
    "amenity": "restaurant",
    "cuisine": "lebanese",
    "name": "Feyrouz",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1937157677,
  "lat": 48.8505831,
  "lon": 2.2924093,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "62",
    "addr:postcode": "75015",
    "addr:street": "Boulevard de Grenelle",
    "amenity": "cafe",
    "name": "Bistro Dupleix"
  }
},
{
  "type": "node",
  "id": 1937168433,
  "lat": 48.8501155,
  "lon": 2.2920291,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "7",
    "addr:postcode": "75015",
    "addr:street": "Rue de Lourmel",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Pastapapa",
    "phone": "+33 1 45776647",
    "source": "survey",
    "website": "http://www.pastapapa.fr"
  }
},
{
  "type": "node",
  "id": 1937255967,
  "lat": 48.8517926,
  "lon": 2.2918748,
  "tags": {
    "amenity": "cafe",
    "name": "La Gitane",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 1939149271,
  "lat": 48.8421986,
  "lon": 2.2819707,
  "tags": {
    "addr:housenumber": "161",
    "addr:postcode": "75015",
    "addr:street": "Rue Saint-Charles",
    "amenity": "bar",
    "name": "Millésime"
  }
},
{
  "type": "node",
  "id": 1939417434,
  "lat": 48.8420674,
  "lon": 2.3760001,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'entrepôt"
  }
},
{
  "type": "node",
  "id": 1941555013,
  "lat": 48.8963284,
  "lon": 2.3330215,
  "tags": {
    "addr:housenumber": "52",
    "addr:postcode": "75018",
    "addr:street": "Rue Leibniz",
    "amenity": "bar",
    "name": "La Bricole",
    "wifi": "no"
  }
},
{
  "type": "node",
  "id": 1941648254,
  "lat": 48.8496451,
  "lon": 2.3534642,
  "tags": {
    "addr:housenumber": "22",
    "addr:street": "Boulevard Saint-Germain",
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Les Pâtes Vivantes",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2010",
    "website": "http://www.lespatesvivantes.net/"
  }
},
{
  "type": "node",
  "id": 1941648255,
  "lat": 48.8453042,
  "lon": 2.3498920,
  "tags": {
    "addr:housenumber": "68",
    "addr:street": "Rue du Cardinal Lemoine",
    "amenity": "cafe",
    "cuisine": "cake",
    "name": "Sugarplum",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre ; mise à jour : 2010",
    "website": "http://www.sugarplumcakeshop.com/"
  }
},
{
  "type": "node",
  "id": 1941840579,
  "lat": 48.8162547,
  "lon": 2.3096289,
  "tags": {
    "addr:postcode": "92120",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Verdier"
  }
},
{
  "type": "node",
  "id": 1941841918,
  "lat": 48.8165338,
  "lon": 2.3097872,
  "tags": {
    "addr:postcode": "92120",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Magdalena"
  }
},
{
  "type": "node",
  "id": 1944211190,
  "lat": 48.8625297,
  "lon": 2.3799298,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "L\'Altra"
  }
},
{
  "type": "node",
  "id": 1945922048,
  "lat": 48.9005071,
  "lon": 2.2395742,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "thai",
    "name": "Thaïoria"
  }
},
{
  "type": "node",
  "id": 1945922055,
  "lat": 48.9001782,
  "lon": 2.2396475,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Pizza Paparotti",
    "opening_hours": "12:00-14:30;19:00-22:30"
  }
},
{
  "type": "node",
  "id": 1945941153,
  "lat": 48.9001258,
  "lon": 2.2386238,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "regional",
    "name": "Crêpes & Co"
  }
},
{
  "type": "node",
  "id": 1945941167,
  "lat": 48.9002530,
  "lon": 2.2386322,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Fukunoya"
  }
},
{
  "type": "node",
  "id": 1945941189,
  "lat": 48.8995172,
  "lon": 2.2385769,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "libanese",
    "name": "L\'Olivio"
  }
},
{
  "type": "node",
  "id": 1946013416,
  "lat": 48.8202470,
  "lon": 2.2287653,
  "tags": {
    "addr:housenumber": "26",
    "addr:postcode": "92190",
    "addr:street": "Rue Marcel Allégot",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Central",
    "old_name": "Chez Pierrot",
    "phone": "+33 1 46 26 15 83",
    "website": "http://lecentralmeudon.fr/"
  }
},
{
  "type": "node",
  "id": 1946030585,
  "lat": 48.8208422,
  "lon": 2.2280008,
  "tags": {
    "addr:housenumber": "16",
    "addr:postcode": "92190",
    "addr:street": "rue Marcel Allégot",
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Refant"
  }
},
{
  "type": "node",
  "id": 1950661168,
  "lat": 48.8570961,
  "lon": 2.3998935,
  "tags": {
    "amenity": "restaurant",
    "name": "Family\'s"
  }
},
{
  "type": "node",
  "id": 1950661273,
  "lat": 48.8574084,
  "lon": 2.3993454,
  "tags": {
    "amenity": "cafe",
    "name": "L\'abribus café"
  }
},
{
  "type": "node",
  "id": 1950661360,
  "lat": 48.8575637,
  "lon": 2.3994629,
  "tags": {
    "amenity": "bar",
    "name": "L\'Étoile d\'Or"
  }
},
{
  "type": "node",
  "id": 1950697393,
  "lat": 48.8583847,
  "lon": 2.4005847,
  "tags": {
    "amenity": "restaurant",
    "name": "Chez Nous"
  }
},
{
  "type": "node",
  "id": 1950719903,
  "lat": 48.8590223,
  "lon": 2.4024858,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "thai;chinese",
    "name": "Le Mandarin des Pyrénées"
  }
},
{
  "type": "node",
  "id": 1950741891,
  "lat": 48.8589383,
  "lon": 2.4057326,
  "tags": {
    "amenity": "cafe",
    "cuisine": "french",
    "name": "Rotana Gourmet"
  }
},
{
  "type": "node",
  "id": 1950741986,
  "lat": 48.8590692,
  "lon": 2.4058632,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Magnolia"
  }
},
{
  "type": "node",
  "id": 1950785346,
  "lat": 48.8577147,
  "lon": 2.4074098,
  "tags": {
    "amenity": "bar",
    "name": "Le Saint-Blaise"
  }
},
{
  "type": "node",
  "id": 1950785347,
  "lat": 48.8571003,
  "lon": 2.4079730,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Mandarin Saint-Blaise"
  }
},
{
  "type": "node",
  "id": 1950787049,
  "lat": 48.8518332,
  "lon": 2.3373498,
  "tags": {
    "amenity": "bar",
    "name": "Chez Jean-Pierre"
  }
},
{
  "type": "node",
  "id": 1950787650,
  "lat": 48.8514439,
  "lon": 2.3380763,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Restaurant Marco Polo"
  }
},
{
  "type": "node",
  "id": 1951465699,
  "lat": 48.8556888,
  "lon": 2.4005126,
  "tags": {
    "addr:housename": "Café de la Chope",
    "amenity": "pub",
    "name": "La Chope"
  }
},
{
  "type": "node",
  "id": 1952414717,
  "lat": 48.8932122,
  "lon": 2.2394823,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "indoor": "yes",
    "layer": "0",
    "level": "0",
    "name": "Red d\'Hippo"
  }
},
{
  "type": "node",
  "id": 1952414718,
  "lat": 48.8932059,
  "lon": 2.2393868,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "indoor": "yes",
    "layer": "0",
    "level": "0",
    "name": "Pacific Pizza"
  }
},
{
  "type": "node",
  "id": 1952633198,
  "lat": 48.8759342,
  "lon": 2.2290512,
  "tags": {
    "addr:housenumber": "106",
    "addr:postcode": "92150",
    "addr:street": "Rue Carnot",
    "amenity": "bar",
    "name": "Chez Toumert",
    "website": "http://cheztoumert.free.fr/"
  }
},
{
  "type": "node",
  "id": 1954925786,
  "lat": 48.8793921,
  "lon": 2.3895039,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "La Pelouse"
  }
},
{
  "type": "node",
  "id": 1955238003,
  "lat": 48.8519052,
  "lon": 2.4236470,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1955238004,
  "lat": 48.8516079,
  "lon": 2.4261266,
  "tags": {
    "amenity": "restaurant",
    "name": "La Table à Jaja"
  }
},
{
  "type": "node",
  "id": 1955238005,
  "lat": 48.8526846,
  "lon": 2.4239243,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1955238006,
  "lat": 48.8531236,
  "lon": 2.4235386,
  "tags": {
    "amenity": "restaurant",
    "email": "contactlamourette@orange.fr",
    "name": "L\'Amourette",
    "phone": "01 48 59 99 94",
    "website": "http://lamourette.fr"
  }
},
{
  "type": "node",
  "id": 1955238007,
  "lat": 48.8537915,
  "lon": 2.4244888,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1955238008,
  "lat": 48.8536991,
  "lon": 2.4236240,
  "tags": {
    "amenity": "bar",
    "name": "Des bulles et des ballons"
  }
},
{
  "type": "node",
  "id": 1955238009,
  "lat": 48.8522009,
  "lon": 2.4263143,
  "tags": {
    "amenity": "bar",
    "name": "Renaissance"
  }
},
{
  "type": "node",
  "id": 1955238010,
  "lat": 48.8520139,
  "lon": 2.4238385,
  "tags": {
    "amenity": "bar",
    "name": "Les tonneaux"
  }
},
{
  "type": "node",
  "id": 1955238011,
  "lat": 48.8534715,
  "lon": 2.4234390,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 1955771567,
  "lat": 48.8927206,
  "lon": 2.2386320,
  "tags": {
    "amenity": "restaurant",
    "indoor": "yes",
    "layer": "0",
    "level": "0",
    "name": "Enzo"
  }
},
{
  "type": "node",
  "id": 1955771578,
  "lat": 48.8927998,
  "lon": 2.2385735,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "indoor": "yes",
    "layer": "0",
    "level": "0",
    "microbrewery": "yes",
    "name": "Flo Prestige"
  }
},
{
  "type": "node",
  "id": 1955771689,
  "lat": 48.8926451,
  "lon": 2.2385436,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "indoor": "yes",
    "layer": "0",
    "level": "0",
    "name": "Quai Marine"
  }
},
{
  "type": "node",
  "id": 1955771716,
  "lat": 48.8927124,
  "lon": 2.2383654,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "indoor": "yes",
    "layer": "0",
    "level": "0",
    "name": "Wok"
  }
},
{
  "type": "node",
  "id": 1957130714,
  "lat": 48.8571054,
  "lon": 2.4314615,
  "tags": {
    "amenity": "bar",
    "name": "Le Beaumarchais"
  }
},
{
  "type": "node",
  "id": 1957130719,
  "lat": 48.8560712,
  "lon": 2.4256465,
  "tags": {
    "amenity": "bar",
    "name": "Le Marceau"
  }
},
{
  "type": "node",
  "id": 1957130724,
  "lat": 48.8574266,
  "lon": 2.4331540,
  "tags": {
    "amenity": "bar",
    "name": "Royal Montreuil"
  }
},
{
  "type": "node",
  "id": 1957130726,
  "lat": 48.8563589,
  "lon": 2.4272504,
  "tags": {
    "amenity": "bar",
    "name": "Café du Centre"
  }
},
{
  "type": "node",
  "id": 1957130730,
  "lat": 48.8548394,
  "lon": 2.4175545,
  "tags": {
    "amenity": "bar",
    "name": "L\'Alembert"
  }
},
{
  "type": "node",
  "id": 1957144764,
  "lat": 48.8542026,
  "lon": 2.4276788,
  "tags": {
    "amenity": "bar",
    "name": "L\'Industrie"
  }
},
{
  "type": "node",
  "id": 1957235494,
  "lat": 48.8552221,
  "lon": 2.4229206,
  "tags": {
    "amenity": "restaurant",
    "name": "My Food",
    "website": "http://www.mysouthafrica.fr/"
  }
},
{
  "type": "node",
  "id": 1958292569,
  "lat": 48.8958994,
  "lon": 2.2514748,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Bistrot de l\'Échanson"
  }
},
{
  "type": "node",
  "id": 1958292584,
  "lat": 48.8967055,
  "lon": 2.2529049,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "couscous",
    "name": "Le Timgåd"
  }
},
{
  "type": "node",
  "id": 1958298281,
  "lat": 48.8965198,
  "lon": 2.2506562,
  "tags": {
    "amenity": "restaurant",
    "name": "Le bienvenu"
  }
},
{
  "type": "node",
  "id": 1958298283,
  "lat": 48.8969704,
  "lon": 2.2502016,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Affinithé"
  }
},
{
  "type": "node",
  "id": 1958796831,
  "lat": 48.8720689,
  "lon": 2.3560867,
  "tags": {
    "amenity": "cafe",
    "name": "Thé Glacés",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 1960402248,
  "lat": 48.8979716,
  "lon": 2.2533200,
  "tags": {
    "amenity": "cafe",
    "name": "Le Flash"
  }
},
{
  "type": "node",
  "id": 1962254628,
  "lat": 48.8531173,
  "lon": 2.4387001,
  "tags": {
    "amenity": "bar",
    "name": "Le Wilson"
  }
},
{
  "type": "node",
  "id": 1962928312,
  "lat": 48.8656739,
  "lon": 2.3463704,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian;thai",
    "name": "Silk and Spice"
  }
},
{
  "type": "node",
  "id": 1964223359,
  "lat": 48.8371809,
  "lon": 2.3497368,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Yoyo ramen"
  }
},
{
  "type": "node",
  "id": 1965587246,
  "lat": 48.8516647,
  "lon": 2.3719912,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "email": "pizza-julia@numericable.fr",
    "internet_access": "no",
    "internet_access:fee": "no",
    "name": "Pizza Julia",
    "opening_hours": "Mo-Su 11:30-15:00,18:30-22:30",
    "phone": "+33 1 77196875",
    "smoking": "no",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 1967391885,
  "lat": 48.8642493,
  "lon": 2.2244257,
  "tags": {
    "amenity": "restaurant",
    "name": "Les Diablotins"
  }
},
{
  "type": "node",
  "id": 1967392692,
  "lat": 48.8628448,
  "lon": 2.2238892,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "sushi",
    "name": "Bishoku"
  }
},
{
  "type": "node",
  "id": 1967393487,
  "lat": 48.8628342,
  "lon": 2.2236800,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "La jolie pause"
  }
},
{
  "type": "node",
  "id": 1967399698,
  "lat": 48.8606355,
  "lon": 2.2225267,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian"
  }
},
{
  "type": "node",
  "id": 1967405525,
  "lat": 48.8270751,
  "lon": 2.2648466,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "sandwich",
    "name": "Class Croute"
  }
},
{
  "type": "node",
  "id": 1969457271,
  "lat": 48.8973173,
  "lon": 2.3848230,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "fixme": "emplacement approximatif: à vérifier"
  }
},
{
  "type": "node",
  "id": 1969457272,
  "lat": 48.8972521,
  "lon": 2.3847586,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "fixme": "emplacement approximatif: à vérifier"
  }
},
{
  "type": "node",
  "id": 1969457273,
  "lat": 48.8970881,
  "lon": 2.3845721,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "fixme": "emplacement approximatif: à vérifier"
  }
},
{
  "type": "node",
  "id": 1971753972,
  "lat": 48.8211342,
  "lon": 2.2277952,
  "tags": {
    "amenity": "cafe",
    "name": "Café Les Terrasses Pompadour",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 1976396605,
  "lat": 48.8648559,
  "lon": 2.3969632,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Cinecitta"
  }
},
{
  "type": "node",
  "id": 1976449417,
  "lat": 48.9098928,
  "lon": 2.2333380,
  "tags": {
    "amenity": "cafe",
    "name": "Café - Aux Portes de La Défense",
    "wifi": "no"
  }
},
{
  "type": "node",
  "id": 1976452738,
  "lat": 48.9091171,
  "lon": 2.2315784,
  "tags": {
    "addr:housename": "Le Dellys",
    "addr:street": "351 Rue d\'Estienne d\'Orves, Colombes",
    "amenity": "restaurant",
    "cuisine": "international",
    "name": "Le Dellys"
  }
},
{
  "type": "node",
  "id": 1978246831,
  "lat": 48.8969286,
  "lon": 2.3866620,
  "tags": {
    "amenity": "bar",
    "name": "La Pena Festayre"
  }
},
{
  "type": "node",
  "id": 1980664953,
  "lat": 48.8731487,
  "lon": 2.3445761,
  "tags": {
    "amenity": "restaurant",
    "name": "La Boule Rouge"
  }
},
{
  "type": "node",
  "id": 1980680438,
  "lat": 48.8713070,
  "lon": 2.3479965,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Les Deux Canards",
    "website": "http://www.lesdeuxcanards.com"
  }
},
{
  "type": "node",
  "id": 1980801745,
  "lat": 48.8530064,
  "lon": 2.2754461,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Sushi gourmet"
  }
},
{
  "type": "node",
  "id": 1980895343,
  "lat": 48.8505469,
  "lon": 2.4061987,
  "tags": {
    "addr:housenumber": "87",
    "amenity": "bar",
    "name": "Bistrot de l\'Avenir",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2012"
  }
},
{
  "type": "node",
  "id": 1981148793,
  "lat": 48.8511636,
  "lon": 2.2783753,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'ogre"
  }
},
{
  "type": "node",
  "id": 1983637464,
  "lat": 48.8526949,
  "lon": 2.3089511,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Palace Thaï"
  }
},
{
  "type": "node",
  "id": 1983648210,
  "lat": 48.8724637,
  "lon": 2.2980607,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Chez Clément",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 1983648214,
  "lat": 48.8707216,
  "lon": 2.3006611,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Paradis du Fruit",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 1983648217,
  "lat": 48.8723231,
  "lon": 2.2985022,
  "tags": {
    "amenity": "cafe",
    "name": "Nespresso",
    "shop": "coffee",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 1985355380,
  "lat": 48.8682088,
  "lon": 2.3014586,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Asian"
  }
},
{
  "type": "node",
  "id": 1985410019,
  "lat": 48.8448163,
  "lon": 2.3733745,
  "tags": {
    "amenity": "restaurant",
    "name": "Express Bleu"
  }
},
{
  "type": "node",
  "id": 1985540944,
  "lat": 48.8522713,
  "lon": 2.3728858,
  "tags": {
    "amenity": "restaurant",
    "name": "Sanz by bizz\'art"
  }
},
{
  "type": "node",
  "id": 1985707699,
  "lat": 48.8743665,
  "lon": 2.3618973,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Les Enfants Perdus"
  }
},
{
  "type": "node",
  "id": 1985707701,
  "lat": 48.8742228,
  "lon": 2.3624553,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "thai",
    "name": "Mme Shawn"
  }
},
{
  "type": "node",
  "id": 1985707703,
  "lat": 48.8727849,
  "lon": 2.3634181,
  "tags": {
    "amenity": "restaurant",
    "name": "La Nantaise"
  }
},
{
  "type": "node",
  "id": 1986745611,
  "lat": 48.8729195,
  "lon": 2.2988493,
  "tags": {
    "amenity": "restaurant",
    "name": "Flora Danica"
  }
},
{
  "type": "node",
  "id": 1986745617,
  "lat": 48.8730465,
  "lon": 2.2984497,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Pizza Vesuvio"
  }
},
{
  "type": "node",
  "id": 1986773293,
  "lat": 48.8358696,
  "lon": 2.3958145,
  "tags": {
    "amenity": "cafe",
    "name": "Au Pays de Vannes"
  }
},
{
  "type": "node",
  "id": 1986782615,
  "lat": 48.8616349,
  "lon": 2.3514454,
  "tags": {
    "amenity": "cafe",
    "name": "Chouchou"
  }
},
{
  "type": "node",
  "id": 1986782620,
  "lat": 48.8619070,
  "lon": 2.3508109,
  "tags": {
    "amenity": "cafe",
    "name": "Hall 1900"
  }
},
{
  "type": "node",
  "id": 1986782626,
  "lat": 48.8617849,
  "lon": 2.3518205,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "I\'taglia"
  }
},
{
  "type": "node",
  "id": 1986782629,
  "lat": 48.8618170,
  "lon": 2.3506485,
  "tags": {
    "amenity": "cafe",
    "name": "Le Marigny",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 1986782632,
  "lat": 48.8616656,
  "lon": 2.3513122,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Petit Marcel"
  }
},
{
  "type": "node",
  "id": 1986782655,
  "lat": 48.8619390,
  "lon": 2.3509944,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza"
  }
},
{
  "type": "node",
  "id": 1986819787,
  "lat": 48.8541526,
  "lon": 2.2759522,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'Antenne"
  }
},
{
  "type": "node",
  "id": 1987166777,
  "lat": 48.8656555,
  "lon": 2.2894172,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "69",
    "addr:postcode": "75116",
    "addr:street": "Avenue Kléber",
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Chez Zhong",
    "phone": "+33147279230"
  }
},
{
  "type": "node",
  "id": 1987166803,
  "lat": 48.8688540,
  "lon": 2.2917516,
  "tags": {
    "amenity": "cafe",
    "name": "Fleurus Café"
  }
},
{
  "type": "node",
  "id": 1987166821,
  "lat": 48.8711967,
  "lon": 2.2928953,
  "tags": {
    "amenity": "cafe",
    "name": "L\'Etoile Vénitienne"
  }
},
{
  "type": "node",
  "id": 1987166824,
  "lat": 48.8688876,
  "lon": 2.2911998,
  "tags": {
    "amenity": "cafe",
    "name": "Le Copernic"
  }
},
{
  "type": "node",
  "id": 1987166827,
  "lat": 48.8676957,
  "lon": 2.2903540,
  "tags": {
    "amenity": "cafe",
    "name": "Le Corona Impérial",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 1987166830,
  "lat": 48.8674107,
  "lon": 2.2901476,
  "tags": {
    "amenity": "cafe",
    "name": "Le Rallye Etoile"
  }
},
{
  "type": "node",
  "id": 1987166832,
  "lat": 48.8683199,
  "lon": 2.2913712,
  "tags": {
    "amenity": "cafe",
    "name": "Le Savenay Café"
  }
},
{
  "type": "node",
  "id": 1987166834,
  "lat": 48.8652925,
  "lon": 2.2891532,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Mandarin de Ming"
  }
},
{
  "type": "node",
  "id": 1987166989,
  "lat": 48.8651108,
  "lon": 2.2892829,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 1987167004,
  "lat": 48.8654719,
  "lon": 2.2892837,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian"
  }
},
{
  "type": "node",
  "id": 1988182442,
  "lat": 48.8964248,
  "lon": 2.2371559,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "layer": "2",
    "name": "Toast&Pizz"
  }
},
{
  "type": "node",
  "id": 1988266834,
  "lat": 48.8283068,
  "lon": 2.3264318,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "L\'Éphémère"
  }
},
{
  "type": "node",
  "id": 1989412749,
  "lat": 48.8585499,
  "lon": 2.3900827,
  "tags": {
    "addr:housenumber": "2",
    "amenity": "cafe",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2012",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 1990680627,
  "lat": 48.8708913,
  "lon": 2.3580857,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Chez Sam"
  }
},
{
  "type": "node",
  "id": 1990680628,
  "lat": 48.8688368,
  "lon": 2.3624724,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Maya"
  }
},
{
  "type": "node",
  "id": 1990680629,
  "lat": 48.8691941,
  "lon": 2.3573560,
  "tags": {
    "amenity": "restaurant",
    "name": "Zerda"
  }
},
{
  "type": "node",
  "id": 1990680630,
  "lat": 48.8692734,
  "lon": 2.3564413,
  "tags": {
    "amenity": "restaurant",
    "name": "Houblon & sarrasin"
  }
},
{
  "type": "node",
  "id": 1990887586,
  "lat": 48.9033709,
  "lon": 2.2566873,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Maki Rainbow",
    "phone": "0155708888"
  }
},
{
  "type": "node",
  "id": 1990903672,
  "lat": 48.9017907,
  "lon": 2.2519389,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "libanese",
    "name": "Beyrouth express"
  }
},
{
  "type": "node",
  "id": 1993467479,
  "lat": 48.8408073,
  "lon": 2.3218471,
  "tags": {
    "addr:housenumber": "43",
    "addr:street": "Avenue du Maine",
    "amenity": "cafe",
    "atm": "no",
    "cuisine": "french",
    "drive_through": "yes",
    "internet_access": "wlan",
    "name": "Paris montparnasse",
    "outdoor_seating": "yes",
    "phone": "0143209302",
    "smoking": "outside",
    "takeaway": "no"
  }
},
{
  "type": "node",
  "id": 1999779395,
  "lat": 48.8751640,
  "lon": 2.3321790,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "43",
    "addr:postcode": "75009",
    "addr:street": "Rue de la Chaussée d\'Antin",
    "amenity": "restaurant",
    "cuisine": "french",
    "internet_access": "no",
    "name": "L\'Eden",
    "outdoor_seating": "yes",
    "smoking": "outside",
    "takeaway": "no"
  }
},
{
  "type": "node",
  "id": 1999843501,
  "lat": 48.8660566,
  "lon": 2.3039258,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "21",
    "addr:postcode": "75008",
    "addr:state": "Île-de-France",
    "addr:street": "Avenue Montaigne",
    "amenity": "cafe",
    "atm": "no",
    "cuisine": "american",
    "drive_through": "no",
    "name": "Relais plaza",
    "outdoor_seating": "no",
    "smoking": "outside",
    "takeaway": "no"
  }
},
{
  "type": "node",
  "id": 1999876783,
  "lat": 48.8348517,
  "lon": 2.2891489,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "2",
    "addr:postcode": "75015",
    "addr:street": "Square Auguste Chabrières",
    "amenity": "restaurant",
    "cuisine": "couscous",
    "name": "La Zeralda"
  }
},
{
  "type": "node",
  "id": 1999876784,
  "lat": 48.8349806,
  "lon": 2.2890202,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "18",
    "addr:postcode": "75015",
    "addr:street": "Rue Auguste Chabrières",
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "La Grande Muraille de Pékin"
  }
},
{
  "type": "node",
  "id": 2000813093,
  "lat": 48.8882304,
  "lon": 2.3741760,
  "tags": {
    "amenity": "bar",
    "name": "Bar du Métro",
    "note:fr": "Café / bar",
    "source": "wikimedia"
  }
},
{
  "type": "node",
  "id": 2003145799,
  "lat": 48.8598245,
  "lon": 2.3479142,
  "tags": {
    "amenity": "restaurant",
    "name": "Café Arena"
  }
},
{
  "type": "node",
  "id": 2003145801,
  "lat": 48.8592985,
  "lon": 2.3479258,
  "tags": {
    "alt_name": "The Australian Bar",
    "amenity": "restaurant",
    "name": "Café Oz"
  }
},
{
  "type": "node",
  "id": 2003145803,
  "lat": 48.8601373,
  "lon": 2.3481716,
  "tags": {
    "alt_name": "Le Maquis de Chatelet",
    "amenity": "restaurant",
    "name": "Cantine Afro-Cubaine"
  }
},
{
  "type": "node",
  "id": 2003145805,
  "lat": 48.8625488,
  "lon": 2.3540088,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Chez Ming"
  }
},
{
  "type": "node",
  "id": 2003145810,
  "lat": 48.8624420,
  "lon": 2.3521861,
  "tags": {
    "amenity": "cafe",
    "cuisine": "lebanese",
    "name": "Falafel Café"
  }
},
{
  "type": "node",
  "id": 2003145813,
  "lat": 48.8600406,
  "lon": 2.3484986,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "burger",
    "name": "HD Diner",
    "source": "survey 2013",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 2003145815,
  "lat": 48.8600556,
  "lon": 2.3483497,
  "tags": {
    "amenity": "restaurant",
    "name": "Hippopotamus"
  }
},
{
  "type": "node",
  "id": 2003145817,
  "lat": 48.8610630,
  "lon": 2.3541260,
  "tags": {
    "amenity": "cafe",
    "name": "Le Bar des Aiglons"
  }
},
{
  "type": "node",
  "id": 2003145818,
  "lat": 48.8630686,
  "lon": 2.3546427,
  "tags": {
    "amenity": "cafe",
    "name": "Le Brelan",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 2003145819,
  "lat": 48.8606162,
  "lon": 2.3549537,
  "tags": {
    "amenity": "cafe",
    "name": "Le Celtic",
    "source": "survey",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 2003145820,
  "lat": 48.8601051,
  "lon": 2.3500266,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Komptoir"
  }
},
{
  "type": "node",
  "id": 2003145821,
  "lat": 48.8633570,
  "lon": 2.3506638,
  "tags": {
    "amenity": "bar",
    "name": "Le Spicy home"
  }
},
{
  "type": "node",
  "id": 2003145830,
  "lat": 48.8591455,
  "lon": 2.3478511,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Mimmo"
  }
},
{
  "type": "node",
  "id": 2003145837,
  "lat": 48.8602833,
  "lon": 2.3482093,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Pizza Enio",
    "opening_hours": "Mo-Su 00:00-04:00,11:30-24:00"
  }
},
{
  "type": "node",
  "id": 2003145850,
  "lat": 48.8611215,
  "lon": 2.3539521,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Sakura"
  }
},
{
  "type": "node",
  "id": 2003145854,
  "lat": 48.8630018,
  "lon": 2.3509388,
  "tags": {
    "amenity": "cafe",
    "name": "Sebastos",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 2003145867,
  "lat": 48.8592067,
  "lon": 2.3534078,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 2003145894,
  "lat": 48.8608690,
  "lon": 2.3535460,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 2003145918,
  "lat": 48.8620249,
  "lon": 2.3537411,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 2003145919,
  "lat": 48.8621035,
  "lon": 2.3535221,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 2003233896,
  "lat": 48.8634711,
  "lon": 2.3500128,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "crepes",
    "name": "Ar Poul Gwen",
    "website": "www.arpoulgwen.com"
  }
},
{
  "type": "node",
  "id": 2003233899,
  "lat": 48.8601905,
  "lon": 2.3476020,
  "tags": {
    "amenity": "restaurant",
    "name": "Banana Café"
  }
},
{
  "type": "node",
  "id": 2003233900,
  "lat": 48.8601948,
  "lon": 2.3475156,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "thai",
    "name": "Bann Thaï"
  }
},
{
  "type": "node",
  "id": 2003233903,
  "lat": 48.8596378,
  "lon": 2.3474576,
  "tags": {
    "amenity": "restaurant",
    "name": "Beho"
  }
},
{
  "type": "node",
  "id": 2003233905,
  "lat": 48.8604384,
  "lon": 2.3466636,
  "tags": {
    "amenity": "cafe",
    "name": "Beirut Café"
  }
},
{
  "type": "node",
  "id": 2003233906,
  "lat": 48.8636482,
  "lon": 2.3489320,
  "tags": {
    "amenity": "cafe",
    "name": "Café Etienne"
  }
},
{
  "type": "node",
  "id": 2003233907,
  "lat": 48.8637123,
  "lon": 2.3501453,
  "tags": {
    "amenity": "cafe",
    "name": "Café Marcel"
  }
},
{
  "type": "node",
  "id": 2003233913,
  "lat": 48.8629250,
  "lon": 2.3487647,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Hoki Suchi"
  }
},
{
  "type": "node",
  "id": 2003233914,
  "lat": 48.8600209,
  "lon": 2.3471788,
  "tags": {
    "amenity": "cafe",
    "name": "L\'Amazonial"
  }
},
{
  "type": "node",
  "id": 2003233916,
  "lat": 48.8636829,
  "lon": 2.3493064,
  "tags": {
    "amenity": "restaurant",
    "name": "La Penderie"
  }
},
{
  "type": "node",
  "id": 2003233919,
  "lat": 48.8628881,
  "lon": 2.3488962,
  "tags": {
    "amenity": "cafe",
    "name": "Le Vieux Léon"
  }
},
{
  "type": "node",
  "id": 2003233923,
  "lat": 48.8637682,
  "lon": 2.3499143,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "New Shangaï"
  }
},
{
  "type": "node",
  "id": 2003233925,
  "lat": 48.8620454,
  "lon": 2.3494700,
  "tags": {
    "amenity": "cafe",
    "coffeehouse": "yes",
    "name": "Starbucks",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2003233927,
  "lat": 48.8634421,
  "lon": 2.3485303,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Villa Tokyo"
  }
},
{
  "type": "node",
  "id": 2003233934,
  "lat": 48.8633388,
  "lon": 2.3485138,
  "tags": {
    "amenity": "restaurant",
    "name": "Zango"
  }
},
{
  "type": "node",
  "id": 2003591358,
  "lat": 48.8577440,
  "lon": 2.4279651,
  "tags": {
    "amenity": "bar",
    "name": "Au rendez-vous des chauffeurs"
  }
},
{
  "type": "node",
  "id": 2004831470,
  "lat": 48.8848688,
  "lon": 2.3069070,
  "tags": {
    "amenity": "restaurant",
    "name": "Agapé"
  }
},
{
  "type": "node",
  "id": 2010635965,
  "lat": 48.8654477,
  "lon": 2.3685805,
  "tags": {
    "addr:housenumber": "25",
    "addr:street": "Rue Jean-Pierre Timbaud",
    "amenity": "restaurant",
    "cuisine": "crepe",
    "name": "Chez Imogène",
    "opening_hours": "Tu-Sa 12:30-14:30;Tu-Su 19:00-23:30",
    "phone": "01 48 07 14 59",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "website": "http://www.creperie-imogene.fr/"
  }
},
{
  "type": "node",
  "id": 2010636772,
  "lat": 48.8852577,
  "lon": 2.2594958,
  "tags": {
    "amenity": "restaurant",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2010636773,
  "lat": 48.8654002,
  "lon": 2.3689374,
  "tags": {
    "amenity": "restaurant",
    "name": "La Pharmacie"
  }
},
{
  "type": "node",
  "id": 2011444789,
  "lat": 48.8414148,
  "lon": 2.4182911,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 2011451022,
  "lat": 48.8412533,
  "lon": 2.4177480,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 2012707485,
  "lat": 48.8356746,
  "lon": 2.3226602,
  "tags": {
    "amenity": "bar",
    "atm": "no",
    "food": "yes",
    "internet_access": "no",
    "name": "Le ton air de brest",
    "outdoor_seating": "no",
    "smoking": "separated"
  }
},
{
  "type": "node",
  "id": 2012709624,
  "lat": 48.8355850,
  "lon": 2.3240208,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian",
    "internet_access": "no",
    "name": "Delibay",
    "outdoor_seating": "no",
    "smoking": "no",
    "takeaway": "yes"
  }
},
{
  "type": "node",
  "id": 2012716210,
  "lat": 48.8364355,
  "lon": 2.3230794,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "seafood",
    "name": "Vin et marée",
    "outdoor_seating": "no",
    "smoking": "no",
    "takeaway": "no"
  }
},
{
  "type": "node",
  "id": 2012720252,
  "lat": 48.8354175,
  "lon": 2.3228183,
  "tags": {
    "amenity": "bar",
    "atm": "no",
    "food": "yes",
    "internet_access": "no",
    "name": "Le milev",
    "outdoor_seating": "no",
    "smoking": "no"
  }
},
{
  "type": "node",
  "id": 2013424467,
  "lat": 48.8365016,
  "lon": 2.3919794,
  "tags": {
    "amenity": "cafe",
    "name": "Le Narval",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 2013424499,
  "lat": 48.8363755,
  "lon": 2.3920736,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Sadika"
  }
},
{
  "type": "node",
  "id": 2013424503,
  "lat": 48.8222169,
  "lon": 2.4200264,
  "tags": {
    "amenity": "cafe",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 2013424509,
  "lat": 48.8363401,
  "lon": 2.3920991,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese"
  }
},
{
  "type": "node",
  "id": 2013424511,
  "lat": 48.8371689,
  "lon": 2.3900453,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 2013514084,
  "lat": 48.8476343,
  "lon": 2.3974001,
  "tags": {
    "amenity": "restaurant",
    "name": "Cafétéria Casino"
  }
},
{
  "type": "node",
  "id": 2013669112,
  "lat": 48.8446991,
  "lon": 2.3828833,
  "tags": {
    "amenity": "cafe",
    "name": "Le Bourgoin"
  }
},
{
  "type": "node",
  "id": 2013669121,
  "lat": 48.8452414,
  "lon": 2.3792066,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Sapori"
  }
},
{
  "type": "node",
  "id": 2013669127,
  "lat": 48.8388762,
  "lon": 2.3961905,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Ting Ting"
  }
},
{
  "type": "node",
  "id": 2013669165,
  "lat": 48.8440274,
  "lon": 2.3842239,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 2013669173,
  "lat": 48.8448269,
  "lon": 2.3800646,
  "tags": {
    "amenity": "cafe",
    "tobbaco": "yes"
  }
},
{
  "type": "node",
  "id": 2013749517,
  "lat": 48.8400356,
  "lon": 2.3360672,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "fish",
    "name": "La Closerie des Lilas",
    "name:ru": "Клозери де Лила",
    "opening_hours": "Mo-Su 12:00-14:30,19:00-23:30",
    "phone": "01 40 51 34 50",
    "website": "http://www.closeriedeslilas.fr/",
    "wikipedia": "fr:La Closerie des Lilas"
  }
},
{
  "type": "node",
  "id": 2013750905,
  "lat": 48.8395556,
  "lon": 2.3365605,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Bal Bullier"
  }
},
{
  "type": "node",
  "id": 2017157354,
  "lat": 48.8192937,
  "lon": 2.3232019,
  "tags": {
    "addr:postcode": "92120",
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "The Himalayan"
  }
},
{
  "type": "node",
  "id": 2018003371,
  "lat": 48.8651570,
  "lon": 2.3627039,
  "tags": {
    "addr:housenumber": "1bis",
    "addr:postcode": "75003",
    "addr:street": "Rue Charles-François Dupuis",
    "amenity": "cafe",
    "website": "www.merceandthemuse.com"
  }
},
{
  "type": "node",
  "id": 2018171323,
  "lat": 48.8607749,
  "lon": 2.3784617,
  "tags": {
    "amenity": "bar",
    "name": "Le rochebrune"
  }
},
{
  "type": "node",
  "id": 2018175246,
  "lat": 48.8614835,
  "lon": 2.3771934,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "vietnamese",
    "name": "L\'étoile de mer"
  }
},
{
  "type": "node",
  "id": 2018469101,
  "lat": 48.8555652,
  "lon": 2.3871679,
  "tags": {
    "amenity": "bar",
    "name": "Le Carbone 14"
  }
},
{
  "type": "node",
  "id": 2020244750,
  "lat": 48.8247036,
  "lon": 2.2953970,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "email": "contact@il-giardino-fr",
    "name": "Il Giardino",
    "phone": "+33(0)146446611",
    "smoking": "no",
    "website": "www.il-giardino.fr"
  }
},
{
  "type": "node",
  "id": 2020244755,
  "lat": 48.8239559,
  "lon": 2.2972073,
  "tags": {
    "amenity": "bar",
    "name": "Le Maine-Anjou",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 2021910389,
  "lat": 48.8217455,
  "lon": 2.3523997,
  "tags": {
    "amenity": "restaurant",
    "name": "Au Coucou des Peupliers"
  }
},
{
  "type": "node",
  "id": 2021910390,
  "lat": 48.8221973,
  "lon": 2.3554703,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Chez Mémé"
  }
},
{
  "type": "node",
  "id": 2025011388,
  "lat": 48.8778735,
  "lon": 2.2875843,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "34",
    "addr:street": "Rue Saint-Ferdinand",
    "amenity": "restaurant",
    "name": "Le Saint-Ferdinand",
    "source": "data.paris.f "
  }
},
{
  "type": "node",
  "id": 2026672306,
  "lat": 48.8181831,
  "lon": 2.3191946,
  "tags": {
    "addr:housenumber": "1",
    "addr:postcode": "92120",
    "addr:street": "Place de la Libération",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Rubeo Monte"
  }
},
{
  "type": "node",
  "id": 2028480517,
  "lat": 48.8304768,
  "lon": 2.3747802,
  "tags": {
    "amenity": "cafe",
    "name": "L\'Arobase",
    "opening_hours": "Mo-Fr 08:30-19:00; Sa 13:00-19:00; Su off;",
    "website": "www.arobasecafe.com/",
    "wifi": "yes"
  }
},
{
  "type": "node",
  "id": 2032247143,
  "lat": 48.9042217,
  "lon": 2.3016603,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Clichic"
  }
},
{
  "type": "node",
  "id": 2034651404,
  "lat": 48.8343920,
  "lon": 2.3220856,
  "tags": {
    "amenity": "cafe",
    "name": "Café Le Château"
  }
},
{
  "type": "node",
  "id": 2036576291,
  "lat": 48.8705072,
  "lon": 2.3019336,
  "tags": {
    "addr:housenumber": "20",
    "addr:postcode": "75008",
    "addr:street": "Rue Quentin Bauchart",
    "amenity": "restaurant",
    "cuisine": "steak_house",
    "name": "Hippopotamus",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2036587088,
  "lat": 48.8708689,
  "lon": 2.3020289,
  "tags": {
    "addr:housenumber": "25",
    "addr:postcode": "75008",
    "addr:street": "Rue Quentin Bauchart",
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Vesuvio"
  }
},
{
  "type": "node",
  "id": 2036611688,
  "lat": 48.8697768,
  "lon": 2.3036006,
  "tags": {
    "addr:housenumber": "61",
    "addr:postcode": "75008",
    "addr:street": "Rue Pierre Charron",
    "amenity": "restaurant",
    "name": "Lina\'s"
  }
},
{
  "type": "node",
  "id": 2036613850,
  "lat": 48.8696718,
  "lon": 2.3038513,
  "tags": {
    "amenity": "cafe",
    "name": "Café Victoria"
  }
},
{
  "type": "node",
  "id": 2038089335,
  "lat": 48.8796315,
  "lon": 2.3035534,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 2038629581,
  "lat": 48.8822854,
  "lon": 2.3399369,
  "tags": {
    "amenity": "bar",
    "atm": "no",
    "food": "no",
    "internet_access": "no",
    "name": "La Cantine de la Cigale",
    "outdoor_seating": "yes",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 2038949589,
  "lat": 48.8495790,
  "lon": 2.3543056,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "14",
    "addr:postcode": "75004",
    "addr:state": "Île-de-France",
    "addr:street": "Boulevard Saint-Germain",
    "amenity": "restaurant",
    "cuisine": "french",
    "email": "chez-rene@orange.fr ",
    "internet_access": "no",
    "name": "Chez René",
    "opening_hours": "Tu-Sa 12:00-14:30,19:00-23:00",
    "outdoor_seating": "no",
    "phone": "01 43 54 30 23",
    "smoking": "no",
    "source": "Cadastre. Mise à jour : 2010;  knowledge",
    "takeaway": "no"
  }
},
{
  "type": "node",
  "id": 2039754404,
  "lat": 48.8681112,
  "lon": 2.3014721,
  "tags": {
    "addr:housenumber": "30",
    "addr:postcode": "75008",
    "addr:street": "Avenue George V",
    "amenity": "restaurant",
    "name": "Diwan"
  }
},
{
  "type": "node",
  "id": 2039904973,
  "lat": 48.8704351,
  "lon": 2.3043615,
  "tags": {
    "amenity": "restaurant",
    "name": "Léon de Bruxelles",
    "website": "http://www.leon-de-bruxelles.fr"
  }
},
{
  "type": "node",
  "id": 2039931903,
  "lat": 48.8693740,
  "lon": 2.3077196,
  "tags": {
    "addr:housenumber": "25",
    "addr:postcode": "75008",
    "addr:street": "Avenue des Champs-Élysées",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Napoléone",
    "old_name": "La Païva"
  }
},
{
  "type": "node",
  "id": 2040281434,
  "lat": 48.8175624,
  "lon": 2.3245216,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "vietnamese",
    "name": "Voi Elephant",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2041908463,
  "lat": 48.8893330,
  "lon": 2.2480580,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "Le nouveau monde",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2041913984,
  "lat": 48.8884670,
  "lon": 2.2476000,
  "tags": {
    "amenity": "restaurant",
    "created_by": "iLOE 1.9",
    "name": "L\'italian lounge"
  }
},
{
  "type": "node",
  "id": 2041931477,
  "lat": 48.8895930,
  "lon": 2.2460630,
  "tags": {
    "amenity": "restaurant",
    "created_by": "iLOE 1.9",
    "name": "La safranée",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2041931786,
  "lat": 48.9020521,
  "lon": 2.3168629,
  "tags": {
    "addr:housenumber": "5",
    "addr:street": "Rue de Belfort",
    "amenity": "restaurant",
    "name": "Le Vésuve"
  }
},
{
  "type": "node",
  "id": 2041947391,
  "lat": 48.8905820,
  "lon": 2.2455380,
  "tags": {
    "amenity": "restaurant",
    "created_by": "iLOE 1.9",
    "name": "Le pinocchio",
    "source": "survey",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 2041950007,
  "lat": 48.8901260,
  "lon": 2.2449300,
  "tags": {
    "amenity": "restaurant",
    "created_by": "iLOE 1.9",
    "name": "Mond.",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2043534734,
  "lat": 48.8310397,
  "lon": 2.3791345,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "La maison des Frigos",
    "website": "www.les-frigos.com"
  }
},
{
  "type": "node",
  "id": 2043667780,
  "lat": 48.8960190,
  "lon": 2.2367120,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "Bistrot du faubourg"
  }
},
{
  "type": "node",
  "id": 2043668523,
  "lat": 48.8957390,
  "lon": 2.2364980,
  "tags": {
    "amenity": "restaurant",
    "created_by": "iLOE 1.9",
    "name": "Ristaurante"
  }
},
{
  "type": "node",
  "id": 2043685280,
  "lat": 48.8360032,
  "lon": 2.2916086,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "15",
    "addr:postcode": "75015",
    "addr:street": "Rue Desnouettes",
    "amenity": "restaurant",
    "cuisine": "regional",
    "name": "Afaria",
    "phone": "01 48 42 95 90",
    "website": "http://www.restaurant-afaria.fr/"
  }
},
{
  "type": "node",
  "id": 2043702828,
  "lat": 48.8354526,
  "lon": 2.2925379,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "358",
    "addr:postcode": "75015",
    "addr:street": "Rue de Vaugirard",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Parc Vaugirard"
  }
},
{
  "type": "node",
  "id": 2043707046,
  "lat": 48.8360026,
  "lon": 2.2919856,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "11",
    "addr:postcode": "75015",
    "addr:street": "Rue Desnouettes",
    "amenity": "restaurant",
    "cuisine": "thai",
    "name": "Chiang Rai Mai"
  }
},
{
  "type": "node",
  "id": 2043835929,
  "lat": 48.8439584,
  "lon": 2.4314083,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Château des Vignerons"
  }
},
{
  "type": "node",
  "id": 2043908277,
  "lat": 48.8442360,
  "lon": 2.3235210,
  "tags": {
    "amenity": "bar",
    "created_by": "iLOE 1.9",
    "name": "Limonade",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2043945928,
  "lat": 48.8444056,
  "lon": 2.3230253,
  "tags": {
    "amenity": "restaurant",
    "name": "Pizza pino"
  }
},
{
  "type": "node",
  "id": 2043982190,
  "lat": 48.8398470,
  "lon": 2.3238410,
  "tags": {
    "amenity": "restaurant",
    "name": "Manten",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2048549463,
  "lat": 48.8905438,
  "lon": 2.4591078,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 2048549475,
  "lat": 48.8930408,
  "lon": 2.4567205,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "La Grande Muraille"
  }
},
{
  "type": "node",
  "id": 2048549478,
  "lat": 48.8940814,
  "lon": 2.4614735,
  "tags": {
    "amenity": "bar",
    "name": "Le Michelet"
  }
},
{
  "type": "node",
  "id": 2048549482,
  "lat": 48.8924413,
  "lon": 2.4559589,
  "tags": {
    "amenity": "bar",
    "name": "La pyramide"
  }
},
{
  "type": "node",
  "id": 2048549491,
  "lat": 48.8883040,
  "lon": 2.4572947,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 2048565804,
  "lat": 48.8897264,
  "lon": 2.4525873,
  "tags": {
    "amenity": "bar",
    "name": "Le Celtique"
  }
},
{
  "type": "node",
  "id": 2049105531,
  "lat": 48.8519848,
  "lon": 2.3846342,
  "tags": {
    "amenity": "restaurant",
    "name": "Le temps au temps"
  }
},
{
  "type": "node",
  "id": 2049661308,
  "lat": 48.8919555,
  "lon": 2.4671037,
  "tags": {
    "amenity": "restaurant",
    "name": "Diana"
  }
},
{
  "type": "node",
  "id": 2049747329,
  "lat": 48.8405177,
  "lon": 2.3236190,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "3",
    "addr:postcode": "75014",
    "addr:street": "Rue du Maine",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Plomb du Cantal"
  }
},
{
  "type": "node",
  "id": 2050246288,
  "lat": 48.8777760,
  "lon": 2.2877961,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 2052942063,
  "lat": 48.8154800,
  "lon": 2.3175362,
  "tags": {
    "amenity": "restaurant",
    "name": "Chez Frilou 1933",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 2052942071,
  "lat": 48.8159535,
  "lon": 2.3178635,
  "tags": {
    "addr:postcode": "92120",
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "À côté du 82..."
  }
},
{
  "type": "node",
  "id": 2052942075,
  "lat": 48.8151976,
  "lon": 2.3174423,
  "tags": {
    "addr:postcode": "92120",
    "addr:street": "Avenue de la République",
    "amenity": "restaurant",
    "cuisine": "seafood",
    "name": "La Goélette"
  }
},
{
  "type": "node",
  "id": 2056336907,
  "lat": 48.8183790,
  "lon": 2.3224856,
  "tags": {
    "amenity": "cafe"
  }
},
{
  "type": "node",
  "id": 2062268689,
  "lat": 48.9007095,
  "lon": 2.3165783,
  "tags": {
    "amenity": "restaurant",
    "name": "Coq Noir"
  }
},
{
  "type": "node",
  "id": 2062268693,
  "lat": 48.9007793,
  "lon": 2.3165687,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Kaneda"
  }
},
{
  "type": "node",
  "id": 2065214032,
  "lat": 48.8643014,
  "lon": 2.4002976,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "thai",
    "name": "Jardin de Chiang Mai",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2012"
  }
},
{
  "type": "node",
  "id": 2066029676,
  "lat": 48.8294447,
  "lon": 2.3791512,
  "tags": {
    "amenity": "restaurant",
    "name": "Hippopotamus"
  }
},
{
  "type": "node",
  "id": 2066029677,
  "lat": 48.8288966,
  "lon": 2.3760626,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Chaber",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2066275031,
  "lat": 48.8616234,
  "lon": 2.4058937,
  "tags": {
    "amenity": "cafe",
    "name": "Le Papillon",
    "phone": "0143733855",
    "smoking": "no",
    "website": "www.cafelepapillon.fr"
  }
},
{
  "type": "node",
  "id": 2066387122,
  "lat": 48.8486397,
  "lon": 2.3653776,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "La canaille"
  }
},
{
  "type": "node",
  "id": 2068093407,
  "lat": 48.8482481,
  "lon": 2.4383784,
  "tags": {
    "addr:housenumber": "108",
    "amenity": "cafe",
    "name": "Lou Cantalou"
  }
},
{
  "type": "node",
  "id": 2068538357,
  "lat": 48.8476019,
  "lon": 2.4377298,
  "tags": {
    "addr:housenumber": "2",
    "amenity": "restaurant",
    "name": "CO2",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2012"
  }
},
{
  "type": "node",
  "id": 2071529375,
  "lat": 48.8311964,
  "lon": 2.2788479,
  "tags": {
    "amenity": "bar",
    "name": "Le Boyard"
  }
},
{
  "type": "node",
  "id": 2071632562,
  "lat": 48.8720371,
  "lon": 2.3481740,
  "tags": {
    "amenity": "restaurant",
    "contact:email": "contact@1jouraparis.com",
    "contact:phone": "01 44 83 00 21",
    "contact:website": "http://www.restaurant-bistrot-unjouraparis.com/",
    "name": "Un jour à Paris"
  }
},
{
  "type": "node",
  "id": 2072607634,
  "lat": 48.8582338,
  "lon": 2.4341820,
  "tags": {
    "addr:housenumber": "6",
    "addr:postcode": "93100",
    "addr:street": "place du marché",
    "amenity": "bar",
    "name": "Le chinois",
    "website": "https://www.facebook.com/lechinoisdemontreuil"
  }
},
{
  "type": "node",
  "id": 2074923980,
  "lat": 48.8815725,
  "lon": 2.3721513,
  "tags": {
    "amenity": "cafe",
    "name": "Le Saint-Malo"
  }
},
{
  "type": "node",
  "id": 2074923993,
  "lat": 48.8808002,
  "lon": 2.3729937,
  "tags": {
    "amenity": "cafe",
    "name": "Le Royal"
  }
},
{
  "type": "node",
  "id": 2078512771,
  "lat": 48.8743652,
  "lon": 2.3625584,
  "tags": {
    "amenity": "pub",
    "name": "L\'atmosphere"
  }
},
{
  "type": "node",
  "id": 2078512772,
  "lat": 48.8732358,
  "lon": 2.3613894,
  "tags": {
    "amenity": "restaurant",
    "name": "Les 2 Singes"
  }
},
{
  "type": "node",
  "id": 2078512779,
  "lat": 48.8732268,
  "lon": 2.3624203,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian"
  }
},
{
  "type": "node",
  "id": 2078918263,
  "lat": 48.8153363,
  "lon": 2.4297044,
  "tags": {
    "addr:housenumber": "2",
    "amenity": "bar",
    "name": "Bar des 2 Moulins",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2079153383,
  "lat": 48.8123627,
  "lon": 2.2387591,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 2079256222,
  "lat": 48.8277972,
  "lon": 2.3059077,
  "tags": {
    "amenity": "cafe",
    "name": "Au Maréchal Brune",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2079256265,
  "lat": 48.8281574,
  "lon": 2.3022904,
  "tags": {
    "addr:housenumber": "100",
    "addr:postcode": "75015",
    "addr:street": "Boulevard Lefebvre",
    "amenity": "restaurant",
    "cuisine": "lebanese",
    "name": "Klayaa",
    "phone": "01.48.28.01.02",
    "source": "survey",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 2079256540,
  "lat": 48.8275052,
  "lon": 2.3070562,
  "tags": {
    "addr:housenumber": "21",
    "addr:postcode": "75014",
    "addr:street": "Boulevard Brune",
    "amenity": "cafe",
    "name": "Le Marengo"
  }
},
{
  "type": "node",
  "id": 2081291845,
  "lat": 48.8405572,
  "lon": 2.3224049,
  "tags": {
    "alt_name": "Le bar des amis des amis",
    "amenity": "bar",
    "name": "L\'Adada"
  }
},
{
  "type": "node",
  "id": 2081656009,
  "lat": 48.8713202,
  "lon": 2.3658560,
  "tags": {
    "addr:housenumber": "70",
    "addr:postcode": "75010",
    "addr:street": "Quai de Jemmapes",
    "amenity": "pub",
    "name": "The Cork and Cavan"
  }
},
{
  "type": "node",
  "id": 2082397959,
  "lat": 48.8944510,
  "lon": 2.3440420,
  "tags": {
    "addr:city": "Paris",
    "addr:postcode": "75018",
    "addr:street": "Rue Duhesme",
    "amenity": "restaurant",
    "cuisine": "coffee_shop",
    "outdoor_seating": "yes",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 2084076530,
  "lat": 48.8142316,
  "lon": 2.3612488,
  "tags": {
    "addr:city": "Le Kremlin-Bicêtre",
    "addr:housenumber": "23",
    "addr:postcode": "94270",
    "addr:street": "Avenue de Fontainebleau",
    "amenity": "pub",
    "entrance": "main",
    "name": "New Billard",
    "sport": "billard",
    "website": "http://www.new-billard.fr",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 2084076541,
  "lat": 48.8153877,
  "lon": 2.3609123,
  "tags": {
    "addr:city": "Le Kremlin-Bicêtre",
    "addr:housenumber": "11",
    "addr:postcode": "94270",
    "addr:street": "Avenue de Fontainebleau",
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "La Toscane"
  }
},
{
  "type": "node",
  "id": 2084076543,
  "lat": 48.8139779,
  "lon": 2.3613252,
  "tags": {
    "addr:city": "Le Kremlin-Bicêtre",
    "addr:housenumber": "27",
    "addr:postcode": "94270",
    "addr:street": "Avenue de Fontainebleau",
    "amenity": "restaurant",
    "cuisine": "chinese",
    "disused": "yes",
    "entrance": "main",
    "name": "The Golden Wok",
    "wheelchair": "partial"
  }
},
{
  "type": "node",
  "id": 2084076548,
  "lat": 48.8135895,
  "lon": 2.3614772,
  "tags": {
    "addr:city": "Le Kremlin-Bicêtre",
    "addr:housenumber": "37",
    "addr:postcode": "94270",
    "addr:street": "Avenue de Fontainebleau",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Fratello\'s Ristorante Italiano",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2084076553,
  "lat": 48.8149985,
  "lon": 2.3610400,
  "tags": {
    "addr:city": "Le Kremlin-Bicêtre",
    "addr:housenumber": "15",
    "addr:postcode": "94270",
    "addr:street": "Avenue de Fontainebleau",
    "amenity": "cafe",
    "name": "L\'Etalon noir"
  }
},
{
  "type": "node",
  "id": 2086399140,
  "lat": 48.8417263,
  "lon": 2.3245973,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 2086399141,
  "lat": 48.8419109,
  "lon": 2.3245351,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 2086399142,
  "lat": 48.8435173,
  "lon": 2.3219294,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian"
  }
},
{
  "type": "node",
  "id": 2086399143,
  "lat": 48.8407069,
  "lon": 2.3164233,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 2086399144,
  "lat": 48.8428397,
  "lon": 2.3260649,
  "tags": {
    "amenity": "pub",
    "brewery": "chouffe;guinness;carlsberg;Leffe_Royale;Magner;Pilsner_Urquell;Trappe_Triple;Maredsous;John_Martin\'s;Blanche_de_Bruxelles;Carolus_d\'or;Cuvee_des_Trolls;Framboise_Lindemans;Bière_de_saison",
    "name": "Le Falstaff",
    "opening_hours": "Mo-Fr 00:00-04:00, 08:30-24:00;Sa-Su 00:00-05:00, 08:30-24:00",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 2086399146,
  "lat": 48.8416495,
  "lon": 2.3246134,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 2086399147,
  "lat": 48.8433410,
  "lon": 2.3248673,
  "tags": {
    "amenity": "cafe",
    "name": "Starbucks Coffee",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 2086399148,
  "lat": 48.8409248,
  "lon": 2.3157527,
  "tags": {
    "amenity": "bar",
    "name": "Café le Blüe Boy",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 2086399149,
  "lat": 48.8417952,
  "lon": 2.3245691,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 2086399151,
  "lat": 48.8413133,
  "lon": 2.3184421,
  "tags": {
    "amenity": "bar",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 2086399152,
  "lat": 48.8419805,
  "lon": 2.3245034,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 2086399153,
  "lat": 48.8414979,
  "lon": 2.3246397,
  "tags": {
    "amenity": "bar",
    "name": "Café Odessa"
  }
},
{
  "type": "node",
  "id": 2086399154,
  "lat": 48.8432840,
  "lon": 2.3249954,
  "tags": {
    "amenity": "bar",
    "name": "Indiana Café",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 2086399155,
  "lat": 48.8404349,
  "lon": 2.3156482,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza"
  }
},
{
  "type": "node",
  "id": 2086399156,
  "lat": 48.8429231,
  "lon": 2.3260926,
  "tags": {
    "amenity": "restaurant",
    "name": "Léon de Bruxelles"
  }
},
{
  "type": "node",
  "id": 2086399157,
  "lat": 48.8405515,
  "lon": 2.3159715,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "regional",
    "name": "La Forge"
  }
},
{
  "type": "node",
  "id": 2086399158,
  "lat": 48.8407506,
  "lon": 2.3165877,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 2086399159,
  "lat": 48.8427732,
  "lon": 2.3210206,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 2086399160,
  "lat": 48.8405038,
  "lon": 2.3158186,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Chez Pietro"
  }
},
{
  "type": "node",
  "id": 2086399164,
  "lat": 48.8415277,
  "lon": 2.3195025,
  "tags": {
    "amenity": "restaurant",
    "name": "Odessa"
  }
},
{
  "type": "node",
  "id": 2086399166,
  "lat": 48.8404090,
  "lon": 2.3155450,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "thai",
    "name": "Siam House",
    "outdoor_seating": "yes",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 2086399169,
  "lat": 48.8408520,
  "lon": 2.3154700,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Crêperie le Ty Breizh",
    "outdoor_seating": "no",
    "smoking": "no",
    "takeaway": "no",
    "website": "Tybreizhcreperieparis.fr",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 2086399170,
  "lat": 48.8416910,
  "lon": 2.3246067,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 2086399172,
  "lat": 48.8415356,
  "lon": 2.3248762,
  "tags": {
    "amenity": "bar",
    "name": "Café de la place"
  }
},
{
  "type": "node",
  "id": 2086399173,
  "lat": 48.8410405,
  "lon": 2.3217676,
  "tags": {
    "amenity": "restaurant",
    "internet_access": "wlan",
    "name": "L\'atlantique"
  }
},
{
  "type": "node",
  "id": 2086423559,
  "lat": 48.8754701,
  "lon": 2.2836788,
  "tags": {
    "amenity": "restaurant",
    "name": "La villa Corse"
  }
},
{
  "type": "node",
  "id": 2086423560,
  "lat": 48.8753925,
  "lon": 2.2852613,
  "tags": {
    "amenity": "restaurant",
    "name": "La villa Pergolèse"
  }
},
{
  "type": "node",
  "id": 2086423561,
  "lat": 48.8750872,
  "lon": 2.2865005,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "thai",
    "name": "Madame Shawn"
  }
},
{
  "type": "node",
  "id": 2086423564,
  "lat": 48.8756941,
  "lon": 2.2862216,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Okagawa"
  }
},
{
  "type": "node",
  "id": 2086423565,
  "lat": 48.8781338,
  "lon": 2.2877691,
  "tags": {
    "amenity": "bar",
    "name": "Bistro le Florilège"
  }
},
{
  "type": "node",
  "id": 2087542131,
  "lat": 48.8910090,
  "lon": 2.3460570,
  "tags": {
    "addr:city": "Paris",
    "addr:postcode": "75018",
    "addr:street": "Rue Eugène Sue",
    "amenity": "bar",
    "food": "no",
    "name": "L\'absurde imposture",
    "outdoor_seating": "no",
    "smoking": "outside"
  }
},
{
  "type": "node",
  "id": 2088352548,
  "lat": 48.8371723,
  "lon": 2.3209043,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "seafood",
    "name": "La Cagouille"
  }
},
{
  "type": "node",
  "id": 2090756579,
  "lat": 48.8498032,
  "lon": 2.4508417,
  "tags": {
    "amenity": "bar",
    "name": "Le Royal"
  }
},
{
  "type": "node",
  "id": 2102769275,
  "lat": 48.8169289,
  "lon": 2.3206391,
  "tags": {
    "addr:postcode": "92120",
    "addr:street": "Rue Louis Rolland",
    "amenity": "cafe",
    "cuisine": "french",
    "name": "Le Victor Hugo"
  }
},
{
  "type": "node",
  "id": 2103216535,
  "lat": 48.8727890,
  "lon": 2.3429679,
  "tags": {
    "amenity": "restaurant",
    "name": "Chez Yanina",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2103216538,
  "lat": 48.8727157,
  "lon": 2.3429899,
  "tags": {
    "amenity": "restaurant",
    "name": "Kim Séoul",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2103216539,
  "lat": 48.8728753,
  "lon": 2.3429491,
  "tags": {
    "amenity": "bar",
    "name": "La Comete",
    "note:fr": "Bar Resto",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2103216540,
  "lat": 48.8725590,
  "lon": 2.3430087,
  "tags": {
    "amenity": "cafe",
    "name": "Péninsule",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2107054817,
  "lat": 48.8450620,
  "lon": 2.2639791,
  "tags": {
    "amenity": "restaurant",
    "name": "Caffé Da Moli"
  }
},
{
  "type": "node",
  "id": 2108011840,
  "lat": 48.8404449,
  "lon": 2.3243133,
  "tags": {
    "addr:housenumber": "9",
    "addr:postcode": "75014",
    "addr:street": "Rue de la Gaîté",
    "amenity": "restaurant",
    "cuisine": "thai",
    "name": "Aiyara"
  }
},
{
  "type": "node",
  "id": 2108026247,
  "lat": 48.8393146,
  "lon": 2.3237992,
  "tags": {
    "addr:housenumber": "3",
    "addr:postcode": "75014",
    "addr:street": "Rue Larochelle",
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Bassanti"
  }
},
{
  "type": "node",
  "id": 2108026249,
  "lat": 48.8394700,
  "lon": 2.3227210,
  "tags": {
    "addr:housenumber": "9",
    "addr:street": "Rue Vandamme",
    "amenity": "bar",
    "name": "Kriza Bar"
  }
},
{
  "type": "node",
  "id": 2108688340,
  "lat": 48.8466620,
  "lon": 2.2831751,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Le palais de Shah Jahan"
  }
},
{
  "type": "node",
  "id": 2108688341,
  "lat": 48.8465418,
  "lon": 2.2833721,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "thai",
    "name": "Sawadee"
  }
},
{
  "type": "node",
  "id": 2109674894,
  "lat": 48.8389616,
  "lon": 2.2516334,
  "tags": {
    "amenity": "restaurant",
    "name": "Bistrot Da Vinci",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2112672788,
  "lat": 48.8420648,
  "lon": 2.2629254,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Sakura"
  }
},
{
  "type": "node",
  "id": 2112678889,
  "lat": 48.8419451,
  "lon": 2.2631629,
  "tags": {
    "amenity": "bar",
    "name": "Le Tunnel"
  }
},
{
  "type": "node",
  "id": 2112678904,
  "lat": 48.8420009,
  "lon": 2.2643568,
  "tags": {
    "amenity": "bar",
    "brewery": "Super bock",
    "name": "Nela café"
  }
},
{
  "type": "node",
  "id": 2116553868,
  "lat": 48.8913333,
  "lon": 2.3185158,
  "tags": {
    "amenity": "bar",
    "name": "Au Bistro Cardinet"
  }
},
{
  "type": "node",
  "id": 2117640475,
  "lat": 48.8208255,
  "lon": 2.4020831,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "regional",
    "name": "Le Mak Boucané"
  }
},
{
  "type": "node",
  "id": 2117641103,
  "lat": 48.8207628,
  "lon": 2.4022990,
  "tags": {
    "amenity": "cafe",
    "cuisine": "french",
    "name": "Bar l\'étoile de Charenton"
  }
},
{
  "type": "node",
  "id": 2117856511,
  "lat": 48.8239202,
  "lon": 2.3655030,
  "tags": {
    "addr:housenumber": "48",
    "addr:street": "Avenue d\'Ivry",
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Tang Gourmet Paris",
    "operator": "Tang Frères"
  }
},
{
  "type": "node",
  "id": 2117915101,
  "lat": 48.8278157,
  "lon": 2.2730637,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "L\'aéroclub"
  }
},
{
  "type": "node",
  "id": 2119466913,
  "lat": 48.8231449,
  "lon": 2.3164243,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "La Pergola"
  }
},
{
  "type": "node",
  "id": 2122702252,
  "lat": 48.8274421,
  "lon": 2.3056058,
  "tags": {
    "addr:housenumber": "8",
    "addr:postcode": "75014",
    "addr:street": "Boulevard Brune",
    "amenity": "restaurant",
    "cuisine": "turkish",
    "name": "Restaurant élite"
  }
},
{
  "type": "node",
  "id": 2122702267,
  "lat": 48.8272767,
  "lon": 2.3063130,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "thai",
    "name": "Au thai gourmand"
  }
},
{
  "type": "node",
  "id": 2122702317,
  "lat": 48.8273081,
  "lon": 2.3061699,
  "tags": {
    "addr:housenumber": "10",
    "addr:postcode": "75014",
    "addr:street": "Boulevard Brune",
    "amenity": "restaurant",
    "cuisine": "vietnamese",
    "name": "Mandrin de Vanves",
    "website": "http://www.mandarin-vanves.fr",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 2124308289,
  "lat": 48.8561348,
  "lon": 2.4048284,
  "tags": {
    "amenity": "bar",
    "name": "L\'Aubisque"
  }
},
{
  "type": "node",
  "id": 2124332645,
  "lat": 48.8579931,
  "lon": 2.4032941,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Pizzeria Monte Bianco"
  }
},
{
  "type": "node",
  "id": 2124487512,
  "lat": 48.8468777,
  "lon": 2.4086290,
  "tags": {
    "amenity": "bar",
    "name": "Le Bar Botté"
  }
},
{
  "type": "node",
  "id": 2124487682,
  "lat": 48.8468470,
  "lon": 2.4088515,
  "tags": {
    "amenity": "bar",
    "name": "Le Métro"
  }
},
{
  "type": "node",
  "id": 2124494286,
  "lat": 48.8479121,
  "lon": 2.4058825,
  "tags": {
    "amenity": "bar",
    "name": "Le Vincennes"
  }
},
{
  "type": "node",
  "id": 2124630144,
  "lat": 48.8851757,
  "lon": 2.3075791,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Jouffroy",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2124630146,
  "lat": 48.8820348,
  "lon": 2.3139529,
  "tags": {
    "amenity": "restaurant",
    "name": "Restaurant Brigitte",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2124933205,
  "lat": 48.8493703,
  "lon": 2.2944544,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 2125350876,
  "lat": 48.8238321,
  "lon": 2.3027391,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'Imprévu",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2125350891,
  "lat": 48.8235590,
  "lon": 2.3028693,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Pizza Luna",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2125406245,
  "lat": 48.8836495,
  "lon": 2.3167431,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "13",
    "addr:postcode": "75017",
    "addr:street": "Rue de Saussure",
    "amenity": "bar",
    "name": "La Colombe"
  }
},
{
  "type": "node",
  "id": 2125571201,
  "lat": 48.8719957,
  "lon": 2.3430238,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "sushi",
    "name": "La Delice Sushi",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2125571208,
  "lat": 48.8720494,
  "lon": 2.3430269,
  "tags": {
    "amenity": "bar",
    "name": "Le Longchamp",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2125571211,
  "lat": 48.8718412,
  "lon": 2.3430035,
  "tags": {
    "amenity": "cafe",
    "name": "Le Zinc des Caviste",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2126310150,
  "lat": 48.8495349,
  "lon": 2.2915103,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "17",
    "addr:postcode": "75015",
    "addr:street": "Rue de Lourmel",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Okayama",
    "phone": "+33 1 45788001",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2126313751,
  "lat": 48.8494723,
  "lon": 2.2914581,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "17b",
    "addr:postcode": "75015",
    "addr:street": "Rue de Lourmel",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Chez Thomas",
    "phone": "+33 1 40598238"
  }
},
{
  "type": "node",
  "id": 2126361721,
  "lat": 48.8729655,
  "lon": 2.3432485,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Casa Rina",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2126361724,
  "lat": 48.8720337,
  "lon": 2.3433324,
  "tags": {
    "amenity": "cafe",
    "name": "Deli\'s Café",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2126361728,
  "lat": 48.8718024,
  "lon": 2.3432812,
  "tags": {
    "amenity": "restaurant",
    "name": "Villa Montmartre",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2126706727,
  "lat": 48.8221714,
  "lon": 2.3036251,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Kumano"
  }
},
{
  "type": "node",
  "id": 2127423577,
  "lat": 48.9061383,
  "lon": 2.2556067,
  "tags": {
    "amenity": "restaurant",
    "name": "Karlos",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2130798749,
  "lat": 48.8193061,
  "lon": 2.3373740,
  "tags": {
    "addr:housenumber": "19",
    "addr:street": "Boulevard Jourdan",
    "amenity": "restaurant",
    "name": "Restaurant Universitaire"
  }
},
{
  "type": "node",
  "id": 2132421460,
  "lat": 48.8396713,
  "lon": 2.3471300,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 2134646580,
  "lat": 48.8318467,
  "lon": 2.3029070,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Aux sportifs réunis"
  }
},
{
  "type": "node",
  "id": 2134878775,
  "lat": 48.8228779,
  "lon": 2.3555122,
  "tags": {
    "amenity": "bar",
    "name": "Century Bar"
  }
},
{
  "type": "node",
  "id": 2134878790,
  "lat": 48.8222518,
  "lon": 2.3550558,
  "tags": {
    "amenity": "cafe",
    "name": "Le Flanker",
    "url": "http://www.parisetudiant.com/etudiant/lieu/chen-flanker.html"
  }
},
{
  "type": "node",
  "id": 2136187728,
  "lat": 48.8767250,
  "lon": 2.3307380,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "2",
    "addr:postcode": "75009",
    "addr:street": "Rue de Londres",
    "amenity": "restaurant",
    "name": "Le Vert Tulipe",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 2136438655,
  "lat": 48.8935419,
  "lon": 2.2484430,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "La Trattoria d\'Angelo",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 2137613214,
  "lat": 48.8202656,
  "lon": 2.2268018,
  "tags": {
    "addr:housenumber": "8",
    "addr:postcode": "92190",
    "addr:street": "Rue de Velizy",
    "amenity": "restaurant",
    "name": "L\'Escarbille",
    "phone": "+33 1 45341203",
    "source": "survey",
    "website": "http://www.lescarbille.fr/"
  }
},
{
  "type": "node",
  "id": 2137614174,
  "lat": 48.8103859,
  "lon": 2.3634255,
  "tags": {
    "addr:housenumber": "2",
    "addr:postcode": "94270",
    "addr:street": "Rue Edmond Michelet",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "L\'Ardoise"
  }
},
{
  "type": "node",
  "id": 2137762218,
  "lat": 48.8610880,
  "lon": 2.3512876,
  "tags": {
    "amenity": "restaurant",
    "brewery": "yes",
    "cocktails": "yes",
    "name": "Bistrot du centre",
    "note:fr": "Pizza, Brasserie, Cocktails",
    "pizza": "yes",
    "source": "survey",
    "terrasse": "yes"
  }
},
{
  "type": "node",
  "id": 2137762221,
  "lat": 48.8616111,
  "lon": 2.3523043,
  "tags": {
    "amenity": "cafe",
    "name": "Chocolat Rouge",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2138310214,
  "lat": 48.8614615,
  "lon": 2.3514586,
  "tags": {
    "amenity": "restaurant",
    "name": "Riad Neuma",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2139005674,
  "lat": 48.8470220,
  "lon": 2.4389555,
  "tags": {
    "amenity": "cafe",
    "name": "Café de la Mairie"
  }
},
{
  "type": "node",
  "id": 2139915871,
  "lat": 48.8841484,
  "lon": 2.3227392,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "coréen",
    "name": "Doladji"
  }
},
{
  "type": "node",
  "id": 2139915880,
  "lat": 48.8840708,
  "lon": 2.3230235,
  "tags": {
    "amenity": "restaurant",
    "name": "Japikeo"
  }
},
{
  "type": "node",
  "id": 2141357509,
  "lat": 48.8861392,
  "lon": 2.3337047,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "13",
    "addr:postcode": "75018",
    "addr:street": "Rue Joseph de Maistre",
    "amenity": "restaurant",
    "cuisine": "regional",
    "name": "Le Relais Gascon",
    "website": "http://www.lerelaisgascon.fr/"
  }
},
{
  "type": "node",
  "id": 2141702167,
  "lat": 48.8515798,
  "lon": 2.3992009,
  "tags": {
    "amenity": "restaurant",
    "name": "Chez Younice"
  }
},
{
  "type": "node",
  "id": 2141702169,
  "lat": 48.8515911,
  "lon": 2.3992945,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Fukuoka"
  }
},
{
  "type": "node",
  "id": 2143921529,
  "lat": 48.8720846,
  "lon": 2.3660947,
  "tags": {
    "addr:housenumber": "10",
    "addr:postcode": "75010",
    "addr:street": "Avenue Richerand",
    "amenity": "restaurant",
    "name": "Le Cambodge",
    "website": "http://www.lecambodge.fr/"
  }
},
{
  "type": "node",
  "id": 2143923399,
  "lat": 48.8716623,
  "lon": 2.3681061,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "20",
    "addr:postcode": "75010",
    "addr:street": "Rue Alibert",
    "amenity": "restaurant",
    "name": "Le Petit Cambodge",
    "website": "www.lepetitcambodge.fr"
  }
},
{
  "type": "node",
  "id": 2144646141,
  "lat": 48.8448238,
  "lon": 2.3691876,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "WoknNoodles"
  }
},
{
  "type": "node",
  "id": 2144646164,
  "lat": 48.8471374,
  "lon": 2.3947373,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "american"
  }
},
{
  "type": "node",
  "id": 2144646169,
  "lat": 48.8416499,
  "lon": 2.3895371,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "mexican",
    "name": "O\'Cantina Café"
  }
},
{
  "type": "node",
  "id": 2144935686,
  "lat": 48.8573786,
  "lon": 2.3543034,
  "tags": {
    "amenity": "cafe",
    "name": "La Comète",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2145339067,
  "lat": 48.8447328,
  "lon": 2.3894590,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese"
  }
},
{
  "type": "node",
  "id": 2145851420,
  "lat": 48.8462215,
  "lon": 2.3870803,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Absolute Sushi"
  }
},
{
  "type": "node",
  "id": 2145864870,
  "lat": 48.8470847,
  "lon": 2.3868148,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french"
  }
},
{
  "type": "node",
  "id": 2145864875,
  "lat": 48.8469143,
  "lon": 2.3869489,
  "tags": {
    "amenity": "cafe",
    "cuisine": "french"
  }
},
{
  "type": "node",
  "id": 2146056938,
  "lat": 48.8603639,
  "lon": 2.3478222,
  "tags": {
    "amenity": "restaurant",
    "name": "Pasta Art",
    "note:fr": "Bar à Pâtes & Salades",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2146056939,
  "lat": 48.8603388,
  "lon": 2.3480663,
  "tags": {
    "amenity": "restaurant",
    "name": "Pasta Nina",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2146085909,
  "lat": 48.8598889,
  "lon": 2.3522642,
  "tags": {
    "amenity": "restaurant",
    "building:levelPlan": "6",
    "fax": "+33 (0)1 44 78 47 99",
    "name": "Le Georges",
    "phone": "+33 (0)1 44 78 47 99"
  }
},
{
  "type": "node",
  "id": 2146284867,
  "lat": 48.8275287,
  "lon": 2.3149795,
  "tags": {
    "amenity": "restaurant",
    "name": "Casa de Torino"
  }
},
{
  "type": "node",
  "id": 2146651144,
  "lat": 48.8637615,
  "lon": 2.3663892,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "12",
    "addr:postcode": "75003",
    "addr:street": "Rue Amelot",
    "amenity": "cafe",
    "cuisine": "coffee_shop",
    "name": "The Broken Arm",
    "website": "http://www.the-broken-arm.com",
    "wifi": "yes"
  }
},
{
  "type": "node",
  "id": 2148901348,
  "lat": 48.8848153,
  "lon": 2.3229754,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Sole di Sardegna"
  }
},
{
  "type": "node",
  "id": 2149109986,
  "lat": 48.8714407,
  "lon": 2.3097914,
  "tags": {
    "amenity": "cafe",
    "cuisine": "french",
    "name": "Le Président"
  }
},
{
  "type": "node",
  "id": 2149400936,
  "lat": 48.8434621,
  "lon": 2.4649668,
  "tags": {
    "amenity": "cafe",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2149899597,
  "lat": 48.8281219,
  "lon": 2.3158457,
  "tags": {
    "amenity": "bar",
    "brewery": "yes",
    "name": "L\'Europe",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2149919122,
  "lat": 48.8464830,
  "lon": 2.4195855,
  "tags": {
    "amenity": "cafe",
    "name": "Danieli Caffé",
    "note:fr": "Restaurant, Café, Pizza",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2149919147,
  "lat": 48.8461616,
  "lon": 2.4192892,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2149919149,
  "lat": 48.8463754,
  "lon": 2.4208145,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2151182660,
  "lat": 48.8733188,
  "lon": 2.3446580,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "3",
    "addr:postcode": "75009",
    "addr:street": "Rue de la Boule Rouge",
    "amenity": "restaurant",
    "cuisine": "vegetarian",
    "diet:vegetarian": "only",
    "name": "Vegebowl"
  }
},
{
  "type": "node",
  "id": 2151917022,
  "lat": 48.8208063,
  "lon": 2.3138420,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "sushi",
    "name": "L\'empire sushi maki"
  }
},
{
  "type": "node",
  "id": 2151917025,
  "lat": 48.8193316,
  "lon": 2.3202827,
  "tags": {
    "addr:postcode": "92120",
    "amenity": "bar",
    "name": "Bar du Théâtre",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2152981900,
  "lat": 48.8600106,
  "lon": 2.3509612,
  "tags": {
    "amenity": "cafe",
    "name": "Café Beaubourg"
  }
},
{
  "type": "node",
  "id": 2153351987,
  "lat": 48.8799415,
  "lon": 2.2318409,
  "tags": {
    "amenity": "restaurant",
    "name": "La Tour d\'Auvergne"
  }
},
{
  "type": "node",
  "id": 2153351990,
  "lat": 48.8798180,
  "lon": 2.2316934,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Pizzeria Giovanni"
  }
},
{
  "type": "node",
  "id": 2153351992,
  "lat": 48.8798682,
  "lon": 2.2334836,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Pooja"
  }
},
{
  "type": "node",
  "id": 2154551063,
  "lat": 48.8735773,
  "lon": 2.3706207,
  "tags": {
    "amenity": "cafe",
    "name": "Café de l’Europe",
    "opening_hours": "Mo-Su 08:00-02:00"
  }
},
{
  "type": "node",
  "id": 2154724463,
  "lat": 48.8421556,
  "lon": 2.2202775,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Délice Royal",
    "phone": "01.49.11.18.41"
  }
},
{
  "type": "node",
  "id": 2154724509,
  "lat": 48.8422166,
  "lon": 2.2200100,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Venise",
    "phone": "01.47.71.12.33"
  }
},
{
  "type": "node",
  "id": 2155909507,
  "lat": 48.8829960,
  "lon": 2.2330227,
  "tags": {
    "addr:housenumber": "1",
    "addr:postcode": "92800",
    "addr:street": "Rue Fernand Pelloutier",
    "amenity": "cafe",
    "name": "Tabac de la gare"
  }
},
{
  "type": "node",
  "id": 2156600911,
  "lat": 48.8412254,
  "lon": 2.3738186,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Café Cotta",
    "website": "http://www.cafecotta.com/"
  }
},
{
  "type": "node",
  "id": 2156603615,
  "lat": 48.8752221,
  "lon": 2.3038262,
  "tags": {
    "addr:housenumber": "7",
    "addr:postcode": "75008",
    "addr:street": "Rue Berryer",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Da Fabio",
    "website": "https://fr-fr.facebook.com/dafabiotraiteur"
  }
},
{
  "type": "node",
  "id": 2157467188,
  "lat": 48.8405967,
  "lon": 2.2643349,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Saveurs de Tokyo"
  }
},
{
  "type": "node",
  "id": 2157952434,
  "lat": 48.8878312,
  "lon": 2.3787631,
  "tags": {
    "addr:postcode": "75019",
    "amenity": "restaurant",
    "cuisine": "breton",
    "name": "Okay Café",
    "source": "survey 2013"
  }
},
{
  "type": "node",
  "id": 2159495644,
  "lat": 48.8470601,
  "lon": 2.2681655,
  "tags": {
    "amenity": "restaurant",
    "name": "au Clocher du village"
  }
},
{
  "type": "node",
  "id": 2160812927,
  "lat": 48.8701201,
  "lon": 2.3491659,
  "tags": {
    "addr:housenumber": "16",
    "addr:postcode": "75002",
    "addr:street": "Rue Thorel",
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Ira Indien"
  }
},
{
  "type": "node",
  "id": 2161521589,
  "lat": 48.8800589,
  "lon": 2.2370325,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Chez Tan"
  }
},
{
  "type": "node",
  "id": 2161521592,
  "lat": 48.8795597,
  "lon": 2.2361944,
  "tags": {
    "amenity": "bar",
    "name": "Le cartel"
  }
},
{
  "type": "node",
  "id": 2161550350,
  "lat": 48.8799240,
  "lon": 2.2408721,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 2161550362,
  "lat": 48.8796867,
  "lon": 2.2405301,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 2161550366,
  "lat": 48.8792219,
  "lon": 2.2401358,
  "tags": {
    "amenity": "bar",
    "name": "Night city"
  }
},
{
  "type": "node",
  "id": 2161550371,
  "lat": 48.8793357,
  "lon": 2.2407594,
  "tags": {
    "amenity": "bar",
    "name": "Le Brazza"
  }
},
{
  "type": "node",
  "id": 2161550372,
  "lat": 48.8801762,
  "lon": 2.2405918,
  "tags": {
    "amenity": "cafe",
    "name": "Café du théatre"
  }
},
{
  "type": "node",
  "id": 2161550374,
  "lat": 48.8795298,
  "lon": 2.2403356,
  "tags": {
    "amenity": "bar",
    "name": "Au RDV du batiment"
  }
},
{
  "type": "node",
  "id": 2161966601,
  "lat": 48.8609895,
  "lon": 2.3473093,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Pizza Hut",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2162624279,
  "lat": 48.8467068,
  "lon": 2.2996176,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Comptoir Moderne"
  }
},
{
  "type": "node",
  "id": 2162801935,
  "lat": 48.8596119,
  "lon": 2.3520509,
  "tags": {
    "amenity": "cafe",
    "name": "Café Paris Beaubourg",
    "note:fr": "Café, Cocktail, Pizza",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2162801937,
  "lat": 48.8678744,
  "lon": 2.3015051,
  "tags": {
    "amenity": "cafe",
    "name": "Findi",
    "note:fr": "Café, Traiteur Italien",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2164023034,
  "lat": 48.8730582,
  "lon": 2.3434334,
  "tags": {
    "amenity": "bar",
    "name": "Floquifil",
    "note:fr": "Cave à vin- table",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2164023035,
  "lat": 48.8730540,
  "lon": 2.3435221,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Le Bonheur",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2164935920,
  "lat": 48.8655913,
  "lon": 2.3471265,
  "tags": {
    "amenity": "restaurant",
    "name": "Au Rocher de Cancale"
  }
},
{
  "type": "node",
  "id": 2165038781,
  "lat": 48.8613396,
  "lon": 2.3430061,
  "tags": {
    "amenity": "bar",
    "name": "Woozy"
  }
},
{
  "type": "node",
  "id": 2167404916,
  "lat": 48.8852970,
  "lon": 2.3163291,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Le Jardin du Kashmir"
  }
},
{
  "type": "node",
  "id": 2167679143,
  "lat": 48.8835253,
  "lon": 2.2397253,
  "tags": {
    "addr:housenumber": "10",
    "addr:postcode": "92800",
    "addr:street": "Rue Anatole France",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Sushi New"
  }
},
{
  "type": "node",
  "id": 2167679191,
  "lat": 48.8833462,
  "lon": 2.2397656,
  "tags": {
    "addr:housenumber": "4",
    "addr:postcode": "92800",
    "addr:street": "Rue Anatole France",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Les gourmandises"
  }
},
{
  "type": "node",
  "id": 2167679211,
  "lat": 48.8823621,
  "lon": 2.2384781,
  "tags": {
    "amenity": "bar",
    "name": "Chez José"
  }
},
{
  "type": "node",
  "id": 2167679216,
  "lat": 48.8836444,
  "lon": 2.2368124,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Venezia"
  }
},
{
  "type": "node",
  "id": 2167679230,
  "lat": 48.8829865,
  "lon": 2.2380382,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "La Diva"
  }
},
{
  "type": "node",
  "id": 2167679248,
  "lat": 48.8847263,
  "lon": 2.2392224,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "thai",
    "name": "Thaï Thaï"
  }
},
{
  "type": "node",
  "id": 2168837251,
  "lat": 48.8238476,
  "lon": 2.3506828,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Chez Yong 鼎鼎香"
  }
},
{
  "type": "node",
  "id": 2173379914,
  "lat": 48.8402963,
  "lon": 2.3339966,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "C\'est Mon Plaisir",
    "source": "Travel",
    "website": "http://www.restaurantcestmonplaisir.com/restaurant/bienvenue-montparnasse.html"
  }
},
{
  "type": "node",
  "id": 2173535976,
  "lat": 48.8207235,
  "lon": 2.3507707,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Allo Pizza Express",
    "url": "http://www.comengo.fr/restaurant/emporter/PARIS-13-75013/Allo-Pizza-Express"
  }
},
{
  "type": "node",
  "id": 2177229398,
  "lat": 48.8341834,
  "lon": 2.3261480,
  "tags": {
    "addr:housenumber": "34",
    "addr:postcode": "75014",
    "addr:street": "Rue Gassendi",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Cornichon",
    "opening_hours": "Mo-Fr  12:00-14:30, 19:00-22:30",
    "website": "www.lecornichon.fr"
  }
},
{
  "type": "node",
  "id": 2177709028,
  "lat": 48.8204523,
  "lon": 2.3498034,
  "tags": {
    "amenity": "cafe",
    "name": "La Mascotte",
    "url": "http://www.e-pro-hotel-restaurant.fr/paris/debits-de-boissons/mere-et-fils_f3517946"
  }
},
{
  "type": "node",
  "id": 2177749411,
  "lat": 48.8676507,
  "lon": 2.3427272,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Point Zéro",
    "phone": "01 42 33 45 50",
    "website": "http://www.le-pointzero.fr/"
  }
},
{
  "type": "node",
  "id": 2177756402,
  "lat": 48.8199467,
  "lon": 2.3483675,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Soixante-quinze",
    "url": "http://www.place123.net/place/le_soixante_quinze_paris_456573147696275"
  }
},
{
  "type": "node",
  "id": 2177772081,
  "lat": 48.8233348,
  "lon": 2.3532089,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Grill de la Poterne",
    "url": "http://fr.nomao.com/12673626.html"
  }
},
{
  "type": "node",
  "id": 2178785500,
  "lat": 48.8831783,
  "lon": 2.2402130,
  "tags": {
    "addr:housenumber": "8",
    "addr:postcode": "92800",
    "addr:street": "Rue Marius Jacotot",
    "amenity": "restaurant",
    "name": "Le césar"
  }
},
{
  "type": "node",
  "id": 2178785501,
  "lat": 48.8825609,
  "lon": 2.2402559,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Bonheur"
  }
},
{
  "type": "node",
  "id": 2178785506,
  "lat": 48.8840301,
  "lon": 2.2424527,
  "tags": {
    "addr:housenumber": "27",
    "addr:postcode": "92800",
    "addr:street": "Rue Rousselle",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Chez Giovanni",
    "website": "http://www.restaurant-pizza-puteaux.com/"
  }
},
{
  "type": "node",
  "id": 2178785508,
  "lat": 48.8832858,
  "lon": 2.2403659,
  "tags": {
    "addr:housenumber": "10",
    "addr:postcode": "92800",
    "addr:street": "Rue Marius Jacotot",
    "amenity": "restaurant",
    "name": "Le clos de Jô"
  }
},
{
  "type": "node",
  "id": 2178785510,
  "lat": 48.8829349,
  "lon": 2.2406180,
  "tags": {
    "addr:housenumber": "3",
    "addr:postcode": "92800",
    "addr:street": "Rue Roque de Fillol",
    "amenity": "restaurant",
    "name": "Le sain sert"
  }
},
{
  "type": "node",
  "id": 2178785511,
  "lat": 48.8828766,
  "lon": 2.2408219,
  "tags": {
    "addr:housenumber": "108",
    "addr:postcode": "92800",
    "addr:street": "Rue Jean Jaurès",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le café de Flore"
  }
},
{
  "type": "node",
  "id": 2178785512,
  "lat": 48.8836139,
  "lon": 2.2408165,
  "tags": {
    "addr:housenumber": "24",
    "addr:postcode": "92800",
    "addr:street": "Rue Marius Jacotot",
    "amenity": "bar",
    "name": "Le zig-zag"
  }
},
{
  "type": "node",
  "id": 2178785515,
  "lat": 48.8829754,
  "lon": 2.2399394,
  "tags": {
    "amenity": "bar",
    "name": "Le jacoto"
  }
},
{
  "type": "node",
  "id": 2179774059,
  "lat": 48.8480339,
  "lon": 2.3711696,
  "tags": {
    "addr:housenumber": "47",
    "addr:street": "Avenue Ledru-Rollin",
    "amenity": "restaurant",
    "brewery": "Heineken;Affligem;Edelweiss",
    "happy_hours": "Mo-Sa 17:00-20:00",
    "name": "Tarmac",
    "opening_hours": "Mo-Sa 07:30-01:00",
    "source": "survey;cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 2179803735,
  "lat": 48.8515203,
  "lon": 2.3696022,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Les associés",
    "source": "survey",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 2179812147,
  "lat": 48.8537394,
  "lon": 2.3700625,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "7",
    "addr:postcode": "75012",
    "addr:street": "place de la Bastille",
    "amenity": "restaurant",
    "internet_access": "no",
    "name": "Le Paradis du fruit",
    "opening_hours": "Mo-Su 12:00-01:00",
    "phone": "+33 (0) 1 43 07 82 25",
    "source": "survey",
    "website": "http://www.leparadisdufruit.fr/",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 2179813041,
  "lat": 48.8537089,
  "lon": 2.3705103,
  "tags": {
    "amenity": "restaurant",
    "brewery": "Grimbergen;Kronenbourg;1664;Grimbergen_white;",
    "cuisine": "french",
    "internet_access": "wlan",
    "name": "Le Bastille",
    "opening_hours": "Mo-Su 07:30-04:30",
    "phone": "+33 (0) 1 43 07 79 95",
    "source": "survey",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 2179813042,
  "lat": 48.8537227,
  "lon": 2.3702879,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "10",
    "addr:postcode": "75012",
    "addr:street": "place de la Bastille",
    "amenity": "restaurant",
    "brewery": "Kilkenny;Guinness;Lindemans_raspberry;Grimbergen;Grimbergen_white;Carlsberg;1664;Warsteiner",
    "cuisine": "french",
    "internet_access": "wlan",
    "name": "Le Falstaff",
    "opening_hours": "Mo-Fr 08:30-02:00; Fr-Su 00:00-24:00",
    "phone": "+33 (0) 1 43 43 18 33",
    "source": "survey",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 2179816279,
  "lat": 48.8534314,
  "lon": 2.3706101,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "6",
    "addr:postcode": "75012",
    "addr:street": "Rue de la Roquette",
    "amenity": "restaurant",
    "cuisine": "magreb",
    "name": "La kabylie",
    "opening_hours": "Mo-Sa 12:00-14:00,18:30-23:00",
    "phone": "+33 (0) 1 48 05 91 74",
    "source": "survey",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 2180078836,
  "lat": 48.8502098,
  "lon": 2.3923579,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Philosophe",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2180081440,
  "lat": 48.8497025,
  "lon": 2.3932209,
  "tags": {
    "amenity": "restaurant",
    "name": "Restaurant Vin&marée",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2180084668,
  "lat": 48.8841048,
  "lon": 2.3216813,
  "tags": {
    "amenity": "cafe",
    "name": "Augustin",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2180088944,
  "lat": 48.8494363,
  "lon": 2.3945868,
  "tags": {
    "amenity": "restaurant",
    "name": "Makoto",
    "phone": "+33 1 44 64 75 87",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2180116938,
  "lat": 48.8385781,
  "lon": 2.3705346,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Bistrot Quai"
  }
},
{
  "type": "node",
  "id": 2180116943,
  "lat": 48.8392685,
  "lon": 2.3708042,
  "tags": {
    "amenity": "restaurant",
    "name": "Les Nuits Blanches"
  }
},
{
  "type": "node",
  "id": 2181213237,
  "lat": 48.8480582,
  "lon": 2.4401437,
  "tags": {
    "amenity": "bar",
    "name": "Le Boudoir"
  }
},
{
  "type": "node",
  "id": 2183846709,
  "lat": 48.8489499,
  "lon": 2.3541277,
  "tags": {
    "addr:housenumber": "7",
    "addr:postcode": "75005",
    "addr:street": "Rue du Cardinal Lemoine",
    "alt_name": "Cinquième Cru",
    "amenity": "restaurant",
    "cuisine": "french",
    "description": "Bar à vin",
    "name": "5eCru",
    "source": "http://www.qype.fr/place/218121-5eme-Cru-Paris",
    "website": "www.5ecru.com/"
  }
},
{
  "type": "node",
  "id": 2183857914,
  "lat": 48.8246333,
  "lon": 2.3621995,
  "tags": {
    "amenity": "cafe",
    "name": "Robert Chez Papy"
  }
},
{
  "type": "node",
  "id": 2184027347,
  "lat": 48.8221895,
  "lon": 2.3632536,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Impérial Choisy"
  }
},
{
  "type": "node",
  "id": 2184027349,
  "lat": 48.8223064,
  "lon": 2.3631664,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Fung Shun",
    "website": "http://www.fungshun.fr"
  }
},
{
  "type": "node",
  "id": 2184047457,
  "lat": 48.8222916,
  "lon": 2.3627648,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Apsara Celeste",
    "url": "http://www.foodreporter.fr/place/index/id/2589"
  }
},
{
  "type": "node",
  "id": 2184047459,
  "lat": 48.8222392,
  "lon": 2.3628073,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Li Ka Fo",
    "url": "http://www.716-food.com/2011/09/li-ka-fo-paris-75013.html"
  }
},
{
  "type": "node",
  "id": 2184052283,
  "lat": 48.8223782,
  "lon": 2.3631115,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "La Lune",
    "url": "http://www.lesrestos.com/fiche-restaurant-paris/LA-LUNE/1223348227"
  }
},
{
  "type": "node",
  "id": 2184060713,
  "lat": 48.8223716,
  "lon": 2.3627130,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Hauky",
    "note": "sign above restaurant says \"Huaky\" not \"Hauky\"",
    "takeaway": "yes"
  }
},
{
  "type": "node",
  "id": 2184095956,
  "lat": 48.8224283,
  "lon": 2.3626633,
  "tags": {
    "amenity": "cafe",
    "name": "Bubble House",
    "note": "teahouse, smoothies",
    "url": "http://www.foodreporter.fr/place/index/id/29908"
  }
},
{
  "type": "node",
  "id": 2184127220,
  "lat": 48.8230753,
  "lon": 2.3626307,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "thai",
    "name": "Thai Vien"
  }
},
{
  "type": "node",
  "id": 2184143103,
  "lat": 48.8234533,
  "lon": 2.3618634,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Solia",
    "website": "http://www.le-solia.com"
  }
},
{
  "type": "node",
  "id": 2184174532,
  "lat": 48.8232058,
  "lon": 2.3603599,
  "tags": {
    "amenity": "cafe",
    "name": "Lerey"
  }
},
{
  "type": "node",
  "id": 2184293367,
  "lat": 48.8728990,
  "lon": 2.3346516,
  "tags": {
    "amenity": "cafe",
    "name": "Starbucks Coffee"
  }
},
{
  "type": "node",
  "id": 2184533439,
  "lat": 48.8229485,
  "lon": 2.3577916,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "vietnamese",
    "name": "Quan nhà"
  }
},
{
  "type": "node",
  "id": 2184536908,
  "lat": 48.8229254,
  "lon": 2.3569509,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "vietnamese",
    "name": "Le Zen",
    "url": "http://www.amasauce.com/zen/"
  }
},
{
  "type": "node",
  "id": 2184553207,
  "lat": 48.8230185,
  "lon": 2.3566795,
  "tags": {
    "amenity": "cafe",
    "name": "La Taverne"
  }
},
{
  "type": "node",
  "id": 2184571132,
  "lat": 48.8222859,
  "lon": 2.3473947,
  "tags": {
    "amenity": "cafe",
    "name": "Le Dôme de Rungis"
  }
},
{
  "type": "node",
  "id": 2184604575,
  "lat": 48.8210082,
  "lon": 2.3427545,
  "tags": {
    "addr:housenumber": "80",
    "addr:postcode": "75013",
    "addr:street": "Rue de l\'Amiral Mouchez",
    "amenity": "cafe",
    "name": "La royale"
  }
},
{
  "type": "node",
  "id": 2184604587,
  "lat": 48.8211212,
  "lon": 2.3425439,
  "tags": {
    "addr:housenumber": "78",
    "addr:postcode": "75013",
    "addr:street": "Rue de l\'Amiral Mouchez",
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Le Monza"
  }
},
{
  "type": "node",
  "id": 2189019804,
  "lat": 48.8202708,
  "lon": 2.3594105,
  "tags": {
    "amenity": "restaurant",
    "name": "Fuka"
  }
},
{
  "type": "node",
  "id": 2189019808,
  "lat": 48.8202117,
  "lon": 2.3594306,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "turkish",
    "name": "Restaurant Gap"
  }
},
{
  "type": "node",
  "id": 2189049590,
  "lat": 48.8195166,
  "lon": 2.3596336,
  "tags": {
    "amenity": "cafe",
    "name": "Le Barbizon"
  }
},
{
  "type": "node",
  "id": 2189049598,
  "lat": 48.8193950,
  "lon": 2.3590616,
  "tags": {
    "amenity": "cafe",
    "name": "Le Liberté"
  }
},
{
  "type": "node",
  "id": 2189057242,
  "lat": 48.8193544,
  "lon": 2.3597323,
  "tags": {
    "amenity": "cafe",
    "name": "Le Massena"
  }
},
{
  "type": "node",
  "id": 2189065250,
  "lat": 48.8193606,
  "lon": 2.3601238,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Mandarin"
  }
},
{
  "type": "node",
  "id": 2191591232,
  "lat": 48.8122390,
  "lon": 2.3613201,
  "tags": {
    "addr:city": "Le Kremlin-Bicêtre",
    "addr:housenumber": "58",
    "addr:postcode": "94270",
    "addr:street": "Avenue de Fontainebleau",
    "amenity": "cafe",
    "name": "Chez Pierre"
  }
},
{
  "type": "node",
  "id": 2191607488,
  "lat": 48.8129614,
  "lon": 2.3610733,
  "tags": {
    "addr:city": "Le Kremlin-Bicêtre",
    "addr:housenumber": "48",
    "addr:postcode": "94270",
    "addr:street": "Avenue de Fontainebleau",
    "amenity": "cafe",
    "cuisine": "french",
    "name": "Café de l\'Espérance",
    "url": "http://www.tripadvisor.fr/ShowUserReviews-g227614-d3571329-r144301422-Cafe_de_l_Esperance-Kremlin_Bicetre_Val_de_Marne_Ile_de_France.html"
  }
},
{
  "type": "node",
  "id": 2191669562,
  "lat": 48.8506918,
  "lon": 2.3841353,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Nouilles"
  }
},
{
  "type": "node",
  "id": 2191682045,
  "lat": 48.8145369,
  "lon": 2.3614435,
  "tags": {
    "addr:housenumber": "4",
    "addr:postcode": "94270",
    "addr:street": "Rue Roger Salengro",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "L\'orangeraie",
    "website": "http://www.lorangeraie.fr"
  }
},
{
  "type": "node",
  "id": 2191682047,
  "lat": 48.8144556,
  "lon": 2.3606173,
  "tags": {
    "addr:city": "Le Kremlin-Bicêtre",
    "addr:housenumber": "26",
    "addr:postcode": "94270",
    "addr:street": "Avenue de Fontainebleau",
    "amenity": "cafe",
    "name": "Le Royal Marigny"
  }
},
{
  "type": "node",
  "id": 2191724549,
  "lat": 48.8145228,
  "lon": 2.3613147,
  "tags": {
    "addr:housenumber": "2",
    "addr:postcode": "94270",
    "addr:street": "Rue Roger Salengro",
    "amenity": "restaurant",
    "cuisine": "tunisian",
    "name": "La Goulette"
  }
},
{
  "type": "node",
  "id": 2191750645,
  "lat": 48.8151292,
  "lon": 2.3601961,
  "tags": {
    "amenity": "cafe",
    "contact:housenumber": "6",
    "contact:postcode": "94270",
    "contact:street": "Rue du Général Leclerc",
    "name": "L\'Oustalet",
    "source": "survey",
    "wheelchair": "limited"
  }
},
{
  "type": "node",
  "id": 2192156778,
  "lat": 48.8410733,
  "lon": 2.2637691,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Au relais Chardon"
  }
},
{
  "type": "node",
  "id": 2192156779,
  "lat": 48.8409491,
  "lon": 2.2637071,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Muki Sushi"
  }
},
{
  "type": "node",
  "id": 2193098985,
  "lat": 48.8227998,
  "lon": 2.3462308,
  "tags": {
    "amenity": "bar",
    "name": "Le Phenix",
    "note": "restaurant whisky\'s bar"
  }
},
{
  "type": "node",
  "id": 2193272122,
  "lat": 48.8256496,
  "lon": 2.3504330,
  "tags": {
    "amenity": "cafe",
    "name": "Le Bobillot"
  }
},
{
  "type": "node",
  "id": 2193289261,
  "lat": 48.8258771,
  "lon": 2.3495257,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Temps des Olivades",
    "website": "http://www.letempsdesolivades.fr"
  }
},
{
  "type": "node",
  "id": 2193301817,
  "lat": 48.8258284,
  "lon": 2.3486459,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Verbalon",
    "website": "http://www.verbalon.fr"
  }
},
{
  "type": "node",
  "id": 2193342980,
  "lat": 48.8255453,
  "lon": 2.3475405,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "La Montagne d\'Or"
  }
},
{
  "type": "node",
  "id": 2193378394,
  "lat": 48.8256778,
  "lon": 2.3462187,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "219",
    "addr:postcode": "75013",
    "addr:street": "Rue de Tolbiac",
    "amenity": "cafe",
    "name": "L\'Excuse"
  }
},
{
  "type": "node",
  "id": 2193383786,
  "lat": 48.8771867,
  "lon": 2.3513174,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2193416201,
  "lat": 48.8264077,
  "lon": 2.3428246,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "San Giovanni",
    "website": "http://www.restaurant-san-giovanni.fr"
  }
},
{
  "type": "node",
  "id": 2193494553,
  "lat": 48.8764165,
  "lon": 2.3555503,
  "tags": {
    "amenity": "cafe",
    "name": "Café Bois Charbon",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2193494557,
  "lat": 48.8764781,
  "lon": 2.3553328,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Chez Jin",
    "note:fr": "Traiteur",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2194256991,
  "lat": 48.8771434,
  "lon": 2.3517304,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "La Boite à Pizza",
    "phone": "01.42.46.11.11"
  }
},
{
  "type": "node",
  "id": 2194256992,
  "lat": 48.8764892,
  "lon": 2.3552357,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Royal Kebab",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2194256993,
  "lat": 48.8765119,
  "lon": 2.3549110,
  "tags": {
    "amenity": "bar",
    "name": "Le derby",
    "note:fr": "Café, Tabac, Brasserie, PMU",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2194583506,
  "lat": 48.8266961,
  "lon": 2.3392484,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Pizza Caravelle"
  }
},
{
  "type": "node",
  "id": 2194592311,
  "lat": 48.8268524,
  "lon": 2.3383549,
  "tags": {
    "addr:housenumber": "7 ter",
    "addr:postcode": "75014",
    "addr:street": "Rue d\'Alésia",
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Pizza Delizia"
  }
},
{
  "type": "node",
  "id": 2194757220,
  "lat": 48.8279313,
  "lon": 2.3307106,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Momento"
  }
},
{
  "type": "node",
  "id": 2194804204,
  "lat": 48.8682736,
  "lon": 2.3412653,
  "tags": {
    "amenity": "cafe",
    "name": "Le Casse"
  }
},
{
  "type": "node",
  "id": 2194937722,
  "lat": 48.8277088,
  "lon": 2.3287499,
  "tags": {
    "addr:housenumber": "73",
    "addr:postcode": "75014",
    "addr:street": "Rue d\'Alésia",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le verre siffleur"
  }
},
{
  "type": "node",
  "id": 2194937768,
  "lat": 48.8277300,
  "lon": 2.3277843,
  "tags": {
    "addr:housenumber": "81",
    "addr:postcode": "75014",
    "addr:street": "Rue d\'Alésia",
    "amenity": "restaurant",
    "name": "Canteen bus",
    "website": "http://canteenbus.com"
  }
},
{
  "type": "node",
  "id": 2195644094,
  "lat": 48.9075835,
  "lon": 2.3959842,
  "tags": {
    "addr:street": "Avenue Jean Jaurès",
    "amenity": "cafe",
    "cuisine": "french",
    "name": "LeRelais"
  }
},
{
  "type": "node",
  "id": 2196302906,
  "lat": 48.9036860,
  "lon": 2.3917500,
  "tags": {
    "amenity": "cafe",
    "cuisine": "french",
    "name": "Le Triomphe"
  }
},
{
  "type": "node",
  "id": 2197106206,
  "lat": 48.9066565,
  "lon": 2.3950112,
  "tags": {
    "addr:street": "Avenue Jean Jaurès",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Alex"
  }
},
{
  "type": "node",
  "id": 2197106207,
  "lat": 48.9065966,
  "lon": 2.3949575,
  "tags": {
    "addr:street": "Avenue Jean Jaurès",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Di Trevi"
  }
},
{
  "type": "node",
  "id": 2197107176,
  "lat": 48.9063207,
  "lon": 2.3946357,
  "tags": {
    "addr:street": "Avenue Jean Jaurès",
    "amenity": "cafe",
    "cuisine": "french",
    "name": "Café des Sports"
  }
},
{
  "type": "node",
  "id": 2197417205,
  "lat": 48.8309811,
  "lon": 2.3172117,
  "tags": {
    "amenity": "bar",
    "name": "Le Bardinet",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2199500561,
  "lat": 48.8463247,
  "lon": 2.3542973,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Heng Long"
  }
},
{
  "type": "node",
  "id": 2202788545,
  "lat": 48.8148231,
  "lon": 2.3622389,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "Maghreb",
    "name": "Miam\'s"
  }
},
{
  "type": "node",
  "id": 2202788547,
  "lat": 48.8148743,
  "lon": 2.3639179,
  "tags": {
    "amenity": "cafe",
    "cuisine": "french",
    "name": "Le Ly Nas"
  }
},
{
  "type": "node",
  "id": 2202833398,
  "lat": 48.9049594,
  "lon": 2.3903407,
  "tags": {
    "amenity": "cafe",
    "cuisine": "maghreb",
    "name": "La Challenger"
  }
},
{
  "type": "node",
  "id": 2202834766,
  "lat": 48.9054883,
  "lon": 2.3920560,
  "tags": {
    "amenity": "bar",
    "name": "Les Arcades",
    "note": "Salon de thé"
  }
},
{
  "type": "node",
  "id": 2202938764,
  "lat": 48.8117474,
  "lon": 2.3906746,
  "tags": {
    "amenity": "bar",
    "name": "Café aux sports"
  }
},
{
  "type": "node",
  "id": 2202938765,
  "lat": 48.8115778,
  "lon": 2.3903715,
  "tags": {
    "amenity": "bar",
    "name": "Le Saint-Just"
  }
},
{
  "type": "node",
  "id": 2204696828,
  "lat": 48.8673359,
  "lon": 2.3991033,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Neelkanth",
    "phone": "01 43 49 06 88"
  }
},
{
  "type": "node",
  "id": 2204791435,
  "lat": 48.8684845,
  "lon": 2.4013925,
  "tags": {
    "amenity": "cafe",
    "name": "Café Pelleport"
  }
},
{
  "type": "node",
  "id": 2204791445,
  "lat": 48.8665408,
  "lon": 2.3996952,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Chang sheng"
  }
},
{
  "type": "node",
  "id": 2204791454,
  "lat": 48.8675264,
  "lon": 2.4005840,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Il Pinocchio"
  }
},
{
  "type": "node",
  "id": 2206035004,
  "lat": 48.8143764,
  "lon": 2.3434872,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "microbrewery": "yes",
    "name": "La Taverne",
    "opening_hours": "Mo-Fr 08:00-14:30",
    "phone": "0145464794"
  }
},
{
  "type": "node",
  "id": 2206035007,
  "lat": 48.8149595,
  "lon": 2.3483612,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "microbrewery": "yes",
    "name": "Pizzeria La Fontana"
  }
},
{
  "type": "node",
  "id": 2206035008,
  "lat": 48.8155173,
  "lon": 2.3447586,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Yifan",
    "website": "http://www.yifan.fr/"
  }
},
{
  "type": "node",
  "id": 2206746829,
  "lat": 48.8730171,
  "lon": 2.4047378,
  "tags": {
    "amenity": "cafe",
    "name": "Chéri-Chérie"
  }
},
{
  "type": "node",
  "id": 2206746831,
  "lat": 48.8772965,
  "lon": 2.4093947,
  "tags": {
    "amenity": "pub",
    "name": "Corcoran\'s"
  }
},
{
  "type": "node",
  "id": 2206746837,
  "lat": 48.8729522,
  "lon": 2.4050353,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'Auberge des Lilas"
  }
},
{
  "type": "node",
  "id": 2206746839,
  "lat": 48.8721618,
  "lon": 2.4043561,
  "tags": {
    "amenity": "cafe",
    "name": "La Chope Saint-Fargeau"
  }
},
{
  "type": "node",
  "id": 2206746841,
  "lat": 48.8700499,
  "lon": 2.4031251,
  "tags": {
    "amenity": "cafe",
    "internet_access": "wlan",
    "name": "Larson News"
  }
},
{
  "type": "node",
  "id": 2206746842,
  "lat": 48.8748544,
  "lon": 2.4054806,
  "tags": {
    "amenity": "cafe",
    "internet_access": "wlan",
    "name": "Le Bistrot du Manoir"
  }
},
{
  "type": "node",
  "id": 2206746843,
  "lat": 48.8769262,
  "lon": 2.4061080,
  "tags": {
    "amenity": "cafe",
    "name": "Le Clairon"
  }
},
{
  "type": "node",
  "id": 2206746844,
  "lat": 48.8714551,
  "lon": 2.4043701,
  "tags": {
    "amenity": "cafe",
    "name": "Le Saint-Fargeau"
  }
},
{
  "type": "node",
  "id": 2206746850,
  "lat": 48.8722236,
  "lon": 2.4047280,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Toscana"
  }
},
{
  "type": "node",
  "id": 2206746851,
  "lat": 48.8772063,
  "lon": 2.4094486,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Wok & Hoki"
  }
},
{
  "type": "node",
  "id": 2206747220,
  "lat": 48.8769898,
  "lon": 2.4054164,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "turkish",
    "name": "Paris Istambul 2000"
  }
},
{
  "type": "node",
  "id": 2206863502,
  "lat": 48.8711865,
  "lon": 2.4001138,
  "tags": {
    "amenity": "restaurant",
    "name": "Jeyma"
  }
},
{
  "type": "node",
  "id": 2206863506,
  "lat": 48.8768593,
  "lon": 2.4057793,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Jioko"
  }
},
{
  "type": "node",
  "id": 2206863511,
  "lat": 48.8762568,
  "lon": 2.4026044,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "La Gondole",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 2206863524,
  "lat": 48.8692292,
  "lon": 2.3966523,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Bistrot des Soupirs"
  }
},
{
  "type": "node",
  "id": 2206863528,
  "lat": 48.8725672,
  "lon": 2.3992261,
  "tags": {
    "amenity": "cafe",
    "name": "Le Cantal"
  }
},
{
  "type": "node",
  "id": 2206863537,
  "lat": 48.8701577,
  "lon": 2.3958401,
  "tags": {
    "amenity": "cafe",
    "name": "Le Réveil Matin"
  }
},
{
  "type": "node",
  "id": 2206863540,
  "lat": 48.8690126,
  "lon": 2.3971718,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Tablier Rouge"
  }
},
{
  "type": "node",
  "id": 2206863544,
  "lat": 48.8769740,
  "lon": 2.4053224,
  "tags": {
    "amenity": "cafe",
    "name": "Le Zodiac"
  }
},
{
  "type": "node",
  "id": 2206863587,
  "lat": 48.8726193,
  "lon": 2.3990837,
  "tags": {
    "amenity": "restaurant",
    "name": "Restaurant de la Poste"
  }
},
{
  "type": "node",
  "id": 2206863720,
  "lat": 48.8723933,
  "lon": 2.3993546,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 2206863798,
  "lat": 48.8758552,
  "lon": 2.4019932,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese"
  }
},
{
  "type": "node",
  "id": 2206863850,
  "lat": 48.8783033,
  "lon": 2.4112825,
  "tags": {
    "amenity": "restaurant"
  }
},
{
  "type": "node",
  "id": 2206986623,
  "lat": 48.8248691,
  "lon": 2.3468871,
  "tags": {
    "amenity": "restaurant",
    "name": "Chez Papa",
    "website": "http://www.chezpapa13.com"
  }
},
{
  "type": "node",
  "id": 2206986636,
  "lat": 48.8250908,
  "lon": 2.3464880,
  "tags": {
    "addr:housenumber": "72",
    "addr:postcode": "75013",
    "addr:street": "Rue Barrault",
    "amenity": "restaurant",
    "name": "La Choubière"
  }
},
{
  "type": "node",
  "id": 2207009751,
  "lat": 48.8237982,
  "lon": 2.3450583,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Saveurs d\'Himalaya"
  }
},
{
  "type": "node",
  "id": 2207032831,
  "lat": 48.8230883,
  "lon": 2.3447901,
  "tags": {
    "addr:housenumber": "29",
    "addr:postcode": "75013",
    "addr:street": "Rue des Orchidées",
    "amenity": "restaurant",
    "cuisine": "polish",
    "name": "L\'Orchidée",
    "url": "http://www.716-food.com/2010/11/lorchidee-paris-75013.html"
  }
},
{
  "type": "node",
  "id": 2207032844,
  "lat": 48.8237048,
  "lon": 2.3451996,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Sun\'s"
  }
},
{
  "type": "node",
  "id": 2207051517,
  "lat": 48.8219312,
  "lon": 2.3422877,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Casa di Cervaro"
  }
},
{
  "type": "node",
  "id": 2207088674,
  "lat": 48.8240226,
  "lon": 2.3413467,
  "tags": {
    "amenity": "bar",
    "name": "La Brigandine"
  }
},
{
  "type": "node",
  "id": 2207088690,
  "lat": 48.8247674,
  "lon": 2.3413234,
  "tags": {
    "amenity": "cafe",
    "name": "Le Sauldre"
  }
},
{
  "type": "node",
  "id": 2207095060,
  "lat": 48.8248954,
  "lon": 2.3414221,
  "tags": {
    "amenity": "bar",
    "name": "Les Mains d\'Or"
  }
},
{
  "type": "node",
  "id": 2207102093,
  "lat": 48.8645296,
  "lon": 2.3999995,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Ayama",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2207102095,
  "lat": 48.8653038,
  "lon": 2.3983748,
  "tags": {
    "amenity": "cafe",
    "name": "Bar du Métro",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2207102098,
  "lat": 48.8664565,
  "lon": 2.3996388,
  "tags": {
    "amenity": "cafe",
    "name": "Chantefable",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2207102099,
  "lat": 48.8647748,
  "lon": 2.3993182,
  "tags": {
    "amenity": "cafe",
    "name": "Charlotte",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2207102100,
  "lat": 48.8643290,
  "lon": 2.3977966,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Chez Lillo",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2207102103,
  "lat": 48.8655701,
  "lon": 2.3988667,
  "tags": {
    "amenity": "cafe",
    "name": "Edelweiss",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2207102109,
  "lat": 48.8650490,
  "lon": 2.3975315,
  "tags": {
    "amenity": "cafe",
    "name": "Le Houblon du Vin ème",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2207102119,
  "lat": 48.8641688,
  "lon": 2.3976584,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2207102121,
  "lat": 48.8642835,
  "lon": 2.3981370,
  "tags": {
    "amenity": "cafe",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2207102167,
  "lat": 48.8650741,
  "lon": 2.3972853,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2207469225,
  "lat": 48.8821571,
  "lon": 2.3281764,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "vietnamese",
    "name": "Pho 20"
  }
},
{
  "type": "node",
  "id": 2207879146,
  "lat": 48.8333333,
  "lon": 2.3556520,
  "tags": {
    "addr:housenumber": "11",
    "addr:postcode": "75013",
    "addr:street": "Rue Primatice",
    "amenity": "restaurant",
    "cuisine": "sushi",
    "name": "L et G Sushi"
  }
},
{
  "type": "node",
  "id": 2210579328,
  "lat": 48.8192916,
  "lon": 2.3029814,
  "tags": {
    "amenity": "pub",
    "name": "La Rose des Sables",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2211156872,
  "lat": 48.8456693,
  "lon": 2.4284217,
  "tags": {
    "amenity": "cafe",
    "name": "Le Bérault",
    "tobacco": "yes",
    "wheelchair": "yes"
  }
},
{
  "type": "node",
  "id": 2211157045,
  "lat": 48.8456998,
  "lon": 2.4282037,
  "tags": {
    "amenity": "cafe",
    "name": "Le Cerf"
  }
},
{
  "type": "node",
  "id": 2211556498,
  "lat": 48.8574202,
  "lon": 2.3495185,
  "tags": {
    "amenity": "cafe",
    "name": "Café\'In"
  }
},
{
  "type": "node",
  "id": 2211556505,
  "lat": 48.8583089,
  "lon": 2.3478780,
  "tags": {
    "amenity": "cafe",
    "name": "Le Chat Noir",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 2211775818,
  "lat": 48.8661899,
  "lon": 2.3718762,
  "tags": {
    "addr:housenumber": "42",
    "addr:street": "Rue Jean-Pierre Timbaud",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Jeanne A",
    "opening_hours": "Mo, Th-Su 10:30-22:30",
    "phone": "01 43 55 09 49",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2011"
  }
},
{
  "type": "node",
  "id": 2213842106,
  "lat": 48.8215741,
  "lon": 2.3044405,
  "tags": {
    "amenity": "pub",
    "name": "La Divette de Malakoff",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2213842109,
  "lat": 48.8218241,
  "lon": 2.2996401,
  "tags": {
    "amenity": "pub",
    "name": "Le Pareloup",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2213842113,
  "lat": 48.8220777,
  "lon": 2.3037435,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "armenian",
    "name": "Nostalgie"
  }
},
{
  "type": "node",
  "id": 2214644579,
  "lat": 48.9034044,
  "lon": 2.3142398,
  "tags": {
    "addr:housenumber": "9",
    "addr:street": "Rue Madame de Sanzillon",
    "amenity": "restaurant",
    "name": "Giuliano",
    "phone": "01.47.37.12.96"
  }
},
{
  "type": "node",
  "id": 2216313788,
  "lat": 48.8242263,
  "lon": 2.3040953,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Piano Fou",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2217434289,
  "lat": 48.8226287,
  "lon": 2.3606739,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "thai",
    "name": "Thaï Yim"
  }
},
{
  "type": "node",
  "id": 2217434309,
  "lat": 48.8226746,
  "lon": 2.3608366,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "vietnamese",
    "name": "Dông Tâm"
  }
},
{
  "type": "node",
  "id": 2217434316,
  "lat": 48.8226533,
  "lon": 2.3607500,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Fuku Sushi"
  }
},
{
  "type": "node",
  "id": 2217450568,
  "lat": 48.8229131,
  "lon": 2.3618148,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "vietnamese",
    "name": "Phở Hủ Tíu"
  }
},
{
  "type": "node",
  "id": 2217454641,
  "lat": 48.8231151,
  "lon": 2.3621098,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Fleurs de Mai"
  }
},
{
  "type": "node",
  "id": 2217482599,
  "lat": 48.8209801,
  "lon": 2.3644246,
  "tags": {
    "amenity": "restaurant",
    "name": "Piment Thai",
    "source": "local Knowledge"
  }
},
{
  "type": "node",
  "id": 2217546292,
  "lat": 48.8243498,
  "lon": 2.3621084,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Villa d\'Or"
  }
},
{
  "type": "node",
  "id": 2217546319,
  "lat": 48.8244278,
  "lon": 2.3621405,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "vietnamese",
    "name": "My Canh"
  }
},
{
  "type": "node",
  "id": 2217546337,
  "lat": 48.8244847,
  "lon": 2.3621306,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Tian Tian Wang"
  }
},
{
  "type": "node",
  "id": 2217546345,
  "lat": 48.8245544,
  "lon": 2.3621635,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "vietnamese",
    "name": "Saigon Moi"
  }
},
{
  "type": "node",
  "id": 2217575852,
  "lat": 48.8239970,
  "lon": 2.3618533,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Palace de Chine",
    "note": "Buffet à volonté"
  }
},
{
  "type": "node",
  "id": 2217593186,
  "lat": 48.8245778,
  "lon": 2.3614015,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "vietnamese",
    "name": "L\'Indochine",
    "website": "http://www.indochine-paris.com"
  }
},
{
  "type": "node",
  "id": 2217593190,
  "lat": 48.8241677,
  "lon": 2.3617205,
  "tags": {
    "amenity": "cafe",
    "name": "Bar 2000"
  }
},
{
  "type": "node",
  "id": 2217630182,
  "lat": 48.8250784,
  "lon": 2.3610028,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Asian Grill",
    "note": "Buffet à volonté"
  }
},
{
  "type": "node",
  "id": 2217630185,
  "lat": 48.8247279,
  "lon": 2.3612848,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "thai",
    "name": "Basilic & Spice",
    "website": "http://www.basilicspice.com"
  }
},
{
  "type": "node",
  "id": 2217630196,
  "lat": 48.8249548,
  "lon": 2.3611007,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "thai",
    "name": "Mali"
  }
},
{
  "type": "node",
  "id": 2217649179,
  "lat": 48.8257664,
  "lon": 2.3605166,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Le Lotus"
  }
},
{
  "type": "node",
  "id": 2217649188,
  "lat": 48.8257097,
  "lon": 2.3600718,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "vietnamese",
    "name": "Phở 99"
  }
},
{
  "type": "node",
  "id": 2217649189,
  "lat": 48.8253582,
  "lon": 2.3607812,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "vietnamese",
    "name": "La Caravelle Saigon"
  }
},
{
  "type": "node",
  "id": 2217649191,
  "lat": 48.8254715,
  "lon": 2.3606886,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Au Village de Choisy",
    "note": "Buffet à volonté"
  }
},
{
  "type": "node",
  "id": 2217679705,
  "lat": 48.8256982,
  "lon": 2.3612634,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "vietnamese",
    "name": "Saigon"
  }
},
{
  "type": "node",
  "id": 2217679707,
  "lat": 48.8255348,
  "lon": 2.3609777,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "malaysian",
    "name": "Le Sarawan",
    "website": "http://www.lesarawan.com"
  }
},
{
  "type": "node",
  "id": 2217679711,
  "lat": 48.8256127,
  "lon": 2.3614328,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "thai",
    "name": "Lao Lane Xang",
    "opening_hours": "Mo-Tu 15:00-23:00; Th-Su 15:00-23:00",
    "phone": "01 58 89 00 00"
  }
},
{
  "type": "node",
  "id": 2217679712,
  "lat": 48.8254727,
  "lon": 2.3611014,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "vietnamese",
    "name": "Piment d\'Or"
  }
},
{
  "type": "node",
  "id": 2217679718,
  "lat": 48.8255281,
  "lon": 2.3616006,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "thai",
    "name": "La Mangue Verte"
  }
},
{
  "type": "node",
  "id": 2217679723,
  "lat": 48.8254308,
  "lon": 2.3611848,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Trésor d\'Asie"
  }
},
{
  "type": "node",
  "id": 2217685393,
  "lat": 48.8253116,
  "lon": 2.3614221,
  "tags": {
    "amenity": "restaurant",
    "name": "Roammit"
  }
},
{
  "type": "node",
  "id": 2217707729,
  "lat": 48.8249807,
  "lon": 2.3620807,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "thai",
    "name": "Thai Royal"
  }
},
{
  "type": "node",
  "id": 2217707757,
  "lat": 48.8250256,
  "lon": 2.3619913,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "vietnamese",
    "name": "Phơ Mùi"
  }
},
{
  "type": "node",
  "id": 2219642881,
  "lat": 48.8213603,
  "lon": 2.3347178,
  "tags": {
    "addr:housenumber": "28",
    "addr:postcode": "75014",
    "addr:street": "Boulevard Jourdan",
    "amenity": "restaurant",
    "name": "Le chalet du Parc"
  }
},
{
  "type": "node",
  "id": 2219642886,
  "lat": 48.8216005,
  "lon": 2.3337522,
  "tags": {
    "addr:housenumber": "32",
    "addr:postcode": "75014",
    "addr:street": "Boulevard Jourdan",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Bistrot 32"
  }
},
{
  "type": "node",
  "id": 2219775777,
  "lat": 48.8232060,
  "lon": 2.3266224,
  "tags": {
    "addr:housenumber": "104",
    "addr:postcode": "75014",
    "addr:street": "Boulevard Jourdan",
    "amenity": "cafe",
    "name": "Le Corentin"
  }
},
{
  "type": "node",
  "id": 2219805354,
  "lat": 48.8232523,
  "lon": 2.3263756,
  "tags": {
    "addr:housenumber": "106",
    "addr:postcode": "75014",
    "addr:street": "Boulevard Jourdan",
    "amenity": "cafe",
    "name": "Paris éclair"
  }
},
{
  "type": "node",
  "id": 2219805359,
  "lat": 48.8233935,
  "lon": 2.3258237,
  "tags": {
    "addr:housenumber": "129",
    "addr:postcode": "75014",
    "addr:street": "Avenue du Général Leclerc",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Paris Orléans",
    "website": "http://www.parisorleans.fr"
  }
},
{
  "type": "node",
  "id": 2220132757,
  "lat": 48.8250441,
  "lon": 2.3183751,
  "tags": {
    "addr:housenumber": "135",
    "addr:postcode": "75014",
    "addr:street": "Boulevard Brune",
    "amenity": "cafe",
    "name": "Paris Brune"
  }
},
{
  "type": "node",
  "id": 2225340694,
  "lat": 48.8120345,
  "lon": 2.3912341,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "franco-oriental",
    "name": "Auberge de l\'Europe"
  }
},
{
  "type": "node",
  "id": 2229130616,
  "lat": 48.8387916,
  "lon": 2.3812873,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "1",
    "addr:postcode": "75012",
    "addr:street": "Rue Corbineau",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Ginza"
  }
},
{
  "type": "node",
  "id": 2231063581,
  "lat": 48.8328265,
  "lon": 2.3361398,
  "tags": {
    "amenity": "restaurant",
    "name": "ECIR"
  }
},
{
  "type": "node",
  "id": 2231087192,
  "lat": 48.8295986,
  "lon": 2.3338514,
  "tags": {
    "amenity": "bar"
  }
},
{
  "type": "node",
  "id": 2232018459,
  "lat": 48.8334329,
  "lon": 2.3320275,
  "tags": {
    "amenity": "restaurant",
    "name": "Indiana Café",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2234105653,
  "lat": 48.8664178,
  "lon": 2.3522546,
  "tags": {
    "addr:housenumber": "105",
    "addr:postcode": "75002",
    "addr:street": "Boulevard de Sébastopol",
    "amenity": "cafe",
    "name": "Le Capitole"
  }
},
{
  "type": "node",
  "id": 2234105655,
  "lat": 48.8674094,
  "lon": 2.3516806,
  "tags": {
    "addr:housenumber": "204",
    "addr:postcode": "75002",
    "addr:street": "Rue Saint-Denis",
    "amenity": "cafe",
    "name": "Le Select"
  }
},
{
  "type": "node",
  "id": 2234720465,
  "lat": 48.8686121,
  "lon": 2.3859914,
  "tags": {
    "amenity": "pub",
    "name": "Demain c\'est loin"
  }
},
{
  "type": "node",
  "id": 2239348572,
  "lat": 48.8367931,
  "lon": 2.2976163,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Les saveurs de Shanghai"
  }
},
{
  "type": "node",
  "id": 2239362634,
  "lat": 48.8364982,
  "lon": 2.2975868,
  "tags": {
    "amenity": "bar",
    "name": "Mini Bar"
  }
},
{
  "type": "node",
  "id": 2239372967,
  "lat": 48.8353295,
  "lon": 2.3023316,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Traiteur"
  }
},
{
  "type": "node",
  "id": 2239374813,
  "lat": 48.8352818,
  "lon": 2.3025475,
  "tags": {
    "amenity": "bar",
    "name": "Tasco Café"
  }
},
{
  "type": "node",
  "id": 2239380278,
  "lat": 48.8355625,
  "lon": 2.3019038,
  "tags": {
    "amenity": "bar",
    "name": "Le relais Convention",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2239397378,
  "lat": 48.8358980,
  "lon": 2.3007035,
  "tags": {
    "amenity": "bar",
    "name": "Café du marché"
  }
},
{
  "type": "node",
  "id": 2242819125,
  "lat": 48.8820461,
  "lon": 2.3336672,
  "tags": {
    "amenity": "cafe",
    "name": "Le Fontania"
  }
},
{
  "type": "node",
  "id": 2244505470,
  "lat": 48.8536438,
  "lon": 2.3402017,
  "tags": {
    "addr:housenumber": "28",
    "addr:street": "Rue des Grands Augustins",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Roger la Grenouille"
  }
},
{
  "type": "node",
  "id": 2244508787,
  "lat": 48.8591372,
  "lon": 2.3430272,
  "tags": {
    "addr:housenumber": "1",
    "addr:street": "Rue du Pont Neuf",
    "amenity": "restaurant",
    "cuisine": "international",
    "name": "Kong",
    "source": "01 40 39 09 00"
  }
},
{
  "type": "node",
  "id": 2244521534,
  "lat": 48.8526953,
  "lon": 2.3470942,
  "tags": {
    "addr:housenumber": "39",
    "addr:street": "Rue de la Bûcherie",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Petit Chatelet",
    "source": "+33 (0)146335340",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 2244545983,
  "lat": 48.8622322,
  "lon": 2.3573881,
  "tags": {
    "addr:housenumber": "94",
    "addr:street": "Rue du Temple",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Strada Café",
    "source": "+33 1 44 61 09 28 ‎"
  }
},
{
  "type": "node",
  "id": 2244554034,
  "lat": 48.8597184,
  "lon": 2.4028281,
  "tags": {
    "addr:housename": "Mama Shelter Hotel",
    "addr:housenumber": "109",
    "addr:street": "Rue de Bagnolet",
    "amenity": "bar",
    "name": "Mama Shelter Bar",
    "source": "+33 1 43 48 48 48",
    "website": "http://www.mamashelter.com/de/paris/restaurants/bar/"
  }
},
{
  "type": "node",
  "id": 2244578060,
  "lat": 48.8608921,
  "lon": 2.3439350,
  "tags": {
    "addr:housenumber": "16",
    "addr:street": "Rue du Roule",
    "amenity": "bar",
    "name": "N\'Importe Quoi",
    "source": "+33 1 40 26 29 71",
    "website": "http://www.nimportequoi.fr/"
  }
},
{
  "type": "node",
  "id": 2244600614,
  "lat": 48.8581223,
  "lon": 2.3362437,
  "tags": {
    "addr:street": "Quai Malaquais",
    "amenity": "bar",
    "name": "La Balle au Bond",
    "website": "http://www.laballeaubond.fr/Bienvenue.html"
  }
},
{
  "type": "node",
  "id": 2244615695,
  "lat": 48.8578089,
  "lon": 2.3606384,
  "tags": {
    "addr:housenumber": "24",
    "addr:street": "Rue des Francs Bourgeois",
    "amenity": "cafe",
    "cuisine": "french",
    "name": "Crêperie Suzette",
    "phone": "+33 1 42 72 46 16",
    "source": "survey 2013",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 2245381991,
  "lat": 48.8902743,
  "lon": 2.3602888,
  "tags": {
    "amenity": "pub",
    "cuisine": "french",
    "name": "Au Roi du Café",
    "phone": "0146074110",
    "restaurant": "yes"
  }
},
{
  "type": "node",
  "id": 2245451406,
  "lat": 48.8890315,
  "lon": 2.3624318,
  "tags": {
    "amenity": "restaurant",
    "name": "Paris Pajol",
    "website": "https://www.facebook.com/pages/Paris-Pajol-Bar-Restaurant/50837276428"
  }
},
{
  "type": "node",
  "id": 2245452103,
  "lat": 48.8889739,
  "lon": 2.3623979,
  "tags": {
    "amenity": "pub",
    "name": "Paris Pajol",
    "website": "https://www.facebook.com/pages/Paris-Pajol-Bar-Restaurant/50837276428"
  }
},
{
  "type": "node",
  "id": 2247185897,
  "lat": 48.8906110,
  "lon": 2.3613962,
  "tags": {
    "amenity": "pub",
    "cuisine": "french",
    "name": "Brasserie L\'Olive",
    "restaurant": "yes"
  }
},
{
  "type": "node",
  "id": 2247185908,
  "lat": 48.8899355,
  "lon": 2.3618064,
  "tags": {
    "amenity": "pub",
    "name": "Le Blanco",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 2247185911,
  "lat": 48.8911052,
  "lon": 2.3611596,
  "tags": {
    "amenity": "pub",
    "name": "Le Commerce"
  }
},
{
  "type": "node",
  "id": 2247185914,
  "lat": 48.8908415,
  "lon": 2.3611676,
  "tags": {
    "amenity": "pub",
    "name": "Le Monde de Léa",
    "restaurant": "yes"
  }
},
{
  "type": "node",
  "id": 2247185920,
  "lat": 48.8909716,
  "lon": 2.3611648,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Paradis de la Crêpe",
    "takeaway": "yes"
  }
},
{
  "type": "node",
  "id": 2252694199,
  "lat": 48.8250589,
  "lon": 2.3163847,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Chez Pierrot",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 2252705872,
  "lat": 48.8256612,
  "lon": 2.3136542,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "L\'auberge calabraise",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 2252714363,
  "lat": 48.8262642,
  "lon": 2.3127271,
  "tags": {
    "addr:housenumber": "77",
    "addr:postcode": "75014",
    "addr:street": "Boulevard Brune",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Porte Didot",
    "website": "http://www.laportedidot.fr"
  }
},
{
  "type": "node",
  "id": 2252720273,
  "lat": 48.8263278,
  "lon": 2.3124589,
  "tags": {
    "addr:housenumber": "77",
    "addr:postcode": "75014",
    "addr:street": "Boulevard Brune",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Tagawa"
  }
},
{
  "type": "node",
  "id": 2252798325,
  "lat": 48.8267445,
  "lon": 2.3105546,
  "tags": {
    "addr:housenumber": "59",
    "addr:postcode": "75014",
    "addr:street": "Boulevard Brune",
    "amenity": "cafe",
    "name": "Le Paris Sud"
  }
},
{
  "type": "node",
  "id": 2252802571,
  "lat": 48.8269282,
  "lon": 2.3097177,
  "tags": {
    "addr:housenumber": "49",
    "addr:postcode": "75014",
    "addr:street": "Boulevard Brune",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Au Stayer"
  }
},
{
  "type": "node",
  "id": 2252867215,
  "lat": 48.8274067,
  "lon": 2.3053430,
  "tags": {
    "addr:housenumber": "3",
    "addr:postcode": "75014",
    "addr:street": "Place de la Porte de Vanves",
    "amenity": "cafe",
    "cuisine": "french",
    "name": "Le Vanves"
  }
},
{
  "type": "node",
  "id": 2252867235,
  "lat": 48.8264426,
  "lon": 2.3130329,
  "tags": {
    "addr:housenumber": "108",
    "addr:postcode": "75014",
    "addr:street": "Rue Didot",
    "amenity": "cafe",
    "name": "Le Maryland"
  }
},
{
  "type": "node",
  "id": 2254138883,
  "lat": 48.8533715,
  "lon": 2.3422551,
  "tags": {
    "amenity": "restaurant",
    "name": "Cafe Latin"
  }
},
{
  "type": "node",
  "id": 2255824678,
  "lat": 48.8372157,
  "lon": 2.2784595,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "106",
    "addr:postcode": "75015",
    "addr:street": "Rue Balard",
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Pizza Boticelli"
  }
},
{
  "type": "node",
  "id": 2255830425,
  "lat": 48.8373662,
  "lon": 2.2784119,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "104",
    "addr:postcode": "75015",
    "addr:street": "Rue Balard",
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Shanghaï"
  }
},
{
  "type": "node",
  "id": 2255837703,
  "lat": 48.8374744,
  "lon": 2.2783898,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "102",
    "addr:postcode": "75015",
    "addr:street": "Rue Balard",
    "amenity": "restaurant",
    "cuisine": "lebanese",
    "name": "Zahlé"
  }
},
{
  "type": "node",
  "id": 2255849448,
  "lat": 48.8377489,
  "lon": 2.2783295,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "96",
    "addr:postcode": "75015",
    "addr:street": "Rue Balard",
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Au palais de joie"
  }
},
{
  "type": "node",
  "id": 2255852392,
  "lat": 48.8378835,
  "lon": 2.2783147,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "96",
    "addr:postcode": "75015",
    "addr:street": "Rue Balard",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Petit Balard"
  }
},
{
  "type": "node",
  "id": 2255903942,
  "lat": 48.8409791,
  "lon": 2.2776487,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "56",
    "addr:postcode": "75015",
    "addr:street": "Rue Balard",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Fiori"
  }
},
{
  "type": "node",
  "id": 2255912347,
  "lat": 48.8415966,
  "lon": 2.2775907,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "46",
    "addr:postcode": "75015",
    "addr:street": "Rue Balard",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "La Grenouille bleue"
  }
},
{
  "type": "node",
  "id": 2255912380,
  "lat": 48.8417106,
  "lon": 2.2775691,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "46",
    "addr:postcode": "75015",
    "addr:street": "Rue Balard",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "La Cantine"
  }
},
{
  "type": "node",
  "id": 2255926623,
  "lat": 48.8430969,
  "lon": 2.2772758,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:postcode": "75015",
    "addr:street": "Rue Balard",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Ogimi"
  }
},
{
  "type": "node",
  "id": 2256024148,
  "lat": 48.8264842,
  "lon": 2.3599429,
  "tags": {
    "amenity": "restaurant",
    "name": "L\'Age d\'Or"
  }
},
{
  "type": "node",
  "id": 2256032137,
  "lat": 48.8286115,
  "lon": 2.3021616,
  "tags": {
    "amenity": "cafe",
    "name": "Le Prestige"
  }
},
{
  "type": "node",
  "id": 2256034335,
  "lat": 48.8313589,
  "lon": 2.2922508,
  "tags": {
    "addr:housenumber": "55",
    "addr:postcode": "75015",
    "addr:street": "Boulevard Lefebvre",
    "amenity": "restaurant",
    "cuisine": "korean",
    "name": "Korean barbecue"
  }
},
{
  "type": "node",
  "id": 2256034341,
  "lat": 48.8312406,
  "lon": 2.2923850,
  "tags": {
    "addr:housenumber": "57",
    "addr:postcode": "75015",
    "addr:street": "Boulevard Lefebvre",
    "amenity": "restaurant",
    "cuisine": "lebanese",
    "name": "Al Fawar",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 2256044695,
  "lat": 48.8313819,
  "lon": 2.2919236,
  "tags": {
    "addr:housenumber": "51",
    "addr:postcode": "75015",
    "addr:street": "Boulevard Lefebvre",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "L\'Exposition",
    "note": "4B l\'esposition"
  }
},
{
  "type": "node",
  "id": 2256051135,
  "lat": 48.8318056,
  "lon": 2.2909044,
  "tags": {
    "addr:housenumber": "35",
    "addr:postcode": "75015",
    "addr:street": "Boulevard Lefebvre",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "L\'Atelier du Parc",
    "website": "http://www.atelierduparc.fr"
  }
},
{
  "type": "node",
  "id": 2256068020,
  "lat": 48.8321693,
  "lon": 2.2900809,
  "tags": {
    "addr:housenumber": "19",
    "addr:postcode": "75015",
    "addr:street": "Boulevard Lefebvre",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "La terrasse du Parc"
  }
},
{
  "type": "node",
  "id": 2256094434,
  "lat": 48.8333911,
  "lon": 2.2872190,
  "tags": {
    "addr:housenumber": "57",
    "addr:postcode": "75015",
    "addr:street": "Boulevard Victor",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Trattoria Silviano"
  }
},
{
  "type": "node",
  "id": 2256094443,
  "lat": 48.8333311,
  "lon": 2.2873692,
  "tags": {
    "addr:housenumber": "59",
    "addr:postcode": "75015",
    "addr:street": "Boulevard Victor",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le pavé de Versailles",
    "website": "http://www.restaurant-pave-versailles.fr"
  }
},
{
  "type": "node",
  "id": 2256109228,
  "lat": 48.8341344,
  "lon": 2.2853656,
  "tags": {
    "addr:housenumber": "37",
    "addr:postcode": "75015",
    "addr:street": "Boulevard Victor",
    "amenity": "cafe",
    "cuisine": "french",
    "name": "Les aviateurs"
  }
},
{
  "type": "node",
  "id": 2256109241,
  "lat": 48.8334759,
  "lon": 2.2870071,
  "tags": {
    "addr:housenumber": "55",
    "addr:postcode": "75015",
    "addr:street": "Boulevard Victor",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "L\'Atelier Versailles"
  }
},
{
  "type": "node",
  "id": 2256128286,
  "lat": 48.8347594,
  "lon": 2.2843303,
  "tags": {
    "addr:housenumber": "12",
    "addr:postcode": "75015",
    "addr:street": "Square Desnouettes",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Seven deuce"
  }
},
{
  "type": "node",
  "id": 2256128289,
  "lat": 48.8344487,
  "lon": 2.2844456,
  "tags": {
    "addr:housenumber": "27",
    "addr:postcode": "75015",
    "addr:street": "Boulevard Victor",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Osaka"
  }
},
{
  "type": "node",
  "id": 2256128294,
  "lat": 48.8343110,
  "lon": 2.2848131,
  "tags": {
    "addr:housenumber": "31",
    "addr:postcode": "75015",
    "addr:street": "Boulevard Victor",
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Bistrot dei fratelli"
  }
},
{
  "type": "node",
  "id": 2256140808,
  "lat": 48.8350242,
  "lon": 2.2828765,
  "tags": {
    "addr:housenumber": "15",
    "addr:postcode": "75015",
    "addr:street": "Boulevard Victor",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Sacha"
  }
},
{
  "type": "node",
  "id": 2256140823,
  "lat": 48.8348954,
  "lon": 2.2832036,
  "tags": {
    "addr:housenumber": "17",
    "addr:postcode": "75015",
    "addr:street": "Boulevard Victor",
    "amenity": "restaurant",
    "cuisine": "chinese",
    "name": "Délices d\'Asie",
    "note": "buffet à volonté"
  }
},
{
  "type": "node",
  "id": 2256148298,
  "lat": 48.8353261,
  "lon": 2.2818948,
  "tags": {
    "addr:housenumber": "5",
    "addr:postcode": "75015",
    "addr:street": "Boulevard Victor",
    "amenity": "cafe",
    "cuisine": "french",
    "name": "Bar de l\'aviation",
    "website": "http://bardelaviation.com"
  }
},
{
  "type": "node",
  "id": 2256156628,
  "lat": 48.8305873,
  "lon": 2.2926022,
  "tags": {
    "addr:housenumber": "38",
    "addr:postcode": "75015",
    "addr:street": "Boulevard Lefebvre",
    "amenity": "cafe",
    "cuisine": "french",
    "name": "Le 15ième boulevard"
  }
},
{
  "type": "node",
  "id": 2256214690,
  "lat": 48.8913537,
  "lon": 2.3623037,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Hanouman",
    "opening_hours": "Mo-Su 12:00-14:30;19:00-00:30",
    "phone": "+33 1 46072579",
    "takeaway": "yes"
  }
},
{
  "type": "node",
  "id": 2256214691,
  "lat": 48.8912306,
  "lon": 2.3619236,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "New Locomotive"
  }
},
{
  "type": "node",
  "id": 2256214694,
  "lat": 48.8913500,
  "lon": 2.3613552,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "New Thai San",
    "opening_hours": "Mo-Su 09:00-23:00",
    "phone": "0142092318",
    "website": "https://fr-fr.facebook.com/newthaisan"
  }
},
{
  "type": "node",
  "id": 2258450453,
  "lat": 48.8901550,
  "lon": 2.3611961,
  "tags": {
    "amenity": "pub",
    "name": "Café de la Poste"
  }
},
{
  "type": "node",
  "id": 2258450459,
  "lat": 48.8900693,
  "lon": 2.3622119,
  "tags": {
    "amenity": "pub",
    "name": "Populettes",
    "phone": "0980374147",
    "website": "https://www.facebook.com/populettes"
  }
},
{
  "type": "node",
  "id": 2258795700,
  "lat": 48.8309240,
  "lon": 2.2930315,
  "tags": {
    "addr:housenumber": "63",
    "addr:postcode": "75015",
    "addr:street": "Boulevard Lefebvre",
    "amenity": "restaurant",
    "cuisine": "sushi",
    "name": "Wakoya"
  }
},
{
  "type": "node",
  "id": 2258835057,
  "lat": 48.8300482,
  "lon": 2.2959525,
  "tags": {
    "addr:housenumber": "61",
    "addr:postcode": "75015",
    "addr:street": "Rue de Dantzig",
    "amenity": "cafe",
    "name": "Le tramway"
  }
},
{
  "type": "node",
  "id": 2258852617,
  "lat": 48.8288796,
  "lon": 2.2990421,
  "tags": {
    "addr:housenumber": "82",
    "addr:postcode": "75015",
    "addr:street": "Boulevard Lefebvre",
    "amenity": "restaurant",
    "cuisine": "moroccan",
    "name": "Le caroubier",
    "website": "http://restaurant-lecaroubier.com"
  }
},
{
  "type": "node",
  "id": 2258859714,
  "lat": 48.8286324,
  "lon": 2.3002358,
  "tags": {
    "addr:housenumber": "90",
    "addr:postcode": "75015",
    "addr:street": "Boulevard Lefebvre",
    "amenity": "cafe",
    "name": "Le Brancion",
    "wheelchair": "no"
  }
},
{
  "type": "node",
  "id": 2262414237,
  "lat": 48.8684959,
  "lon": 2.3702516,
  "tags": {
    "amenity": "restaurant",
    "name": "Les Fernandises"
  }
},
{
  "type": "node",
  "id": 2264697450,
  "lat": 48.8435115,
  "lon": 2.2940634,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Wako"
  }
},
{
  "type": "node",
  "id": 2265964339,
  "lat": 48.8427979,
  "lon": 2.2601266,
  "tags": {
    "amenity": "bar",
    "name": "L\'Empire"
  }
},
{
  "type": "node",
  "id": 2265998704,
  "lat": 48.8394583,
  "lon": 2.2629179,
  "tags": {
    "amenity": "bar",
    "name": "Le 191"
  }
},
{
  "type": "node",
  "id": 2267078074,
  "lat": 48.8904554,
  "lon": 2.3613786,
  "tags": {
    "amenity": "restaurant",
    "name": "Eden Flower"
  }
},
{
  "type": "node",
  "id": 2267552776,
  "lat": 48.8316365,
  "lon": 2.2921115,
  "tags": {
    "addr:housenumber": "6",
    "addr:postcode": "75015",
    "addr:street": "Rue Lefebvre",
    "amenity": "restaurant",
    "cuisine": "peruvian",
    "name": "El Chalan",
    "website": "http://restaurant-elchalan.com"
  }
},
{
  "type": "node",
  "id": 2267565745,
  "lat": 48.8337393,
  "lon": 2.2896868,
  "tags": {
    "addr:housenumber": "372",
    "addr:postcode": "75015",
    "addr:street": "Rue de Vaugirard",
    "amenity": "cafe",
    "name": "La Paloma cafe"
  }
},
{
  "type": "node",
  "id": 2267674509,
  "lat": 48.8437437,
  "lon": 2.2775524,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "27",
    "addr:postcode": "75015",
    "addr:street": "Rue Balard",
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Pizza Nella"
  }
},
{
  "type": "node",
  "id": 2267747713,
  "lat": 48.8426810,
  "lon": 2.2779896,
  "tags": {
    "addr:housenumber": "11",
    "addr:postcode": "75015",
    "addr:street": "Rue André Lefebvre",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Crêperie Balard",
    "website": "http://creperiebalard.com"
  }
},
{
  "type": "node",
  "id": 2267752285,
  "lat": 48.8426051,
  "lon": 2.2779253,
  "tags": {
    "addr:housenumber": "11",
    "addr:postcode": "75015",
    "addr:street": "Rue André Lefebvre",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Al Gusto della Pasta"
  }
},
{
  "type": "node",
  "id": 2267759246,
  "lat": 48.8418037,
  "lon": 2.2778904,
  "tags": {
    "addr:housenumber": "47",
    "addr:postcode": "75015",
    "addr:street": "Rue Balard",
    "amenity": "restaurant",
    "name": "R.Wan"
  }
},
{
  "type": "node",
  "id": 2267759251,
  "lat": 48.8402838,
  "lon": 2.2782445,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "67",
    "addr:postcode": "75015",
    "addr:street": "Rue Balard",
    "amenity": "cafe",
    "name": "Le Bistrot du Parc"
  }
},
{
  "type": "node",
  "id": 2267759256,
  "lat": 48.8416325,
  "lon": 2.2779601,
  "tags": {
    "addr:city": "Paris",
    "addr:country": "FR",
    "addr:housenumber": "49",
    "addr:postcode": "75015",
    "addr:street": "Rue Balard",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le pot de vin",
    "website": "http://lepotdevin.fr"
  }
},
{
  "type": "node",
  "id": 2268459863,
  "lat": 48.8900145,
  "lon": 2.3627866,
  "tags": {
    "amenity": "pub",
    "name": "Le Riquet",
    "restaurant": "yes"
  }
},
{
  "type": "node",
  "id": 2268459870,
  "lat": 48.8913601,
  "lon": 2.3631469,
  "tags": {
    "amenity": "pub",
    "name": "Triangle d\'or"
  }
},
{
  "type": "node",
  "id": 2268459882,
  "lat": 48.8899105,
  "lon": 2.3620699,
  "tags": {
    "alt_name": "Au Bon Couscous",
    "amenity": "pub",
    "name": "Le Bon Couscous"
  }
},
{
  "type": "node",
  "id": 2268459926,
  "lat": 48.8911316,
  "lon": 2.3641074,
  "tags": {
    "amenity": "restaurant",
    "name": "Le New Style"
  }
},
{
  "type": "node",
  "id": 2268459927,
  "lat": 48.8911480,
  "lon": 2.3638611,
  "tags": {
    "alt_name": "Le Djenne",
    "amenity": "restaurant",
    "name": "Le Djenne II"
  }
},
{
  "type": "node",
  "id": 2268836966,
  "lat": 48.8277530,
  "lon": 2.3505091,
  "tags": {
    "addr:housenumber": "9",
    "addr:street": "Rue de la Butte aux Cailles",
    "amenity": "bar",
    "name": "Le Merle Moqueur",
    "source": "cadastre-dgi-fr source : Direction Générale des Impôts - Cadastre. Mise à jour : 2013"
  }
},
{
  "type": "node",
  "id": 2270094439,
  "lat": 48.8710452,
  "lon": 2.3583430,
  "tags": {
    "amenity": "restaurant",
    "name": "Allen\'s Market"
  }
},
{
  "type": "node",
  "id": 2270829888,
  "lat": 48.8816643,
  "lon": 2.3664685,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Wako",
    "opening_hours": "Mo-Sa 11:30-15:00,18:00-23:00; Su 18:00-23:00",
    "phone": "0146070888",
    "website": "http://www.wako10.fr/"
  }
},
{
  "type": "node",
  "id": 2270829889,
  "lat": 48.8817430,
  "lon": 2.3657091,
  "tags": {
    "amenity": "pub"
  }
},
{
  "type": "node",
  "id": 2272758047,
  "lat": 48.8521711,
  "lon": 2.3714010,
  "tags": {
    "addr:housenumber": "29",
    "addr:postcode": "75012",
    "addr:street": "Rue de Charenton",
    "amenity": "restaurant",
    "cuisine": "sichuan",
    "name": "Les quatres Amis 那家小馆",
    "name:fr": "Les quatres Amis",
    "name:zh": "那家小馆",
    "name:zh_pinyin": "nà jiā xiǎo guǎn",
    "phone": "+33 9 82280917"
  }
},
{
  "type": "node",
  "id": 2273049357,
  "lat": 48.8240504,
  "lon": 2.3356831,
  "tags": {
    "amenity": "cafe",
    "name": "Bistrot Montsouris"
  }
},
{
  "type": "node",
  "id": 2273059038,
  "lat": 48.8240627,
  "lon": 2.3308903,
  "tags": {
    "addr:housenumber": "4",
    "addr:postcode": "75014",
    "addr:street": "Rue Beaunier",
    "amenity": "cafe",
    "name": "Le XIVème"
  }
},
{
  "type": "node",
  "id": 2273071262,
  "lat": 48.8240750,
  "lon": 2.3283368,
  "tags": {
    "addr:housenumber": "30",
    "addr:postcode": "75014",
    "addr:street": "Rue Paul Fort",
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Palais de Vandan"
  }
},
{
  "type": "node",
  "id": 2273071267,
  "lat": 48.8235152,
  "lon": 2.3304799,
  "tags": {
    "addr:housenumber": "1",
    "addr:postcode": "75014",
    "addr:street": "Rue Paul Fort",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Il Farniente",
    "note": "Il Far\' Niente",
    "website": "http://ilfarniente.com"
  }
},
{
  "type": "node",
  "id": 2273079448,
  "lat": 48.8241368,
  "lon": 2.3280257,
  "tags": {
    "addr:housenumber": "34",
    "addr:postcode": "75014",
    "addr:street": "Rue Paul Fort",
    "amenity": "cafe",
    "cuisine": "french",
    "name": "Le Paul Fort"
  }
},
{
  "type": "node",
  "id": 2273089736,
  "lat": 48.8244671,
  "lon": 2.3310137,
  "tags": {
    "addr:housenumber": "132",
    "addr:postcode": "75014",
    "addr:street": "Rue de la Tombe Issoire",
    "amenity": "cafe",
    "name": "Le Penalty"
  }
},
{
  "type": "node",
  "id": 2273112664,
  "lat": 48.8245642,
  "lon": 2.3282644,
  "tags": {
    "addr:postcode": "75014",
    "addr:street": "Rue Beaunier",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Lily Sushi"
  }
},
{
  "type": "node",
  "id": 2273127778,
  "lat": 48.8245147,
  "lon": 2.3285541,
  "tags": {
    "addr:housenumber": "55",
    "addr:postcode": "75014",
    "addr:street": "Rue du Père Corentin",
    "amenity": "cafe",
    "name": "Le St Laurent"
  }
},
{
  "type": "node",
  "id": 2273127780,
  "lat": 48.8248609,
  "lon": 2.3290503,
  "tags": {
    "addr:housenumber": "45",
    "addr:postcode": "75014",
    "addr:street": "Rue du Père Corentin",
    "amenity": "cafe",
    "cuisine": "french",
    "name": "Le numide"
  }
},
{
  "type": "node",
  "id": 2273205898,
  "lat": 48.8250198,
  "lon": 2.3200783,
  "tags": {
    "addr:housenumber": "68 bis",
    "addr:postcode": "75014",
    "addr:street": "Avenue Jean Moulin",
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Monteleone",
    "website": "http://www.restaurantmonteleone.com"
  }
},
{
  "type": "node",
  "id": 2273205901,
  "lat": 48.8249015,
  "lon": 2.3203760,
  "tags": {
    "addr:housenumber": "49",
    "addr:postcode": "75014",
    "addr:street": "Avenue Jean Moulin",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "La Régalade"
  }
},
{
  "type": "node",
  "id": 2273212661,
  "lat": 48.8372695,
  "lon": 2.2771628,
  "tags": {
    "addr:housenumber": "232",
    "addr:postcode": "75015",
    "addr:street": "Rue Saint-Charles",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le bistrot d\'André",
    "website": "http://lebistrotdandre.fr"
  }
},
{
  "type": "node",
  "id": 2273212662,
  "lat": 48.8378574,
  "lon": 2.2780721,
  "tags": {
    "addr:housenumber": "235",
    "addr:postcode": "75015",
    "addr:street": "Rue Saint-Charles",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Saitama Balard"
  }
},
{
  "type": "node",
  "id": 2273212664,
  "lat": 48.8377480,
  "lon": 2.2779702,
  "tags": {
    "addr:housenumber": "235",
    "addr:postcode": "75015",
    "addr:street": "Rue Saint-Charles",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Les gourmand disent..."
  }
},
{
  "type": "node",
  "id": 2273226200,
  "lat": 48.8432752,
  "lon": 2.2827955,
  "tags": {
    "addr:housenumber": "59",
    "addr:postcode": "75015",
    "addr:street": "Rue de la Convention",
    "amenity": "cafe",
    "name": "Le Mirabeau"
  }
},
{
  "type": "node",
  "id": 2273226201,
  "lat": 48.8431163,
  "lon": 2.2826694,
  "tags": {
    "addr:housenumber": "145",
    "addr:postcode": "75015",
    "addr:street": "Rue Saint-Charles",
    "amenity": "restaurant",
    "cuisine": "sushi",
    "name": "Eat sushi",
    "website": "http://www.eatsushi.fr"
  }
},
{
  "type": "node",
  "id": 2273232846,
  "lat": 48.8426097,
  "lon": 2.2818352,
  "tags": {
    "addr:housenumber": "150",
    "addr:postcode": "75015",
    "addr:street": "Rue Saint-Charles",
    "amenity": "bar",
    "name": "Le pari Saint-Charles",
    "note": "bar PMU"
  }
},
{
  "type": "node",
  "id": 2273232850,
  "lat": 48.8423890,
  "lon": 2.2820525,
  "tags": {
    "addr:housenumber": "155",
    "addr:postcode": "75015",
    "addr:street": "Rue Saint-Charles",
    "amenity": "restaurant",
    "cuisine": "moroccan",
    "name": "Tipaza",
    "website": "http://www.tipaza.fr"
  }
},
{
  "type": "node",
  "id": 2273237063,
  "lat": 48.8419036,
  "lon": 2.2816636,
  "tags": {
    "addr:housenumber": "167",
    "addr:postcode": "75015",
    "addr:street": "Rue Saint-Charles",
    "amenity": "cafe",
    "name": "Le petit voisin"
  }
},
{
  "type": "node",
  "id": 2273249438,
  "lat": 48.8416776,
  "lon": 2.2810225,
  "tags": {
    "addr:housenumber": "166",
    "addr:postcode": "75015",
    "addr:street": "Rue Saint-Charles",
    "amenity": "restaurant",
    "cuisine": "sushi",
    "name": "Arito sushi",
    "website": "http://www.aritosushi75015.com"
  }
},
{
  "type": "node",
  "id": 2274029184,
  "lat": 48.8901067,
  "lon": 2.3618300,
  "tags": {
    "amenity": "pub",
    "name": "La Chope à Mou\'s"
  }
},
{
  "type": "node",
  "id": 2276138209,
  "lat": 48.8490942,
  "lon": 2.3396105,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indonesian",
    "name": "Indonesia",
    "phone": "01 43 25 70 22",
    "website": "http://www.restaurant-indonesia.com"
  }
},
{
  "type": "node",
  "id": 2277001786,
  "lat": 48.8577225,
  "lon": 2.3496460,
  "tags": {
    "addr:housenumber": "10",
    "addr:street": "Rue Saint-Martin",
    "amenity": "cafe",
    "name": "Le Café Livre"
  }
},
{
  "type": "node",
  "id": 2279508873,
  "lat": 48.8901377,
  "lon": 2.3597002,
  "tags": {
    "amenity": "pub",
    "name": "Café de la Poste"
  }
},
{
  "type": "node",
  "id": 2279509262,
  "lat": 48.8901098,
  "lon": 2.3596369,
  "tags": {
    "amenity": "restaurant",
    "name": "Café de la Poste"
  }
},
{
  "type": "node",
  "id": 2279711294,
  "lat": 48.8908511,
  "lon": 2.3602853,
  "tags": {
    "amenity": "pub",
    "name": "La Petite Chope"
  }
},
{
  "type": "node",
  "id": 2279711295,
  "lat": 48.8916443,
  "lon": 2.3596030,
  "tags": {
    "amenity": "pub",
    "name": "Bar-Tabac Le Bergerac",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 2279711302,
  "lat": 48.8909114,
  "lon": 2.3604949,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Shin Juku",
    "opening_hours": "Mo-Su 12:00-14:30,19:00-23:30",
    "phone": "0142056386",
    "website": "http://www.restaurant-shin-juku.fr/"
  }
},
{
  "type": "node",
  "id": 2279711307,
  "lat": 48.8909059,
  "lon": 2.3606042,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "38 gourmet",
    "opening_hours": "Mo-We 12:00-14:00; Tu-Fr 12:00-14:00, 19:00-22:00; Sa-Su 19:00-22:00",
    "phone": "0953803136",
    "website": "http://www.le38gourmet.com/category/la-carte-du-restaurant/"
  }
},
{
  "type": "node",
  "id": 2280474429,
  "lat": 48.8763474,
  "lon": 2.3877275,
  "tags": {
    "amenity": "pub",
    "name": "Le Mustang",
    "phone": "09 51 24 20 97"
  }
},
{
  "type": "node",
  "id": 2281176835,
  "lat": 48.8709254,
  "lon": 2.3085765,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "29",
    "addr:street": "Rue de Ponthieu",
    "amenity": "restaurant",
    "internet_access": "wlan",
    "name": "L\'ambroisie",
    "wifi": "free"
  }
},
{
  "type": "node",
  "id": 2282579428,
  "lat": 48.8662240,
  "lon": 2.3388110,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "7",
    "addr:postcode": "75001",
    "addr:street": "Rue des Petits Champs",
    "amenity": "restaurant",
    "cuisine": "french",
    "description": "Wide range of wines to degustate. Very good food that goes with it, traditional french inspired, but somewhat nouvelle",
    "internet_access": "no",
    "name": "Aux Bons Crus",
    "phone": "01 42 60 06 45"
  }
},
{
  "type": "node",
  "id": 2283449228,
  "lat": 48.8796743,
  "lon": 2.3454738,
  "tags": {
    "amenity": "cafe",
    "name": "Jolis Momes",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2283449233,
  "lat": 48.8783418,
  "lon": 2.3453839,
  "tags": {
    "amenity": "cafe",
    "name": "Odette & Aimé",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2283535941,
  "lat": 48.8322843,
  "lon": 2.3152081,
  "tags": {
    "addr:housenumber": "121",
    "addr:postcode": "75014",
    "addr:street": "Rue Raymond Losserand",
    "amenity": "restaurant",
    "cuisine": "korean",
    "int_name": "Dokkebi",
    "name": "Dokkebi (도깨비)",
    "name:ko": "도깨비",
    "phone": "+33145433512"
  }
},
{
  "type": "node",
  "id": 2283655494,
  "lat": 48.8835862,
  "lon": 2.3696037,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "6-8",
    "addr:postcode": "75019",
    "addr:street": "Place de la Bataille de Stalingrad",
    "amenity": "cafe",
    "name": "La Rotonde",
    "opening_hours": "Mo-Su 08:00-02:00",
    "phone": "+33 1 80483340",
    "website": "http://www.larotonde.com/"
  }
},
{
  "type": "node",
  "id": 2284410407,
  "lat": 48.8999979,
  "lon": 2.4383783,
  "tags": {
    "amenity": "pub",
    "name": "La Mascotte de l\'Europe"
  }
},
{
  "type": "node",
  "id": 2284410408,
  "lat": 48.9000561,
  "lon": 2.4383755,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "La Mascotte de l\'Europe"
  }
},
{
  "type": "node",
  "id": 2284410409,
  "lat": 48.9019736,
  "lon": 2.4403998,
  "tags": {
    "amenity": "restaurant",
    "cafe": "yes",
    "name": "Le 63",
    "opening_hours": "Tu-Fr 12:00-18:00",
    "phone": "+33 1 49 91 10 58",
    "website": "http://www.canal93.net/v2/index.php?pagequery=6"
  }
},
{
  "type": "node",
  "id": 2284493757,
  "lat": 48.8717135,
  "lon": 2.3253034,
  "tags": {
    "amenity": "cafe",
    "cuisine": "italian",
    "description": "Fresh pasta. Italien coffee.",
    "internet_access": "no",
    "name": "Caffè Corto",
    "phone": "01 42 68 10 53"
  }
},
{
  "type": "node",
  "id": 2285154131,
  "lat": 48.8900400,
  "lon": 2.3632191,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "senegalese",
    "name": "Chez Fama"
  }
},
{
  "type": "node",
  "id": 2285154160,
  "lat": 48.8908932,
  "lon": 2.3596443,
  "tags": {
    "amenity": "pub",
    "name": "Stop Chapelle"
  }
},
{
  "type": "node",
  "id": 2285384053,
  "lat": 48.8563012,
  "lon": 2.2797681,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "seafood",
    "name": "Huitres et saumons de Passy",
    "website": "http://www.huitres-et-saumons-de-passy.com/"
  }
},
{
  "type": "node",
  "id": 2286779109,
  "lat": 48.8287628,
  "lon": 2.3508143,
  "tags": {
    "amenity": "cafe",
    "name": "Au Passage des Artistes"
  }
},
{
  "type": "node",
  "id": 2286779110,
  "lat": 48.8259411,
  "lon": 2.3547905,
  "tags": {
    "amenity": "cafe",
    "name": "La Cantine de Gaston"
  }
},
{
  "type": "node",
  "id": 2286779111,
  "lat": 48.8281212,
  "lon": 2.3500641,
  "tags": {
    "addr:housenumber": "43",
    "addr:street": "Rue des Cinq Diamants",
    "amenity": "restaurant",
    "capacity": "30",
    "cuisine": "thai",
    "name": "Restaurant Le 43",
    "opening_hours": "Tu-Su 12:00-14:30,19:00-22:30",
    "payment:bitcoin": "yes",
    "phone": "+33 1 53 80 35 24",
    "website": "http://le43.com/"
  }
},
{
  "type": "node",
  "id": 2286779112,
  "lat": 48.8278444,
  "lon": 2.3497300,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Thaï Papaya"
  }
},
{
  "type": "node",
  "id": 2290944632,
  "lat": 48.8480806,
  "lon": 2.2899735,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "60",
    "addr:postcode": "75015",
    "addr:street": "Rue du Théâtre",
    "amenity": "cafe",
    "description": "café, tabac, jeux",
    "name": "Le Disque Bleu",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2290944638,
  "lat": 48.8480963,
  "lon": 2.2903858,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "35",
    "addr:postcode": "75015",
    "addr:street": "Rue de Lourmel",
    "amenity": "cafe",
    "name": "Cafet\' Théâtre",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2290944644,
  "lat": 48.8489746,
  "lon": 2.2907647,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "28",
    "addr:postcode": "75015",
    "addr:street": "Rue de Lourmel",
    "amenity": "cafe",
    "brewery": "heineken;pelforth;affligem",
    "name": "La Succursale",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2293740285,
  "lat": 48.8482373,
  "lon": 2.3469649,
  "tags": {
    "amenity": "pub",
    "name": "Le ZigZag"
  }
},
{
  "type": "node",
  "id": 2293740288,
  "lat": 48.8508540,
  "lon": 2.3477158,
  "tags": {
    "amenity": "pub",
    "name": "Le Bistrot des Artistes"
  }
},
{
  "type": "node",
  "id": 2294874810,
  "lat": 48.8270967,
  "lon": 2.2643844,
  "tags": {
    "amenity": "restaurant",
    "name": "O\'Jazy"
  }
},
{
  "type": "node",
  "id": 2294950604,
  "lat": 48.8682148,
  "lon": 2.3979085,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "33",
    "addr:postcode": "75020",
    "addr:street": "Rue de la Chine",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Chalbens",
    "phone": "+33 1 40 33 48 01"
  }
},
{
  "type": "node",
  "id": 2295269479,
  "lat": 48.8141498,
  "lon": 2.3492667,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "microbrewery": "yes",
    "name": "L\'Alliance Bis"
  }
},
{
  "type": "node",
  "id": 2295269486,
  "lat": 48.8146703,
  "lon": 2.3477824,
  "tags": {
    "amenity": "bar",
    "name": "Le Vouvray"
  }
},
{
  "type": "node",
  "id": 2295269632,
  "lat": 48.8149250,
  "lon": 2.3454004,
  "tags": {
    "amenity": "restaurant",
    "name": "Restaurant Franco-Portugais"
  }
},
{
  "type": "node",
  "id": 2295269635,
  "lat": 48.8145973,
  "lon": 2.3447291,
  "tags": {
    "amenity": "restaurant",
    "name": "Sherazade"
  }
},
{
  "type": "node",
  "id": 2295269644,
  "lat": 48.8148358,
  "lon": 2.3455753,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Vivaldi Ristorante"
  }
},
{
  "type": "node",
  "id": 2295812293,
  "lat": 48.8196529,
  "lon": 2.3647206,
  "tags": {
    "amenity": "bar",
    "name": "Tabac des Sports",
    "source": "local Knowledge",
    "tobacco": "yes"
  }
},
{
  "type": "node",
  "id": 2296264370,
  "lat": 48.8767902,
  "lon": 2.3014999,
  "tags": {
    "amenity": "cafe",
    "name": "Le Beaucour",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2296264375,
  "lat": 48.8773588,
  "lon": 2.2989656,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "pizza",
    "name": "Del Papa",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2296264379,
  "lat": 48.8774315,
  "lon": 2.2986835,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "american",
    "name": "Indiana",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2296411783,
  "lat": 48.8319949,
  "lon": 2.2801481,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Il Parmigiano"
  }
},
{
  "type": "node",
  "id": 2296500921,
  "lat": 48.8541163,
  "lon": 2.3390471,
  "tags": {
    "addr:housenumber": "5",
    "addr:postcode": "75006",
    "addr:street": "Rue André Mazet",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Azabu 麻布",
    "name:ja": "麻布",
    "name:zh": "麻布",
    "website": "http://www.asabu.fr"
  }
},
{
  "type": "node",
  "id": 2296500922,
  "lat": 48.8426080,
  "lon": 2.3301580,
  "tags": {
    "addr:housenumber": "17",
    "addr:postcode": "75006",
    "addr:street": "Rue Jules Chaplain",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Toyo"
  }
},
{
  "type": "node",
  "id": 2296559649,
  "lat": 48.8447863,
  "lon": 2.4372142,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Sushi Sei"
  }
},
{
  "type": "node",
  "id": 2297432448,
  "lat": 48.8717541,
  "lon": 2.2305991,
  "tags": {
    "addr:housenumber": "27",
    "addr:postcode": "92150",
    "addr:street": "Rue Ledru-Rollin",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Sensimya"
  }
},
{
  "type": "node",
  "id": 2297724176,
  "lat": 48.8691058,
  "lon": 2.2272206,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "italian",
    "name": "Le 13"
  }
},
{
  "type": "node",
  "id": 2297724204,
  "lat": 48.8690622,
  "lon": 2.2272835,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "regional",
    "name": "Le Dolmen"
  }
},
{
  "type": "node",
  "id": 2297724518,
  "lat": 48.8689565,
  "lon": 2.2275346,
  "tags": {
    "amenity": "cafe",
    "cuisine": "steak_house",
    "name": "Entrepôt St Claude"
  }
},
{
  "type": "node",
  "id": 2297728873,
  "lat": 48.8694226,
  "lon": 2.2270460,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Au Soir de Tokyo"
  }
},
{
  "type": "node",
  "id": 2297730480,
  "lat": 48.8699090,
  "lon": 2.2258474,
  "tags": {
    "amenity": "cafe",
    "name": "Le Richemond"
  }
},
{
  "type": "node",
  "id": 2297736276,
  "lat": 48.8731413,
  "lon": 2.2295370,
  "tags": {
    "amenity": "restaurant",
    "name": "Le Village"
  }
},
{
  "type": "node",
  "id": 2297742520,
  "lat": 48.8738558,
  "lon": 2.2299433,
  "tags": {
    "amenity": "cafe",
    "name": "Le Mousquetaire"
  }
},
{
  "type": "node",
  "id": 2297979439,
  "lat": 48.8309399,
  "lon": 2.3810186,
  "tags": {
    "addr:housenumber": "73",
    "addr:postcode": "75013",
    "addr:street": "Quai Panhard et Levassor",
    "amenity": "restaurant",
    "cuisine": "american",
    "name": "The Bootlagers",
    "source": "Local_knowledge",
    "website": "http://www.thebootlagers.com/"
  }
},
{
  "type": "node",
  "id": 2297987179,
  "lat": 48.8339877,
  "lon": 2.3859431,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Le Café de Pauline",
    "source": "local_knowledge"
  }
},
{
  "type": "node",
  "id": 2298160176,
  "lat": 48.8457908,
  "lon": 2.3539346,
  "tags": {
    "amenity": "pub",
    "name": "Finnegan\'s Wake"
  }
},
{
  "type": "node",
  "id": 2298260528,
  "lat": 48.8370765,
  "lon": 2.3521704,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "92",
    "addr:postcode": "75005",
    "addr:street": "Boulevard Saint-Marcel",
    "amenity": "restaurant",
    "cuisine": "burger",
    "name": "L\'Escale des Gobelins"
  }
},
{
  "type": "node",
  "id": 2298283303,
  "lat": 48.8526747,
  "lon": 2.4487663,
  "tags": {
    "amenity": "bar",
    "name": "Café A l\'Habitude"
  }
},
{
  "type": "node",
  "id": 2298283305,
  "lat": 48.8526583,
  "lon": 2.4495538,
  "tags": {
    "amenity": "bar",
    "name": "Nostalgie Caffè"
  }
},
{
  "type": "node",
  "id": 2298283306,
  "lat": 48.8526136,
  "lon": 2.4491561,
  "tags": {
    "amenity": "bar",
    "name": "POINT B@R"
  }
},
{
  "type": "node",
  "id": 2298657606,
  "lat": 48.8478098,
  "lon": 2.4348432,
  "tags": {
    "amenity": "bar",
    "name": "Val de Marne"
  }
},
{
  "type": "node",
  "id": 2298657607,
  "lat": 48.8473408,
  "lon": 2.4348372,
  "tags": {
    "amenity": "bar",
    "name": "Vincennes Bastille"
  }
},
{
  "type": "node",
  "id": 2298689223,
  "lat": 48.8751593,
  "lon": 2.3701002,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "15",
    "addr:postcode": "75010",
    "addr:street": "Avenue Claude Vellefaux",
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Ikko",
    "phone": "0142406035"
  }
},
{
  "type": "node",
  "id": 2299590422,
  "lat": 48.8585317,
  "lon": 2.4337075,
  "tags": {
    "amenity": "bar",
    "name": "Bar L\'Anjou",
    "source": "Visite sur place"
  }
},
{
  "type": "node",
  "id": 2299591543,
  "lat": 48.8593469,
  "lon": 2.4316636,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Bistrot 33"
  }
},
{
  "type": "node",
  "id": 2301351091,
  "lat": 48.8515332,
  "lon": 2.3460413,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "thai fruit juces"
  }
},
{
  "type": "node",
  "id": 2301351094,
  "lat": 48.8516027,
  "lon": 2.3460829,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "libanese"
  }
},
{
  "type": "node",
  "id": 2301379583,
  "lat": 48.8315017,
  "lon": 2.3608865,
  "tags": {
    "amenity": "cafe",
    "name": "Salon de Thé",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2301459163,
  "lat": 48.8280428,
  "lon": 2.3570384,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Paris Italie"
  }
},
{
  "type": "node",
  "id": 2301505899,
  "lat": 48.8268539,
  "lon": 2.3636108,
  "tags": {
    "amenity": "cafe",
    "name": "O\'Soleil",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2301505909,
  "lat": 48.8269117,
  "lon": 2.3634246,
  "tags": {
    "amenity": "cafe",
    "name": "Soui Food",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2301882955,
  "lat": 48.8300151,
  "lon": 2.3572624,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Ba Miền",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2301882957,
  "lat": 48.8303208,
  "lon": 2.3570220,
  "tags": {
    "amenity": "cafe",
    "name": "Sandwich Café",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2301882962,
  "lat": 48.8300765,
  "lon": 2.3566608,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "japanese",
    "name": "Tokyo Osaka"
  }
},
{
  "type": "node",
  "id": 2302388833,
  "lat": 48.8153391,
  "lon": 2.3448291,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "sandwich",
    "name": "A nous deux"
  }
},
{
  "type": "node",
  "id": 2302442263,
  "lat": 48.8741225,
  "lon": 2.3893282,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "indian",
    "name": "Samsara"
  }
},
{
  "type": "node",
  "id": 2302465457,
  "lat": 48.8748365,
  "lon": 2.3888937,
  "tags": {
    "amenity": "restaurant",
    "cuisine": "asian",
    "name": "Zhen Fa"
  }
},
{
  "type": "node",
  "id": 2302887736,
  "lat": 48.8289553,
  "lon": 2.2662826,
  "tags": {
    "addr:housenumber": "10",
    "addr:postcode": "92130",
    "addr:street": "Square Louis Blériot",
    "amenity": "restaurant",
    "cuisine": "french",
    "name": "Belle Isle"
  }
},
{
  "type": "node",
  "id": 2302899079,
  "lat": 48.8511846,
  "lon": 2.3478208,
  "tags": {
    "addr:city": "Paris",
    "addr:housenumber": "25",
    "addr:postcode": "75005",
    "addr:street": "Rue Galande",
    "amenity": "restaurant",
    "cuisine": "indian,_vegetarian",
    "name": "Krishna Bhavan",
    "website": "http://www.krishnabhavan.net"
  }
},
{
  "type": "node",
  "id": 2304085787,
  "lat": 48.8959490,
  "lon": 2.2227969,
  "tags": {
    "amenity": "cafe",
    "name": "Alvaro (Café Restaurant)",
    "opening_hours": "Mo-Fr 06:00-17:00",
    "source": "survey"
  }
},
{
  "type": "node",
  "id": 2304085794,
  "lat": 48.8945209,
  "lon": 2.2228368,
  "tags": {