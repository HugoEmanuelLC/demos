export interface Collection {
    id: number;
    name: string;
    price: number;
    description: string;
  }
  
  export const collections = [
    {
      id: 1,
      name: 'Montres',
      price: 1000000,
      description: 'Montres de luxe',
      img_coll: "https://wallpapercave.com/wp/wp1853731.jpg",
      items: [
        {
            id: 1,
            name: "Astronomia Solar Bitcoin",
            img: "https://media.gqmagazine.fr/photos/631755ed53299cb5db8e9448/1:1/w_900,h_900,c_limit/Jacob%20and%20co.jpg",
            decription: "Astronomia Solar Bitcoin. C’est le nom de la nouvelle montre pas comme les autres de la maison Jacob & Co. Ce modèle a été imaginé à la gloire de la plus célèbre des cryptomonnaies, le Bitcoin. En eff",
            price: 350000
        },
        {
            id: 2,
            name: "Astronomia Maestro",
            img: "https://static2.worldtempus.com/cache/article/jacob--amp--co/astronomia/j/a/jacob-astronomia-cover_crop_1396x781.jpg",
            decription: "Seul Jacob & Co. pouvait avoir l’audace de présenter l’une des complications horlogères les plus sophistiquées dans un boîtier transparent qui montre, entre autres, un astronaute flottant au beau mili",
            price: 750000
        },
      ]
    },
    // --------------------------------------------------------------------------------------------------
    {
      id: 2,
      name: 'Bracelets',
      price: 10000,
      description: 'Bracelets de luxe',
      img_coll: "https://wallpaperaccess.com/full/2135486.jpg",
      items: [
        {
            id: 1,
            name: "Bracelet Homme Perles en Pierres",
            img: "https://media.cdnws.com/_i/56367/m840-15030/3229/30/bracelet-homme-perles-en-pierres-gohappy-happy-hipster.jpeg",
            decription: "Bracelet Homme Perles en Pierres, un 'must have' de pour la gente masculine toujours à la recherche d’élégance.",
            price: 50
        },
        {
            id: 2,
            name: "Bracelet Perle Homme Luxe",
            img: "https://www.cdiscount.com/pdt2/1/1/0/1/700x700/auc7910131349110/rw/bracelet-de-luxe-en-pierre-naturelle-pour-hommes-e.jpg",
            decription: "Bracelet De Luxe En Pierre Naturelle Pour Hommes Et Femmes, Bijou Perlé Fait À La Main, Tendance, Bracelet À B SL9915 - Achat / Vente Bracelet - Gourmette Bracelet De Luxe ",
            price: 0
        }
      ]
    },
    {
      id: 3,
      name: 'vide',
      price: 299,
      description: '',
      img_coll: "",
      items: [
        {
            id: 1,
            name: "",
            img: "",
            decription: "",
            price: 0
        },
        {
            id: 2,
            name: "",
            img: "",
            decription: "",
            price: 0
        },
      ]
    }
  ];