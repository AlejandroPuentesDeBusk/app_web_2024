from django.shortcuts import render, HttpResponse, redirect
from django.http import Http404
#from django.contrib.auth.forms import UserCreationForm
from main.forms import RegisterForm
from django.contrib import messages
from django.contrib.auth import authenticate, login, logout
from django.contrib.auth.decorators import login_required
from articulos.models  import Article, Category


@login_required(login_url= 'index')
def categoria(request):

    categorias = Category.objects.all()


    return render(request, 'categorias/listado_cat.html',{
        'title': 'Categorias',
        'content':'Listado de Categorias',
        'categorias':categorias    
    })

@login_required(login_url= 'index')
def articulos(request):

    #sacar info BD

    articulos= Article.objects.all()



    return render(request, 'articulos/listado_art.html',{
        'title': 'Articulos',
        'content':'Litado de Articulos',
        'articulos':articulos    
    })