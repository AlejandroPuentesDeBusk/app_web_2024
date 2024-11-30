from django.shortcuts import render, HttpResponse, redirect
from django.http import Http404
#from django.contrib.auth.forms import UserCreationForm
from main.forms import RegisterForm
from django.contrib import messages
from django.contrib.auth import authenticate, login, logout
from django.contrib.auth.decorators import login_required


# Create your views here.

def index(request):
    return render(request, 'main/index.html',{
        'title': 'inicio',
        'content': 'BIenvenido a mi pagina de inicio'
    })


@login_required(login_url= 'index')
def about(request):
    return render(request, 'main/about.html',{
        'title': 'Acerca de',
        'content':'.:Somos un equipo de desarrollo de software multiplataforma con django'
    })

@login_required(login_url= 'index')
def mision(request):
    return render(request, 'main/mision.html',{
        'title': 'Mision',
        
    })

@login_required(login_url= 'index')
def vision(request):
    return render(request, 'main/vision.html',{
        'title': 'Vision',    
    })





def registro(request):
    if request.user.is_authenticated:
        return redirect('index')
    else:
        register_form= RegisterForm()

        if request.method== "POST":
            register_form=RegisterForm(request.POST)

            if register_form.is_valid():
                register_form.save()
                messages.success(request, "Registro Exitoso")
                return redirect('index')
        
        return render(request, 'main/registro.html',{
            'title':'Registro de Usuario',
            'register_form':register_form
        })

def inicio(request):
    return render(request, 'main/inicio.html',{
        'title': 'Inicio Sesion',
        'content':'Formulario de inicio de sesion'
    })



def login_user(request):
    if request.user.is_authenticated:
        return redirect('index')
    else:

        if request.method == "POST":
            username= request.POST.get('username')
            password = request.POST.get('password')

            user= authenticate(request,username=username, password=password)

            if user is not None:
                login(request,user)
                messages.success(request,"Bienvenido al inicio de sesion")
                return redirect('inicio')
            else:
                messages.warning(request, "No es posible iniciar sesión, verifica trus credenciales")



        return render(request,'user/login.html',{
            'title':'inicio de sesion',
            'content':'Formulario de inicio de sesion'
        })
    

def logout_user(request):
    logout(request)
    return redirect('index')



    




def error404(request, exception):
    return render(request, 'main/404.html')




#3def custom_404(request, exception):
#    return redirect('index')

