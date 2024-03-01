<?php

namespace Database\Seeders;

use App\Models\Dish;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;

use Illuminate\Http\File;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dishes = [
            [
                'name' => 'Margherita',
                'price' => 6.00,
                'description' => "Crosta sottile e croccante, condita con una deliziosa salsa di pomodoro fresco e olio d'oliva di prima qualità. Il formaggio mozzarella di alta qualità si fonde in una consistenza cremosa, mentre le foglie di basilico fresco aggiungono un tocco erbaceo e profumato. Un'esplosione di sapori autentici che celebra la tradizione culinaria italiana con gusto e raffinatezza.",
                "restaurant_id" => 1,
                'visible' => true,
                'ingredients' => 'pomodoro, mozzarella, basilico',
                'picture' => 'https://www.shutterstock.com/shutterstock/photos/582934354/display_1500/stock-photo-pizza-margherita-mozzarella-isolated-on-white-background-582934354.jpg',
            ],
            [
                'name' => 'Margherita',
                'price' => 6.00,
                'description' => "Crosta sottile e croccante, condita con una deliziosa salsa di pomodoro fresco e olio d'oliva di prima qualità. Il formaggio mozzarella di alta qualità si fonde in una consistenza cremosa, mentre le foglie di basilico fresco aggiungono un tocco erbaceo e profumato. Un'esplosione di sapori autentici che celebra la tradizione culinaria italiana con gusto e raffinatezza.",
                "restaurant_id" => 2,
                'visible' => true,
                'ingredients' => 'pomodoro, mozzarella, basilico',
                'picture' => 'https://www.shutterstock.com/shutterstock/photos/582934354/display_1500/stock-photo-pizza-margherita-mozzarella-isolated-on-white-background-582934354.jpg',
            ],
            [
                'name' => 'Margherita',
                'price' => 6.00,
                'description' => "Crosta sottile e croccante, condita con una deliziosa salsa di pomodoro fresco e olio d'oliva di prima qualità. Il formaggio mozzarella di alta qualità si fonde in una consistenza cremosa, mentre le foglie di basilico fresco aggiungono un tocco erbaceo e profumato. Un'esplosione di sapori autentici che celebra la tradizione culinaria italiana con gusto e raffinatezza.",
                "restaurant_id" => 3,
                'visible' => true,
                'ingredients' => 'pomodoro, mozzarella, basilico',
                'picture' => 'https://www.shutterstock.com/shutterstock/photos/582934354/display_1500/stock-photo-pizza-margherita-mozzarella-isolated-on-white-background-582934354.jpg',
            ],
            [
                'name' => 'Quattro stagioni',
                'price' => 8.00,
                "restaurant_id" => 2,
                'description' => "Una sinfonia di sapori su una crosta perfettamente bilanciata. La nostra pizza Quattro Stagioni presenta quattro deliziose sezioni, ognuna rappresentante una stagione. Troverete freschezza primaverile con pomodoro e carciofi, il calore estivo con prosciutto cotto, l'autunno incarnato da funghi porcini, e la ricchezza invernale con olive nere. Il tutto abbracciato da una base di mozzarella di alta qualità e arricchito da una salsa di pomodoro aromatico. Un viaggio attraverso le stagioni in ogni morso.",
                'visible' => true,
                'ingredients' => 'pomodoro, mozzarella, prosciutto cotto, funghi, olive, carciofi',
                'picture' => 'https://www.shutterstock.com/shutterstock/photos/2238604689/display_1500/stock-photo-homemade-pizza-four-seasons-with-tomatoes-mozzarella-mushrooms-artichokes-ham-and-olives-close-2238604689.jpg',
            ],
            [
                'name' => 'Quattro stagioni',
                'price' => 8.00,
                "restaurant_id" => 3,
                'description' => "Una sinfonia di sapori su una crosta perfettamente bilanciata. La nostra pizza Quattro Stagioni presenta quattro deliziose sezioni, ognuna rappresentante una stagione. Troverete freschezza primaverile con pomodoro e carciofi, il calore estivo con prosciutto cotto, l'autunno incarnato da funghi porcini, e la ricchezza invernale con olive nere. Il tutto abbracciato da una base di mozzarella di alta qualità e arricchito da una salsa di pomodoro aromatico. Un viaggio attraverso le stagioni in ogni morso.",
                'visible' => true,
                'ingredients' => 'pomodoro, mozzarella, prosciutto cotto, funghi, olive, carciofi',
                'picture' => 'https://www.shutterstock.com/shutterstock/photos/2238604689/display_1500/stock-photo-homemade-pizza-four-seasons-with-tomatoes-mozzarella-mushrooms-artichokes-ham-and-olives-close-2238604689.jpg',
            ],
            [
                'name' => 'Quattro stagioni',
                'price' => 8.00,
                "restaurant_id" => 1,
                'description' => "Una sinfonia di sapori su una crosta perfettamente bilanciata. La nostra pizza Quattro Stagioni presenta quattro deliziose sezioni, ognuna rappresentante una stagione. Troverete freschezza primaverile con pomodoro e carciofi, il calore estivo con prosciutto cotto, l'autunno incarnato da funghi porcini, e la ricchezza invernale con olive nere. Il tutto abbracciato da una base di mozzarella di alta qualità e arricchito da una salsa di pomodoro aromatico. Un viaggio attraverso le stagioni in ogni morso.",
                'visible' => true,
                'ingredients' => 'pomodoro, mozzarella, prosciutto cotto, funghi, olive, carciofi',
                'picture' => 'https://www.shutterstock.com/shutterstock/photos/2238604689/display_1500/stock-photo-homemade-pizza-four-seasons-with-tomatoes-mozzarella-mushrooms-artichokes-ham-and-olives-close-2238604689.jpg',
            ],
            [
                'name' => 'Capricciosa',
                'price' => 7.50,
                "restaurant_id" => 3,
                'description' => "Un'esplosione di sapori e colori su ogni fetta. La nostra pizza Capricciosa è un tripudio di ingredienti deliziosi che si fondono armoniosamente sulla crosta. La mozzarella di alta qualità si combina con pomodoro fresco e prosciutto cotto, arricchita da carciofi teneri e funghi champignon. Il tutto è condito con un tocco di origano e olio d'oliva, creando un'esperienza culinaria appagante e piena di gusto. Un capriccio irresistibile per i palati più esigenti.",
                'visible' => true,
                'ingredients' => 'pomodoro, mozzarella, prosciutto cotto, funghi, carciofi',
                'picture' => 'https://www.shutterstock.com/shutterstock/photos/1758758507/display_1500/stock-photo-tasty-italian-capricciosa-pizza-with-fresh-ingredients-1758758507.jpg',
            ],
            [
                'name' => 'Capricciosa',
                'price' => 7.50,
                "restaurant_id" => 2,
                'description' => "Un'esplosione di sapori e colori su ogni fetta. La nostra pizza Capricciosa è un tripudio di ingredienti deliziosi che si fondono armoniosamente sulla crosta. La mozzarella di alta qualità si combina con pomodoro fresco e prosciutto cotto, arricchita da carciofi teneri e funghi champignon. Il tutto è condito con un tocco di origano e olio d'oliva, creando un'esperienza culinaria appagante e piena di gusto. Un capriccio irresistibile per i palati più esigenti.",
                'visible' => true,
                'ingredients' => 'pomodoro, mozzarella, prosciutto cotto, funghi, carciofi',
                'picture' => 'https://www.shutterstock.com/shutterstock/photos/1758758507/display_1500/stock-photo-tasty-italian-capricciosa-pizza-with-fresh-ingredients-1758758507.jpg',
            ],
            [
                'name' => 'Capricciosa',
                'price' => 7.50,
                "restaurant_id" => 1,
                'description' => "Un'esplosione di sapori e colori su ogni fetta. La nostra pizza Capricciosa è un tripudio di ingredienti deliziosi che si fondono armoniosamente sulla crosta. La mozzarella di alta qualità si combina con pomodoro fresco e prosciutto cotto, arricchita da carciofi teneri e funghi champignon. Il tutto è condito con un tocco di origano e olio d'oliva, creando un'esperienza culinaria appagante e piena di gusto. Un capriccio irresistibile per i palati più esigenti.",
                'visible' => true,
                'ingredients' => 'pomodoro, mozzarella, prosciutto cotto, funghi, carciofi',
                'picture' => 'https://www.shutterstock.com/shutterstock/photos/1758758507/display_1500/stock-photo-tasty-italian-capricciosa-pizza-with-fresh-ingredients-1758758507.jpg',
            ],
            [
                'name' => 'Lasagne',
                'price' => 5.00,
                'description' => "Strati di pasta all'uovo intercalati con un ricco ragù di carne, pomodoro e mozzarella fusa, il tutto accarezzato da una soffice besciamella. La fusione di sapori e consistenze è coronata da una doratura croccante al forno. Le nostre lasagne sono un inno alla tradizione, preparate con cura e amore per regalare ai nostri ospiti un autentico viaggio culinario italiano.",
                "restaurant_id" => 4,
                'visible' => true,
                'ingredients' => 'pomodoro, mozzarella, basilico, carne macinata, parmigiano, besciamella',
                'picture' => 'https://www.shutterstock.com/shutterstock/photos/142426168/display_1500/stock-photo-close-up-of-a-traditional-lasagna-made-with-minced-beef-bolognese-sauce-topped-with-basil-leafs-142426168.jpg',
            ],
            [
                'name' => 'Lasagne',
                'price' => 5.00,
                'description' => "Strati di pasta all'uovo intercalati con un ricco ragù di carne, pomodoro e mozzarella fusa, il tutto accarezzato da una soffice besciamella. La fusione di sapori e consistenze è coronata da una doratura croccante al forno. Le nostre lasagne sono un inno alla tradizione, preparate con cura e amore per regalare ai nostri ospiti un autentico viaggio culinario italiano.",
                "restaurant_id" => 5,
                'visible' => true,
                'ingredients' => 'pomodoro, mozzarella, basilico, carne macinata, parmigiano, besciamella',
                'picture' => 'https://www.shutterstock.com/shutterstock/photos/142426168/display_1500/stock-photo-close-up-of-a-traditional-lasagna-made-with-minced-beef-bolognese-sauce-topped-with-basil-leafs-142426168.jpg',
            ],
            [
                'name' => 'Lasagne',
                'price' => 5.00,
                'description' => "Strati di pasta all'uovo intercalati con un ricco ragù di carne, pomodoro e mozzarella fusa, il tutto accarezzato da una soffice besciamella. La fusione di sapori e consistenze è coronata da una doratura croccante al forno. Le nostre lasagne sono un inno alla tradizione, preparate con cura e amore per regalare ai nostri ospiti un autentico viaggio culinario italiano.",
                "restaurant_id" => 6,
                'visible' => true,
                'ingredients' => 'pomodoro, mozzarella, basilico, carne macinata, parmigiano, besciamella',
                'picture' => 'https://www.shutterstock.com/shutterstock/photos/142426168/display_1500/stock-photo-close-up-of-a-traditional-lasagna-made-with-minced-beef-bolognese-sauce-topped-with-basil-leafs-142426168.jpg',
            ],
            [
                'name' => 'Pasta al pesto',
                'price' => 6.00,
                "restaurant_id" => 8,
                'description' => "La nostra pasta al pesto presenta trofie o linguine avvolti in un vellutato abbraccio di pesto fresco, preparato con basilico aromatico, pinoli tostati, parmigiano reggiano, aglio e olio d'oliva extravergine di alta qualità. La combinazione di ingredienti di prima scelta offre un piatto vibrante, ricco di sapore e dal profumo irresistibile.",
                'visible' => true,
                'ingredients' => 'basilico, pinoli, parmigiano, aglio',
                'picture' => 'https://www.shutterstock.com/shutterstock/photos/2059392875/display_1500/stock-photo-trofie-al-pesto-italian-pasta-with-pesto-sauce-made-from-basil-leaves-parmesan-cheese-pine-nuts-2059392875.jpg',
            ],
            [
                'name' => 'Pasta al pesto',
                'price' => 6.00,
                "restaurant_id" => 7,
                'description' => "La nostra pasta al pesto presenta trofie o linguine avvolti in un vellutato abbraccio di pesto fresco, preparato con basilico aromatico, pinoli tostati, parmigiano reggiano, aglio e olio d'oliva extravergine di alta qualità. La combinazione di ingredienti di prima scelta offre un piatto vibrante, ricco di sapore e dal profumo irresistibile.",
                'visible' => true,
                'ingredients' => 'basilico, pinoli, parmigiano, aglio',
                'picture' => 'https://www.shutterstock.com/shutterstock/photos/2059392875/display_1500/stock-photo-trofie-al-pesto-italian-pasta-with-pesto-sauce-made-from-basil-leaves-parmesan-cheese-pine-nuts-2059392875.jpg',
            ],
            [
                'name' => 'Pasta al pesto',
                'price' => 6.00,
                "restaurant_id" => 9,
                'description' => "La nostra pasta al pesto presenta trofie o linguine avvolti in un vellutato abbraccio di pesto fresco, preparato con basilico aromatico, pinoli tostati, parmigiano reggiano, aglio e olio d'oliva extravergine di alta qualità. La combinazione di ingredienti di prima scelta offre un piatto vibrante, ricco di sapore e dal profumo irresistibile.",
                'visible' => true,
                'ingredients' => 'basilico, pinoli, parmigiano, aglio',
                'picture' => 'https://www.shutterstock.com/shutterstock/photos/2059392875/display_1500/stock-photo-trofie-al-pesto-italian-pasta-with-pesto-sauce-made-from-basil-leaves-parmesan-cheese-pine-nuts-2059392875.jpg',
            ],
            [
                'name' => 'Pasta al pomodoro',
                'price' => 4.50,
                "restaurant_id" => 10,
                'description' => "La nostra pasta al pomodoro presenta delicati spaghetti avvolti in una salsa fresca e vellutata, preparata con pomodori maturi, olio d'oliva e una sfumatura di basilico fresco. Un piatto semplice ma pieno di carattere, dove la dolcezza dei pomodori si sposa armoniosamente con la leggera acidità e il profumo erbaceo delle erbe. Un'esperienza culinaria che celebra la bellezza della cucina tradizionale italiana.",
                'visible' => true,
                'ingredients' => 'pomodoro, basilico',
                'picture' => 'https://www.shutterstock.com/shutterstock/photos/1772777390/display_1500/stock-photo-spaghetti-with-tomato-sauce-with-basil-on-a-grey-background-1772777390.jpg',
            ],
            [
                'name' => 'Pasta al pomodoro',
                'price' => 4.50,
                "restaurant_id" => 4,
                'description' => "La nostra pasta al pomodoro presenta delicati spaghetti avvolti in una salsa fresca e vellutata, preparata con pomodori maturi, olio d'oliva e una sfumatura di basilico fresco. Un piatto semplice ma pieno di carattere, dove la dolcezza dei pomodori si sposa armoniosamente con la leggera acidità e il profumo erbaceo delle erbe. Un'esperienza culinaria che celebra la bellezza della cucina tradizionale italiana.",
                'visible' => true,
                'ingredients' => 'pomodoro, basilico',
                'picture' => 'https://www.shutterstock.com/shutterstock/photos/1772777390/display_1500/stock-photo-spaghetti-with-tomato-sauce-with-basil-on-a-grey-background-1772777390.jpg',
            ],
            [
                'name' => 'Cotoletta alla milanese',
                'price' => 6.00,
                'description' => "La nostra cotoletta è un capolavoro croccante e succulento. Una generosa fettina di carne, tradizionalmente vitello, è delicatamente impanata con pangrattato fresco e aromatizzata con erbe selezionate. Dorata a perfezione la cotoletta raggiunge una croccantezza irresistibile all'esterno, mentre la carne rimane tenera e succulenta all'interno.",
                "restaurant_id" => 7,
                'visible' => true,
                'ingredients' => 'carne di vitello, pangrattato, burro',
                'picture' => 'https://www.shutterstock.com/shutterstock/photos/1055477675/display_1500/stock-photo-fried-veal-cutlet-milanese-with-lemon-and-french-fries-close-up-on-a-plate-on-a-table-horizontal-1055477675.jpg',
            ],
            [
                'name' => 'Cotoletta alla milanese',
                'price' => 6.00,
                'description' => "La nostra cotoletta è un capolavoro croccante e succulento. Una generosa fettina di carne, tradizionalmente vitello, è delicatamente impanata con pangrattato fresco e aromatizzata con erbe selezionate. Dorata a perfezione la cotoletta raggiunge una croccantezza irresistibile all'esterno, mentre la carne rimane tenera e succulenta all'interno.",
                "restaurant_id" => 8,
                'visible' => true,
                'ingredients' => 'carne di vitello, pangrattato, burro',
                'picture' => 'https://www.shutterstock.com/shutterstock/photos/1055477675/display_1500/stock-photo-fried-veal-cutlet-milanese-with-lemon-and-french-fries-close-up-on-a-plate-on-a-table-horizontal-1055477675.jpg',
            ],
            [
                'name' => 'Hamburger',
                'price' => 8.00,
                "restaurant_id" => 5,
                'description' => "Il nostro panino hamburger presenta un succulento burger di carne di manzo di alta qualità, sapientemente grigliato per una consistenza succosa e saporita. Accompagnato da formaggio fuso, lattuga croccante, pomodoro fresco e cipolla caramellata, il tutto racchiuso in un morbido panino ai semi di sesamo. Un connubio perfetto di sapori che soddisfa ogni palato, arricchito da una selezione di salse gourmet per un tocco di raffinatezza. ",
                'visible' => true,
                'ingredients' => 'pane con sesamo, hamburger di manzo, formaggio, cipolla caramellata, lattuga, pomodoro, salse',
                'picture' => 'https://www.shutterstock.com/shutterstock/photos/361890518/display_1500/stock-photo-home-made-hamburger-with-lettuce-and-cheese-361890518.jpg',
            ],
            [
                'name' => 'Spaghetti alle vongole',
                'price' => 7.50,
                "restaurant_id" => 6,
                'description' => "I nostri spaghetti cotti al dente abbracciano le vongole, cotte con aglio dorato, peperoncino e prezzemolo fresco. Il tutto è legato con un tocco di vino bianco e olio d'oliva extravergine, creando un piatto dai sapori equilibrati e avvolgenti. ",
                'visible' => true,
                'ingredients' => 'vongole, prezzemolo, aglio, peperoncino, vino bianco',
                'picture' => 'https://www.shutterstock.com/shutterstock/photos/369535340/display_1500/stock-photo-seafood-pasta-with-clams-spaghetti-alle-vongole-on-wooden-background-369535340.jpg',
            ],
            [
                'name' => 'Cocktail di gamberi',
                'price' => 8.00,
                "restaurant_id" => 9,
                'description' => "I nostri gamberi sono serviti su un letto di croccante lattuga iceberg. Accompagnati da una salsa cocktail classica, preparata con ketchup, maionese, succo di limone e un pizzico di pepe.",
                'visible' => true,
                'ingredients' => 'gamberi, salsa rosa',
                'picture' => 'https://www.shutterstock.com/shutterstock/photos/97309226/display_1500/stock-photo-shrimp-cocktail-97309226.jpg',
            ],
            [
                'name' => 'Spaghetti di riso con verdure',
                'price' => 4.00,
                "restaurant_id" => 11,
                'description' => "Spaghetti di riso saltati con salsa di soia e mix di verdure.",
                'visible' => true,
                'ingredients' => 'salsa di soia, carote, zucchine, germogli di soia, uovo.',
                'picture' => 'https://www.shutterstock.com/shutterstock/photos/1433920913/display_1500/stock-photo-hakka-noodles-is-a-popular-indo-chinese-recipes-schezwan-noodles-with-vegetables-in-a-plate-top-1433920913.jpg',
            ],
            [
                'name' => 'Ravioli di carne alla griglia',
                'price' => 3.00,
                "restaurant_id" => 11,
                'description' => "Ravioli alla griglia ripieni di carne di maiale.",
                'visible' => true,
                'ingredients' => 'carne di maiale, salsa di soia.',
                'picture' => 'https://www.shutterstock.com/shutterstock/photos/2239777479/display_1500/stock-photo-chinese-dumplings-on-a-steamer-soy-sauce-and-chopsticks-traditional-chinese-asian-dish-dim-sum-2239777479.jpg',
            ],
            [
                'name' => 'Uramaki california',
                'price' => 6.00,
                "restaurant_id" => 11,
                'description' => "Uramaki con cetriolo, surimi e avocado.",
                'visible' => true,
                'ingredients' => 'cetriolo, surimi, avocado, alga nori.',
                'picture' => 'https://www.shutterstock.com/shutterstock/photos/1359433634/display_1500/stock-photo-california-uramaki-with-avocado-surimi-1359433634.jpg',
            ],
        ];

        foreach ($dishes as $dish) {
            $newDish =  new Dish();
            $newDish->name = $dish["name"];
            $newDish->price = $dish["price"];
            $newDish->description = $dish["description"];
            $newDish->visible = $dish["visible"];
            $newDish->restaurant_id = $dish["restaurant_id"];
            $newDish->ingredients = $dish["ingredients"];

            $filename = basename($dish["picture"]);
            file_put_contents($filename, file_get_contents($dish["picture"]));
            $percorso = Storage::disk("public")->putFile('/uploads', new File($filename));
            unlink($filename);
            $newDish->picture = $percorso;
            $newDish->save();
        }
    }
}
