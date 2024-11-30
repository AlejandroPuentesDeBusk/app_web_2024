from django.urls import path
from . import views
from django.contrib.auth import views as auth_views


urlpatterns = [
    path('categoria/', views.categoria, name='categoria'),
    path('articulos/', views.articulos, name='articulos'),
]
