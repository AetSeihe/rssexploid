$(function() {
    'use strict'

    const domain = window.location.origin

    // Token POST Ajax
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Translate Russia and English
    String.prototype.translit = String.prototype.translit || function () {
        let Chars = {
                ',': '', ' ': '-', 'а': 'a', 'б': 'b', 'в': 'v', 'г': 'g', 'д': 'd', 'е': 'e', 'ё': 'yo', 'ж': 'zh', 'з': 'z', 'и': 'i', 'й': 'y', 'к': 'k', 'л': 'l', 'м': 'm', 'н': 'n', 'о': 'o', 'п': 'p', 'р': 'r', 'с': 's', 'т': 't', 'у': 'u', 'ф': 'f', 'х': 'h', 'ц': 'c', 'ч': 'ch', 'ш': 'sh', 'щ': 'shch', 'ъ': '', 'ы': 'y', 'ь': '', 'э': 'e', 'ю': 'yu', 'я': 'ya', 'А': 'a', 'Б': 'b', 'В': 'v', 'Г': 'g', 'Д': 'd', 'Е': 'e', 'Ё': 'yo', 'Ж': 'zh', 'З': 'z', 'И': 'i', 'Й': 'y', 'К': 'k', 'Л': 'l', 'М': 'm', 'Н': 'n', 'О': 'o', 'П': 'p', 'Р': 'r', 'С': 's', 'Т': 't', 'У': 'u', 'Ф': 'f', 'Х': 'h', 'Ц': 'c', 'Ч': 'ch', 'Ш': 'sh', 'Щ': 'shch', 'Ъ': '', 'Ы': 'y', 'Ь': '', 'Э': 'e', 'Ю': 'yu', 'Я': 'ya'
            },
            t = this;
        for (let i in Chars) { t = t.replace(new RegExp(i, 'g'), Chars[i]); }
        return t;
    };

    // Create Category
    if (document.getElementById('category-form')) {
        const categoryForm = document.getElementById('category-form'),
            error = document.getElementById('error'),
            route = categoryForm.getAttribute('action'),
            categoryCreate = document.getElementById('category-create'),
            destroyBtn = document.querySelectorAll('.destroy-category')

        categoryCreate.addEventListener('click', function (event) {
            event.preventDefault()

            const nameCategory = document.getElementById('category').value,
                categorys = document.getElementById('categorys'),
                template = `
                    <tr>
                        <th>#</th>
                        <td>${nameCategory}</td>
                        <td width="40px">
                            <a href="#" data-id="" class="destroy-category">
                                <svg xmlns="http://www.w3.org/2000/svg" height="427pt" viewBox="-40 0 427 427.00131" width="427pt"><path d="m232.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"/><path d="m114.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"/><path d="m28.398438 127.121094v246.378906c0 14.5625 5.339843 28.238281 14.667968 38.050781 9.285156 9.839844 22.207032 15.425781 35.730469 15.449219h189.203125c13.527344-.023438 26.449219-5.609375 35.730469-15.449219 9.328125-9.8125 14.667969-23.488281 14.667969-38.050781v-246.378906c18.542968-4.921875 30.558593-22.835938 28.078124-41.863282-2.484374-19.023437-18.691406-33.253906-37.878906-33.257812h-51.199218v-12.5c.058593-10.511719-4.097657-20.605469-11.539063-28.03125-7.441406-7.421875-17.550781-11.5546875-28.0625-11.46875h-88.796875c-10.511719-.0859375-20.621094 4.046875-28.0625 11.46875-7.441406 7.425781-11.597656 17.519531-11.539062 28.03125v12.5h-51.199219c-19.1875.003906-35.394531 14.234375-37.878907 33.257812-2.480468 19.027344 9.535157 36.941407 28.078126 41.863282zm239.601562 279.878906h-189.203125c-17.097656 0-30.398437-14.6875-30.398437-33.5v-245.5h250v245.5c0 18.8125-13.300782 33.5-30.398438 33.5zm-158.601562-367.5c-.066407-5.207031 1.980468-10.21875 5.675781-13.894531 3.691406-3.675781 8.714843-5.695313 13.925781-5.605469h88.796875c5.210937-.089844 10.234375 1.929688 13.925781 5.605469 3.695313 3.671875 5.742188 8.6875 5.675782 13.894531v12.5h-128zm-71.199219 32.5h270.398437c9.941406 0 18 8.058594 18 18s-8.058594 18-18 18h-270.398437c-9.941407 0-18-8.058594-18-18s8.058593-18 18-18zm0 0"/><path d="m173.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"/></svg>
                            </a>
                        </td>
                    </tr>
                `

            const slug = nameCategory.translit();

            $.ajax({
                method: 'post',
                url: route,
                data: {
                    name: nameCategory,
                    slug: slug
                },
                success: function (data) {
                    if (data == 'true') {
                        error.innerText = `Успешно сохранено`
                    } else {
                        error.innerText = `Что-то пошло не так...`
                        console.log(data)
                        return false
                    }
                    setTimeout(function () {
                        error.innerText = ``
                    }, 2000)
                },
            })

            categorys.insertAdjacentHTML('beforeend', template)
            categoryForm.reset()
            return false
        })

        destroyBtn.forEach(el => el.addEventListener('click', function(event) {
            event.preventDefault()

            const id = this.dataset.id,
                destroy = this.getAttribute('href')

            $.ajax({
                method: 'get',
                url: destroy,
                data: {
                    id: id,
                },
                success: function (data) {

                },
            })

            event.target.closest('.item').remove()

            return false
        }))
    }

    // Menu
    if (document.getElementById('myTabContent')) {
        // Header Elements Menu
        const formCreateItemMenuHeader = document.getElementById('menu-form-header'),
            errorHeader = document.getElementById('error-header'),
            menuAddHeader = document.getElementById('menu-add-header'),
            listMenuHeader = document.getElementById('list-menu-header'),
            routeCreate = formCreateItemMenuHeader.getAttribute('action'),
            destroy = document.querySelectorAll('.destroy'),
            menuEdit = document.querySelectorAll('#menu-edit')

        const formCreateItemMenuFooter = document.getElementById('menu-form-footer'),
            errorFooter = document.getElementById('error-footer'),
            menuAddFooter = document.getElementById('menu-add-footer'),
            listMenuFooter = document.getElementById('list-menu-footer')

        // Elements Menu List Item Show & Close
        const elMenuList = document.querySelectorAll('.list-group-item .name')

        elMenuList.forEach(el => el.addEventListener('click', function(event) {
            event.preventDefault()

            event.target.closest('.list-group-item').classList.toggle('show')

            return false
        }))

        // Elements Menu Top & Down
        const topEl = document.querySelectorAll('.list-group-item .top'),
            downEl = document.querySelectorAll('.list-group-item .bottom')

        topEl.forEach(el => el.addEventListener('click', function(event) {
            event.preventDefault()

            const wrapper = this.parentElement.parentElement.parentElement

            if (wrapper.previousElementSibling) wrapper.parentNode.insertBefore(wrapper, wrapper.previousElementSibling)

            return false
        }))

        downEl.forEach(el => el.addEventListener('click', function(event) {
            event.preventDefault()

            const wrapper = this.parentElement.parentElement.parentElement

            if (wrapper.nextElementSibling) wrapper.parentNode.insertBefore(wrapper.nextElementSibling, wrapper);

            return false
        }))


        // Add Element Menu List menu
        menuAddHeader.addEventListener('click', function (event) {
            event.preventDefault()

            const name = document.getElementById('name-item-header').value,
                link = document.getElementById('link-item-header').value

            if(name.length < 2) {
                errorHeader.innerText = `Название рубрики должно быть длинее`
                setTimeout(function () {
                    errorHeader.innerText = ``
                }, 3000)
                return false
            }
            if(link.length < 5) {
                errorHeader.innerText = `Поле ссылки не должно быть пустое`
                setTimeout(function () {
                    errorHeader.innerText = ``
                }, 3000)
                return false
            }

            const template = `
                 <div class="list-group-item" data-id="" data-link="${link}">
                    <span class="name">${name}</span>
                    <div class="meta">
                        <span class="top">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
<g>
\t<g>
\t\t<path d="M506.127,351.331l-207.701-207.27c-23.393-23.394-61.458-23.395-84.838-0.015L5.872,351.33    c-7.818,7.802-7.831,20.465-0.029,28.284c7.802,7.818,20.465,7.832,28.284,0.029l207.731-207.299    c7.798-7.797,20.486-7.798,28.299,0.015l207.716,207.285c3.904,3.896,9.015,5.843,14.127,5.843c5.125,0,10.25-1.958,14.156-5.872    C513.959,371.796,513.945,359.133,506.127,351.331z"/>
\t</g>
</g>
</svg>
                                        </span>
                        <span class="bottom">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1"
                                                 x="0px" y="0px" viewBox="0 0 511.999 511.999"
                                                 style="enable-background:new 0 0 511.999 511.999;transform: rotate(180deg)" xml:space="preserve">
<g>
\t<g>
\t\t<path d="M506.127,351.331l-207.701-207.27c-23.393-23.394-61.458-23.395-84.838-0.015L5.872,351.33    c-7.818,7.802-7.831,20.465-0.029,28.284c7.802,7.818,20.465,7.832,28.284,0.029l207.731-207.299    c7.798-7.797,20.486-7.798,28.299,0.015l207.716,207.285c3.904,3.896,9.015,5.843,14.127,5.843c5.125,0,10.25-1.958,14.156-5.872    C513.959,371.796,513.945,359.133,506.127,351.331z"/>
\t</g>
</g>

</svg>
                                        </span>
                    </div>
                    <a href="#" class="destroy">
                        <svg xmlns="http://www.w3.org/2000/svg" height="427pt" viewBox="-40 0 427 427.00131" width="427pt"><path d="m232.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"/><path d="m114.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"/><path d="m28.398438 127.121094v246.378906c0 14.5625 5.339843 28.238281 14.667968 38.050781 9.285156 9.839844 22.207032 15.425781 35.730469 15.449219h189.203125c13.527344-.023438 26.449219-5.609375 35.730469-15.449219 9.328125-9.8125 14.667969-23.488281 14.667969-38.050781v-246.378906c18.542968-4.921875 30.558593-22.835938 28.078124-41.863282-2.484374-19.023437-18.691406-33.253906-37.878906-33.257812h-51.199218v-12.5c.058593-10.511719-4.097657-20.605469-11.539063-28.03125-7.441406-7.421875-17.550781-11.5546875-28.0625-11.46875h-88.796875c-10.511719-.0859375-20.621094 4.046875-28.0625 11.46875-7.441406 7.425781-11.597656 17.519531-11.539062 28.03125v12.5h-51.199219c-19.1875.003906-35.394531 14.234375-37.878907 33.257812-2.480468 19.027344 9.535157 36.941407 28.078126 41.863282zm239.601562 279.878906h-189.203125c-17.097656 0-30.398437-14.6875-30.398437-33.5v-245.5h250v245.5c0 18.8125-13.300782 33.5-30.398438 33.5zm-158.601562-367.5c-.066407-5.207031 1.980468-10.21875 5.675781-13.894531 3.691406-3.675781 8.714843-5.695313 13.925781-5.605469h88.796875c5.210937-.089844 10.234375 1.929688 13.925781 5.605469 3.695313 3.671875 5.742188 8.6875 5.675782 13.894531v12.5h-128zm-71.199219 32.5h270.398437c9.941406 0 18 8.058594 18 18s-8.058594 18-18 18h-270.398437c-9.941407 0-18-8.058594-18-18s8.058593-18 18-18zm0 0"/><path d="m173.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"/></svg>
                    </a>
                 </div>
            `

            listMenuHeader.insertAdjacentHTML('beforeend', template)

            formCreateItemMenuHeader.reset()

            const menuElArray = [],
                menuElements = document.querySelectorAll('#list-menu-header .list-group-item')

            for(let i = 0; i < menuElements.length; i++) {
                let element = {
                    name: menuElements[i].querySelectorAll('.name')[0].innerHTML,
                    link: menuElements[i].dataset.link,
                    number: i,
                    type: 'header'
                }
                menuElArray.push(element)
            }

            $.ajax({
                method: 'post',
                url: routeCreate,
                data: {
                    menuElArray: menuElArray
                },
                success: function (data) {
                    if (data == 'true') {
                        errorHeader.innerText = `Успешно сохранено`
                    } else {
                        errorHeader.innerText = `Что-то пошло не так...`
                        console.log(data)
                        return false
                    }
                    setTimeout(function () {
                        errorHeader.innerText = ``
                    }, 2000)
                },
            })

            return false
        })

        // Delete Element Menu
        destroy.forEach(el => el.addEventListener('click', function(event) {
           event.preventDefault()

            const id = this.dataset.id,
                routeDestroy = this.getAttribute('href'),
                el = this.closest('.list-group-item')

            $.ajax({
                method: 'get',
                url: routeDestroy,
                data: {
                    id: id
                },
                success: function (data) {

                },
            })

            el.remove()

            return false
        }))

        // Edit Element Menu
        menuEdit.forEach(el => el.addEventListener('click', function(event) {
            event.preventDefault()

            const id = this.dataset.id,
                form = this.closest('.form-edit'),
                routeEdit = form.getAttribute('action'),
                name = form.querySelectorAll('.name-input')[0].value,
                link = form.querySelectorAll('.link-input')[0].value

            $.ajax({
                method: 'post',
                url: routeEdit,
                data: {
                    id: id,
                    name: name,
                    link: link,
                    type: 'header'
                },
                success: function (data) {
                    if(data == 'true') {
                        event.target.closest('.list-group-item').classList.remove('show')
                    } else {

                    }
                },
            })

            return false
        }))

        // Menu Footer

        // Add Element Menu List menu
        menuAddFooter.addEventListener('click', function (event) {
            event.preventDefault()

            const name = document.getElementById('name-item-footer').value,
                link = document.getElementById('link-item-footer').value

            if(name.length < 2) {
                errorFooter.innerText = `Название рубрики должно быть длинее`
                setTimeout(function () {
                    errorFooter.innerText = ``
                }, 3000)
                return false
            }
            if(link.length < 5) {
                errorFooter.innerText = `Поле ссылки не должно быть пустое`
                setTimeout(function () {
                    errorFooter.innerText = ``
                }, 3000)
                return false
            }

            const template = `
                 <div class="list-group-item" data-id="" data-link="${link}">
                    <span class="name">${name}</span>
                    <div class="meta">
                        <span class="top">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
<g>
\t<g>
\t\t<path d="M506.127,351.331l-207.701-207.27c-23.393-23.394-61.458-23.395-84.838-0.015L5.872,351.33    c-7.818,7.802-7.831,20.465-0.029,28.284c7.802,7.818,20.465,7.832,28.284,0.029l207.731-207.299    c7.798-7.797,20.486-7.798,28.299,0.015l207.716,207.285c3.904,3.896,9.015,5.843,14.127,5.843c5.125,0,10.25-1.958,14.156-5.872    C513.959,371.796,513.945,359.133,506.127,351.331z"/>
\t</g>
</g>
</svg>
                                        </span>
                        <span class="bottom">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1"
                                                 x="0px" y="0px" viewBox="0 0 511.999 511.999"
                                                 style="enable-background:new 0 0 511.999 511.999;transform: rotate(180deg)" xml:space="preserve">
<g>
\t<g>
\t\t<path d="M506.127,351.331l-207.701-207.27c-23.393-23.394-61.458-23.395-84.838-0.015L5.872,351.33    c-7.818,7.802-7.831,20.465-0.029,28.284c7.802,7.818,20.465,7.832,28.284,0.029l207.731-207.299    c7.798-7.797,20.486-7.798,28.299,0.015l207.716,207.285c3.904,3.896,9.015,5.843,14.127,5.843c5.125,0,10.25-1.958,14.156-5.872    C513.959,371.796,513.945,359.133,506.127,351.331z"/>
\t</g>
</g>

</svg>
                                        </span>
                    </div>
                    <a href="#" class="destroy">
                        <svg xmlns="http://www.w3.org/2000/svg" height="427pt" viewBox="-40 0 427 427.00131" width="427pt"><path d="m232.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"/><path d="m114.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"/><path d="m28.398438 127.121094v246.378906c0 14.5625 5.339843 28.238281 14.667968 38.050781 9.285156 9.839844 22.207032 15.425781 35.730469 15.449219h189.203125c13.527344-.023438 26.449219-5.609375 35.730469-15.449219 9.328125-9.8125 14.667969-23.488281 14.667969-38.050781v-246.378906c18.542968-4.921875 30.558593-22.835938 28.078124-41.863282-2.484374-19.023437-18.691406-33.253906-37.878906-33.257812h-51.199218v-12.5c.058593-10.511719-4.097657-20.605469-11.539063-28.03125-7.441406-7.421875-17.550781-11.5546875-28.0625-11.46875h-88.796875c-10.511719-.0859375-20.621094 4.046875-28.0625 11.46875-7.441406 7.425781-11.597656 17.519531-11.539062 28.03125v12.5h-51.199219c-19.1875.003906-35.394531 14.234375-37.878907 33.257812-2.480468 19.027344 9.535157 36.941407 28.078126 41.863282zm239.601562 279.878906h-189.203125c-17.097656 0-30.398437-14.6875-30.398437-33.5v-245.5h250v245.5c0 18.8125-13.300782 33.5-30.398438 33.5zm-158.601562-367.5c-.066407-5.207031 1.980468-10.21875 5.675781-13.894531 3.691406-3.675781 8.714843-5.695313 13.925781-5.605469h88.796875c5.210937-.089844 10.234375 1.929688 13.925781 5.605469 3.695313 3.671875 5.742188 8.6875 5.675782 13.894531v12.5h-128zm-71.199219 32.5h270.398437c9.941406 0 18 8.058594 18 18s-8.058594 18-18 18h-270.398437c-9.941407 0-18-8.058594-18-18s8.058593-18 18-18zm0 0"/><path d="m173.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"/></svg>
                    </a>
                 </div>
            `

            listMenuFooter.insertAdjacentHTML('beforeend', template)

            formCreateItemMenuFooter.reset()

            const menuElArray = [],
                menuElements = document.querySelectorAll('#list-menu-footer .list-group-item')

            for(let i = 0; i < menuElements.length; i++) {
                let element = {
                    name: menuElements[i].querySelectorAll('.name')[0].innerHTML,
                    link: menuElements[i].dataset.link,
                    number: i,
                    type: 'footer'
                }
                menuElArray.push(element)
            }

            $.ajax({
                method: 'post',
                url: routeCreate,
                data: {
                    menuElArray: menuElArray
                },
                success: function (data) {
                    if (data == 'true') {
                        errorFooter.innerText = `Успешно сохранено`
                    } else {
                        errorFooter.innerText = `Что-то пошло не так...`
                        console.log(data)
                        return false
                    }
                    setTimeout(function () {
                        errorFooter.innerText = ``
                    }, 2000)
                },
            })

            return false
        })
    }

    // Create Post
    if(document.getElementById('file')) {
        const formCreate = document.getElementById('form-create'),
            loading = formCreate.dataset.loading

        // Import Image Preview Post
        document.getElementById('file').addEventListener('change', function (event) {
            const icon = document.getElementById('file').files[0],
                parts = icon.name.split('.'),
                ext = parts.pop(),
                iconName = `${icon.size}_diller0054.${ext}`,
                linkImage = `${domain}/storage/${iconName}`

            if(ext == 'jpeg') {
                alert('Данный формат изображения недопустим')
                return false
            }

            document.getElementById('images').dataset.name = iconName

            $.ajax({
                url: loading,
                method:'POST',
                data: new FormData(formCreate),
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function(response){

                }
            })

            setInterval(function () {
                document.getElementById('images').setAttribute('src', linkImage)
            }, 1000)
        })

    }

    // Search Admin Panel Post
    if(document.getElementById('post-form-search')) {
        const formSearch = document.getElementById('post-form-search'),
            input = document.getElementById('category'),
            result = document.getElementById('result'),
            searchUrl = formSearch.getAttribute('action')

        const generationResultSearch = data => {
            result.innerHTML = ``

            let template = `
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">name</div>
                        <div class="group-btn">
                            <a href="/post/id-post" class="btn btn-info" target="_blank">Перейти</a>
                            <a href="/admin/post-edit/id-post" class="btn btn-success" target="_blank">Редактировать</a>
                        </div>
                    </div>
                </div>
            `

            for(let i = 0; i < data.length; i++) {
                const id = data[i]['id'],
                    name = data[i]['name']

                template = template.replaceAll('name', name)
                template = template.replaceAll('id-post', id)

                result.insertAdjacentHTML('beforeend', template)
            }
        }

        input.addEventListener('input', function (event) {
            event.preventDefault()

            if(input.value < 3) {
                result.innerHTML = `Введите более 3-х символов`
                return false
            }

            $.ajax({
                method: 'get',
                url: searchUrl,
                data: {
                    value: input.value
                },
                success: function (data) {
                    if(data.length > 0) {
                        generationResultSearch(data)
                    } else {
                        result.innerHTML = `Ничего не найдено`
                    }
                },
            })

            return false
        })
    }

    // Destroy Post Admin Panel
    if(document.getElementById('post-form-search')) {
        const destroy = document.querySelectorAll('.destroy')

        destroy.forEach(el => el.addEventListener('click', function(event) {
            event.preventDefault()

            const url = event.target.getAttribute('href'),
                id = event.target.dataset.id,
                post = event.target.closest('.card')

            $.ajax({
                method: 'get',
                url: url,
                data: {
                    id: id
                },
                success: function (data) {
                    post.remove()
                },
            })

            return false
        }))
    }

    // Add Tag Create && Edit Single
    if(document.getElementById('tags')) {
        const tags = document.getElementById('tags'),
            addTag = document.getElementById('add-tag')

        addTag.addEventListener('click', function (event) {
            event.preventDefault()
            const value = document.getElementById('tag-input').value

            let template = `
                <div class="item" data-name="title">
                    <span>${value}</span>
                    <svg class="close" xmlns="http://www.w3.org/2000/svg" height="427pt" viewBox="-40 0 427 427.00131" width="427pt"><path d="m232.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"></path><path d="m114.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"></path><path d="m28.398438 127.121094v246.378906c0 14.5625 5.339843 28.238281 14.667968 38.050781 9.285156 9.839844 22.207032 15.425781 35.730469 15.449219h189.203125c13.527344-.023438 26.449219-5.609375 35.730469-15.449219 9.328125-9.8125 14.667969-23.488281 14.667969-38.050781v-246.378906c18.542968-4.921875 30.558593-22.835938 28.078124-41.863282-2.484374-19.023437-18.691406-33.253906-37.878906-33.257812h-51.199218v-12.5c.058593-10.511719-4.097657-20.605469-11.539063-28.03125-7.441406-7.421875-17.550781-11.5546875-28.0625-11.46875h-88.796875c-10.511719-.0859375-20.621094 4.046875-28.0625 11.46875-7.441406 7.425781-11.597656 17.519531-11.539062 28.03125v12.5h-51.199219c-19.1875.003906-35.394531 14.234375-37.878907 33.257812-2.480468 19.027344 9.535157 36.941407 28.078126 41.863282zm239.601562 279.878906h-189.203125c-17.097656 0-30.398437-14.6875-30.398437-33.5v-245.5h250v245.5c0 18.8125-13.300782 33.5-30.398438 33.5zm-158.601562-367.5c-.066407-5.207031 1.980468-10.21875 5.675781-13.894531 3.691406-3.675781 8.714843-5.695313 13.925781-5.605469h88.796875c5.210937-.089844 10.234375 1.929688 13.925781 5.605469 3.695313 3.671875 5.742188 8.6875 5.675782 13.894531v12.5h-128zm-71.199219 32.5h270.398437c9.941406 0 18 8.058594 18 18s-8.058594 18-18 18h-270.398437c-9.941407 0-18-8.058594-18-18s8.058593-18 18-18zm0 0"></path><path d="m173.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"></path></svg>
                </div>
            `

            tags.insertAdjacentHTML('beforeend', template)

            document.getElementById('tag-input').value = ``

            return false
        })

        tags.addEventListener('click', function (event) {
            event.preventDefault()

            if(event.target.classList.contains('close')) event.target.closest('.item').remove()

            return false
        })
    }

    // Setting Site Save
    if(document.getElementById('form-setting')) {
        const formSetting = document.getElementById('form-setting'),
            error = document.getElementById('error'),
            loading = document.getElementById('loading'),
            url = formSetting.getAttribute('action'),
            loadingImage = formSetting.dataset.loading

        // Import Image Preview Post
        document.getElementById('fav').addEventListener('change', function (event) {
            const icon = document.getElementById('fav').files[0],
                parts = icon.name.split('.'),
                ext = parts.pop(),
                iconName = `${icon.size}_diller0054.${ext}`,
                linkImage = `/storage/${iconName}`

            if(ext == 'jpeg') {
                alert('Данный формат изображения недопустим')
                return false
            }

            document.getElementById('fav').setAttribute('data-image', linkImage)

            $.ajax({
                url: loadingImage,
                method:'POST',
                data: new FormData(formSetting),
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function(response){

                }
            })
        })

        loading.addEventListener('click', function (event) {
            event.preventDefault()

            const politic = document.getElementById('politic').value,
                data = document.getElementById('data').value,
                phone = document.getElementById('phone').value,
                email = document.getElementById('email').value,
                address = document.getElementById('address').value,
                vk = document.getElementById('vk').value,
                facebook = document.getElementById('facebook').value,
                twitter = document.getElementById('twitter').value,
                name = document.getElementById('name').value,
                description = document.getElementById('description').value,
                keys = document.getElementById('keys').value,
                instagram = document.getElementById('instagram').value,
                image = document.getElementById('fav').dataset.image

            $.ajax({
                method: 'post',
                url: url,
                data: {
                    name: name,
                    description: description,
                    keys: keys,
                    politic: politic,
                    data: data,
                    phone: phone,
                    email: email,
                    address: address,
                    vk: vk,
                    image: image,
                    facebook: facebook,
                    twitter: twitter,
                    instagram: instagram
                },
                success: function (data) {
                    (data == 'true') ? error.innerHTML = `Сохранено` : error.innerHTML = `Ошибка...`
                },
            })

            return false
        })
    }

    // Message Page admin
    if(document.getElementById('message')) {
        const message = document.getElementById('message'),
            user = document.querySelectorAll('#message .user'),
            listMessage = document.querySelectorAll('#message .list-message .message'),
            view = 'true'

        user.forEach(el => el.addEventListener('click', function(event) {
            event.preventDefault()

            const messageUrl = this.dataset.url,
                id = this.dataset.item

            for(let i = 0; i < user.length; i++) {
                user[i].classList.remove('active-message')
            }

            for(let i = 0; i < listMessage.length; i++) {
                listMessage[i].classList.remove('active')
            }

            this.classList.add('active-message')

            document.getElementById(this.dataset.id).classList.add('active')

            $.ajax({
                method: 'get',
                url: messageUrl,
                data: {
                    view: view,
                    id: id
                },
                success: function (data) {

                },
            })

            return false
        }))
    }

    // Add Image Photo Gallery Post
    if(document.getElementById('gallery')) {
        const gallery = document.getElementById('gallery'),
            addImage = document.getElementById('add-image'),
            form = document.getElementById('form-create'),
            loadingImage = form.dataset.loading

        addImage.addEventListener('click', function (event) {
            event.preventDefault()

            let random = Math.floor(Math.random() * (5454 - 0)),
                template = `
               <form id="file${random}" class="file">
                   <div class="item">
                    <div class="form-group images-preview">
                        <div class="custom-file">
                            <input class="custom-file-input" id="file${random}" name="file" type="file">
                            <label class="custom-file-label" for="file${random}"></label>
                        </div>
                    </div>
                    <div class="delete">
                        <svg class="delete-icon" xmlns="http://www.w3.org/2000/svg" height="427pt" viewBox="-40 0 427 427.00131" width="427pt"><path d="m232.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"></path><path d="m114.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"></path><path d="m28.398438 127.121094v246.378906c0 14.5625 5.339843 28.238281 14.667968 38.050781 9.285156 9.839844 22.207032 15.425781 35.730469 15.449219h189.203125c13.527344-.023438 26.449219-5.609375 35.730469-15.449219 9.328125-9.8125 14.667969-23.488281 14.667969-38.050781v-246.378906c18.542968-4.921875 30.558593-22.835938 28.078124-41.863282-2.484374-19.023437-18.691406-33.253906-37.878906-33.257812h-51.199218v-12.5c.058593-10.511719-4.097657-20.605469-11.539063-28.03125-7.441406-7.421875-17.550781-11.5546875-28.0625-11.46875h-88.796875c-10.511719-.0859375-20.621094 4.046875-28.0625 11.46875-7.441406 7.425781-11.597656 17.519531-11.539062 28.03125v12.5h-51.199219c-19.1875.003906-35.394531 14.234375-37.878907 33.257812-2.480468 19.027344 9.535157 36.941407 28.078126 41.863282zm239.601562 279.878906h-189.203125c-17.097656 0-30.398437-14.6875-30.398437-33.5v-245.5h250v245.5c0 18.8125-13.300782 33.5-30.398438 33.5zm-158.601562-367.5c-.066407-5.207031 1.980468-10.21875 5.675781-13.894531 3.691406-3.675781 8.714843-5.695313 13.925781-5.605469h88.796875c5.210937-.089844 10.234375 1.929688 13.925781 5.605469 3.695313 3.671875 5.742188 8.6875 5.675782 13.894531v12.5h-128zm-71.199219 32.5h270.398437c9.941406 0 18 8.058594 18 18s-8.058594 18-18 18h-270.398437c-9.941407 0-18-8.058594-18-18s8.058593-18 18-18zm0 0"></path><path d="m173.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"></path></svg>
                    </div>
                   </div>
                </form>
            `

            gallery.insertAdjacentHTML('beforeend', template)

            return false
        })

        gallery.addEventListener('change', function (event) {

            if(event.target.classList.contains('custom-file-input')) {
                const icon = event.target.files[0],
                    parts = icon.name.split('.'),
                    ext = parts.pop(),
                    iconName = `${icon.size}_diller0054.${ext}`,
                    linkImage = `/storage/${iconName}`,
                    formFile = event.target.closest('.file')

                if(ext == 'jpeg') {
                    alert('Данный формат изображения недопустим')
                    return false
                }

                $.ajax({
                    url: loadingImage,
                    method:'POST',
                    data: new FormData(formFile),
                    dataType:'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response){

                    }
                })

                const imageTemplate = `<img src="${linkImage}" class="card-img-top mb-1">`

                setTimeout(function() {
                    event.target.closest('.file').querySelectorAll('.images-preview')[0].insertAdjacentHTML('afterbegin', `${imageTemplate}`)
                }, 1500)
            }

            return false
        })

        gallery.addEventListener('click', function (event) {

            if(event.target.classList.contains('delete-icon')) {
                const el = event.target.closest('.file').remove()
            }

            return false
        })
    }

    // Destroy Photo Post
    if(document.getElementById('photo')) {
        const destroy = document.querySelectorAll('#photo .destroy')

        destroy.forEach(el => el.addEventListener('click', function(event) {
            event.preventDefault()

            const gestroyPost = event.target.getAttribute('href'),
                id = event.target.dataset.id

            event.target.closest('.card').remove()

            $.ajax({
                url: gestroyPost,
                method:'get',
                data: {
                    id: id
                },
                success: function(response){

                }
            })

            return false
        }))
    }

    // Info
    if(document.getElementById('info-create')) {
        const infoCreate = document.getElementById('info-create'),
            route = infoCreate.dataset.url,
            error = document.getElementById('error'),
            save = document.getElementById('save'),
            addInfo = document.getElementById('add-info'),
            add = document.getElementById('add'),
            addHorizontally = document.getElementById('add-horizontally'),
            idInfo = infoCreate.dataset.id

        const listHorizontally = document.getElementById('info-list-horizontally'),
            infoList = document.getElementById('info-list'),
            list = document.getElementById('list')

        const templateHorizontally = `<div class="item mb-2"><input type="text" class="horizontally form-control"><svg class="close" xmlns="http://www.w3.org/2000/svg" height="427pt" viewBox="-40 0 427 427.00131" width="427pt"><path d="m232.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"></path><path d="m114.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"></path><path d="m28.398438 127.121094v246.378906c0 14.5625 5.339843 28.238281 14.667968 38.050781 9.285156 9.839844 22.207032 15.425781 35.730469 15.449219h189.203125c13.527344-.023438 26.449219-5.609375 35.730469-15.449219 9.328125-9.8125 14.667969-23.488281 14.667969-38.050781v-246.378906c18.542968-4.921875 30.558593-22.835938 28.078124-41.863282-2.484374-19.023437-18.691406-33.253906-37.878906-33.257812h-51.199218v-12.5c.058593-10.511719-4.097657-20.605469-11.539063-28.03125-7.441406-7.421875-17.550781-11.5546875-28.0625-11.46875h-88.796875c-10.511719-.0859375-20.621094 4.046875-28.0625 11.46875-7.441406 7.425781-11.597656 17.519531-11.539062 28.03125v12.5h-51.199219c-19.1875.003906-35.394531 14.234375-37.878907 33.257812-2.480468 19.027344 9.535157 36.941407 28.078126 41.863282zm239.601562 279.878906h-189.203125c-17.097656 0-30.398437-14.6875-30.398437-33.5v-245.5h250v245.5c0 18.8125-13.300782 33.5-30.398438 33.5zm-158.601562-367.5c-.066407-5.207031 1.980468-10.21875 5.675781-13.894531 3.691406-3.675781 8.714843-5.695313 13.925781-5.605469h88.796875c5.210937-.089844 10.234375 1.929688 13.925781 5.605469 3.695313 3.671875 5.742188 8.6875 5.675782 13.894531v12.5h-128zm-71.199219 32.5h270.398437c9.941406 0 18 8.058594 18 18s-8.058594 18-18 18h-270.398437c-9.941407 0-18-8.058594-18-18s8.058593-18 18-18zm0 0"></path><path d="m173.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"></path></svg></div>`

        addHorizontally.addEventListener('click', function (event) {
            event.preventDefault()

            listHorizontally.insertAdjacentHTML('beforeend', templateHorizontally)

            return false
        })

        addInfo.addEventListener('click', function (event) {
            event.preventDefault()

            const random = Math.floor(Math.random() * 100)

            const templateInforList = `<div class="item" data-id="${random}"><h6 class="title">Заголовок</h6><svg class="destroy" xmlns="http://www.w3.org/2000/svg" height="427pt" viewBox="-40 0 427 427.00131" width="427pt"><path d="m232.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"></path><path d="m114.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"></path><path d="m28.398438 127.121094v246.378906c0 14.5625 5.339843 28.238281 14.667968 38.050781 9.285156 9.839844 22.207032 15.425781 35.730469 15.449219h189.203125c13.527344-.023438 26.449219-5.609375 35.730469-15.449219 9.328125-9.8125 14.667969-23.488281 14.667969-38.050781v-246.378906c18.542968-4.921875 30.558593-22.835938 28.078124-41.863282-2.484374-19.023437-18.691406-33.253906-37.878906-33.257812h-51.199218v-12.5c.058593-10.511719-4.097657-20.605469-11.539063-28.03125-7.441406-7.421875-17.550781-11.5546875-28.0625-11.46875h-88.796875c-10.511719-.0859375-20.621094 4.046875-28.0625 11.46875-7.441406 7.425781-11.597656 17.519531-11.539062 28.03125v12.5h-51.199219c-19.1875.003906-35.394531 14.234375-37.878907 33.257812-2.480468 19.027344 9.535157 36.941407 28.078126 41.863282zm239.601562 279.878906h-189.203125c-17.097656 0-30.398437-14.6875-30.398437-33.5v-245.5h250v245.5c0 18.8125-13.300782 33.5-30.398438 33.5zm-158.601562-367.5c-.066407-5.207031 1.980468-10.21875 5.675781-13.894531 3.691406-3.675781 8.714843-5.695313 13.925781-5.605469h88.796875c5.210937-.089844 10.234375 1.929688 13.925781 5.605469 3.695313 3.671875 5.742188 8.6875 5.675782 13.894531v12.5h-128zm-71.199219 32.5h270.398437c9.941406 0 18 8.058594 18 18s-8.058594 18-18 18h-270.398437c-9.941407 0-18-8.058594-18-18s8.058593-18 18-18zm0 0"></path><path d="m173.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"></path></svg><hr></div>`,
                templateInfoListItem = `<div class="box" id="${random}"><input type="text" class="name-group form-control mb-2 mr-2" placeholder="Название группы значение"><input type="text" class="color form-control mb-2" placeholder="Цвет, указывается в rgba формате"><hr><div class="items"></div><button type="button" id="add-toch" class="btn add-toch btn-success">Добавить значение</button></div>`

            infoList.insertAdjacentHTML('beforeend', templateInforList)
            list.insertAdjacentHTML('beforeend', templateInfoListItem)

            return false
        })

        add.addEventListener('click', function (event) {
            event.preventDefault()

            if(event.target.classList.contains('title')) {
                const item = document.querySelectorAll('#info-list .item'),
                    body = document.querySelectorAll('#list .box'),
                    id = event.target.closest('.item').dataset.id

                for(let i = 0; i < item.length; i++) {
                    item[i].querySelectorAll('h6')[0].classList.remove('show')
                    body[i].classList.remove('show')
                }

                event.target.classList.add('show')
                document.getElementById(id).classList.add('show')
            }

            if(event.target.classList.contains('destroy')) {
                const id = event.target.closest('.item').dataset.id

                document.getElementById(id).remove()
                event.target.closest('.item').remove()
            }

            if(event.target.classList.contains('add-toch')) {
                const box = event.target.closest('.show'),
                    list = box.querySelectorAll('.items')[0]

                const template = `<div class="item"><input type="text" class="pik form-control mb-2"><svg class="destroy" xmlns="http://www.w3.org/2000/svg" height="427pt" viewBox="-40 0 427 427.00131" width="427pt"><path d="m232.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"></path><path d="m114.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"></path><path d="m28.398438 127.121094v246.378906c0 14.5625 5.339843 28.238281 14.667968 38.050781 9.285156 9.839844 22.207032 15.425781 35.730469 15.449219h189.203125c13.527344-.023438 26.449219-5.609375 35.730469-15.449219 9.328125-9.8125 14.667969-23.488281 14.667969-38.050781v-246.378906c18.542968-4.921875 30.558593-22.835938 28.078124-41.863282-2.484374-19.023437-18.691406-33.253906-37.878906-33.257812h-51.199218v-12.5c.058593-10.511719-4.097657-20.605469-11.539063-28.03125-7.441406-7.421875-17.550781-11.5546875-28.0625-11.46875h-88.796875c-10.511719-.0859375-20.621094 4.046875-28.0625 11.46875-7.441406 7.425781-11.597656 17.519531-11.539062 28.03125v12.5h-51.199219c-19.1875.003906-35.394531 14.234375-37.878907 33.257812-2.480468 19.027344 9.535157 36.941407 28.078126 41.863282zm239.601562 279.878906h-189.203125c-17.097656 0-30.398437-14.6875-30.398437-33.5v-245.5h250v245.5c0 18.8125-13.300782 33.5-30.398438 33.5zm-158.601562-367.5c-.066407-5.207031 1.980468-10.21875 5.675781-13.894531 3.691406-3.675781 8.714843-5.695313 13.925781-5.605469h88.796875c5.210937-.089844 10.234375 1.929688 13.925781 5.605469 3.695313 3.671875 5.742188 8.6875 5.675782 13.894531v12.5h-128zm-71.199219 32.5h270.398437c9.941406 0 18 8.058594 18 18s-8.058594 18-18 18h-270.398437c-9.941407 0-18-8.058594-18-18s8.058593-18 18-18zm0 0"></path><path d="m173.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"></path></svg></div>`

                list.insertAdjacentHTML('beforeend', template)
            }

            if(event.target.classList.contains('close')) {
                event.target.closest('.item').remove()
            }

            return false
        })

        add.addEventListener('input', function (event) {
            event.preventDefault()

            if(event.target.classList.contains('name-group')) {
                document.querySelectorAll('#info-list .item .show')[0].innerHTML = event.target.value
            }

            return false
        })

        save.addEventListener('click', function (event) {
            event.preventDefault()

            let data = {},
                datasets = []

            const title = document.getElementById('title').value,
                type = document.getElementById('type').value,
                horizontalItem = document.querySelectorAll('#info-list-horizontally .item .horizontally')

            // --------------
            let horizontal = []

            for(let i = 0; i < horizontalItem.length; i++) {
                horizontal.push(horizontalItem[i].value)
            }
            data.labels = horizontal

            // --------------
            const listItem = document.querySelectorAll('#list .box')

            for(let i = 0; i < listItem.length; i++) {
                let item = {},
                    data = []

                const color = listItem[i].querySelectorAll('.color')[0].value,
                      name = listItem[i].querySelectorAll('.name-group')[0].value,
                      items = listItem[i].querySelectorAll('.items .item .pik')

                for(let s = 0; s < items.length; s++) {
                    data.push(items[s].value)
                }

                item.data = data
                item.borderWidth = 2
                item.borderColor = [`${color}`]
                item.backgroundColor = [`${color}`]
                item.label = name

                datasets.push(item)
            }

            data.datasets = datasets
            // -------------

            let json = JSON.stringify(data)

            $.ajax({
                url: route,
                method:'post',
                data: {
                    id: idInfo,
                    title: title,
                    type: type,
                    json: json
                },
                success: function(data){
                    window.location.href = data
                }
            })

            return false
        })
    }

    // Podcast
    if(document.getElementById('podcast-create')) {
        const save = document.getElementById('save'),
            route = save.dataset.url,
            loading = document.getElementById('podcast-create').dataset.loading,
            error = document.getElementById('error'),
            addPodcast = document.getElementById('add-podcast'),
            podcasts = document.getElementById('podcasts')

        addPodcast.addEventListener('click', function (event) {
            let random = Math.floor(Math.random() * (5454 - 0)),
                template = `
                <div class="card card-body">
                    <div class="title">
                        <input type="text" name="name" class="form-control title mb-2" placeholder="Название серии подкаста..."/>
                        <svg class="destroy" xmlns="http://www.w3.org/2000/svg" height="427pt" viewBox="-40 0 427 427.00131" width="427pt"><path d="m232.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"></path><path d="m114.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"></path><path d="m28.398438 127.121094v246.378906c0 14.5625 5.339843 28.238281 14.667968 38.050781 9.285156 9.839844 22.207032 15.425781 35.730469 15.449219h189.203125c13.527344-.023438 26.449219-5.609375 35.730469-15.449219 9.328125-9.8125 14.667969-23.488281 14.667969-38.050781v-246.378906c18.542968-4.921875 30.558593-22.835938 28.078124-41.863282-2.484374-19.023437-18.691406-33.253906-37.878906-33.257812h-51.199218v-12.5c.058593-10.511719-4.097657-20.605469-11.539063-28.03125-7.441406-7.421875-17.550781-11.5546875-28.0625-11.46875h-88.796875c-10.511719-.0859375-20.621094 4.046875-28.0625 11.46875-7.441406 7.425781-11.597656 17.519531-11.539062 28.03125v12.5h-51.199219c-19.1875.003906-35.394531 14.234375-37.878907 33.257812-2.480468 19.027344 9.535157 36.941407 28.078126 41.863282zm239.601562 279.878906h-189.203125c-17.097656 0-30.398437-14.6875-30.398437-33.5v-245.5h250v245.5c0 18.8125-13.300782 33.5-30.398438 33.5zm-158.601562-367.5c-.066407-5.207031 1.980468-10.21875 5.675781-13.894531 3.691406-3.675781 8.714843-5.695313 13.925781-5.605469h88.796875c5.210937-.089844 10.234375 1.929688 13.925781 5.605469 3.695313 3.671875 5.742188 8.6875 5.675782 13.894531v12.5h-128zm-71.199219 32.5h270.398437c9.941406 0 18 8.058594 18 18s-8.058594 18-18 18h-270.398437c-9.941407 0-18-8.058594-18-18s8.058593-18 18-18zm0 0"></path><path d="m173.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"></path></svg>
                    </div>
                    <form id="file${random}" class="file">
                        <div class="form-group images-preview">
                            <div class="custom-file">
                                <input class="custom-file-input" id="file${random}" name="file" type="file">
                                <label class="custom-file-label" for="file${random}"></label>
                            </div>
                            <span class="file-name"></span>
                        </div>
                    </form>
                </div>`

            podcasts.insertAdjacentHTML('beforeend', template)

            return false
        })

        podcasts.addEventListener('click', function (event) {
            if(event.target.classList.contains('destroy')) {
                event.target.closest('.card').remove()
            }

            return false
        })

        podcasts.addEventListener('change', function (event) {

            if(event.target.classList.contains('custom-file-input')) {
                const icon = event.target.files[0],
                    parts = icon.name.split('.'),
                    ext = parts.pop(),
                    iconName = `${icon.size}_audio_diller0054.${ext}`,
                    formFile = event.target.closest('.file')

                if(ext == 'jpeg') {
                    alert('Данный формат изображения недопустим')
                    return false
                }

                event.target.closest('.file').setAttribute('data-url', iconName)
                event.target.closest('.file').querySelectorAll('.file-name')[0].innerHTML = `Загрузка...`

                $.ajax({
                    url: loading,
                    method:'POST',
                    data: new FormData(formFile),
                    dataType:'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response){
                        event.target.closest('.file').querySelectorAll('.file-name')[0].innerHTML = iconName
                    }
                })

            }

            return false
        })

        save.addEventListener('click', function (event) {
            event.preventDefault()

            let tags = [],
                audias = {},
                datas = [],
                id = ''

            if(save.dataset.id) id = save.dataset.id

            const title = document.getElementById('title').value,
                tagsEl = document.querySelectorAll('#tags .item span'),
                audiasEl = document.querySelectorAll('#podcasts .card'),
                extend = document.getElementById('extends').value,
                image = document.getElementById('images').getAttribute('src')

            for(let i = 0; i < tagsEl.length; i++) {
                tags.push(tagsEl[i].innerHTML)
            }

            for(let i = 0; i < audiasEl.length; i++) {
                let data = {}

                data.title = audiasEl[i].querySelectorAll('.form-control')[0].value
                data.file = audiasEl[i].querySelectorAll('.file')[0].dataset.url

                datas.push(data)
            }

            audias.datas = datas

            const audiasJSON = JSON.stringify(audias),
                tagsJSON = JSON.stringify(tags)

            $.ajax({
                url: route,
                method:'post',
                data: {
                    id: id,
                    extend: extend,
                    image: image,
                    title: title,
                    tags: tagsJSON,
                    audias: audiasJSON,
                },
                success: function(data){
                    window.location.href = data
                }
            })

            return false
        })
    }

    // Podcast Index Destroy
    if(document.getElementById('podcast-index')) {
        const destroy = document.querySelectorAll('.card .destroy')

        destroy.forEach(el => el.addEventListener('click', function(event) {
            event.preventDefault()

            const gestroyPost = event.target.getAttribute('href'),
                id = event.target.dataset.id

            event.target.closest('.card').remove()

            $.ajax({
                url: gestroyPost,
                method:'post',
                data: {
                    id: id
                },
                success: function(response){

                }
            })

            return false
        }))
    }

    // Plots Create Post
    if(document.getElementById('plots-index')) {
        const destroy = document.querySelectorAll('.card .destroy')

        destroy.forEach(el => el.addEventListener('click', function(event) {
            event.preventDefault()

            const gestroyPost = event.target.getAttribute('href'),
                id = event.target.dataset.id

            event.target.closest('.card').remove()

            $.ajax({
                url: gestroyPost,
                method:'post',
                data: {
                    id: id
                },
                success: function(response){

                }
            })

            return false
        }))
    }

    // Video Admin
    if(document.getElementById('video-form-create')) {
        const addVideo = document.getElementById('add-video'),
            video = document.getElementById('video'),
            save = document.getElementById('save'),
            error = document.getElementById('error'),
            route = save.getAttribute('href')

        addVideo.addEventListener('click', function (event) {
            event.preventDefault()

            const template = `
                <div class="card card-body">
                    <div class="form-group">
                        <input class="form-control title mb-2" id="" name="title" placeholder="Название..." type="text">
                        <textarea name="description" class="form-control description mb-2" id="" cols="30" rows="5" placeholder="Описание"></textarea>
                        <textarea name="iframe" class="form-control iframe" id="" cols="30" rows="5" placeholder="iframe видео"></textarea>
                    </div>
                    <svg class="destroy" xmlns="http://www.w3.org/2000/svg" height="427pt" viewBox="-40 0 427 427.00131" width="427pt"><path d="m232.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"></path><path d="m114.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"></path><path d="m28.398438 127.121094v246.378906c0 14.5625 5.339843 28.238281 14.667968 38.050781 9.285156 9.839844 22.207032 15.425781 35.730469 15.449219h189.203125c13.527344-.023438 26.449219-5.609375 35.730469-15.449219 9.328125-9.8125 14.667969-23.488281 14.667969-38.050781v-246.378906c18.542968-4.921875 30.558593-22.835938 28.078124-41.863282-2.484374-19.023437-18.691406-33.253906-37.878906-33.257812h-51.199218v-12.5c.058593-10.511719-4.097657-20.605469-11.539063-28.03125-7.441406-7.421875-17.550781-11.5546875-28.0625-11.46875h-88.796875c-10.511719-.0859375-20.621094 4.046875-28.0625 11.46875-7.441406 7.425781-11.597656 17.519531-11.539062 28.03125v12.5h-51.199219c-19.1875.003906-35.394531 14.234375-37.878907 33.257812-2.480468 19.027344 9.535157 36.941407 28.078126 41.863282zm239.601562 279.878906h-189.203125c-17.097656 0-30.398437-14.6875-30.398437-33.5v-245.5h250v245.5c0 18.8125-13.300782 33.5-30.398438 33.5zm-158.601562-367.5c-.066407-5.207031 1.980468-10.21875 5.675781-13.894531 3.691406-3.675781 8.714843-5.695313 13.925781-5.605469h88.796875c5.210937-.089844 10.234375 1.929688 13.925781 5.605469 3.695313 3.671875 5.742188 8.6875 5.675782 13.894531v12.5h-128zm-71.199219 32.5h270.398437c9.941406 0 18 8.058594 18 18s-8.058594 18-18 18h-270.398437c-9.941407 0-18-8.058594-18-18s8.058593-18 18-18zm0 0"></path><path d="m173.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"></path></svg>
                </div>
            `

            video.insertAdjacentHTML('beforeend', template)

            return false
        })

        video.addEventListener('click', function (event) {
            event.preventDefault()

            if(event.target.classList.contains('destroy')) {
                event.target.closest('.card').remove()
            }

            return false
        })

        save.addEventListener('click', function (event) {
            event.preventDefault()

            const title = document.getElementById('title').value,
                videoBox = document.querySelectorAll('#video .card')

            let gallery = {},
                gallerys = [],
                id = ''

            for(let i = 0; i < videoBox.length; i++) {
                const descriptio = videoBox[i].querySelectorAll('.description')[0].value,
                    iframe = videoBox[i].querySelectorAll('.iframe')[0].value,
                    title = videoBox[i].querySelectorAll('.title')[0].value

                gallerys.push({title: title,description: descriptio, iframe: iframe})
            }

            if(save.dataset.id) id = save.dataset.id

            gallery.gallerys = gallerys

            let galleryJSON = JSON.stringify(gallery)

            $.ajax({
                url: route,
                method:'post',
                data: {
                    id: id,
                    title: title,
                    gallery: galleryJSON
                },
                success: function(data){
                    window.location.href = data
                }
            })

            return false
        })
    }

    // Video Index Destroy
    if(document.getElementById('video-index')) {
        const destroy = document.querySelectorAll('.card .destroy')

        destroy.forEach(el => el.addEventListener('click', function(event) {
            event.preventDefault()

            const route = event.target.getAttribute('href'),
                id = event.target.dataset.id

            event.target.closest('.card').remove()

            $.ajax({
                url: route,
                method:'post',
                data: {
                    id: id
                },
                success: function(response){

                }
            })

            return false
        }))
    }

    // Ether Admin
    if(document.getElementById('ether-form-create')) {
        const save = document.getElementById('save'),
            error = document.getElementById('error'),
            route = save.getAttribute('href')

        save.addEventListener('click', function (event) {
            event.preventDefault()

            const title = document.getElementById('title').value,
                content = document.getElementById('description').value,
                image = document.getElementById('images').getAttribute('src'),
                iframe = document.getElementById('iframe').value

            let id = ''

            if(save.dataset.id) id = save.dataset.id

            $.ajax({
                url: route,
                method:'post',
                data: {
                    id: id,
                    title: title,
                    image: image,
                    content: content,
                    iframe: iframe
                },
                success: function(data){
                    window.location.href = data
                }
            })

            return false
        })
    }

    // Advertising
    if(document.getElementById('advertising')) {
        const add = document.getElementById('add-advertising'),
            error = document.getElementById('error'),
            list = document.getElementById('list'),
            formAdvertising = document.getElementById('form-advertising'),
            create = add.dataset.create,
            destroy = document.getElementById('advertising').dataset.destroy

        const save = route => {
            const box = document.querySelectorAll('#list .card .box')

            let advertising = {},
                advertisingArray = []

            for(let i = 0; i < box.length; i++) {
                let el = {}
                el.id = box[i].dataset.id
                el.title = box[i].querySelectorAll('.title')[0].value
                el.code = box[i].querySelectorAll('.code')[0].value

                advertisingArray.push(el)
                advertising.advertising = advertisingArray
            }

            let advertisingJSON = JSON.stringify(advertising)

            $.ajax({
                url: route,
                method:'post',
                data: {
                    advertisingJSON: advertisingJSON,
                },
                success: function(data){

                }
            })
        }

        add.addEventListener('click', function (event) {
            event.preventDefault()

            const title = document.getElementById('title').value,
                position = document.getElementById('position').value,
                code = document.getElementById('code').value

            const template = `
                <div class="box" data-id="${position}">
                    <div class="form-group">
                       <label class="" for="title">Заголовок</label>
                       <input class="form-control title" id="" name="title" value="${title}" type="text">
                   </div>
                   <div class="form-group">
                       <label class="" for="title">Содержание</label>
                       <textarea id="" cols="30" rows="4" class="form-control code">${code}</textarea>
                   </div>
                   <svg class="destroy" xmlns="http://www.w3.org/2000/svg" height="427pt" viewBox="-40 0 427 427.00131" width="427pt"><path d="m232.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"></path><path d="m114.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"></path><path d="m28.398438 127.121094v246.378906c0 14.5625 5.339843 28.238281 14.667968 38.050781 9.285156 9.839844 22.207032 15.425781 35.730469 15.449219h189.203125c13.527344-.023438 26.449219-5.609375 35.730469-15.449219 9.328125-9.8125 14.667969-23.488281 14.667969-38.050781v-246.378906c18.542968-4.921875 30.558593-22.835938 28.078124-41.863282-2.484374-19.023437-18.691406-33.253906-37.878906-33.257812h-51.199218v-12.5c.058593-10.511719-4.097657-20.605469-11.539063-28.03125-7.441406-7.421875-17.550781-11.5546875-28.0625-11.46875h-88.796875c-10.511719-.0859375-20.621094 4.046875-28.0625 11.46875-7.441406 7.425781-11.597656 17.519531-11.539062 28.03125v12.5h-51.199219c-19.1875.003906-35.394531 14.234375-37.878907 33.257812-2.480468 19.027344 9.535157 36.941407 28.078126 41.863282zm239.601562 279.878906h-189.203125c-17.097656 0-30.398437-14.6875-30.398437-33.5v-245.5h250v245.5c0 18.8125-13.300782 33.5-30.398438 33.5zm-158.601562-367.5c-.066407-5.207031 1.980468-10.21875 5.675781-13.894531 3.691406-3.675781 8.714843-5.695313 13.925781-5.605469h88.796875c5.210937-.089844 10.234375 1.929688 13.925781 5.605469 3.695313 3.671875 5.742188 8.6875 5.675782 13.894531v12.5h-128zm-71.199219 32.5h270.398437c9.941406 0 18 8.058594 18 18s-8.058594 18-18 18h-270.398437c-9.941407 0-18-8.058594-18-18s8.058593-18 18-18zm0 0"></path><path d="m173.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"></path></svg>
                </div>
            `

            document.getElementById(position).insertAdjacentHTML('beforeend', template)

            formAdvertising.reset()

            save(create)

            return false
        })

        list.addEventListener('click', function (event) {
            event.preventDefault()

            if(event.target.classList.contains('destroy')) {
                event.target.closest('.box').remove()
                save(destroy)
            }

            return false
        })

        list.addEventListener('input', function (event) {
            event.preventDefault()

            save(create)

            return false
        })
    }

    // User Create && Update
    if(document.getElementById('users')) {
        const create = document.getElementById('create'),
            route = create.getAttribute('href'),
            type = create.dataset.type,
            error = document.getElementById('error')

        create.addEventListener('click', function (event) {
            event.preventDefault()

            const login = document.getElementById('login').value,
                email = document.getElementById('email').value,
                password = document.getElementById('password').value,
                roles = document.getElementById('roles').value

            if(login.length < 3) {
                error.innerHTML = `Логин должен быть заполнен и уметь длину более 3-х символов`
                return false
            }
            if(email.length < 3) {
                error.innerHTML = `Email должен быть корректный`
                return false
            }
            if(email.length < 8) {
                error.innerHTML = `Минимум 8 символов`
                return false
            }

            let post = 'false',
                gallery = 'false',
                videoGallery = 'false',
                ethers = 'false',
                podcasts = 'false',
                plots = 'false',
                categorys = 'false',
                info = 'false',
                menu = 'false',
                advertising = 'false',
                message = 'false',
                id = ''

            if(document.getElementById('post-setting').checked) post = 'true'
            if(document.getElementById('gallery-setting').checked) gallery = 'true'
            if(document.getElementById('video-gallery-setting').checked) videoGallery = 'true'
            if(document.getElementById('ethers-setting').checked) ethers = 'true'
            if(document.getElementById('podcasts-setting').checked) podcasts = 'true'
            if(document.getElementById('plots-setting').checked) plots = 'true'
            if(document.getElementById('categorys-setting').checked) categorys = 'true'
            if(document.getElementById('info-setting').checked) info = 'true'
            if(document.getElementById('menu-setting').checked) menu = 'true'
            if(document.getElementById('advertising-setting').checked) advertising = 'true'
            if(document.getElementById('message-setting').checked) message = 'true'

            if(create.dataset.id) id = create.dataset.id

            $.ajax({
                url: route,
                method:'post',
                data: {
                    id: id,
                    type: type,
                    login: login,
                    email: email,
                    password: password,
                    roles: roles,
                    post: post,
                    gallery: gallery,
                    videoGallery: videoGallery,
                    ethers: ethers,
                    podcasts: podcasts,
                    plots: plots,
                    categorys: categorys,
                    info: info,
                    menu: menu,
                    advertising: advertising,
                    message: message
                },
                success: function(data){
                    window.location.href = data
                }
            })

            return false
        })
    }

    // Users Destroy
    if(document.getElementById('users-index')) {
        const destroy = document.querySelectorAll('.destroy')

        destroy.forEach(el => el.addEventListener('click', function(event) {
            event.preventDefault()

            const route = event.target.getAttribute('href'),
                id = event.target.dataset.id

            $.ajax({
                url: route,
                method:'get',
                data: {
                    id: id
                },
                success: function(data){
                    event.target.closest('.box').remove()
                }
            })

            return false
        }))
    }

})

