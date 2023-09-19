<div class="header">
    <div class="header_ctn">
        <a href="{{ url('home') }}" class="header_logo">
            <img src="./img/common/logo.png"/>
        </a>
        <div class="nav_shield up_lg_hide"></div>
        <div class="nav_frame">
            <div class="nav_close up_lg_hide" onclick="navObj.active = false"></div>
            <div class="nav_ctn">

            </div>
        </div>
        <div class="nav_btn up_lg_hide" onclick="navObj.active = !navObj.active">
            <div class="nav_line _1"></div>
            <div class="nav_line _2"></div>
            <div class="nav_line _3"></div>
        </div>
    </div>
</div>
<script>
    $(function () {

        const requestOne = axios.get('{{ url('') }}/api/menu');
        const requestTwo = axios.get('{{ url('') }}/api/contact_infos');
        axios
            .all([requestOne, requestTwo])
            .then(
                axios.spread((...responses) => {
                    const responseOne = responses[0];
                    const responseTwo = responses[1];
                    let contact_info_items = Object.keys(responses[0].data.items).map(function (_) {
                        return responses[0].data.items[_];
                    });
                    let nav_ctn_html = '';
                    if (current_path == '') {
                        current_path = 'home';
                    }
                    contact_info_items.forEach(function (item) {
                        let menu_action = String(item.action);
                        nav_ctn_html += `<div class="nav_box ` + (menu_action.indexOf(current_path) < 0 ? '' : 'active') + `">
                        <a href="{{ url('') }}/${item.action}" class="nav_item">${item.title}</a>
                    </div>`;
                    });
                    contact_info_items = Object.keys(responses[1].data.items).map(function (_) {
                        return responses[1].data.items[_];
                    });
                    contact_info_items.forEach(function (item) {
                        nav_ctn_html += `
                    <div class="nav_box right_logo">
                        <a class="hover1" href="${item.fb_link}" target="_blank"><img
                                src="./img/common/facebook.png"/></a>
                        <a class="hover1" href="${item.ig_link}" target="_blank"><img
                                src="./img/common/instagram.png"/></a>
                        <a class="hover1" href="${item.line_link}" target="_blank"><img
                                src="./img/common/line.png"/></a>
                    </div>`;
                        $('#footer_fb_link').attr('href', item.fb_link);
                        $('#footer_ig_link').attr('href', item.ig_link);
                        $('#footer_line_link').attr('href', item.line_link);
                    });

                    $('.nav_ctn').html(nav_ctn_html);

                })
            )
            .catch(errors => {
                // react on errors.
                console.error(errors);
            });
        // 選單
        let current_path = window.location.pathname.replace('/', '');
        axios.get('{{ url('') }}/api/menu')
            .then(response => {
                let contact_info_items = Object.keys(response.data.items).map(function (_) {
                    return response.data.items[_];
                });
                let nav_ctn_html = '';
                contact_info_items.forEach(function (item) {
                    let menu_action = String(item.action);
                    nav_ctn_html += `<div class="nav_box ` + (menu_action.indexOf(current_path) >= 0 ? 'active' : '') + `">
                        <a href="{{ url('') }}/${item.action}" class="nav_item">${item.title}</a>
                    </div>`;
                });


                //  $('.nav_ctn').html(nav_ctn_html);

            })
            .catch(error => {
                this.errored = true
            })
            .finally(() => this.loading = false);

    })
</script>

