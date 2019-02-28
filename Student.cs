using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations;


namespace reg.Models
{
    public class Student
    {

        [Required(ErrorMessage = "can't be empty")]
        [Display(Name = "Student name")]
        // [RegularExpression()]

        public string Sname { get; set; }

        [Required]
        [Display(Name = "Student address")]
        [DataType(DataType.MultilineText)]
        public string Saddress { get; set; }

        public string Gender { get; set; }
        public Course SCourse { get; set; }
        [Display(Name = "Upload Image")]
        public string Image { get; set; }

        public HttpPostedFileBase ImageFile { get; set; }

        [Required]
        [Display(Name = "Student email")]
        [DataType(DataType.EmailAddress)]
        public string Semail { get; set; }

        [Required(ErrorMessage = "can't be empty")]
        [Display(Name = "Student username")]
        public string Uname { get; set; }

        [Required(ErrorMessage = "can't be empty")]
        [Display(Name = "Student Password")]
        [DataType(DataType.Password)]
        public string Password { get; set; }

        [Required(ErrorMessage = "can't be empty")]
        [Display(Name = "confirm password")]
        [DataType(DataType.Password)]
        public string ConfirmPassword { get; set; }
    }
    public enum Course
    {
        MCA,
        MBA,
        MTECH
    }
}

    
