<?php

namespace App\Tree;

class BinaryTree {
    private $root;

    public function __construct() {
        $this->root = null;
    }

    public function insert($data) {
        $newNode = new TreeNode($data);
        if ($this->root === null) {
            $this->root = $newNode;
        } else {
            $this->insertNode($this->root, $newNode);
        }
    }

    private function insertNode($node, $newNode) {
        if ($newNode->data < $node->data) {
            if ($node->left === null) {
                $node->left = $newNode;
            } else {
                $this->insertNode($node->left, $newNode);
            }
        } else {
            if ($node->right === null) {
                $node->right = $newNode;
            } else {
                $this->insertNode($node->right, $newNode);
            }
        }
    }

    public function search($data) {
        return $this->searchNode($this->root, $data);
    }

    private function searchNode($node, $data) {
        if ($node === null) {
            echo "There is no such node\n";
            return null;
        }
        if ($data === $node->data) {
            echo "Your node is finded: ";
            return $node;
        } elseif ($data < $node->data) {
            return $this->searchNode($node->left, $data);
        } else {
            return $this->searchNode($node->right, $data);
        }
    }

    public function inorderTraversal() {
        $this->inorder($this->root);
    }

    private function inorder($node) {
        if ($node !== null) {
            $this->inorder($node->left);
            echo $node->data . "\n";
            $this->inorder($node->right);
        }
    }
}