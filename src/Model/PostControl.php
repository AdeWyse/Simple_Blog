<?php
namespace Utfpr\Pratica\Model;

use Utfpr\Pratica\Entities\Post;

class PostControl
{
    private $db;
    private $posts;


    /**
     * @param $db
     */
    public function __construct()
    {
        $this->db = new Database();
        $this->posts = $this->recuperaTodosPosts();
    }

    /**
    * @return array
    */
        public function getPosts(): array
        {
            return $this->posts;
        }

    public function criarNovoPost(){
        $tituloEntrada = $_POST["title"];
        $previewlEntrada = $_POST["preview"];
        $postTextEntrada = $_POST["post-text"];
        $novoPost = new Post(null, $tituloEntrada, $previewlEntrada, $postTextEntrada);
        return $novoPost;
    }

    public function registrarPost(Post $post){

       $this->db->registraPost($post);
       return true;
    }

    public function recuperaUmPost(){
        $id = $_GET['id'];
        return array_reverse($this->posts)[$id];
    }

    public function recuperaTodosPosts(): array{
        return $this->db->recuperarTodosOsPosts();
    }

    public function pesquisaPosts(): array{
        $pesquisaEntrada = $_GET['pq'];
        $posts = $this->recuperaTodosPosts();
        $resultado = null;
        $resultado = array();
        foreach($posts as $postId => $post){
            if(str_contains($posts[$postId]->getTitulo(), $pesquisaEntrada) || str_contains($posts[$postId]->getTextoBase(), $pesquisaEntrada) || str_contains($posts[$postId]->getPreview(), $pesquisaEntrada)){
                array_push($resultado, $post);
            }
        }

        return $resultado;
    }
    public function deletarPost(Post $postDeletar){
        return $this->db->deletePost($postDeletar);
    }
}