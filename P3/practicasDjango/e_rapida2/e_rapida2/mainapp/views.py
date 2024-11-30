from django.shortcuts import render, redirect
from django.contrib.auth.decorators import login_required
from django.contrib.auth import login, authenticate, logout
from django.contrib.auth.models import User
from django.contrib import messages


# Create your views here.


def index(request):
    return render(request, 'index.html',{
        'title':'Login',
        'content':'ESTE ES EL INDEX'
    })

def about(request):
    return render(request,'about.html',{
        'title':'about',
        'content':'ESTA ES LA VENTANA PRINCIPAL ABOUT'
    })

def mision(request):
    return render(request,'mision.html',{
        'title':'mision',
        'content':'ESTE ES LA VENTANA DE MISION'
    })

def vison(request):
    return render(request,'vision.html',{
        'title':'vision',
        'content':'INICIO DE SESION'
    })

def registro(request):
    return render(request,'registro.html',{
        'title':'vision',
        'content':'ESTE ES EL REGISTRO'
    })

def inicio_s(request):
    return render(request,'inicio_s.html',{
        'title':'vision',
        'content':'ESTA ES LA VISION'
    })



def error404_2(request, exception):
    return render(request, 'main/404.html')






@login_required
def admin_view(request):

    if not request.user.is_superuser:
        messages.error(request, "No puedes acceder")
        return redirect('about')
    
    return render(request, 'admin.html',{
        'title':'admin',
        'content':'ESTE ES EL PANEL DE ADMINISTRACION'
    })


def login_view(request):
    
    if request.method == "POST":
        username = request.POST['username']
        password = request.POST['password']
        user = authenticate(request, username=username, password=password)

        if user is not None:
            login(request, user)
            return redirect('about')
        else:
            messages.error(request, "Usuario o contraseña incorrectos")
    return render(request, 'login.html', {'title':'Login'})


def logout_view(request):
    logout(request)
    return redirect('about')