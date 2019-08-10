<?php
namespace ExamBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="ExamBundle\Repository\UserRepository")
 */
class User
{
    
    
    /**
     * @ORM\OneToMany(targetEntity="Tweet", mappedBy="user")
     */
    private $tweets;
    
    
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;
    
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50)
     */
    private $email;
    
    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=25)
     */
    private $password;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tweets = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Set name
     *
     * @param string $name
     *
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;
        
        return $this;
    }
    
    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
        
        return $this;
    }
    
    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
    
    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;
        
        return $this;
    }
    
    /**
     * Add tweets
     *
     * @param \ExamBundle\Entity\Tweet $tweets
     *
     * @return User
     */
    public function addTweets(\ExamBundle\Entity\Tweet $tweets)
    {
        $this->tweets[] = $tweets;
        
        return $this;
    }
    
    /**
     * Remove tweets
     *
     * @param \ExamBundle\Entity\Tweet $tweets
     */
    public function removeTweets(\ExamBundle\Entity\Tweet $tweets)
    {
        $this->tweets->removeElement($tweets);
    }
    
    /**
     * Get tweets
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTweets()
    {
        return $this->tweets;
    }
}
