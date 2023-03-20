export interface Collection {
  id: number;
  name: string;
  description: string;
  img_coll: string;
}

export interface Produit {
  id: number;
  name: string;
  img: string;
  decription: string;
  price: number;
  FK_id_collection: number;
}
  
export const collections = [
  {
    id: 1,
    name: 'Montres',
    description: 'Montres de luxe',
    img: "https://wallpapercave.com/wp/wp1853731.jpg",
  },
  {
    id: 2,
    name: 'Bracelets',
    description: 'Bracelets de luxe',
    img: "https://wallpaperaccess.com/full/2135486.jpg",
  }
];

// --------------------------------------------------------------------------------------------------

export const produits = [
  {
    id: 1,
    FK_id_collection: 1,
    name: "Astronomia Solar Bitcoin",
    img: "https://media.gqmagazine.fr/photos/631755ed53299cb5db8e9448/1:1/w_900,h_900,c_limit/Jacob%20and%20co.jpg",
    description: "Astronomia Solar Bitcoin. C’est le nom de la nouvelle montre pas comme les autres de la maison Jacob & Co. Ce modèle a été imaginé à la gloire de la plus célèbre des cryptomonnaies, le Bitcoin. En eff",
    price: 350000
  },
  {
    id: 2,
    FK_id_collection: 1,
    name: "Astronomia Maestro",
    img: "https://static2.worldtempus.com/cache/article/jacob--amp--co/astronomia/j/a/jacob-astronomia-cover_crop_1396x781.jpg",
    description: "Seul Jacob & Co. pouvait avoir l’audace de présenter l’une des complications horlogères les plus sophistiquées dans un boîtier transparent qui montre, entre autres, un astronaute flottant au beau mili",
    price: 750000
  },
  {
    id: 3,
    FK_id_collection: 2,
    name: "Bracelet Homme Perles en Pierres",
    img: "https://media.cdnws.com/_i/56367/m840-15030/3229/30/bracelet-homme-perles-en-pierres-gohappy-happy-hipster.jpeg",
    description: "Bracelet Homme Perles en Pierres, un 'must have' de pour la gente masculine toujours à la recherche d’élégance.",
    price: 50
  },
  {
    id: 4,
    FK_id_collection: 2,
    name: "Bracelet Perle Homme Luxe",
    img: "https://www.cdiscount.com/pdt2/1/1/0/1/700x700/auc7910131349110/rw/bracelet-de-luxe-en-pierre-naturelle-pour-hommes-e.jpg",
    description: "Bracelet De Luxe En Pierre Naturelle Pour Hommes Et Femmes, Bijou Perlé Fait À La Main, Tendance, Bracelet À B SL9915 - Achat / Vente Bracelet - Gourmette Bracelet De Luxe ",
    price: 300
  }
];