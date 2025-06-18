<?php

namespace Database\Seeders;

use App\Models\Place;
use App\Models\Province;

use Illuminate\Database\Seeder;


class PlacesTableSeeder extends Seeder
{
    public function run()
    {
        $places = [
            'Phnom Penh' => [
                [
                    'name' => 'Royal Palace',
                    'price' => 10.00,
                    'duration' => '2 hours',
                    'location' => 'Samdech Sothearos Blvd',
                    'image' => 'places/royal_palace.jpg',
                    'details' => 'The Royal Palace is a complex of buildings which serves as the royal residence of the King of Cambodia.'
                ],
                [
                    'name' => 'Wat Phnom',
                    'price' => 5.00,
                    'duration' => '1 hour',
                    'location' => 'Wat Phnom Hill',
                    'image' => 'places/wat_phnom.jpg',
                    'details' => 'Wat Phnom is a Buddhist temple and the tallest religious structure in Phnom Penh.'
                ],
                [
                    'name' => 'Tuol Sleng Genocide Museum',
                    'price' => 7.00,
                    'duration' => '1 hour',
                    'location' => 'st113 Phnom Penh',
                    'image' => 'places/toul_sleng.jpg',
                    'details' => 'Grim museum of the Cambodian genocide housed in a former Khmer Rouge prison & interrogation center.'
                ],
                [
                    'name' => 'Phnom Penh City',
                    'price' => 50.00,
                    'duration' => '2 days',
                    'location' => 'Phnom Penh',
                    'image' => 'places/phnom_penh.jpg',
                    'details' => 'Phnom Penh City is a capital and most populous city of Cambodia. With this package we can guide you to visit many popular places in Phnom Penh for 2 days.'
                ]
            ],
            'Siem Reap' => [
                [
                    'name' => 'Angkor Wat',
                    'price' => 37.00,
                    'duration' => '1 day',
                    'location' => 'Angkor Archaeological Park',
                    'image' => 'places/angkor_wat.webp',
                    'details' => 'Angkor Wat is the largest religious monument in the world, built in the early 12th century.'
                ],
                [
                    'name' => 'Ta Prohm',
                    'price' => 35.00,
                    'duration' => '3 hours',
                    'location' => 'Angkor Archaeological Park',
                    'image' => 'places/ta_prohm.jpg',
                    'details' => 'Ta Prohm is famous for the huge trees and roots growing out of its ruins.'
                ],
                [
                    'name' => 'Tonlé Sap Lake and Floating Villages',
                    'price' => 25.00,
                    'duration' => '2 hours',
                    'location' => 'Veal Village, Chreav Commune, Siem Reap',
                    'image' => 'places/tonlé_sap.jpg',
                    'details' => 'Tonlé Sap Lake, the largest freshwater lake in Southeast Asia, 
                    is a living testament to Cambodia’s vibrant culture and natural beauty. 
                    Among its treasures are the floating villages of Kampong Phluk and Kampong Khleang, 
                    where traditional Cambodian life unfolds on the water, offering visitors a rare glimpse into this unique way of life.'
                ],
                [
                    'name' => 'Beng Mealea',
                    'price' => 25.00,
                    'duration' => '2 hours',
                    'location' => 'F6GH+3G2, Beng Mealea village',
                    'image' => 'places/beng_mealea.jpg',
                    'details' => 'Beng Mealea, a captivating temple complex in the Cambodian jungle, offers a unique sense of adventure and discovery. Located 70 kilometres from Siem Reap, its remote location ensures fewer tourists and a more intimate exploration experience.'
                ],
                [
                    'name' => 'Seim Reap Province',
                    'price' => 100.00,
                    'duration' => '4 days',
                    'location' => 'Seim Reap Province',
                    'image' => 'places/seim_reap.jpg',
                    'details' => 'Siem Reap is the second-largest city of Cambodia, as well as the capital and largest city of Siem Reap Province in northwestern Cambodia.
                     with this package we can guide you to visit alot of popular places in Seim Reap for 4 days and we have many activities for you to do as well.'
                ]
            ],
            'Battambang' => [
                [
                    'name' => 'Phnom Sampeau',
                    'price' => 3.00,
                    'duration' => '3 hours',
                    'location' => 'Southwest of Battambang',
                    'image' => 'places/phnom_sampeau.jpg',
                    'details' => 'A hill with temples and caves, including the killing caves from the Khmer Rouge era.'
                ],
                [
                    'name' => 'Bamboo Train',
                    'price' => 5.00,
                    'duration' => '1 hour',
                    'location' => 'Outside Battambang',
                    'image' => 'places/bamboo_train.jpeg',
                    'details' => 'A fun and unique ride on a bamboo platform powered by a small motor.'
                ],
                [
                    'name' => 'Wat Banan',
                    'price' => 5.00,
                    'duration' => '1 hour',
                    'location' => '22km Outside Battambang',
                    'image' => 'places/wat_banan.jpg',
                    'details' => 'Wat Banan is one of the best-preserved temples of Battambang and is on top of a hill. '
                ],
                [
                    'name' => 'Battambang Province',
                    'price' => 50.00,
                    'duration' => '3 days',
                    'location' => 'Battambang Province',
                    'image' => 'places/battambang.jpg',
                    'details' => 'Battambang is a small, yet charming city located in the eponymous Battambang Province in the northwest of Cambodia, in the midst of one of the largest rice-growing areas of Southeast Asia. With this package we can guide you for 3 days to visit an iteresting places in Battambang.'
                ]
            ],
            'Kampong Cham' => [
                [
                    'name' => 'Haong Waterfall',
                    'price' => 30.00,
                    'duration' => '2 hour',
                    'location' => 'Memut district on the border of Tambe district',
                    'image' => 'places/haong_waterfall.jpg',
                    'details' => 'The site is a mountain that features a cliff and waterfall. Inaccessible at one time, it has become a popular tourist destination in Kampong Cham province.'
                ],
                [
                    'name' => 'Koh Pen Beach',
                    'price' => 15.00,
                    'duration' => '2 hour',
                    'location' => 'Kampong Siem District',
                    'image' => 'places/koh_pen.jpg',
                    'details' => 'Koh Pen is an island and one of popular places to visit in Kampong Cham town, there is such a beautiful island with a white sands and place on a Mekong River.'
                ],
                [
                    'name' => 'Phnom Pros and Phnom Srey',
                    'price' => 10.00,
                    'duration' => '1 hour',
                    'location' => 'Kro La Commune, Kampong Siem District',
                    'image' => 'places/phnompros_phnomsrey.jpg',
                    'details' => 'Phnom Srey and Phnom Pros, known as the "Woman Hill" and "Man Hill" respectively, are two iconic hills in Cambodia.'
                ],
                [
                    'name' => 'Kampong Cham Town',
                    'price' => 70.00,
                    'duration' => '4 day',
                    'location' => 'Kampong Cham Town',
                    'image' => 'places/kampong_cham.jpg',
                    'details' => 'Kampong Cham is a province of Cambodia located on the central lowlands of the Mekong River. With this package we ca  guide you to visit manay places in Kampong Cham for 4days, such as Mekong river walk street, night market, Phnom Han Chey, Angkor pagoda, Teuk Cha, and more.'
                ]
            ],
            'Kandal' => [
                [
                    'name' => 'Koh dach',
                    'price' => 30.00,
                    'duration' => '3 hours',
                    'location' => 'National Road No. 6a in Kon Dach Commune',
                    'image' => 'places/koh_dach.jpg',
                    'details' => 'Koh dach, Kandal is one of the popular tourist destinations in the province as well as in Cambodia. The entire area of Koh dach island covers 30 square kilometers of land lying on the shores of Mekong River. The travelers, who want a break from the buys and hectic life, can land to this secluded and sleepy island.'
                ],
                [
                    'name' => 'Handcraft Center',
                    'price' => 15.00,
                    'duration' => '2 hours',
                    'location' => 'Kon Dach Commune',
                    'image' => 'places/handcraft_center.jpg',
                    'details' => 'Handicraft Center is located at Koh Dach commune, Muk Kampoul district, a territory of Kandal district in the past and Phnom Penh territory now. The commune of Koh Dach has a 12-kilometer length and width from 100 meters to 2,500 meters.'
                ],
                [
                    'name' => 'Prasith Mountain',
                    'price' => 20.00,
                    'duration' => '1 hours',
                    'location' => 'Makak commune, Ponhea Leu district',
                    'image' => 'places/prasith_mountain.jpg',
                    'details' => 'Prasith Mountain is composed of two hills, the East Hill and the West Hill. The West Hill has no stories. The East Hill, however, has stories relating to religion and the Khmer king. It also has a large statue of the reclining Buddha reaching nirvana. There are not many big trees in Prasith Mountain, and there are no development plans for now. The site has a beautiful scenery, abundant fresh air, and is rich in culture and history.'
                ],
                [
                    'name' => 'Kan Dal Province',
                    'price' => 80.00,
                    'duration' => '2 days',
                    'location' => 'Kandal Province',
                    'image' => 'places/kandal.jpg',
                    'details' => 'Kandal is a province in Cambodia. Its capital and largest city is Ta Khmao. Kandal Province completely surrounds the national capital Phnom Penh. With this package we can make sure you can visit many places in Kandal for 2days no worry.'
                ]
            ],
            'Takeo' => [
                [
                    'name' => 'Angkor Borie',
                    'price' => 25.00,
                    'duration' => '2 hours',
                    'location' => 'Takoe',
                    'image' => 'places/angkor_borei.jpg',
                    'details' => 'Angkor Borie is a town in the area of several ruins and archaeological digs. The area contains artifacts dating from the Funan (4th/5th century) and Water Chenla (8th century) as well as the later Angkorian period. The prasat ruins on top of nearby Phnom Da are 11th century Angkorian. There is a smalll museum in the town.'
                ],
                [
                    'name' => 'Takeo Museum',
                    'price' => 15.00,
                    'duration' => '3 hours',
                    'location' => 'Ang Kor Bo Rey District',
                    'image' => 'places/takeo_museum.jpg',
                    'details' => 'Takeo Museum is the only museum in the province and was built by the EU organization. The Museum, Takeo  is repository of many ancient items and relics of Phnom Da in 16th century. While researchers are intrigued by the display, the tourists are inquisitive and admire these exhibited objects. In recent years the Museum at Takeo has been quite a crowd puller.'
                ],
                [
                    'name' => 'Neang Khmao Temple',
                    'price' => 30.00,
                    'duration' => '2 hours',
                    'location' => 'Rovieng commune, Samrong district, off National Road 2',
                    'image' => 'places/neangkhmao_temple.jpg',
                    'details' => 'The Neang Khmao Temple, Takeo is considered among the most popular tourist attractions in Takeo. Takeo is a beautiful province in Cambodia, specked with several places of interest that are natural or manmade. There are a number of grand temples in Takeo. Among these temples, the Neang Khmao Temple, Takeo is certainly worth a visit on your tour to Takeo.'
                ],
                [
                    'name' => 'Tonle Bati',
                    'price' => 20.00,
                    'duration' => '3 hours',
                    'location' => 'Kandal Province',
                    'image' => 'places/tonle_bati.png',
                    'details' => 'Tonle Bati is a popular lake and picnic area that has bamboo shacks built out over the water that people can rent out for eating and whiling away the day. It is generally a weekend get-away spot, which means it is nice and quiet during the week. Locals swim there, but the water does not look real inviting. There are all kinds of food and drink stands that sell everything you need for a picnic along the lake. '
                ],
                [
                    'name' => 'Takoe Province',
                    'price' => 70.00,
                    'duration' => '3 days',
                    'location' => 'Takeo Province',
                    'image' => 'places/takeo.webp',
                    'details' => 'Takéo is an ancient province which is considered the “birthplace of Khmer civilization” because it was once the center of the Funan Kingdom. Much of the history is related to the Funan and Chenla Periods, with up to 34 ancient temples built before the Angkor period between the 5th and 8th centuries. Therefore, one of the province’s main potentials is tourism, which is a source of income for the state and allows citizens to benefit from this sector. The main tourist attractions in the province are mostly historical sites such as ancient temples, which attract tourists to come to study and get a pure feeling from the magnificent scenery around the ancient temple area. Chinese traders’s accounts mentioned that the Khmer Kingdom was originally located in Takéo, called “Funan”. With this package we can garantee you to see popular place in Takoe with ease.'
                ]
            ],
            'Kampong Speu' => [
                [
                    'name' => 'Kirirom National Park',
                    'price' => 30.00,
                    'duration' => '3 hours',
                    'location' => 'Phnom Sruoch District',
                    'image' => 'places/kirirom.jpg',
                    'details' => 'Kirirom National Park, officially Preah Suramarit-Kossamak Kirirom National Park (Khmer: ឧទ្យានជាតិព្រះសុរាម្រិត-កុសមៈ គិរីរម្យ), is a national park in Cambodia located in the eastern part of the Cardamom Mountains at a mean elevation of 675 m (2,215 ft). It is Cambodia first officially designated national park, that was established in 1993.'
                ],
                [
                    'name' => 'Phnom Aural',
                    'price' => 35.00,
                    'duration' => '3 hours',
                    'location' => 'Kampong Spue Province',
                    'image' => 'places/phnom_aural.jpg',
                    'details' => 'Phnom Aural located in the Cardamom Mountains, is the highest peak in Cambodia. It lies 1813 meters above sea level. Its location in the southern plains is a bit off the beaten track and offers a great opportunity to see some really interesting species that are not seen in other parts of Cambodia. The evergreen Aural forest is home to the Cambodian Laughingthrush (one of the two endemic bird species in Cambodia) and many other rare birds, live at this high elevation.'
                ],
                [
                    'name' => 'Chambok Ecotourism Site',
                    'price' => 45.00,
                    'duration' => '1 days',
                    'location' => 'Krang Dey district',
                    'image' => 'places/chambok.jpg',
                    'details' => 'Our oldest ecotourism project in the little village of Chambok is one of the most successful ecotourism sites in Cambodia.'
                ],
                [
                    'name' => 'Te Teuk Pus Hot Spring',
                    'price' => 15.00,
                    'duration' => '2 hours',
                    'location' => 'Sangke Sap commune, Oral district',
                    'image' => 'places/teteuk_pus.jpg',
                    'details' => 'Hot springs are rare in Cambodia. Te Teuk Pus is 100 meters in diameter. The surface of the water, which comes from six sources and smells like sulfur or limestone, is 80 square meters. The water temperature is 70 degrees Celsius.'
                ],
                [
                    'name' => 'Kampong Spue Province',
                    'price' => 75.00,
                    'duration' => '3 days',
                    'location' => 'Kampong Spue Province',
                    'image' => 'places/kampongspeu.jpg',
                    'details' => 'Kampong Speu is the capital of Kampong Speu Province in Cambodia. Speu is the Khmer word for starfruit, but Kampong Speu is actually famous for its palm sugar and wine. This province is a natural and cultural resort, which is located at Tang Tonle Village and Ampe Phnom Village, So Por Tep Commune and Svay Kra Van Commune, Chbar Mon District in 48-Kilometer distance from Phnom Penh, then turning left for two more kilometres. With this package we can guide you to visit many popular places in Kampong Spue for 3days with fun.'
                ]
            ],
            'Kampot' => [
                [
                    'name' => 'Bokor National Park',
                    'price' => 29.00,
                    'duration' => '3 hours',
                    'location' => 'National street No3',
                    'image' => 'places/bakor_national_park.jpg',
                    'details' => 'This immense national park in Kampot Province covers an area of 1,400 km² and incorporates mountains, ruins and old French colonial settlements making it an awe-inspiring place like nowhere else in the world.
                    The park is also known as Preah Monivog Bokor National Park and Phnom Bokor National Park. This is only one of two parks in Cambodia that is protected by the ASEAN Heritage Parks scheme in Cambodia. Located in the highlands of the Damrei Mountains, most of this national park is located 1,000 metres above sea level, with the highest peak being Phnom Bokor which is 1,080 metres and the namesake of the national park as a whole.'
                ],
                [
                    'name' => 'Phnom Kampong Trach Cave',
                    'price' => 15.00,
                    'duration' => '2 hours',
                    'location' => 'Kampong Trach district',
                    'image' => 'places/kampong_trach.jpg',
                    'details' => 'Kampong Trach Cave is a cluster of limestone caves with stunning geological formations, ancient shrines, and natural rock formations.'
                ],
                [
                    'name' => 'Kampot Province',
                    'price' => 90.00,
                    'duration' => '3 days',
                    'location' => 'Kampot Province',
                    'image' => 'places/kampot.jpg',
                    'details' => 'Kampot is a province in southwestern Cambodia. It borders the provinces of Koh Kong and Kampong Speu to the north, Takéo to the east, Kep and the country of Vietnam or Kampuchea Krom (kramuon Sor) to the south, and Sihanoukville to the west. To its south it has a coastline of around 45 km on the Gulf of Thailand. It is rich in low arable lands and has abundant natural resources. Its capital is the city of Kampot. With this package we can guide you to see all the beautiful places that exist in Kampot.'
                ]
            ],
            'Kep' => [
                [
                    'name' => 'Kep Beach',
                    'price' => 46.00,
                    'duration' => '1 days',
                    'location' => 'Kep District',
                    'image' => 'places/kep_beach.jpg',
                    'details' => 'This is Kep only proper beach, although it was not always that way. In the prewar period, powder-white sand was trucked in from other beaches. This practice resumed in 2013 and these days the beach is looking bigger and better than ever. It is immensely popular with locals, who descend here by the busload at weekends.The eastern end of the shaded promenade along the beach is marked by Sela Cham P’dey, a statue depicting a nude fisherman’s wife awaiting her husband is return.'
                ],
                [
                    'name' => 'Crab Market',
                    'price' => 21.00,
                    'duration' => '2 hours',
                    'location' => 'Kep Town',
                    'image' => 'places/crab_market.jpg',
                    'details' => 'Kep Crab Market is a distinguishing destination for tourists fancying fresh seafood with heavenly crab and tranquil atmosphere.'
                ],
                [
                    'name' => 'Kep National Park',
                    'price' => 27.00,
                    'duration' => '4 hours',
                    'location' => 'Kep Town',
                    'image' => 'places/kep_park.jpg',
                    'details' => 'The interior of Kep peninsula is occupied by Kep National Park, where an 8km circuit, navigable by foot and mountain bike, winds through thick forest passing by wats and viewpoints. Quirky yellow signs point the way and show trailheads to off-shooting walking paths which lead into the park’s interior. The ‘Stairway to Heaven’ trail is particularly worthwhile, leading up the hill to a pagoda, a nunnery and the Sunset Rock viewpoint.'
                ],
                [
                    'name' => 'Koh Tonsay',
                    'price' => 67.00,
                    'duration' => '2 days',
                    'location' => '200 ha',
                    'image' => 'places/koh_tonsay.jpg',
                    'details' => 'Koh Tonsay is a Cambodian island located off the country southern coast in the Gulf of Thailand. "Koh Tonsay" translates to Rabbit Island, it is being administered by Kep Province.'
                ],
                [
                    'name' => 'Kep Province',
                    'price' => 110.00,
                    'duration' => '4 days',
                    'location' => 'Kep Province',
                    'image' => 'places/kep.jpg',
                    'details' => 'Kep is the smallest province of Cambodia covering 336 km2 (130 sq mi), with a population of 41,798. It is one of the newest Cambodian provinces, together with Pailin, Sihanoukville and Tboung Khmum, created by Royal Decree on 22 December 2008, which separated Kep Municipality & Damnak Chang aeur District from the Kampot province, as well as adjusting several provincial borders. It is both the smallest and least populous province of Cambodia. The provincial capital is Kep and the province contains the Kep National Park. With this package we can guide to visit all of the popular places and do a lot of activities for 4days in Kep.'
                ]
            ],
            'Preah Sihanouk' => [
                [
                    'name' => 'Ochheuteal Beach',
                    'price' => 139.00,
                    'duration' => '3 days',
                    'location' => 'Preah Sihanouk Province',
                    'image' => 'places/ochheuteal_beach.jpg',
                    'details' => 'Ochheuteal Beach, known as UNTAC Beach in the early 1990s and it is now the most popular in Sihanoukville, offering the full spectrum of beach venues from upscale hotels and dining to laid-back budget beach bars and bungalows. Ochheuteal is long, sandy and narrow, with "Serendipity Beach" at the northern end, a golf-course development at the southern end, and a cluster of mid-range hotels and restaurants near the MP base in the middle. Grass umbrellas, rentable beach chairs and little drink huts line the beach from one end to the other.
                    '
                ],
                [
                    'name' => 'Sokha Beach',
                    'price' => 130.00,
                    'duration' => '3 days',
                    'location' => 'Preah Sihanouk Province',
                    'image' => 'places/sokha_beach.jpg',
                    'details' => 'Midway between Independence and Serendipity Beaches lies Sihanoukville prettiest stretch of sand, 1.5km-long Sokha Beach.'
                ],
                [
                    'name' => 'Otres Beach',
                    'price' => 97.00,
                    'duration' => '2 days',
                    'location' => 'Otres Village',
                    'image' => 'places/otres_beach.jpg',
                    'details' => 'Past the southern end of Ochheuteal Beach, beyond the Phnom Som Nak Sdach (Hill of the King’s Palace) headland, lies stunning Otres Beach, a seemingly infinite strip of casuarinas and blinding white sand. In Sihanoukville  glory days it could give southern Thailand a run for its money, but in recent years it has largely been defaced by wanton development. That said, the beach itself is still gorgeous, and the 2km stretch between Otres 1 and Otres 2 remains empty.'
                ],
                [
                    'name' => 'Kbal Chhay Waterfall',
                    'price' => 37.00,
                    'duration' => '3 hours',
                    'location' => '286 Ekareach Street',
                    'image' => 'places/kbal_chhay.jpg',
                    'details' => 'Kbal Chhay Waterfall is a waterfall approximately 7 km from the city of Sihanoukville in south-west Cambodia and then a further 9 km along a red dust track.'
                ],
                [
                    'name' => 'Ream National Park',
                    'price' => 23.00,
                    'duration' => '2 hours',
                    'location' => 'Prey Nob district',
                    'image' => 'places/ream_national_park.jpg',
                    'details' => 'The Ream National Park, officially the Preah Sihanouk Ream National Park, is a national park of Cambodia located 18 km (11 mi) from the city of Sihanoukville in the Sihanoukville Municipality of the Sihanoukville Province in southwestern Cambodia. It was established in 1993, as the Cambodian government began to take action for the protection of the country threatened natural resources. The national park biological value is defined by its combination of rivers, forests, mangroves, estuaries, beaches, coral reefs, wildlife, and marine life.'
                ],
                [
                    'name' => 'Preah Sihanouk Province',
                    'price' => 112.00,
                    'duration' => '3 days',
                    'location' => 'Preah Sihanouk Province',
                    'image' => 'places/preah_sihanouk.webp',
                    'details' => 'Preah Sihanouk lit. ("Holy Sihanouk"), also Sihanoukville, is a province in southwest Cambodia on the Gulf of Thailand. The provincial capital, also called Sihanoukville, is a deep water port city and a steadily growing and diversifying urban center on an elevated peninsula. With this package we can guide you to see many places in Preah Sihanouk with ease.'
                ]
            ],
            'Pursat' => [
                [
                    'name' => 'Pursat Province',
                    'price' => 115.00,
                    'duration' => '3 days',
                    'location' => 'Pursat Province',
                    'image' => 'places/pursat.png',
                    'details' => 'Pursat is a province of Cambodia. It is in the western part of the country and borders clockwise from the north: Battambang province, the Tonlé Sap, Kampong Chhnang province, Kampong Speu province, Koh Kong province, and East Thailand. It lies between the Tonle Sap and the northern end of the Cardamom Mountains. The Pursat River bisects the province, running from the Cardamoms in the west to the Tonle Sap in the east. In this package we will guide you to visite a beautiful places that exist in Pursat for 3days with joys.'
                ]
            ],
            'Prey Veng' => [
                [
                    'name' => 'Prey Veng Province',
                    'price' => 102.00,
                    'duration' => '3 days',
                    'location' => 'Prey Veng Province',
                    'image' => 'places/prey_veng.webp',
                    'details' => 'Prey Veng lit ("High Forest") is a province (khaet) of Cambodia. The capital is Prey Veng. With a population of 1.1 million people, it is the third most populous province. In this package you can easily visit the places you wanted to see in Prey Veng with our guide.'
                ]
            ],
            'Svay Rieng' => [
                [
                    'name' => 'Svay Rieng Province',
                    'price' => 117.00,
                    'duration' => '3 days',
                    'location' => 'Svay Rieng Province',
                    'image' => 'places/svay_rieng.webp',
                    'details' => 'Svay Rieng is a province (khaet) in Cambodia. Located in the southeast, the province juts into Vietnam (Long An and Tây Ninh) or Kampuchea Krom (Kampong Kho and Rong Domrey), which surrounds it to the north, east and south. The only other Cambodian province to border Svay Rieng is Prey Veng. The capital is Svay Rieng while the largest city is Bavet, which is the international border between Cambodia and Vietnam. In this package we will guide you in Svay Rieng to see many popular places for 3days with peace.'
                ]
            ],
            'Kampong Chhnang' => [
                [
                    'name' => 'Phnom Neang Kangrei',
                    'price' => 35.00,
                    'duration' => '3 hours',
                    'location' => 'Kom Pong Leng Distric',
                    'image' => 'places/neang_kangrei.jpg',
                    'details' => 'Phnom Kong Rei is a small isolated range of moderate height lying north of Kampong Chhnang city. The range stretches for about 4.5 km in a WNW - ESE direction and is a conspicuous local landmark located north of the town across the Tonle Sap River.'
                ],
                [
                    'name' => 'Floating Village of Kampong Luong',
                    'price' => 45.00,
                    'duration' => '4 hours',
                    'location' => 'Kampong Luong village',
                    'image' => 'places/kampong_luong.jpg',
                    'details' => 'Kompong Luong is a large floating village north of Krakor, on Tonlé Sap Lake. Its distance from Krakor and NH5 can vary from two to seven kilometres (1 to 4 mi), with the seasonal expansion and shrinking of the lake. Most inhabitants are Vietnamese-speaking people.'
                ],
                [
                    'name' => 'Pottery Villages',
                    'price' => 55.00,
                    'duration' => '4 hours',
                    'location' => 'Andong Russei village',
                    'image' => 'places/pottery_village.jpg',
                    'details' => 'Kampong Chhnang, often referred to as the "Port of Pottery," is a province renowned for its centuries-old pottery tradition. Nestled amidst lush rice paddies, the area boasts several villages where skilled artisans continue to shape clay into exquisite pieces using time-honored techniques. In this region you will find many pottery villages. Here, you will find almost every household involved in the craft, with the nearby Krang Dei Meas mountain providing an abundant source of high-quality clay. Visitors are warmly welcomed into the community, where they can witness firsthand the intricate process of pottery making. From shaping the clay on a potter wheel to the final firing, the artistry is captivating. For those eager to get their hands dirty, many pottery workshops offer hands-on experiences. Under the guidance of local artisans, you can try your hand at creating your own unique piece. It is a wonderful opportunity to connect with the local community and appreciate the dedication and skill involved in this traditional craft.'
                ],
                [
                    'name' => 'Phnom Ta Ind Mountain',
                    'price' => 35.00,
                    'duration' => '2 hours',
                    'location' => 'Trapang Anchang Village',
                    'image' => 'places/phnom_ta_ind.jpeg',
                    'details' => 'Among the Tourist Attractions in Kampong Chhnang, Phnom Ta Ind, Kampong Chhnang is a visitor must-see.Tourists and travelers come in Phnom Ta Ind to get a glimpse of the wildlife of the exotic country of Cambodia. You can spend your idle time strolling and viewing and taking pictures of different kinds of birds and animals. Phnom Ta Ind, Kampong Chhnang has seen many migratory birds that stay and breed during the winter months.'
                ],
                [
                    'name' => 'Kampong Chhnang Province',
                    'price' => 121.00,
                    'duration' => '3 days',
                    'location' => 'Kampong Chhnang',
                    'image' => 'places/kampong_chhnang.webp',
                    'details' => 'Kampong Chhnang is the capital city of Kampong Chhnang Province, in central Cambodia. It is located just west of the Tonlé Sap River and is a noted port. The small city is connected to Phnom Penh by a national highway route and railway. Phnom Kong Rei is a landmark located north of the city across the Tonle Sap River. The economy of the area is dominated by rice production.[2] Until recently, many locals lived in floating fishing villages during the high-water monsoon season. The last of these floating villages was dismantled at the end of 2022. WIth this package we can guarentee you to visint a lot of amazing places that exist in Kampong Chhnang with ease.'
                ]
            ],
            'Kampong Thom' => [
                [
                    'name' => 'Sambor Prei Kuk',
                    'price' => 60.00,
                    'duration' => '5 hours',
                    'location' => 'Sambor village',
                    'image' => 'places/sambor_preikok.jpg',
                    'details' => 'Sambor Prei Kuk (Isanapura) is an archaeological site in Cambodia located in Kampong Thom Province, 30 km (19 mi) north of Kampong Thom, the provincial capital, 176 km (109 mi) east of Angkor and 206 km (128 mi) north of Phnom Penh. The now ruined complex dates back to the Pre-Angkorian Chenla Kingdom (late 6th to 9th century), established by king Isanavarman I as central royal sanctuary and capital, known then as "Isanapura" (Khmer: ឦសានបុរៈ, Eisanbŏreă [ʔəjsaːnɓoreaʔ]).[1][2] In 2017, Sambor Prei Kuk was declared a UNESCO World Heritage Site.'
                ],
                [
                    'name' => 'Phnom Santuk',
                    'price' => 22.00,
                    'duration' => '2 hours',
                    'location' => 'Santuk district',
                    'image' => 'places/santuk.jpg',
                    'details' => 'Phnom Santuk is a large area featuring a monastery with old and new pagodas and a large array of Buddhist carvings depicting the Buddha in the many ritual positions. It has a heritage in the 15th century and perhaps earlier, as a sacred mountain which it remains to this day. The bas-reliefs are numerous and you can spend an hour wandering around along with taking in the views from the top of the mountain from many different points. There are also loads of monkeys who will happily rummage through any bags you leave by your bike. So, buy some snacks and a drink and the stall owners may watch over your gear.'
                ],
                [
                    'name' => 'Phnom Sruoch',
                    'price' => 37.00,
                    'duration' => '3 hours',
                    'location' => 'Santuk district',
                    'image' => 'places/phnom_sruoch.jpg',
                    'details' => 'Phnom Sruoch is Located just west of the larger and higher Phnom Santuk, Phnom Sruoch features a contemporary monastery and pagoda with remains of an ancient brick temple and small ponds carved into the natural sandstone. A staircase on the south side of the mountain leads up to the site which features remains spread across a large area.'
                ],
                [
                    'name' => 'Prasat Andet Temple',
                    'price' => 43.00,
                    'duration' => '3 hours',
                    'location' => 'Kampong Svay district',
                    'image' => 'places/prasat_andet.jpg',
                    'details' => 'Prasat Andet, also recorded as Prasat Andaet, is an ancient 7th-century brick temple located on the grounds of a contemporary monastery and pagoda atop a large and high mound which is then surrounded by a moat. Several statues from here including a Harihara statue can be found at the Phnom Penh National Museum. This uniquely styled statue would lend early French researchers to create a new category in their chronology of art styles named after the temple.'
                ],
                [
                    'name' => 'Kampon Thom Province',
                    'price' => 141.00,
                    'duration' => '3 days',
                    'location' => 'Kampong Thom Provinces',
                    'image' => 'places/kampong_thom.jpg',
                    'details' => 'Kampong Thom is the capital of Kampong Thom Province in Cambodia. It is about halfway between Phnom Penh and Siem Reap and thus most travellers only rush through on their way between these two major attractions. With this package you will visit a lot of places that exist in Kampong Thom with our guide.'
                ]
            ],
            'Kampong Som' => [
                [
                    'name' => 'Kampon Som',
                    'price' => 140.00,
                    'duration' => '3 days',
                    'location' => 'Kampong SOm Provinces',
                    'image' => 'places/kampong_som.jpg',
                    'details' => 'Sihanoukville (Khmer: ក្រុងព្រះសីហនុ, Krŏng Preăh Seihănŭ [kroŋ prĕəh səjhanuʔ]), also known as Kampong Saom (Khmer: កំពង់សោម, Kâmpóng Saôm [kɑmpɔŋ saom]) or Preah Sihanouk is a coastal city in Cambodia and the capital of Preah Sihanouk Province, at the tip of an elevated peninsula in the countruy south-west on the Gulf of Thailand. The city has a string of beaches along its coastline and coastal marshlands bordering Ream National Park in the east. It has one navigable river, the mangrove-lined Ou Trojak Jet, running from Otres Pagoda to the sea at Otres. Several sparsely inhabited islands under Sihanoukville administration are near the city. With this package you will see many beautifull places in Kampong Som with fun.'
                ]
            ],
            'Oddar Meanchey' => [
                [
                    'name' => 'Oddar Meanchey',
                    'price' => 143.00,
                    'duration' => '3 days',
                    'location' => 'Oddar Meanchey Provinces',
                    'image' => 'places/oddar_meanchey.webp',
                    'details' => 'Oddar Meanchey is a province of Cambodia in the remote northwest. It borders the provinces of Banteay Meanchey to the west, Siem Reap to the south and Preah Vihear to the east. Its long northern boundary demarcates part of Cambodia international border with Thailand. The capital is Samraong. With this package you can travel over Oddar Meanchey to see many beautifull places in Oddar Meanchey.'
                ]
            ],
            'Preah Vihear' => [
                [
                    'name' => 'Preah Vihear Temple',
                    'price' => 70.00,
                    'duration' => '4 hours',
                    'location' => 'Preah Vihear Provinces',
                    'image' => 'places/preah_vihear.jpg',
                    'details' => 'The Temple of Preah Vihear, a unique architectural complex of a series of sanctuaries linked by a system of pavements and staircases on an 800 metre long axis, is an outstanding masterpiece of Khmer architecture, in terms of plan, decoration and relationship to the spectacular landscape environment.'
                ],
                [
                    'name' => 'Phnom Tbeng Meanchey',
                    'price' => 43.00,
                    'duration' => '3 hours',
                    'location' => 'Thbeng Meanchey district',
                    'image' => 'places/phnom_tbeang.jpg',
                    'details' => 'Phnom Tbeng Meanchey is the mountain rising to 600m 5 km south-west of Tbeng Meanchey town.'
                ],
                [
                    'name' => 'Preah Vihear Provinces',
                    'price' => 155.00,
                    'duration' => '3 days',
                    'location' => 'Preah Vihear Provinces',
                    'image' => 'places/Preah Vihear Provinces.png',
                    'details' => 'Preah Vihear is a province of Cambodia. It borders the provinces of Oddar Meanchey and Siem Reap to the west, Kampong Thom to the south and Stung Treng to the east. Its northern boundary forms part of Cambodia international border with Thailand and Laos. Its capital is Preah Vihear.'
                ]
            ],
            'Stung Treng' => [
                [
                    'name' => 'Mekong River Dolphin Watching',
                    'price' => 23.00,
                    'duration' => '3 hours',
                    'location' => 'Stung Treng Provinces',
                    'image' => 'places/mekong_river.jpg',
                    'details' => 'See the endangered Irrawaddy Dolphins, stunning countryside and river views, as well as a variety of local wildlife, while paddling on the Mekong.'
                ],
                [
                    'name' => 'Sopheakmit Waterfall',
                    'price' => 55.00,
                    'duration' => '4 hours',
                    'location' => 'Chhaeb District',
                    'image' => 'places/sopheak_mit.png',
                    'details' => 'Sopheakmit/Preah Nimith Waterfall is located on the Cambodia-Laos border, in Preah Vihear province, is a spectacular feature of the majestic Mekong River known as Preah Nimith or Sopheakmit waterfall, and also known by some locals as Lbak Khoun. It is quite a sight, where the power and sheer volume of the Mekong river meet a grand limestone plateau and cascade. The river is incredibly wide here, breaking into several branches and spreading itself out over 8km with Preah Nimith Waterfall located right by the bank offering easy access and stunning views of this natural wonder.'
                ],
                [
                    'name' => 'Stung Treng Provinces',
                    'price' => 150.00,
                    'duration' => '3 days',
                    'location' => 'Stung Treng Provinces',
                    'image' => 'places/stung_treng.webp',
                    'details' => 'Stung Treng is a province of Cambodia in the northeast. It borders the provinces of Ratanakiri to the east, Mondulkiri and Kratié to the south and Kampong Thom and Preah Vihear to the west. Its northern boundary is Cambodia international border with Laos. The Mekong River bisects the province. The province is mostly covered by forest, but logging and fishing put high pressure on the forest and fishery reserves.'
                ]
            ],
            'Kratie' => [
                [
                    'name' => 'Kampi',
                    'price' => 31.00,
                    'duration' => '3 hours',
                    'location' => 'Chit Borei district',
                    'image' => 'places/kampi.jpg',
                    'details' => 'Kampi is a small village located on the eastern bank of the Mekong River, approximately 15 km north of Kratie Town. It is renowned as the homeland of the Irrawaddy freshwater dolphin, a rare species listed on the International Union for Conservation of Nature Red List of Threatened Species. To reach the village, visitors must first get to Kratie city, the province’s capital, and then travel about 15 kilometers on Provincial Road 377 to reach Kampi village located in Sambok commune in Chit Borei district.'
                ],
                [
                    'name' => 'Koh Trong Island',
                    'price' => 47.00,
                    'duration' => '3 hours',
                    'location' => 'Kratie Provinces',
                    'image' => 'places/koh_trong.webp',
                    'details' => 'Koh Trong, an island floating in front of the provincial town of Kratie, is one of the most visited tourist areas of the province. Its natural beauty and local community have made Koh Trong a popular destination attracting both Cambodian and international visitors.'
                ],
                [
                    'name' => 'Kratie Provinces',
                    'price' => 122.00,
                    'duration' => '3 days',
                    'location' => 'Kratie Provinces',
                    'image' => 'places/kratie.jpg',
                    'details' => 'Kratié alternatively spelled Kracheh, is a province of Cambodia located in the northeast. It borders Stung Treng to the north, Mondulkiri to the east, Kampong Thom and Kampong Cham to the west, and Tboung Khmum, and the country of Vietnam to the south.'
                ]
            ],
            'Mondulkiri' => [
                [
                    'name' => 'Bou Sra Waterfall',
                    'price' => 32.00,
                    'duration' => '4 hours',
                    'location' => 'Pech Chreada District',
                    'image' => 'places/bou_sra.jpg',
                    'details' => 'Bou Sra Waterfall, also referred to as Bousra, Bu Sra, Busra or Boo Sra Waterfall is a scenic waterfall now located in Bousra Eco Park, Pech Chreada District, Mondulkiri Province, Cambodia, about 43 kilometers from the provincial town of Sen Monorom and just 15 kilometers from the Vietnamese border. Considered one of Cambodia most famous tourist attractions, Bou Sra is popular due to its triple-tier drop. Previously, Bou Sra could only be viewed on ground level. However, with recent additions of platforms, guests can now see the waterfall from higher elevations for a better view.'
                ],
                [
                    'name' => 'Sen Monorom Town',
                    'price' => 63.00,
                    'duration' => '1 days',
                    'location' => 'Sen Monorom city',
                    'image' => 'places/sen_monorom.jpg',
                    'details' => 'Senmonorom is the capital city of Mondulkiri province, Cambodia. It is the largest city in the province with over 10,000 inhabitants. Senmonorom (and the Mondulkiri province in general) is inhabited by the indigenous Bunong people. Bunong tribesmen and tribeswomen are often seen walking along major highways. The town is popular with NGO workers, loggers, and tourists both from outside Cambodia and from Cambodia capital Phnom Penh.'
                ],
                [
                    'name' => 'Phnom Dos Kromom',
                    'price' => 32.00,
                    'duration' => '3 hours',
                    'location' => 'Dos Kramom Village',
                    'image' => 'places/phnom_dos_kromom.jpg',
                    'details' => 'Phnom Doh Kromom is a pair of hills located in Sokh Dom, Senmonorom municipality. It is an important spiritual site for indigenous groups, especially Bunong people. Legend holds that the original names for the two hills were Chihov Mountain and Chihor Mountain, named for two spirits who governed the sites. A young woman, Phlom, who was betrothed to a young man, Sros, disappeared whilst collecting water. Devastated, Sros searched for her, eventually being reunited in the area of the two hills. Two community elders decreed that the hills should be renamed Yok Sros Phlom in their honor ("yok" meaning "mountain" in Bunong).'
                ],
                [
                    'name' => 'Dak Dam Waterfall',
                    'price' => 34.00,
                    'duration' => '3 hours',
                    'location' => 'Ou Reang District',
                    'image' => 'places/dak_dam.jpg',
                    'details' => 'Dak Dam was first established in February 1933 as a French outpost built as fortified posts intended to protect the road on the Piste Richomme and strengthen the French presence in Indochina. It was known as the Camp Le Rolland, in honour of a French lieutenant who died of malaria while protecting the site. A group of Bunong led a rebellion against the French presence in February 1934 but was quickly controlled, while the Roth Chan, an Khmer civil servant, of another Bunong who had helped the French soldiers were executed by the rebellion.'
                ],
                [
                    'name' => 'Mondulkiri Province',
                    'price' => 134.00,
                    'duration' => '3 days',
                    'location' => 'Mondulkiri Province',
                    'image' => 'places/mondulkiri.webp',
                    'details' => 'Mondulkiri is a province of Cambodia. Bordering the provinces of Kratié to the west, Stung Treng to the northwest, Ratanakiri to the north, and the country of Vietnam to the east and south. It is the most sparsely populated province in the country despite being the largest in land area. The province was established in 1961 from the eastern part of Kratié province. The capital is the town of Senmonorom. '
                ]
            ],
            'Ratanakiri' => [
                [
                    'name' => 'Yeak Laom Volcanic Lake',
                    'price' => 67.00,
                    'duration' => '4 hours',
                    'location' => 'Banlung municipality',
                    'image' => 'places/yeak_laom.png',
                    'details' => 'Lake Yeak Laom is a volcanic crater lake and a tourist destination in the commune of Yeak Laom, Banlung Municipality, Ratanakiri Province, in north-eastern Cambodia. It is about 5 km south of Banlung town, the provincial capital, and is located in a protected area. In 2012, Lake Yeak Laom was selected among the 15 most beautiful crater lakes in the world.'
                ],
                [
                    'name' => 'Katieng Waterfall',
                    'price' => 60.00,
                    'duration' => '3 hours',
                    'location' => 'Lumpart district',
                    'image' => 'places/katieng.webp',
                    'details' => 'The Katieng waterfall is surrounded by native forest and rocks. You can stand on top of the waterfall or walk down the steps below it.'
                ],
                [
                    'name' => 'Cha Ong Waterfall',
                    'price' => 604.00,
                    'duration' => '3 hours',
                    'location' => 'Cha Ong village',
                    'image' => 'places/cha_ong.jpg',
                    'details' => 'Cha Ong waterfall is in the forest in Cha Ong village, OChum commune, about 2 kilometers west of Ban Loung provincial town. It was given its name by the Kreung hill tribe living nearby.The waterfall gets its water from Phnom Eysei Patamak or Phnom Svay near Ban Loung provincial town. From its upper level, the water flows from a small canal before dropping 25 meters to a lower level. A mountain slop leads visitors to the bottom of the waterfall, where they can sit inside a cave and enjoy the view. The waterfall gets its water from Phnom Eysei Patamak or Phnom Svay near Ban Loung provincial town from its upper level, the water flows from a small canal before dropping 25 meters to a lower level. A mountain slop leads visitors to the bottom of the waterfall, where they can sit inside a cave and enjoy the view.Ka Chanh waterfall is located in Ka Chanh commune, Ban Loung district, about 6 kilometers southeast of Ban Loung provincial town. The waterfall is 12 meters high and is fed year round by the OKan Teung canal.'
                ],
                [
                    'name' => 'Lumphat Wildlife Sanctuary',
                    'price' => 62.00,
                    'duration' => '4 hours',
                    'location' => 'South of Banlung',
                    'image' => 'places/lumphat.jpg',
                    'details' => 'Lomphat Wildlife Sanctuary is a protected area covering 2,514.68 km2 (970.92 sq mi) in eastern Cambodia that was established in 1993. It is heavily forested and straddles Ratanakiri, Mondulkiri, and Kratie provinces. It is home to a variety of endangered wildlife such as banteng, gaur, dholes and sun bear, as well as leopards, Eld deer, sambar deer, muntjacs and wild pigs. In addition, a number of rare birds are present: surveys have confirmed the presence of green peafowl, greater and lesser adjutant storks, sarus cranes, oriental pied hornbills, giant ibises, white-shouldered ibises, milky and woolly-necked storks, and slender-billed and white-rumped vultures, which are increasingly rare in most of South and Southeast Asia.'
                ],
                [
                    'name' => 'Virachey National Park',
                    'price' => 65.00,
                    'duration' => '4 hours',
                    'location' => 'Taveng and Vouen Sai Districts',
                    'image' => 'places/virachey.jpeg',
                    'details' => 'Virachey National Park is a national park in north-eastern Cambodia covering an area of 3,380.57 km2 (1,305.25 sq mi). The park is one of only two Cambodian ASEAN Heritage Parks. The park overlaps Ratanakiri and Stung Treng Provinces. The park flora and fauna are threatened by illegal logging. The administration of the park is the responsibility of the Cambodian Ministry of Environment. Located in some of the deepest and most isolated jungles of Cambodia, Virachey is largely unexplored and holds a large assortment of wildlife, waterfalls, and mountains. The park comprises dense semi-evergreen lowlands, montane forests, upland savannah, bamboo thickets, and occasional patches of mixed deciduous forest. Most of the area lies above 400 meters up to 1,500 meters.'
                ],
                [
                    'name' => 'Ratanakiri Province',
                    'price' => 132.00,
                    'duration' => '3 days',
                    'location' => 'Ratanakiri Province',
                    'image' => 'places/ratanakiri.png',
                    'details' => 'Ratanakiri is a province of northeast Cambodia. It borders the provinces of Mondulkiri to the south and Stung Treng to the west and the countries of Laos (Attapeu in Khmer Language is Ach Krapeu) and Vietnam (Gia Lai and Kon Tum) to the north and east, respectively. The province extends from the mountains of the Annamite Range in the north, across a hilly plateau between the Tonlé San and Tonlé Srepok rivers, to tropical deciduous forests in the south. In recent years, logging and mining have scarred Ratanakiri environment, long known for its beauty.'
                ]
            ],
            'Koh Kong' => [
                [
                    'name' => 'Tatai Waterfall',
                    'price' => 56.00,
                    'duration' => '3 hours',
                    'location' => 'Bak Klong village',
                    'image' => 'places/tatai.jpg',
                    'details' => 'Tatai Waterfall is a large rocky cascade located amidst a lush jungle setting in the Tatai river, Koh Kong province. Although the watefall flows all year, in the dry season it is possible to swim in the naturally formed pools at the bottom of the cascade and due to the low flow of water it is possible to walk accross the ledge. In the wet season the river flows in all its might and the watefall is more spectacular with the enraged white foamed waters running over a fall 4 meters long.'
                ],
                [
                    'name' => 'Cardamom Mountains',
                    'price' => 42.00,
                    'duration' => '3 hours',
                    'location' => 'Veal Veang District',
                    'image' => 'places/cardamon.jpg',
                    'details' => 'The mountain range extends along a southeast-northwest axis from Chanthaburi Province in Thailand, and Koh Kong Province in Cambodia on the Gulf of Thailand, to the Veal Veang District in Pursat Province, and extends to the southeast by the Dâmrei (Elephant) Mountains. The Thai part of the range comprise heavily eroded and dispersed mountain fragments of which the Khao Sa Bap, Khao Soi Dao and Chamao-Wong Mountains, east, north and west of Chanthaburi respectively, are the most prominent.'
                ],
                [
                    'name' => 'Peam Krasop Wildlife Sanctuary',
                    'price' => 50.00,
                    'duration' => '3 hours',
                    'location' => 'Koh Kong Province',
                    'image' => 'places/peam_krasop.jpg',
                    'details' => 'Peam Krasop Wildlife Sanctuary is located in southwestern Cambodia. The area is known for its mangroves and numerous islands separated by a maze of bays and channels. Peam Krasaop Wildlife Sanctuary is protected by the Cambodian government.'
                ],
                [
                    'name' => 'Koh Kong Island',
                    'price' => 92.00,
                    'duration' => '1 days',
                    'location' => 'Koh Kong Town',
                    'image' => 'places/kohkong_island.webp',
                    'details' => 'Koh Kong or Outer Koh Kong, is an island in the Gulf of Thailand, in the coastal waters of Cambodia, around 10 km (6 mi) south of Koh Kong town, as it is part of Koh Kong Province. It is Cambodia largest island. The center of Koh Kong Island (Khmer: កោះកុង; Kaôh Kŏng Krau) is situated around 20 km (12 mi) south-west of Koh Kong town. The island stretches 19.5 km (12 mi) from North to South and 6 km (4 mi) from East to West on average. The strait Passe de Lămdăm that separates the island from the mainland in the north is less than 500 m (1,640 ft) wide. The island southern tip lies less than 4 km (2 mi) off the mainland, the narrow strait is the gateway to the Bay of Koh Kong (Chhak Kaoh Kong) in the East, which occupies an area of around 135 km2 (52 sq mi).'
                ],
                [
                    'name' => 'Botum Sakor National Park',
                    'price' => 46.00,
                    'duration' => '3 hours',
                    'location' => 'Kiri Sakor District',
                    'image' => 'places/botum_sakor.JPG',
                    'details' => 'Botum Sakor National Park is the largest national park of Cambodia. Situated on the coast of the Gulf of Thailand, Botum Sakor (or Botumsakor) is a peninsula projecting southwest from the Cardamom Mountains. The national park comprises an area of 1,825.85 km2 (704.96 sq mi) and spans three districts of Koh Kong Province: Kiri Sakor, Botum Sakor and Koh Kong. The park is under the administration of the Cambodian Ministry of Environment, and a small part of the park is included in the Southern Cardamom REDD+ Project (SCRP).'
                ],
                [
                    'name' => 'Koh Kong Province',
                    'price' => 146.00,
                    'duration' => '3 days',
                    'location' => 'Koh Kong Province',
                    'image' => 'places/koh_kong.webp',
                    'details' => 'Koh Kong is a province of Cambodia. Its capital is Khemarak Phoumin (Koh Kong). The most southwestern province of Cambodia, Koh Kong has a long undeveloped coastline and a mountainous, forested, and largely inaccessible interior which includes part of the Cardamom Mountains, Cambodia largest national park (Botum Sakor National Park), and a section of Kirirom National Park.'
                ] 
            ],
            'Banteay Meanchey' => [
                [
                    'name' => 'Ang Trapeang Thmor Reserve',
                    'price' => 26.00,
                    'duration' => '2 hours',
                    'location' => 'Phnom Srok District',
                    'image' => 'places/ang_trapeang_thmor.jpg',
                    'details' => 'Ang Trapeang Thma Protected Landscape is a 126.50 km2 (48.84 sq mi) protected area in northwestern Cambodia that was first established in 1999 and converted to a protected landscape in 2016. The reserve was set aside to protect the rare eastern sarus crane. Prior to the discovery of the crane at Trapeang Thma, there were thought to be fewer than 1,000 of the birds left alive in the world.'
                ],
                [
                    'name' => 'Cheung Krouh Wildlife Sanctuary',
                    'price' => 25.00,
                    'duration' => '2 hours',
                    'location' => 'Banteay Chhmar Village',
                    'image' => 'places/cheung_krouh.jpg',
                    'details' => 'Cheung Krouh is about 63 km from the provincial town. It take about 2 hours to reach there. There are many natural wildlife are preserved by the WWF organization. It is located in road 69A of Banteay Chhmar Village, Banteay Chhmar Commune, Tmar Puok District.'
                ],
                [
                    'name' => 'Banteay Meanchey Province',
                    'price' => 110.00,
                    'duration' => '3 days',
                    'location' => 'Banteay Meanchey Province',
                    'image' => 'places/banteay_meanchey.jpg',
                    'details' => 'Banteay Meanchey is a province of Cambodia located in the far northwest. It borders the provinces of Oddar Meanchey to the north, Siem Reap to the east, Battambang to the south, and shares an international border with Thailand to the west. Its capital and largest city is Serei Saophoan. Banteay Meanchey is the 13th largest province in Cambodia. With a population of 861,883, it ranks as the ninth most populous in the nation. The city of Poipet in the western part of the province is an international border crossing into Thailand. Banteay Meanchey is one of the nine provinces that are part of the Tonlé Sap Biosphere Reserve.'
                ] 
            ],
            'Pailin' => [
                [
                    'name' => 'Phnom Yat',
                    'price' => 34.00,
                    'duration' => '2 hours',
                    'location' => 'Pailin City',
                    'image' => 'places/phnom_yat.webp',
                    'details' => 'Phnom Yat is a cultural and historical site located in Pailin City. It is not a holy place where people come to worship, but also the heart of Pailin City.'
                ],
                [
                    'name' => 'Pailin Waterfall',
                    'price' => 46.00,
                    'duration' => '3 hours',
                    'location' => 'Pailin Province',
                    'image' => 'places/pailin_waterfall.jpg',
                    'details' => 'Waterfall Like all waterfalls, the rainy season is the best time to go with the water flowing best then. But there are still pools of clean water to cool off in during the dry season and the heavily forested hills provide nice scenery. Locals and folks on holiday from Battambang come here on weekends and holidays and the well-worn pathways and picnic spots are safe for your use. Hiking to the upper level brings you to more pools. Your best bet for getting out here is to take a moto-taxi or have one lead the way, as there are several turns on unmarked small roads.'
                ],
                [
                    'name' => 'Goh-Ay Mountain',
                    'price' => 45.00,
                    'duration' => '3 hours',
                    'location' => 'Pailin City',
                    'image' => 'places/goh_ay.jpg',
                    'details' => 'Goh-Ay Mountain in Pailin City is really a wonderful and nice place to visit. The location of the Goh-Ay Mountain is very calm and soothing.'
                ],
                [
                    'name' => 'Pailin Province',
                    'price' => 125.00,
                    'duration' => '3 days',
                    'location' => 'Pailin Province',
                    'image' => 'places/pailin.jpg',
                    'details' => 'Pailin is a province in western Cambodia at the northern edge of the Cardamom Mountains near the border of Thailand. This province is surrounded by Battambang province, and was officially carved out of Battambang to become a separate administrative division after the surrender of the Ieng Sary faction of the Khmer Rouge in 1996. Pailin is known to much of the world for having long been a stronghold of the Khmer Rouge, remaining under their control long after they were defeated in 1979 and serving from 1994 to 1998 as the capital of the Provisional Government of National Union and National Salvation of Cambodia. Within Cambodia, Pailin is known for its natural resources, namely precious gems and timber.'
                ]
            ]
        ];
        
        foreach ($places as $provinceName => $provincePlaces) {
            $province = Province::where('name', $provinceName)->first();

            if ($province) {
                foreach ($provincePlaces as $placeData) {
                    Place::create([
                        'province_id' => $province->id,
                        'name' => $placeData['name'],
                        'price' => $placeData['price'],
                        'duration' => $placeData['duration'],
                        'location' => $placeData['location'],
                        'image' => $placeData['image'],
                        'details' => $placeData['details'],
                    ]);
                }
            }
        }
    }
}