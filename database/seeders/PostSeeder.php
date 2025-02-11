<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PostSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run()
  {
    $posts = [
      [
        'id' => 1,
        'title' => 'Hoy ha sido un gran día porque logré terminar mi proyecto',
        'message' => 'Después de semanas trabajando hasta tarde, ¡por fin terminé mi proyecto de diseño! Era un reto complicado, pero al ver el resultado final me sentí muy orgulloso. Ahora puedo presentar mi trabajo en la exposición del próximo lunes. Agradezco mucho el apoyo de mi amigo Marcos, quien me motivó en los momentos difíciles.',
        'score' => 5,
        'idExtendedUser' => 1,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [5],
      ],
      [
        'id' => 2,
        'title' => 'Estoy muy emocionado, he aprobado todas las materias',
        'message' => 'Hoy vi las notas finales y no puedo estar más feliz. Pensé que suspendería matemáticas, pero lo logré con esfuerzo y la ayuda de Clara, mi compañera de estudio. Me siento tan motivado que ya estoy planeando cómo organizar mi tiempo mejor el próximo semestre. ¡Celebraré esta noche con una pizza enorme!',
        'score' => 4,
        'idExtendedUser' => 2,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [4],
      ],
      [
        'id' => 3,
        'title' => 'Qué tristeza, me he peleado con mi mejor amigo',
        'message' => 'No ha sido un buen día. Discutí con Miguel por una tontería relacionada con nuestro grupo de estudio. Creo que ambos estábamos estresados y eso empeoró las cosas. Ahora me siento mal porque nuestra amistad es muy importante para mí. Le enviaré un mensaje esta noche para intentar arreglarlo.',
        'score' => 5,
        'idExtendedUser' => 3,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [2],
      ],
      [
        'id' => 4,
        'title' => '¡Increíble día! He conseguido el trabajo que quería',
        'message' => 'Estoy en una nube. Esta mañana recibí una llamada del equipo de recursos humanos confirmando que me contrataron como diseñador gráfico. Es un sueño hecho realidad, ya que llevo meses preparándome para esta oportunidad. Me premiaré con una salida a mi restaurante favorito esta noche. ¡Estoy listo para empezar esta nueva etapa!',
        'score' => 4,
        'idExtendedUser' => 4,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [5],
      ],
      [
        'id' => 5,
        'title' => 'Estoy agotado, pero valió la pena cumplir con todos mis objetivos',
        'message' => 'Hoy fue un día intenso, pero logré tachar todo de mi lista de tareas. Terminé mis prácticas del curso, organicé mi habitación y aún me quedó tiempo para correr en el parque. Aunque estoy cansado, me siento muy realizado. Creo que me merezco una noche de descanso viendo una buena película.',
        'score' => 5,
        'idExtendedUser' => 1,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [4, 7],
      ],
      [
        'id' => 6,
        'title' => 'Hoy estoy en paz, disfruté de un día tranquilo leyendo en casa',
        'message' => 'Hoy decidí desconectar del estrés diario y me dediqué a leer un libro que tenía pendiente: Clean Code. Me encanta cómo explica la importancia de escribir código limpio y estructurado. Con una taza de café al lado y música suave, me sentí en calma, como si el tiempo se detuviera.',
        'score' => 3,
        'idExtendedUser' => 2,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [6, 7],
      ],
      [
        'id' => 7,
        'title' => 'Estoy frustrado, no conseguí solucionar el problema que tenía en el trabajo',
        'message' => 'Llevo horas intentando depurar un error en la API que estoy desarrollando y no encuentro la raíz del problema. Parece que la autenticación con JWT está fallando, pero no sé exactamente por qué. Aunque he probado varias soluciones, ninguna funcionó. Mañana lo retomaré con la mente más clara.',
        'score' => 1,
        'idExtendedUser' => 3,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [2, 4, 5],
      ],
      [
        'id' => 8,
        'title' => '¡Qué alegría! Marta me ha dicho que sí a salir este fin de semana',
        'message' => 'Hoy no pude evitar sonreír todo el día. Después de reunir el valor para invitar a Marta a salir, ¡me dijo que sí! Vamos a un festival de música este sábado. Me siento muy emocionado, ya que hemos estado hablando mucho últimamente y creo que este puede ser un gran comienzo',
        'score' => 4,
        'idExtendedUser' => 4,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [2],
      ],
      [
        'id' => 9,
        'title' => 'Hoy siento nostalgia, estuve recordando viejos momentos con mi familia',
        'message' => 'Mientras organizaba mis fotos en el móvil, encontré algunas de las reuniones familiares de hace años. Me emocioné al ver a mis abuelos sonriendo y a todos disfrutando juntos. Aunque la vida nos ha llevado por caminos distintos, esos recuerdos siempre me traen calidez.',
        'score' => 3,
        'idExtendedUser' => 1,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [1],
      ],
      [
        'id' => 10,
        'title' => 'Estoy un poco ansioso, mañana tengo una entrevista importante',
        'message' => 'No he podido concentrarme mucho hoy, ya que mañana tengo una entrevista para un puesto como desarrollador backend. Estuve repasando mis proyectos y algunas preguntas comunes de entrevistas técnicas. ¡Espero que todo salga bien! Ahora solo me queda relajarme y confiar en lo que he aprendido.',
        'score' => 4,
        'idExtendedUser' => 2,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [5],
      ],
      [
        'id' => 11,
        'title' => 'Qué día más relajante, pasé la tarde viendo mi serie favorita',
        'message' => 'Después de varias semanas ocupadas, decidí darme un respiro y ver la última temporada de The Mandalorian. Fue justo lo que necesitaba: una tarde en el sofá, con palomitas y sin pensar en nada más. Mañana volveré al trabajo renovado.',
        'score' => 3,
        'idExtendedUser' => 3,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [7],
      ],
      [
        'id' => 12,
        'title' => 'Estoy enfadado, las cosas no salieron como esperaba hoy',
        'message' => 'Hoy me molestó que el cliente cambiara los requisitos de última hora en la aplicación que estoy desarrollando. Pasé días ajustando el diseño, y ahora hay que rehacer varias partes. A veces desearía que entendieran lo complicado que es adaptar todo tan rápido',
        'score' => 1,
        'idExtendedUser' => 4,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [5],
      ],
      [
        'id' => 13,
        'title' => 'Estoy lleno de gratitud, mis amigos me organizaron una fiesta sorpresa',
        'message' => 'No me lo esperaba en absoluto. Pensaba que iba a tener un día normal, pero mis amigos organizaron una fiesta sorpresa por mi cumpleaños. Decoraron el lugar con mis colores favoritos, y hasta prepararon una tarta con el logo de mi app. Estoy muy agradecido de tenerlos en mi vida.',
        'score' => 5,
        'idExtendedUser' => 1,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [1, 2, 5],
      ],
      [
        'id' => 14,
        'title' => 'Hoy siento incertidumbre, no sé cómo resolver algunos problemas personales',
        'message' => 'Es un día raro. Me siento dividido entre varias decisiones importantes que tengo que tomar. Una de ellas es si aceptar un nuevo trabajo o seguir desarrollando mi propio proyecto. Ambos caminos tienen sus riesgos, y todavía no sé cuál es el correcto.',
        'score' => 2,
        'idExtendedUser' => 2,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [5],
      ],
      [
        'id' => 15,
        'title' => 'Estoy feliz, recibí un mensaje inesperado de alguien especial',
        'message' => 'Hoy mi día cambió por completo cuando recibí un mensaje de Laura, una compañera de la universidad con la que no hablaba desde hace años. Me escribió para felicitarme por la app que lancé, y eso me alegró el corazón. Fue un recordatorio de que el esfuerzo siempre tiene recompensas.',
        'score' => 4,
        'idExtendedUser' => 3,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [4],
      ],
      [
        'id' => 16,
        'title' => 'Hoy tocaba gym',
        'message' => 'Estuve en el gimnasio y vi que de nuevo estaba Carlos haciendo posturas frente al espejo. La semana que viene sin falta, voy a hablar con él para pedirle ir a tomar un café, espero que se anime porque me cae genial.',
        'score' => 4,
        'idExtendedUser' => 4,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [3],
      ],
      [
        'id' => 17,
        'title' => 'Estoy preocupado, mi mascota no se encuentra bien de salud',
        'message' => 'Hoy no he podido concentrarme en nada porque Max, mi perro, no se encuentra bien. Lo llevé al veterinario esta mañana, y me dijeron que necesita más pruebas para descartar algo grave. Es difícil verlo apagado, ya que normalmente está lleno de energía. Solo espero que todo salga bien.',
        'score' => 1,
        'idExtendedUser' => 1,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [],
      ],
      [
        'id' => 18,
        'title' => 'Me siento orgulloso, logré superar mis miedos y hablé en público',
        'message' => 'Nunca imaginé que podría hablar frente a tantas personas, pero hoy lo hice. Presenté mi proyecto sobre inteligencia artificial en una conferencia local. Aunque al principio estaba nervioso, las caras de interés en el público me dieron confianza. Ahora sé que puedo enfrentar mis miedos y seguir creciendo.',
        'score' => 4,
        'idExtendedUser' => 2,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [4],
      ],
      [
        'id' => 19,
        'title' => 'Estoy decepcionado, las cosas no resultaron como había planeado',
        'message' => 'Hoy fue un día complicado. Preparé una presentación detallada para un cliente, pero no la aceptaron porque querían un enfoque completamente diferente. Sentí que mi esfuerzo no fue valorado. Aun así, aprendí que a veces es mejor preguntar más antes de comenzar un proyecto.',
        'score' => 1,
        'idExtendedUser' => 3,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [5],
      ],
      [
        'id' => 20,
        'title' => 'Qué día más motivador, he comenzado un nuevo hábito saludable',
        'message' => 'Hoy me levanté temprano para empezar a correr. Fue duro al principio, pero terminé mi primera vuelta al parque. Escuchar música motivadora me ayudó a seguir adelante. Siento que este pequeño paso será el inicio de un gran cambio en mi vida. ¡Estoy muy emocionado!',
        'score' => 4,
        'idExtendedUser' => 4,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [3],
      ],
      [
        'id' => 21,
        'title' => 'Estoy lleno de esperanza, tengo muchas ganas de lo que vendrá mañana',
        'message' => 'Hoy fue un día lleno de planificación y sueños. Mi equipo y yo trabajamos en las últimas correcciones de nuestra aplicación, y todo está casi listo para el lanzamiento. Estoy emocionado por ver cómo la gente la recibirá. Siento que lo mejor está por venir.',
        'score' => 4,
        'idExtendedUser' => 1,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [],
      ],
      [
        'id' => 22,
        'title' => 'Hoy me siento confuso, no entiendo cómo me siento realmente',
        'message' => 'Es uno de esos días en los que las emociones parecen una montaña rusa. A ratos estoy feliz, pero luego me invade una sensación de vacío. Creo que necesito tomarme un tiempo para entender qué está causando esto. Quizás escribir en mi diario me ayude a aclarar las ideas.',
        'score' => 2,
        'idExtendedUser' => 2,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [5],
      ],
      [
        'id' => 23,
        'title' => 'Estoy eufórico, me han invitado al evento que tanto deseaba',
        'message' => '¡Qué sorpresa! Hoy recibí una invitación para asistir a una convención de tecnología en la que siempre quise participar. Será una gran oportunidad para aprender, conocer gente increíble y, tal vez, presentar mi propia app en el futuro. Estoy contando los días para que llegue.',
        'score' => 4,
        'idExtendedUser' => 3,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [5],
      ],
      [
        'id' => 24,
        'title' => 'Estoy algo melancólico, extraño a alguien que fue importante para mí',
        'message' => 'Hoy desperté pensando en Lucía. Hace años que no hablamos, pero solíamos compartir muchas cosas. Revisé nuestras fotos juntos y no pude evitar sentir nostalgia. Aunque nuestras vidas tomaron caminos distintos, siempre guardaré esos recuerdos con cariño.',
        'score' => 2,
        'idExtendedUser' => 1,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [1, 2],
      ],
      [
        'id' => 25,
        'title' => 'Qué día tan inspirador, he aprendido algo nuevo sobre mí mismo',
        'message' => 'Hoy descubrí que soy más resiliente de lo que pensaba. Mientras trabajaba en una solución para mi aplicación, fallé varias veces, pero en lugar de rendirme, seguí intentándolo. Al final, no solo lo logré, sino que aprendí a confiar más en mis capacidades.',
        'score' => 3,
        'idExtendedUser' => 3,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [6],
      ],
      [
        'id' => 26,
        'title' => 'Hoy estoy nervioso, he tomado una decisión importante sobre mi futuro',
        'message' => 'Después de días reflexionando, decidí dejar mi trabajo actual para dedicarme a tiempo completo al desarrollo de mi propio proyecto. Es un gran riesgo, pero siento que es el momento de apostar por mis sueños. Espero que este paso marque el inicio de algo grandioso.',
        'score' => 3,
        'idExtendedUser' => 2,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [],
      ],
      [
        'id' => 27,
        'title' => 'Estoy agradecido, la vida me ha dado muchas cosas buenas últimamente',
        'message' => 'Hoy me tomé un momento para reflexionar sobre todo lo bueno que tengo: mi familia, amigos, y la oportunidad de trabajar en algo que me apasiona. A veces, nos enfocamos tanto en lo que nos falta que olvidamos agradecer lo que ya tenemos.',
        'score' => 5,
        'idExtendedUser' => 2,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [1, 2, 5],
      ],
      [
        'id' => 28,
        'title' => 'Me siento agotado, pero feliz por haber pasado tiempo con mis seres queridos',
        'message' => 'Hoy fue un día lleno de actividades con mi familia. Fuimos al parque, cocinamos juntos y terminamos la noche jugando juegos de mesa. Aunque estoy físicamente cansado, mi corazón está lleno de alegría. Estos momentos son los que realmente valen la pena.',
        'score' => 3,
        'idExtendedUser' => 2,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [1],
      ],
      [
        'id' => 29,
        'title' => 'Hoy estoy un poco desanimado, no logré cumplir mis metas del día',
        'message' => 'Tenía muchas cosas planificadas para hoy, pero apenas logré terminar un par de ellas. Me siento un poco frustrado conmigo mismo, aunque entiendo que hay días en los que simplemente no se puede rendir al 100%. Mañana será un nuevo día para intentarlo de nuevo.',
        'score' => 2,
        'idExtendedUser' => 1,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [5],
      ],
      [
        'id' => 30,
        'title' => 'Estoy encantado, he recibido buenas noticias que cambiarán mi vida para mejor',
        'message' => 'Hoy recibí una llamada inesperada: ¡me han concedido una beca para estudiar en el extranjero! Es una oportunidad increíble para crecer profesional y personalmente. Aunque será un gran cambio, estoy emocionado por todo lo que esta nueva etapa traerá.',
        'score' => 4,
        'idExtendedUser' => 2,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [],
      ],
      [
        'id' => 31,
        'title' => 'Hoy ha sido un día increíble',
        'message' => 'He tenido un día espectacular en el trabajo, todo salió bien y me siento muy motivado.',
        'score' => 5,
        'idExtendedUser' => 12,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [1, 4]
      ],
      [
        'id' => 32,
        'title' => 'Me siento agotado',
        'message' => 'Ha sido un día muy largo y complicado. Necesito descansar y desconectar un poco.',
        'score' => 2,
        'idExtendedUser' => 27,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [2, 5, 7]
      ],
      [
        'id' => 33,
        'title' => 'Pequeños logros, grandes alegrías',
        'message' => 'Hoy logré algo que parecía imposible hace un mes. Cada esfuerzo tiene su recompensa.',
        'score' => 4,
        'idExtendedUser' => 9,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => []
      ],
      [
        'id' => 34,
        'title' => 'No ha sido mi mejor día',
        'message' => 'Me siento un poco bajo de ánimo, pero sé que mañana será mejor.',
        'score' => 3,
        'idExtendedUser' => 14,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [6]
      ],
      [
        'id' => 35,
        'title' => 'Reflexiones sobre el futuro',
        'message' => 'Hoy estuve pensando mucho en los próximos pasos de mi vida. Hay tantas opciones que me cuesta decidir.',
        'score' => 3,
        'idExtendedUser' => 6,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [3, 7]
      ],
      [
        'id' => 36,
        'title' => 'Un día difícil',
        'message' => 'Hoy tuve muchas dificultades en el trabajo. Me siento frustrado, pero sé que podré superarlo.',
        'score' => 2,
        'idExtendedUser' => 17,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [5]
      ],
      [
        'id' => 37,
        'title' => 'Logré terminar mi proyecto',
        'message' => 'Después de semanas de trabajo, finalmente terminé mi proyecto. Me siento muy satisfecho.',
        'score' => 5,
        'idExtendedUser' => 11,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [1, 3, 4]
      ],
      [
        'id' => 38,
        'title' => 'Necesito un cambio',
        'message' => 'Hoy sentí que necesito hacer cambios en mi vida. Tal vez sea el momento de tomar nuevas decisiones.',
        'score' => 3,
        'idExtendedUser' => 25,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => []
      ],
      [
        'id' => 39,
        'title' => 'Un día relajante',
        'message' => 'Hoy decidí tomarme el día libre y disfrutar de un buen libro. Fue exactamente lo que necesitaba.',
        'score' => 4,
        'idExtendedUser' => 5,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [6, 7]
      ],
      [
        'id' => 40,
        'title' => 'Buenas noticias',
        'message' => 'Me han dado una gran noticia hoy. No puedo esperar para compartirla con mis amigos y familiares.',
        'score' => 5,
        'idExtendedUser' => 19,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [1]
      ],
      [
        'id' => 41,
        'title' => 'Un día de aprendizaje',
        'message' => 'Hoy aprendí algo nuevo y me siento inspirado. Me encanta descubrir cosas interesantes.',
        'score' => 4,
        'idExtendedUser' => 22,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [3, 5]
      ],
      [
        'id' => 42,
        'title' => 'Mucha ansiedad',
        'message' => 'No he podido concentrarme bien hoy. La ansiedad ha estado presente todo el día.',
        'score' => 2,
        'idExtendedUser' => 30,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [7]
      ],
      [
        'id' => 43,
        'title' => 'Sintiéndome optimista',
        'message' => 'Hoy me siento con muchas ganas de avanzar en mis metas. Todo parece estar alineándose a mi favor.',
        'score' => 5,
        'idExtendedUser' => 8,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => []
      ],
      [
        'id' => 44,
        'title' => 'Pequeños momentos felices',
        'message' => 'Hoy disfruté de un buen café y una charla con un amigo. A veces, la felicidad está en los pequeños detalles.',
        'score' => 4,
        'idExtendedUser' => 13,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [6]
      ],
      [
        'id' => 45,
        'title' => 'Un día agotador',
        'message' => 'Estoy exhausto. Necesito descansar bien esta noche para recuperar energía.',
        'score' => 1,
        'idExtendedUser' => 26,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [5]
      ],
      [
        'id' => 46,
        'title' => 'Nueva oportunidad',
        'message' => 'Hoy surgió una oportunidad inesperada que podría cambiar mi rumbo. Veremos qué sucede.',
        'score' => 4,
        'idExtendedUser' => 18,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [1, 3]
      ],
      [
        'id' => 47,
        'title' => 'Mucha presión',
        'message' => 'Hoy sentí mucha presión en el trabajo. Necesito encontrar un mejor equilibrio.',
        'score' => 1,
        'idExtendedUser' => 10,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [2, 5]
      ],
      [
        'id' => 48,
        'title' => 'Rodeado de buena energía',
        'message' => 'Hoy pasé un día increíble con personas que me llenan de energía positiva.',
        'score' => 5,
        'idExtendedUser' => 21,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [4, 6]
      ],
      [
        'id' => 49,
        'title' => 'Mejorando poco a poco',
        'message' => 'A pesar de los días difíciles, siento que estoy avanzando y eso me motiva.',
        'score' => 2,
        'idExtendedUser' => 7,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => []
      ],
      [
        'id' => 50,
        'title' => 'Hoy no ha sido mi día',
        'message' => 'No me sentí bien hoy, pero confío en que mañana será mejor.',
        'score' => 1,
        'idExtendedUser' => 15,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [7]
      ],
      [
        'id' => 51,
        'title' => 'Día gris',
        'message' => 'Hoy ha sido un día difícil. No he podido concentrarme en nada.',
        'score' => 1,
        'idExtendedUser' => 14,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [2, 7]
      ],
      [
        'id' => 52,
        'title' => 'Sin motivación',
        'message' => 'No he encontrado inspiración para hacer nada hoy. Espero sentirme mejor mañana.',
        'score' => 2,
        'idExtendedUser' => 9,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => []
      ],
      [
        'id' => 53,
        'title' => 'Día de frustraciones',
        'message' => 'Nada salió como esperaba hoy. Me siento agotado mentalmente.',
        'score' => 1,
        'idExtendedUser' => 21,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [5]
      ],
      [
        'id' => 54,
        'title' => 'Demasiada presión',
        'message' => 'Hoy tuve demasiadas responsabilidades. Siento que necesito un descanso.',
        'score' => 2,
        'idExtendedUser' => 18,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [2, 3]
      ],
      [
        'id' => 55,
        'title' => 'Nada de energía',
        'message' => 'Hoy fue un día extremadamente agotador. Solo quiero dormir.',
        'score' => 1,
        'idExtendedUser' => 7,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => []
      ],
      [
        'id' => 56,
        'title' => 'Problemas y más problemas',
        'message' => 'No encuentro solución a los problemas de hoy. Espero que mañana sea distinto.',
        'score' => 2,
        'idExtendedUser' => 16,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [6, 7]
      ],
      [
        'id' => 57,
        'title' => 'Preocupaciones constantes',
        'message' => 'Hoy no paré de pensar en cosas negativas. Me costará dormir.',
        'score' => 1,
        'idExtendedUser' => 25,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [4]
      ],
      [
        'id' => 58,
        'title' => 'Un día sin propósito',
        'message' => 'Hoy me sentí completamente desmotivado. No encontré sentido a nada.',
        'score' => 1,
        'idExtendedUser' => 11,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => []
      ],
      [
        'id' => 59,
        'title' => 'Día muy triste',
        'message' => 'Hoy me sentí más triste de lo normal. No tengo ganas de hacer nada.',
        'score' => 1,
        'idExtendedUser' => 28,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [7]
      ],
      [
        'id' => 60,
        'title' => 'Mal humor todo el día',
        'message' => 'Todo me molestó hoy. Me siento irritado sin razón aparente.',
        'score' => 2,
        'idExtendedUser' => 12,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [3]
      ],
      [
        'id' => 61,
        'title' => 'Cansancio extremo',
        'message' => 'No pude descansar bien anoche y hoy me costó mucho hacer mis tareas.',
        'score' => 1,
        'idExtendedUser' => 22,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [2, 5]
      ],
      [
        'id' => 62,
        'title' => 'Falta de concentración',
        'message' => 'Hoy intenté trabajar, pero no logré concentrarme en nada.',
        'score' => 2,
        'idExtendedUser' => 5,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [6]
      ],
      [
        'id' => 63,
        'title' => 'Mucho estrés',
        'message' => 'La presión de hoy fue demasiado. No sé cómo voy a manejar todo.',
        'score' => 1,
        'idExtendedUser' => 20,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [5, 7]
      ],
      [
        'id' => 64,
        'title' => 'Día sin motivación',
        'message' => 'Hoy simplemente no tuve ganas de hacer nada.',
        'score' => 1,
        'idExtendedUser' => 15,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => []
      ],
      [
        'id' => 65,
        'title' => 'Angustia constante',
        'message' => 'Hoy sentí mucha angustia sin razón aparente.',
        'score' => 2,
        'idExtendedUser' => 17,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [3, 7]
      ],
      [
        'id' => 66,
        'title' => 'Día largo y pesado',
        'message' => 'Cada minuto de hoy se sintió como una eternidad.',
        'score' => 2,
        'idExtendedUser' => 6,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => []
      ],
      [
        'id' => 67,
        'title' => 'Nada salió bien',
        'message' => 'Hoy todo fue un desastre. Nada salió como esperaba.',
        'score' => 1,
        'idExtendedUser' => 24,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [5]
      ],
      [
        'id' => 68,
        'title' => 'Dolor de cabeza todo el día',
        'message' => 'Hoy tuve un fuerte dolor de cabeza que no me dejó hacer nada.',
        'score' => 2,
        'idExtendedUser' => 29,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [2]
      ],
      [
        'id' => 69,
        'title' => 'No sé qué hacer',
        'message' => 'Hoy me siento perdido, sin rumbo claro.',
        'score' => 1,
        'idExtendedUser' => 23,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => []
      ],
      [
        'id' => 70,
        'title' => 'Un día más sin novedades',
        'message' => 'Hoy fue un día aburrido, sin nada interesante.',
        'score' => 3,
        'idExtendedUser' => 10,
        'created_at' => $this->generateRandomDate(),
        'updated_at' => $this->generateRandomDate(),
        'categories' => [6]
      ]
    ];

    // Insertar los posts en la tabla `post`
    foreach ($posts as $post) {
      DB::table('post')->insert([
        'idPost' => $post['id'],
        'title' => $post['title'],
        'message' => $post['message'],
        'score' => $post['score'],
        'idExtendedUser' => $post['idExtendedUser'],
        'created_at' => $post['created_at'],
        'updated_at' => $post['updated_at'],
      ]);

      // Insertar las categorías en la tabla intermedia `has`
      foreach ($post['categories'] as $categoryId) {
        DB::table('has')->insert([
          'idPost' => $post['id'],
          'idCategory' => $categoryId,
          'created_at' => $post['created_at'],
          'updated_at' => $post['updated_at'],
        ]);
      }
    }
  }

  function generateRandomDate()
  {
    $maxDaysBack = 30;
    $lastHourInADay = 23;
    $lastMinuteInAnHour = 59;
    return Carbon::now()
      ->subDays(rand(0, $maxDaysBack))
      ->subHours(rand(0, $lastHourInADay))
      ->subMinutes(rand(0, $lastMinuteInAnHour));
  }
}
