<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Challenge;
use Illuminate\Support\Facades\DB;

class ChallengeSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $challenges = [
      [
        'title' => 'Conexión Familiar',
        'message' => "Dedica una tarde a conectar con tu familia. <breakLine><bulletPoint> Apaga los dispositivos electrónicos. </bulletPoint> Prepara una comida juntos. <bulletPoint> Jueguen un juego de mesa o simplemente conversen. <breakLine>Fortalecer lazos familiares mejora la salud emocional y el bienestar general.",
        'idCategory' => 1,
      ],
      [
        'title' => 'Reencuentro con un Amigo',
        'message' => "Contacta a un amigo con el que hace tiempo no hablas. <breakLine><bulletPoint> Organiza una salida para ponerse al día. <bulletPoint> Recuerden anécdotas divertidas y compartan nuevas experiencias. <breakLine>Las amistades necesitan ser cultivadas para mantenerse fuertes.",
        'idCategory' => 2,
      ],
      [
        'title' => 'Desafío Deportivo',
        'message' => "Establece una meta deportiva para esta semana. <breakLine><bulletPoint> Puede ser correr 5 km, hacer 50 flexiones o practicar un nuevo deporte. <bulletPoint> Lleva un registro de tu progreso y celebra tus logros. <breakLine>El ejercicio mejora la salud física y mental, además de ser un gran liberador de estrés.",
        'idCategory' => 3,
      ],
      [
        'title' => 'Día de Productividad Académica',
        'message' => "Dedica un día completo a tus estudios con máxima concentración. <breakLine><bulletPoint> Elimina distracciones digitales. <bulletPoint> Usa la técnica Pomodoro para optimizar tu tiempo. <bulletPoint> Resumen tus apuntes en esquemas visuales. <breakLine>La educación es una inversión para tu futuro, aprovéchala.",
        'idCategory' => 4,
      ],
      [
        'title' => 'Innovación en el Trabajo',
        'message' => "Piensa en una manera de mejorar tu trabajo. <breakLine><bulletPoint> ¿Puedes optimizar un proceso? <bulletPoint> ¿Hay una nueva habilidad que podrías aprender? <bulletPoint> Comparte tu idea con tu equipo. <breakLine>La creatividad en el ámbito laboral puede abrir nuevas oportunidades y mejorar el desempeño profesional.",
        'idCategory' => 5,
      ],
      [
        'title' => 'Explorando una Nueva Afición',
        'message' => "Descubre un nuevo hobby que te apasione. <breakLine><bulletPoint> Puede ser tocar un instrumento, aprender a pintar o probar la jardinería. <bulletPoint> Dedica al menos una hora a la semana a esta actividad. <breakLine>Los pasatiempos reducen el estrés y aumentan la satisfacción personal.",
        'idCategory' => 6,
      ],
      [
        'title' => 'Momento de Relajación',
        'message' => "Dedica una noche a relajarte completamente. <breakLine><bulletPoint> Apaga tu móvil y disfruta del silencio. <bulletPoint> Lee un buen libro o toma un baño relajante. <bulletPoint> Practica respiración profunda o meditación. <breakLine>El descanso adecuado es clave para un rendimiento óptimo y una vida equilibrada.",
        'idCategory' => 7,
      ],
      [
        'title' => 'Carta a un Ser Querido',
        'message' => "Escribe una carta a alguien especial. <breakLine><bulletPoint> Expresa lo que aprecias de esa persona. <bulletPoint> Cuéntale un recuerdo que valoras. <bulletPoint> Entrégala en persona o envíala por correo. <breakLine>Expresar gratitud fortalece los lazos y genera felicidad mutua.",
        'idCategory' => 1,
      ],
      [
        'title' => 'Día sin Redes Sociales',
        'message' => "Desafíate a pasar un día completo sin redes sociales. <breakLine><bulletPoint> Enfócate en interacciones cara a cara. <bulletPoint> Disfruta de actividades sin interrupciones digitales. <bulletPoint> Evalúa cómo afecta tu estado de ánimo. <breakLine>Reducir la dependencia digital ayuda a mejorar la atención y el bienestar emocional.",
        'idCategory' => 7,
      ],
      [
        'title' => 'Desafío de Lectura',
        'message' => "Lee un libro en una semana. <breakLine><bulletPoint> Elige un tema que te inspire o desafíe. <bulletPoint> Dedica al menos 30 minutos diarios a la lectura. <bulletPoint> Comparte lo aprendido con alguien más. <breakLine>Leer amplía el conocimiento y mejora la creatividad.",
        'idCategory' => 4,
      ],
      [
        'title' => 'Día sin Pantallas',
        'message' => "Desconéctate de dispositivos electrónicos por 24 horas. <breakLine><bulletPoint> Evita el uso de redes sociales, televisión y videojuegos. <bulletPoint> Dedica el tiempo a actividades al aire libre, lectura o conversación. <bulletPoint> Observa cómo cambia tu estado de ánimo y productividad.",
        'idCategory' => 7,
      ],
      [
        'title' => 'Carta a tu Futuro Yo',
        'message' => "Escribe una carta para abrir dentro de un año. <breakLine><bulletPoint> Expresa tus metas, sueños y desafíos actuales. <bulletPoint> Sé honesto sobre tus emociones y esperanzas. <bulletPoint> Guarda la carta en un lugar seguro y prográmate un recordatorio para abrirla.",
        'idCategory' => 1,
      ],
      [
        'title' => 'Día de la Gratitud',
        'message' => "Dedica un día completo a expresar gratitud. <breakLine><bulletPoint> Haz una lista de 10 cosas por las que estás agradecido. <bulletPoint> Agradece en persona o con mensajes a las personas importantes en tu vida. <bulletPoint> Reflexiona sobre cómo la gratitud impacta tu felicidad.",
        'idCategory' => 1,
      ],
      [
        'title' => 'Semana del Deporte',
        'message' => "Realiza actividad física todos los días durante una semana. <breakLine><bulletPoint> Prueba diferentes ejercicios: correr, nadar, yoga, etc. <bulletPoint> Mantén un registro de tu progreso y cómo te sientes. <bulletPoint> Invita a un amigo para mantenerse motivados.",
        'idCategory' => 3,
      ],
      [
        'title' => 'Desafío de la Sonrisa',
        'message' => "Haz sonreír a 10 personas en un solo día. <breakLine><bulletPoint> Usa cumplidos sinceros, bromas o simplemente una sonrisa. <bulletPoint> Ayuda a alguien sin esperar nada a cambio. <bulletPoint> Observa cómo impacta positivamente tu día.",
        'idCategory' => 2,
      ],
      [
        'title' => 'Día del Sí',
        'message' => "Di 'sí' a nuevas experiencias durante 24 horas. <breakLine><bulletPoint> Acepta invitaciones que normalmente rechazarías. <bulletPoint> Prueba una comida nueva o aprende algo diferente. <bulletPoint> Sal de tu zona de confort y disfruta la aventura.",
        'idCategory' => 6,
      ],
      [
        'title' => 'Reto de Productividad',
        'message' => "Dedica un día a maximizar tu productividad. <breakLine><bulletPoint> Usa la técnica Pomodoro para gestionar tu tiempo. <bulletPoint> Evita distracciones como redes sociales. <bulletPoint> Anota tus logros al final del día y evalúa cómo te sientes.",
        'idCategory' => 5,
      ],
      [
        'title' => 'Regalo Inesperado',
        'message' => "Sorprende a alguien con un detalle inesperado. <breakLine><bulletPoint> Puede ser un objeto, una carta o una acción amable. <bulletPoint> No esperes nada a cambio, solo disfruta el gesto. <bulletPoint> Observa cómo un pequeño acto de bondad cambia el día de alguien.",
        'idCategory' => 2,
      ],
      [
        'title' => 'Cocina un Plato Nuevo',
        'message' => "Prepara una receta que nunca hayas intentado. <breakLine><bulletPoint> Investiga platos de otras culturas o ingredientes poco comunes. <bulletPoint> Cocina con alguien más para hacerlo más divertido. <bulletPoint> Disfruta el proceso sin importar el resultado.",
        'idCategory' => 6,
      ],
      [
        'title' => 'Día de la Naturaleza',
        'message' => "Pasa un día completo en contacto con la naturaleza. <breakLine><bulletPoint> Sal a caminar por un parque o bosque. <bulletPoint> Desconéctate del teléfono y respira aire fresco. <bulletPoint> Reflexiona sobre la importancia del entorno natural.",
        'idCategory' => 7,
      ],
      [
        'title' => 'Desafío del Ahorro',
        'message' => "Evita gastar dinero en cosas innecesarias por una semana. <breakLine><bulletPoint> Lleva un registro de tus gastos diarios. <bulletPoint> Busca alternativas gratuitas para entretenimiento. <bulletPoint> Al final, evalúa cuánto lograste ahorrar y en qué podrías invertirlo.",
        'idCategory' => 5,
      ],
      [
        'title' => 'Reencuentro con un Amigo',
        'message' => "Contacta a alguien con quien no hablas hace tiempo. <breakLine><bulletPoint> Puede ser un amigo, compañero de escuela o familiar lejano. <bulletPoint> Organiza un café o una videollamada para ponerse al día. <bulletPoint> Valora las conexiones que has tenido a lo largo de tu vida.",
        'idCategory' => 2,
      ],
      [
        'title' => 'Día sin Quejas',
        'message' => "Evita quejarte durante 24 horas. <breakLine><bulletPoint> Si sientes la necesidad de quejarte, reformula en algo positivo. <bulletPoint> Enfócate en encontrar soluciones en lugar de problemas. <bulletPoint> Observa cómo cambia tu actitud al final del día.",
        'idCategory' => 7,
      ],
      [
        'title' => 'Aprende una Nueva Habilidad',
        'message' => "Dedica tiempo a aprender algo nuevo. <breakLine><bulletPoint> Puede ser un idioma, tocar un instrumento o una habilidad manual. <bulletPoint> Practica al menos 30 minutos al día. <bulletPoint> Comparte tu progreso con alguien más para motivarte.",
        'idCategory' => 4,
      ],
      [
        'title' => 'Maratón de Películas Inspiradoras',
        'message' => "Mira tres películas que te motiven o te hagan reflexionar. <breakLine><bulletPoint> Investiga películas con mensajes inspiradores. <bulletPoint> Analiza qué enseñanza puedes aplicar en tu vida. <bulletPoint> Comparte tu opinión con alguien más.",
        'idCategory' => 7,
      ],
      [
        'title' => 'Haz una Limpieza Profunda',
        'message' => "Organiza tu espacio de manera eficiente. <breakLine><bulletPoint> Ordena tu habitación, oficina o cualquier área descuidada. <bulletPoint> Dona o recicla lo que ya no necesitas. <bulletPoint> Observa cómo un espacio limpio mejora tu bienestar.",
        'idCategory' => 5,
      ],
      [
        'title' => 'Día de Voluntariado',
        'message' => "Dedica un día a ayudar a los demás. <breakLine><bulletPoint> Participa en una actividad benéfica o de voluntariado. <bulletPoint> Comparte tu tiempo con quienes más lo necesitan. <bulletPoint> Reflexiona sobre cómo el servicio a los demás enriquece tu vida.",
        'idCategory' => 1,
      ],
      [
        'title' => 'Escribe un Diario',
        'message' => "Lleva un registro escrito de tus pensamientos y emociones. <breakLine><bulletPoint> Dedica 10 minutos al día a escribir sobre tu vida. <bulletPoint> Sé honesto contigo mismo y usa el diario como reflejo personal. <bulletPoint> Al final del mes, revisa tu evolución.",
        'idCategory' => 6,
      ],
      [
        'title' => 'Desafío del Agua',
        'message' => "Bebe al menos 2 litros de agua al día por una semana. <breakLine><bulletPoint> Lleva una botella de agua contigo en todo momento. <bulletPoint> Evita el consumo de bebidas azucaradas. <bulletPoint> Nota los cambios en tu energía y bienestar.",
        'idCategory' => 3,
      ],
      [
        'title' => 'Prueba una Clase Nueva',
        'message' => "Asiste a una clase de algo que nunca hayas intentado. <breakLine><bulletPoint> Puede ser baile, yoga, pintura o cualquier otra actividad. <bulletPoint> Diviértete sin preocuparte por hacerlo perfecto. <bulletPoint> Descubre si encuentras una nueva pasión.",
        'idCategory' => 6,
      ],
    ];

    DB::table('challenge')->truncate();

    foreach ($challenges as $challenge) {
      Challenge::create($challenge);
    }
  }
}
