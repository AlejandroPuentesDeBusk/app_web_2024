from django.contrib import admin
from django.urls import path
from mainapp import views

urlpatterns = [
    path('', views.index, name='index'),
    path('vision/', views.mision, name='vision'),
    path('mision/', views.mision, name='mision'),
    path('about/', views.about, name='about'),
    path('login/', views.login_view, name='login'),
    path('logout/', views.logout, name='logout'),
    path('inicio/', views.inicio_s, name='inicio_s'),
    path('registro/', views.registro, name='registro'),

    path('admin_view/', views.admin_view, name='admin_view'),
]