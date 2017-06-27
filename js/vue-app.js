var ballMneu = new Vue({
    el: '#nav-ball',
    data: {
        todos: [{
            name: 'BB体育',
            link: 'sports.php'
        }, {
            name: 'NEW BB体育',
            link: '#'
        }, {
            name: '体育投注',
            link: '#'
        }]
    }
})
var gameMneu = new Vue({
    el: '#nav-game',
    data: {
        todos: [{
            name: 'BB电子',
            link: 'casino.php'
        }, {
            name: 'MG电子',
            link: '#'
        }, {
            name: 'GNS电子',
            link: '#'
        }, {
            name: 'ISB电子',
            link: '#'
        }, {
            name: 'PT电子',
            link: '#'
        }, {
            name: 'HB电子',
            link: '#'
        }]
    }
})
var Meminfo = new Vue({
    el: '#vue-meminfo',
    data: {
        account: 'admin',
        total: '168.08',
        todos: [{
            name: '体育投注余额',
            balance: '100.08'
        }, {
            name: 'AG视讯余额',
            balance: '---'
        }, {
            name: '歐博視訊餘額',
            balance: '68.00'
        }]
    }
})