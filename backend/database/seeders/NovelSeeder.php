<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NovelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('novels')->insert([
            [
                'category' => 'Marple',
                'hungarian_title' => 'A láthatatlan kéz',
                'english_title' => 'The Moving Finger',
                'year' => 1942,
                'price' => 3990
            ],
            [
                'category' => 'Poirot',
                'hungarian_title' => 'Mrs. McGinty halott',
                'english_title' => 'Mrs. McGinty\'s Dead',
                'year' => 1952,
                'price' => 4999
            ],
            [
                'category' => NULL,
                'hungarian_title' => 'És eljő a halál...',
                'english_title' => 'Death Comes as the End',
                'year' => 1944, 'price' => 4999
            ],
            [
                'category' => 'Marple', 
                'hungarian_title' => 'Egy marék rozs', 
                'english_title' => 'A Pocket Full of Rye', 
                'year' => 1953, 
                'price' => 5999
            ],
            [
                'category' => 'Poirot', 
                'hungarian_title' => 'Zátonyok közt', 
                'english_title' => 'Taken at the Flood', 
                'year' => 1948, 
                'price' => 3990
            ],
            [
                'category' => 'Poirot', 
                'hungarian_title' => 'Nyaraló gyilkosok', 
                'english_title' => 'Evil Under the Sun', 
                'year' => 1941, 
                'price' => 3990
            ],
            [
                'category' => 'Poirot', 
                'hungarian_title' => 'A fogorvos széke', 
                'english_title' => 'One, Two, Buckle My Shoe', 
                'year' => 1940, 
                'price' => 3990
            ],
            [
                'category' => 'Poirot', 
                'hungarian_title' => 'Hétvégi gyilkosság', 
                'english_title' => 'The Hollow', 
                'year' => 1946, 
                'price' => 4999
            ],
            [
                'category' => NULL, 
                'hungarian_title' => 'A titkos ellenfél', 
                'english_title' => 'The Secret Adversary', 
                'year' => 1922, 
                'price' => 5999
            ],
            [
                'category' => 'Marple', 
                'hungarian_title' => 'Paddington 16.50', 
                'english_title' => '4.50 from Paddington', 
                'year' => 1957, 
                'price' => 5999
            ],
            [
                'category' => 'Poirot', 
                'hungarian_title' => 'Temetni veszélyes', 
                'english_title' => 'After the Funeral', 
                'year' => 1953, 
                'price' => 5999
            ],
            [
                'category' => NULL, 
                'hungarian_title' => 'Az élet súlya', 
                'english_title' => 'The Burden', 
                'year' => 1956, 
                'price' => 4999
            ],
            [
                'category' => 'Poirot', 
                'hungarian_title' => 'Lord Edgware meghal', 
                'english_title' => 'Lord Edgware Dies', 
                'year' => 1933, 
                'price' => 3990
            ],
            [
                'category' => NULL, 
                'hungarian_title' => 'Gyöngyöző cián', 
                'english_title' => 'Sparkling Cyanide', 
                'year' => 1945, 
                'price' => 5999
            ],
            [
                'category' => NULL, 
                'hungarian_title' => 'Miért nem szóltak Evansnak?', 
                'english_title' => 'Why Didn\'t They Ask Evans?', 
                'year' => 1934, 
                'price' => 5999
            ],
            [
                'category' => NULL, 
                'hungarian_title' => 'Úti célja ismeretlen', 
                'english_title' => 'Destination Unknown', 
                'year' => 1954, 
                'price' => 5999
            ],
            [
                'category' => NULL, 
                'hungarian_title' => 'Királyok és kalandorok', 
                'english_title' => 'The Secret of Chimneys', 
                'year' => 1925, 
                'price' => 4999
            ],
            [
                'category' => 'Poirot', 
                'hungarian_title' => 'Ház a sziklán', 
                'english_title' => 'Peril at End House', 
                'year' => 1932, 
                'price' => 4999
            ],
            [
                'category' => 'Poirot', 
                'hungarian_title' => 'Öt kismalac', 
                'english_title' => 'Five Little Pigs', 
                'year' => 1943, 
                'price' => 3990
            ],
            [
                'category' => 'Poirot', 
                'hungarian_title' => 'Poirot karácsonya', 
                'english_title' => 'Hercule Poirot\'s Christmas', 
                'year' => 1938, 
                'price' => 5999
            ],
            [
                'category' => NULL, 
                'hungarian_title' => 'Tíz kicsi néger', 
                'english_title' => 'Ten Little Niggers', 
                'year' => 1939, 
                'price' => 4999
            ],
            [
                'category' => NULL, 
                'hungarian_title' => 'Bagdadba jöttek', 
                'english_title' => 'They Came to Baghdad', 
                'year' => 1951, 
                'price' => 5999
            ],
            [
                'category' => 'Marple', 
                'hungarian_title' => 'Nem csalás, nem ámítás', 
                'english_title' => 'They Do It with Mirrors', 
                'year' => 1952, 
                'price' => 3990
            ],
            [
                'category' => 'Poirot', 
                'hungarian_title' => 'Gyilkosság az Orient expresszen', 
                'english_title' => 'Murder on the Orient Express', 
                'year' => 1934, 
                'price' => 3990
            ],
            [
                'category' => 'Marple', 
                'hungarian_title' => 'A kristálytükör meghasadt', 
                'english_title' => 'The Mirror Crack\'d from Side to Side', 
                'year' => 1962, 
                'price' => 3990
            ],
            [
                'category' => NULL, 
                'hungarian_title' => 'A rózsa és a tiszafa', 
                'english_title' => 'The Rose and the Yew Tree', 
                'year' => 1948, 
                'price' => 4999
            ],
            [
                'category' => 'Poirot', 
                'hungarian_title' => 'Gyilkosság Mezopotámiában', 
                'english_title' => 'Murder in Mesopotamia', 
                'year' => 1936, 
                'price' => 5999
            ],
            [
                'category' => NULL, 
                'hungarian_title' => 'Az ijedt szemű lány', 
                'english_title' => 'Murder on the Links', 
                'year' => 1923, 
                'price' => 3990
            ],
            [
                'category' => 'Poirot', 
                'hungarian_title' => 'A titokzatos Kék Vonat', 
                'english_title' => 'The Mystery of the Blue Train', 
                'year' => 1928, 
                'price' => 3990
            ],
            [
                'category' => NULL, 
                'hungarian_title' => 'A barna ruhás férfi', 
                'english_title' => 'The Man in the Brown Suit', 
                'year' => 1924, 
                'price' => 4999
            ],
            [
                'category' => 'Poirot', 
                'hungarian_title' => 'Macska a galambok között', 
                'english_title' => 'Cat Among the Pigeons', 
                'year' => 1959, 
                'price' => 3990
            ],
            [
                'category' => NULL, 
                'hungarian_title' => 'Végtelen éjszaka', 
                'english_title' => 'Endless Night', 
                'year' => 1967, 
                'price' => 4999
            ],
            [
                'category' => 'Poirot', 
                'hungarian_title' => 'Függöny: Poirot utolsó esete', 
                'english_title' => 'Curtain: Poirot\'s Last Case', 
                'year' => 1975, 
                'price' => 5999
            ],
            [
                'category' => NULL, 
                'hungarian_title' => 'Az óriás kenyere', 
                'english_title' => 'Giant\'s Bread', 
                'year' => 1930, 
                'price' => 3990
            ],
            [
                'category' => NULL, 
                'hungarian_title' => 'A frankfurti utas', 
                'english_title' => 'Passenger to Frankfurt', 
                'year' => 1970, 
                'price' => 5999
            ],
            [
                'category' => 'Marple', 
                'hungarian_title' => 'Holttest a könyvtárszobában', 
                'english_title' => 'The Body in the Library', 
                'year' => 1942, 
                'price' => 4999
            ],
            [
                'category' => 'Poirot', 
                'hungarian_title' => 'Az órák', 
                'english_title' => 'The Clocks', 
                'year' => 1963, 
                'price' => 5999
            ],
            [
                'category' => 'Poirot', 
                'hungarian_title' => 'A kutya se látta', 
                'english_title' => 'Dumb Witness', 
                'year' => 1937, 
                'price' => 3990
            ],
            [
                'category' => NULL, 
                'hungarian_title' => 'A sors kapuja', 
                'english_title' => 'Postern of Fate', 
                'year' => 1973, 
                'price' => 5999
            ],
            [
                'category' => NULL, 
                'hungarian_title' => 'A gyűlölet őrültje', 
                'english_title' => 'Murder Is Easy', 
                'year' => 1939, 
                'price' => 4999
            ],
            [
                'category' => 'Marple', 
                'hungarian_title' => 'Szunnyadó gyilkosság', 
                'english_title' => 'Sleeping Murder', 
                'year' => 1976, 
                'price' => 5999
            ],
            [
                'category' => 'Poirot', 
                'hungarian_title' => 'Tragédia három felvonásban', 
                'english_title' => 'Three Acts Tragedy', 
                'year' => 1935, 
                'price' => 5999
            ],
            [
                'category' => 'Poirot', 
                'hungarian_title' => 'Halál a felhők fölött', 
                'english_title' => 'Death in the Clouds', 
                'year' => 1935, 
                'price' => 3990
            ],
            [
                'category' => 'Marple', 
                'hungarian_title' => 'Rejtély az Antillákon', 
                'english_title' => 'A Caribbean Mystery', 
                'year' => 1964, 
                'price' => 3990
            ],
            [
                'category' => 'Marple', 
                'hungarian_title' => 'Nemezis', 
                'english_title' => 'Nemesis', 
                'year' => 1971, 
                'price' => 4999
            ],
            [
                'category' => 'Poirot', 
                'hungarian_title' => 'Gloriett a hullának', 
                'english_title' => 'Dead Man\'s Folly', 
                'year' => 1956,
                'price' => 4999
            ],
            [
                'category' => 'Poirot', 
                'hungarian_title' => 'Nyílt kártyákkal', 
                'english_title' => 'Cards on the Table', 
                'year' => 1936, 
                'price' => 3990
            ],
            [
                'category' => NULL, 
                'hungarian_title' => 'A Hét Számlap rejtélye', 
                'english_title' => 'The Seven Dials Mystery', 
                'year' => 1929, 
                'price' => 5999
            ],
            [
                'category' => 'Poirot', 
                'hungarian_title' => 'Az Ackroyd-gyilkosság', 
                'english_title' => 'The Murder of Roger Ackroyd', 
                'year' => 1926, 
                'price' => 3990
            ],
            [
                'category' => 'Poirot', 
                'hungarian_title' => 'Ellopott gyilkosság', 
                'english_title' => 'Hallowe\'en Party', 
                'year' => 1969, 
                'price' => 4999
            ],
            [
                'category' => 'Poirot', 
                'hungarian_title' => 'A titokzatos Négyes', 
                'english_title' => 'The Big Four', 
                'year' => 1927, 
                'price' => 3990
            ],
            [
                'category' => 'Marple', 
                'hungarian_title' => 'Gyilkosság meghirdetve', 
                'english_title' => 'A Murder is Announced', 
                'year' => 1950, 
                'price' => 5999
            ],
            [
                'category' => 'Poirot', 
                'hungarian_title' => 'A titokzatos stylesi eset', 
                'english_title' => 'The Mysterious Affair at Styles', 
                'year' => 1920, 
                'price' => 4999
            ],
            [
                'category' => 'Poirot', 
                'hungarian_title' => 'Találkozás a halállal', 
                'english_title' => 'Appointment with Death', 
                'year' => 1938, 
                'price' => 3990
            ],
            [
                'category' => 'Poirot', 
                'hungarian_title' => 'Az elefántok nem felejtenek', 
                'english_title' => 'Elephants Can Remember', 
                'year' => 1972, 
                'price' => 5999
            ],
            [
                'category' => 'Marple', 
                'hungarian_title' => 'Gyilkosság a paplakban', 
                'english_title' => 'The Murder at the Vicarage', 
                'year' => 1930, 
                'price' => 5999
            ],
            [
                'category' => NULL, 
                'hungarian_title' => 'Távol telt tőled tavaszom', 
                'english_title' => 'Absent in the Spring', 
                'year' => 1944, 
                'price' => 3990
            ],
            [
                'category' => NULL, 
                'hungarian_title' => 'Bűbájos gyilkosok', 
                'english_title' => 'The Pale Horse', 
                'year' => 1961, 
                'price' => 5999
            ],
            [
                'category' => NULL, 
                'hungarian_title' => 'Befejezetlen portré', 
                'english_title' => 'Unfinished Portrait', 
                'year' => 1934, 
                'price' => 4999
            ],
            [
                'category' => 'Poirot', 
                'hungarian_title' => 'Cipruskoporsó', 
                'english_title' => 'Sad Cypress', 
                'year' => 1940, 
                'price' => 3990
            ],
            [
                'category' => NULL, 
                'hungarian_title' => 'A Sittaford-rejtély', 
                'english_title' => 'The Sittaford Mystery', 
                'year' => 1931, 
                'price' => 5999
            ],
            [
                'category' => NULL, 
                'hungarian_title' => 'Ferde ház', 
                'english_title' => 'Crooked House', 
                'year' => 1949, 
                'price' => 3990
            ],
            [
                'category' => 'Poirot', 
                'hungarian_title' => 'Harmadik lány', 
                'english_title' => 'Third Girl', 
                'year' => 1966, 
                'price' => 3990
            ],
            [
                'category' => 'Poirot', 
                'hungarian_title' => 'Az ABC-gyilkosságok', 
                'english_title' => 'The ABC Murders', 
                'year' => 1936, 
                'price' => 5999
            ],
            [
                'category' => 'Poirot', 
                'hungarian_title' => 'Halál a Níluson', 
                'english_title' => 'Death on the Nile', 
                'year' => 1938, 
                'price' => 4999
            ],
            [
                'category' => NULL, 
                'hungarian_title' => 'Balhüvelykem bizsereg...', 
                'english_title' => 'By the Pricking of My Thumbs', 
                'year' => 1968, 
                'price' => 3990
            ],
            [
                'category' => 'Poirot', 
                'hungarian_title' => 'Gyilkosság a diákszállóban', 
                'english_title' => 'Hickory, Dickory, Dock', 
                'year' => 1955, 
                'price' => 4999
            ],
            [
                'category' => NULL, 
                'hungarian_title' => 'Az alibi', 
                'english_title' => 'Ordeal by Innocence', 
                'year' => 1958, 
                'price' => 4999
            ],
            [
                'category' => NULL, 
                'hungarian_title' => 'A lányom mindig a lányom', 
                'english_title' => 'A Daughter\'s a Daughter', 
                'year' => 1952, 
                'price' => 3990
            ],
            [
                'category' => NULL, 
                'hungarian_title' => 'N vagy M', 
                'english_title' => 'N or M?', 
                'year' => 1941, 
                'price' => 3990
            ],
            [
                'category' => NULL, 
                'hungarian_title' => 'Éjféltájt', 
                'english_title' => 'Towards Zero', 
                'year' => 1944, 
                'price' => 5999
            ],
            [
                'category' => 'Marple', 
                'hungarian_title' => 'A Bertram Szálló', 
                'english_title' => 'At Bertram\'s Hotel', 
                'year' => 1965, 
                'price' => 5999
            ],
        ]);
      
        
    }
}
