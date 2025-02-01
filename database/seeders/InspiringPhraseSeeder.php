<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\InspiringPhrase;

class InspiringPhraseSeeder extends Seeder
{
  public function run()
  {
    $phrases = [
      // 🌟 Familia (idCategory = 1)
      ["title" => "El amor de la familia", "message" => "La familia es el refugio donde el alma encuentra paz y amor incondicional.", "idCategory" => 1],
      ["title" => "Unidos siempre", "message" => "Los lazos familiares no se miden por la sangre, sino por el amor y el respeto mutuo.", "idCategory" => 1],
      ["title" => "Hogar dulce hogar", "message" => "No importa cuán lejos vayas, la familia siempre será tu hogar.", "idCategory" => 1],
      ["title" => "Pilares de la vida", "message" => "El apoyo de la familia es el cimiento de una vida feliz.", "idCategory" => 1],
      ["title" => "Siempre juntos", "message" => "En los momentos difíciles, la familia es el ancla que nos mantiene firmes.", "idCategory" => 1],

      // 🤝 Amigos (idCategory = 2)
      ["title" => "Amigos verdaderos", "message" => "Los amigos son la familia que elegimos.", "idCategory" => 2],
      ["title" => "Apoyo incondicional", "message" => "Un amigo es alguien que conoce tu historia y aún así te quiere.", "idCategory" => 2],
      ["title" => "Alegría compartida", "message" => "La vida es más hermosa cuando se comparte con buenos amigos.", "idCategory" => 2],
      ["title" => "Siempre ahí", "message" => "Los verdaderos amigos están contigo en las buenas y en las malas.", "idCategory" => 2],
      ["title" => "Risas y recuerdos", "message" => "Un buen amigo es aquel con quien puedes reír sin razón alguna.", "idCategory" => 2],

      // 🏋️‍♂️ Deporte (idCategory = 3)
      ["title" => "Esfuerzo y dedicación", "message" => "El dolor de hoy será la fuerza del mañana.", "idCategory" => 3],
      ["title" => "Nunca te rindas", "message" => "El único fracaso es no intentarlo.", "idCategory" => 3],
      ["title" => "Supera tus límites", "message" => "Cada entrenamiento es una oportunidad para ser mejor.", "idCategory" => 3],
      ["title" => "Disciplina y constancia", "message" => "La constancia es la clave del éxito en el deporte.", "idCategory" => 3],
      ["title" => "Mentalidad ganadora", "message" => "El éxito en el deporte comienza en la mente.", "idCategory" => 3],

      // 📚 Estudios (idCategory = 4)
      ["title" => "Aprender es crecer", "message" => "Cada día es una nueva oportunidad para aprender algo nuevo.", "idCategory" => 4],
      ["title" => "Esfuerzo recompensado", "message" => "La educación es el arma más poderosa para cambiar el mundo.", "idCategory" => 4],
      ["title" => "Sigue adelante", "message" => "Los grandes logros requieren tiempo y dedicación.", "idCategory" => 4],
      ["title" => "Conocimiento es poder", "message" => "El aprendizaje constante es la clave del éxito.", "idCategory" => 4],
      ["title" => "El camino del éxito", "message" => "El estudio es el primer paso hacia el futuro que deseas.", "idCategory" => 4],

      // 💼 Trabajo (idCategory = 5)
      ["title" => "Ama lo que haces", "message" => "El éxito llega cuando disfrutas de tu trabajo.", "idCategory" => 5],
      ["title" => "Persistencia y esfuerzo", "message" => "El trabajo duro siempre da frutos.", "idCategory" => 5],
      ["title" => "Haz la diferencia", "message" => "No trabajes por dinero, trabaja por hacer la diferencia.", "idCategory" => 5],
      ["title" => "Actitud positiva", "message" => "Tu actitud determina tu altitud en la vida laboral.", "idCategory" => 5],
      ["title" => "Construye tu éxito", "message" => "Cada día es una nueva oportunidad para mejorar en tu trabajo.", "idCategory" => 5],

      // 🎨 Hobby (idCategory = 6)
      ["title" => "Haz lo que amas", "message" => "Los hobbies son la manera en que el alma se expresa.", "idCategory" => 6],
      ["title" => "Tiempo bien invertido", "message" => "Invertir tiempo en lo que te apasiona nunca es tiempo perdido.", "idCategory" => 6],
      ["title" => "Creatividad sin límites", "message" => "Tu imaginación es el único límite en tus hobbies.", "idCategory" => 6],
      ["title" => "Disfruta el momento", "message" => "Los hobbies nos recuerdan que la vida es más que solo trabajo.", "idCategory" => 6],
      ["title" => "Sé tú mismo", "message" => "Tus pasatiempos reflejan quién eres realmente.", "idCategory" => 6],

      // 🧘‍♂️ Relax (idCategory = 7)
      ["title" => "Respira y relájate", "message" => "La paz interior comienza con un respiro profundo.", "idCategory" => 7],
      ["title" => "Encuentra tu calma", "message" => "El descanso es tan importante como el esfuerzo.", "idCategory" => 7],
      ["title" => "Momento para ti", "message" => "Dedicar tiempo a relajarte es invertir en tu bienestar.", "idCategory" => 7],
      ["title" => "Fluye con la vida", "message" => "La tranquilidad es el mayor tesoro que puedes tener.", "idCategory" => 7],
      ["title" => "Equilibrio y bienestar", "message" => "Una mente tranquila es la clave para una vida plena.", "idCategory" => 7],
    ];

    foreach ($phrases as $phrase) {
      InspiringPhrase::create($phrase);
    }
  }
}
