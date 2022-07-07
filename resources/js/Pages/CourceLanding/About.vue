<template>
    <div class="content">
        <div class="information">
            <img v-lazy="'/img/alena_cource.webp'" class="information-avatar">
            <div class="information-text">
                <div class="information-text-title">
                    Алёна Банокина
                </div>
                <div class="information-text-subtitle">
                    Шоколатье Chocolatier
                </div>
                <div>
                    <p>
                    Все привет! Меня зовут Алёна, мне 25 лет и я являюсь мастером и
                    создателем бренда “Chocolatier” (Шоколатье).
                    </p>
                    <p>
                    Начало этому шоколадному делу было положено ещё в далеком 2015г. Тогда
                    я была ещё студенткой заочного отделения и искала дело, которое было бы
                    мне по душе.
                    </p>
                    <p>
                    Так жизнь связала меня с шоколадом.
                    </p>
                    <p>Как вы уже поняли, по профессии я так и не стала работать, но зато целиком
                    и полностью посвятила себя шоколадному делу: </p>
                    <p>
                        Сначала 3 года я работала на дому, на обычной домашней кухне. Но затем
                        клиентов стало так много что потребовалось отдельное помещение и еще
                        один сотрудник. Сейчас в нашей команде уже 4 человека и мы не
                        собираемся останавливаться. Ведь когда занимаешься любимым делом и
                        отдаешь ему все свое сердце, то все начинает расти органическим путем.
                    </p>
                    <p>
                        Также параллельно с этим, год назад, я запустила свое обучением по видео-
                        урокам. И была невероятно рада, когда у девушек с нулевым опытом
                        получались красивейшие шедевры из шоколада.
                    </p>
                    <p>
                        Глядя на моих учениц, я уверена, что абсолютно каждая девушка (хотя не
                        только девушка, но и мужчина) может реализовать себя в шоколадном деле,
                        даже не имея никакого опыта. Зарабатывать на своем хобби, реализовывать
                        свой творческий потенциал и свободно распоряжаться своим временем.
                    </p>
                    <p>
                        Мне кажется, что такой и должна быть работа. Любимой и вдохновляющей.
                        Ведь не зря говорят, что человек который зарабатывает на любимом деле -
                        никогда не будет работать.
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    
}
</script>

<style scoped>
.content {
    padding-left: 20px;
    padding-right: 20px;
    font-family: 'Montserrat';
    margin-top: 30px;
}
.information-avatar {
    min-width: 300px;
    min-height: 400px;
    max-width: 300px;
    max-height: 400px;
    width: 300px;
    height: 400px;
    object-fit: cover;
    border-radius: 20px;
    margin-right: 20px;
    margin-bottom: 20px;
    float: left;
}
.information {
    margin: auto;
    margin-top: 60px;
    max-width: 900px;
}
.information-text {
    display: inline;
}
.information-text-title {
    font-weight: 600;
    font-size: 1.8em;
}
.information-text-subtitle {
    color: #929292;
}

@media only screen and (max-width: 575px) {
    .information-avatar {
        min-width: 90vw;
        min-height: 400px;
        max-width: 90vw;
        max-height: 400px;
        width: 90vw;
        height: 400px;
        margin: auto;
        margin-bottom: 20px;
    }
}
</style>