$(".nav .nav-link, .nav-link").each(function () {
    var location2 = window.location.protocol + '//' + window.location.host + window.location.pathname;
    location2 = location2.replace('/create','');

    if(location2.indexOf('/edit') >= 0){
        location2 = location2.replace('/edit','');
    }


    var link = this.href;
    if(link == location2){
        $(this).addClass('active');
        $(this).parent().parent().parent().addClass('show');

    }
});

$('.delete-btn').click(function(){
    var res = confirm('Подтвердите действие!');
    if (!res){
        return false;
    }
})

tinymce.init({
    selector:'.editor',
    toolbar: 'undo redo styleselect bold italic alignleft aligncenter alignright bullist numlist outdent indent code image',
    plugins: 'code image',
    language: 'ru',
    relative_urls: false,
    height: 300,
    file_picker_callback : elFinderBrowser
});

function elFinderBrowser (callback, value, meta) {
    tinymce.activeEditor.windowManager.openUrl({
        title: 'File Manager',
        url: '/elfinder/tinymce5',
        /**
         * On message will be triggered by the child window
         *
         * @param dialogApi
         * @param details
         * @see https://www.tiny.cloud/docs/ui-components/urldialog/#configurationoptions
         */
        onMessage: function (dialogApi, details) {
            if (details.mceAction === 'fileSelected') {
                const file = details.data.file;

                // Make file info
                const info = file.name;

                // Provide file and text for the link dialog
                if (meta.filetype === 'file') {
                    callback(file.url, {text: info, title: info});
                }

                // Provide image and alt text for the image dialog
                if (meta.filetype === 'image') {
                    callback(file.url, {alt: info});
                }

                // Provide alternative source and posted for the media dialog
                if (meta.filetype === 'media') {
                    callback(file.url);
                }

                dialogApi.close();
            }
        }
    });
}

























